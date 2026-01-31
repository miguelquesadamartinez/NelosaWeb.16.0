<?php
function create_table_sql_string($tablename)
{
// echo "Entra create_table_sql_string<BR><BR>";
	// Start the SQL string for this table
	$sql_string = "CREATE TABLE $tablename";
	
	// Get the field info and output to a string in the correct MySQL syntax
	$result = mysql_query("DESCRIBE $tablename");
	while ($field_info = mysql_fetch_array($result)) {
		
		$field_name = $field_info[0];
		$field_type = $field_info[1];
		$field_not_null = ($field_info[2] == "YES") ? "" : " NOT NULL";
		$field_default = ($field_info[4] == NULL) ? "" : sprintf(" default '%s'", $field_info[4]);;
		$field_auto_increment = ($field_info[5] == NULL) ? "" : sprintf(" %s", $field_info[5]);
		
		$field_string = sprintf("%s, %s %s%s%s%s", $field_string, $field_name, $field_type, $field_not_null, $field_auto_increment, $field_default);
	}
	
	// Get the index info and output to a string in the correct MySQL syntax
	
	// Remove the first 2 characters (", ") from the field string
	$field_string = substr($field_string, 2);
	
	// Append the index string to the field string
	$field_string = sprintf("%s%s", $field_string, $index_string);

	// Put the field string in parantheses
	$field_string = sprintf("(%s)", $field_string);
	
	// Finalise the MySQL create table string
	$sql_string = sprintf("%s %s %s", $sql_string, $field_string, $table_type);
	//$sql_string = sprintf("%s\n%s", $sql_string, $table_sql_string);
	
	//$sql_string = $sql_string . "~" ;
	
	return $sql_string;
}

function create_data_sql_string($tablename)
{
 //echo "Entra create_data_sql_string<BR><BR>";
	// Initialise the field string
	$field_string = "";
	
	// Get field names from MySQL and output to a string in the correct MySQL syntax
	$result = mysql_query("SELECT * FROM $tablename");
	
	for ($i = 0; $i < mysql_num_fields($result); $i++) {
		$meta = mysql_fetch_field($result, $i);
		
		$field_string = sprintf("%s, %s", $field_string, $meta->name);
	}

	// Remove the first 2 characters (", ") from the field string
	$field_string = substr($field_string, 2);

	// Put the field string in parantheses
	$field_string = sprintf("(%s)", $field_string);
	
	// Get table data from MySQL and output to a string in the correct MySQL syntax
	while ($row = mysql_fetch_row($result)) {
		// Initialise the data string
		$data_string = "";
	
		// Loop through the records and append data to the string after escaping
		for ($i = 0; $i < mysql_num_fields($result); $i++) {
			$data_string = sprintf("%s, '%s'", $data_string, mysql_escape_string($row[$i]));
		}
		
		// Remove the first 2 characters (", ") from the data string
		$data_string = substr($data_string, 2);

		// Put the data string in parantheses and prepend "VALUES "
		$data_string = sprintf("VALUES (%s)", $data_string);
		
		// Finalise the MySQL insert into string for this record
		$sql_string = sprintf("%sINSERT INTO %s %s %s~", $sql_string, $tablename, $field_string, $data_string);
		//$sql_string = sprintf("%sINSERT INTO %s %s %s\n", $sql_string, $tablename, $field_string, $data_string);
	}
	//$sql_string = sprintf("%s\n%s", $sql_string, $data_sql_string);
	return $sql_string;
}


function backup_data($tablename_array, $backup_structure, $backup_data)
{
 //echo "Entra backup_data<BR><BR>";

	for ($i = 0; $i <count($tablename_array); $i++) {
		$table_sql_string = "";
		$data_sql_string = "";
			
		if ($backup_structure) $table_sql_string = create_table_sql_string($tablename_array[$i]);
		if ($backup_data) $data_sql_string = create_data_sql_string($tablename_array[$i]);
			
		if ($table_sql_string) $sql_string = sprintf("%s\n%s", $sql_string, $table_sql_string);
		if ($data_sql_string) $sql_string = sprintf("%s\n%s", $sql_string, $data_sql_string);
	}

	return $sql_string;
}
?>