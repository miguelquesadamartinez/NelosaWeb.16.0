<?php
	/**
	 * object $db_link BaseDeDatos ($db_hostname, $db_username, $db_password, $db_name);
	 * 
	 */

class BaseDeDatos {


	var $hostname; 
	var $username; 
	var $password; 
	var $name; 

	var $SQL; 
	var $db_link; 
	var $db_result; 
	var $db_row;

	/**
	 * Class constructor
	 */
	function BaseDeDatos ( $db_hostname, $db_username, $db_password, $db_name ) {
		$this->hostname = $db_hostname;
		$this->username = $db_username;
		$this->password = $db_password;
		$this->name = $db_name;
	}
	
	// 
	// Conecta a MySQL y genera conexion.
	//
	function openDatabase() 
	{
		// Por defecto a localhost si ni se indica
		/*if (!$db_hostname) {
			$db_hostname = "localhost";
		}*/
		//echo ($this->hostname." - ".$this->username." - ".$this->password) ;
		// Abre la conexion con MySql
		if (!($this->db_link=mysql_connect ($this->hostname, $this->username, $this->password)))    { 
		  
		  echo "Error conectando a la base de datos."; 
		  exit(); 
	   } 
		// Seleccione la base de datos.
		if (!mysql_select_db($this->name, $this->db_link))    { 
		  echo "Error seleccionando la base de datos."; 
		  exit(); 
	   } 
		// Devuelve la conexion
		return $this->db_link;
	}  // END openDatabase


	// RUN QUERY - openDatabase();
	// Ejecuta consulta a SQL.
	//
	function consulta($SQL_Param) 
	{
		$this->SQL = $SQL_Param ;
		
		$this->db_result=mysql_query( $this->SQL ,$this->db_link);
	}
	 
	function retriveData() 
	{
		$this->db_row = mysql_fetch_array($this->db_result);
		if ($this->db_row)return true;
		else return false ;
	}
	
	function listarDBs ()
	{
		$this->db_list = mysql_list_dbs($this->db_link);
		while ($this->row_list = mysql_fetch_object($this->db_list)) {
			$dbname = $row->Database;
			echo $row->Database . "~";
		}
	}
	
	function listarTABLAS ()
	{
		//$this->db_result = mysql_list_tables($this->db_link); // Tablas DB parl
		$this->db_result = mysql_list_tables($this->name); // Tablas DB parl
		while ($this->db_row = mysql_fetch_row($this->db_result)) {
			echo ($this->db_row [0] . "<BR>"); // 
		}
	}
	
	function listarTABLAS2 ()
	{
		//$this->db_result = mysql_list_tables($this->db_link); // Tablas DB parl
		$this->db_result = mysql_list_tables($this->name); // Tablas DB parl
		while ($this->db_row = mysql_fetch_row($this->db_result)) {
			echo ($this->db_row [0] . "<BR>"); // 
			echo ($this->create_table_sql_string($this->db_row [0]). "<BR>");
		}
	}
	
	function datosTablas()
	{
		$table_sql_string = create_table_sql_string($tablename);
		echo $table_sql_string ;
	}
	
	function create_table_sql_string($tablename)
	{
		// Start the SQL string for this table
		$sql_string = "CREATE TABLE $tablename";
		
		// Get the field info and output to a string in the correct MySQL syntax
		$result = mysql_query("DESCRIBE $tablename");
		if (DEBUG) echo "field_info\n\n";
		while ($field_info = mysql_fetch_array($result)) {
			if (DEBUG) {
				for ($i = 0; $i < count($field_info); $i++) {
					echo "$i: $field_info[$i]\n";
				}
			}
			
			$field_name = $field_info[0];
			$field_type = $field_info[1];
			$field_not_null = ($field_info[2] == "YES") ? "" : " NOT NULL";
			$field_default = ($field_info[4] == NULL) ? "" : sprintf(" default '%s'", $field_info[4]);;
			$field_auto_increment = ($field_info[5] == NULL) ? "" : sprintf(" %s", $field_info[5]);
			
			$field_string = sprintf("%s, %s %s%s%s%s", $field_string, $field_name, $field_type, $field_not_null, $field_auto_increment, $field_default);
		}
		
		// Get the index info and output to a string in the correct MySQL syntax
		$result = mysql_query("SHOW INDEX FROM $tablename");
		if (DEBUG) echo "\nindex_info\n\n";
		while ($index_info = mysql_fetch_array($result)) {
			if (DEBUG) {
				for ($i = 0; $i < count($index_info); $i++) {
					echo "$i: $index_info[$i]\n";
				}
			}
			
			$index_name = $index_info[2];
			$index_unique = $index_info[1];
			$index_field_name = $index_info[4];
			$index_type = $index_info[10];
			
			if ($index_name == "PRIMARY") $index_name = "PRIMARY KEY";
			
			if ($index_unique == "1" && $index_type != "FULLTEXT") $index_name = sprintf("KEY %s", $index_name);
			
			if ($index_unique == "0" && $index_name != "PRIMARY KEY") $index_name = sprintf("UNIQUE KEY %s", $index_name);
	
			if ($index_type == "FULLTEXT") $index_name = sprintf("FULLTEXT KEY %s", $index_name);
	
			$index_string = sprintf("%s, %s (%s)", $index_string, $index_name, $index_field_name);
		}
		
		// Get the table type and output it to a string in the correct MySQL syntax
		$result = mysql_query("SHOW TABLE STATUS");
		if (DEBUG) echo "\nstatus_info\n\n";
		while ($status_info = mysql_fetch_array($result)) {
			for ($i = 0; $i < count($status_info); $i++) {
				if (DEBUG) echo "$i: $status_info[$i]\n";
	
				if ($status_info[0] == $tablename) $table_type = sprintf("TYPE=%s", $status_info[1]);
			}
		}
	
		// Remove the first 2 characters (", ") from the field string
		$field_string = substr($field_string, 2);
		
		// Append the index string to the field string
		$field_string = sprintf("%s%s", $field_string, $index_string);
	
		// Put the field string in parantheses
		$field_string = sprintf("(%s)", $field_string);
		
		// Finalise the MySQL create table string
		$sql_string = sprintf("%s %s %s", $sql_string, $field_string, $table_type);
		
		return $sql_string;
	} // create_table_sql_string
	
	function create_data_sql_string($tablename)
	{
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
			$sql_string = sprintf("%sINSERT INTO %s %s %s\n", $sql_string, $tablename, $field_string, $data_string);
		}
		
		return $sql_string;
	} // create_data_sql_string
	
	function backup_data($tablename_array, $backup_structure, $backup_data)
	{
		for ($i = 0; $i <count($tablename_array); $i++) {
			$table_sql_string = "";
			$data_sql_string = "";
				
			if ($backup_structure) $table_sql_string = create_table_sql_string($tablename_array[$i]);
			if ($backup_data) $data_sql_string = create_data_sql_string($tablename_array[$i]);
				
			if ($table_sql_string) $sql_string = sprintf("%s\n%s", $sql_string, $table_sql_string);
			if ($data_sql_string) $sql_string = sprintf("%s\n%s", $sql_string, $data_sql_string);
		}
	
		return $sql_string;
	} // backup_data
	
	function restore_data($filename, $restore_structure, $restore_data, $db_selected)
	{
		$handle = fopen("$filename", "r");
	
		while (!feof($handle)) {
			$buffer = fgets($handle);
			
			if ($buffer != "\n" && $buffer != "") {
				// if this line is a create table query then check if the table already exists
				if (substr($buffer, 0, 12) == "CREATE TABLE") {
					if ($restore_structure) { 
						$tablename = explode(" ", $buffer);
						$tablename = $tablename[2];
	
						$result = mysql_list_tables($db_selected);
						for ($i = 0; $i < mysql_num_rows($result); $i++) {
							if (mysql_tablename($result, $i) == $tablename) {
								$rand = substr(md5(time()), 0, 8);
								$random_tablename = sprintf("%s_bak_%s", $tablename, $rand);
	
								mysql_query("RENAME TABLE $tablename TO $random_tablename");
	
								echo "Backed up $tablename to $random_tablename.<br />\n";
							}
						}
	
						$result = mysql_query($buffer);
						if (!$result) {
							echo mysql_error()."<br />\n";
						} else {
							echo "Table '$tablename' successfully recreated.<br />\n";
						}
					}
				} else {
					if ($restore_data) {
						$result = mysql_query($buffer);
						if (!$result) echo mysql_error()."<br />\n";
					}
				}
			}
		}
	
		fclose($handle);
	} // restore_data
}
?>