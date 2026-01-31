<p>&nbsp;</p>
<?php
// Defines
DEFINE ("DB_SELECT_FORM", 1);
DEFINE ("POST_DB_SELECT_FORM", 2);
DEFINE ("POST_SELECT_TABLES_FORM", 3);
DEFINE ("RESTORE_DATA", 4);
DEFINE ("POST_CONFIG_FORM", 5);
DEFINE ("DELETE_CONFIG_FILE", 6);
DEFINE ("TITLE", "class-1 MySQL Backup/Restore");
DEFINE ("VERSION", "0.1");

require_once("../../../gueb/eMiKi/mysql.backup/Funciones.PHP.MySql.BackUp.php");
	echo "<html>\n";
	echo "<head>\n";
	echo "<title>".TITLE."</title>\n";
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"backup.css\" />\n";
	echo "</head>\n";
	echo "<body>\n";

   if (!($link=mysql_connect( "localhost" ,"nelosa","mqm1804")))    { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
    if (!mysql_select_db("nelosa_nelosa",$link))    { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   }

	$result2 = mysql_list_tables("nelosa_nelosa"); // Tablas DB parl

	while ($row2 = mysql_fetch_row($result2)) {
		echo ("Tabla: " . $row2 [0] . "<br><BR>"); // 

		while ($row = mysql_fetch_object($db_list)) {
		
			$dbname = $row->Database;
		
			echo "----------<BR>" . $row->Database . "\n<BR>----------<BR>";
		
			$result2 = mysql_list_tables($dbname); // Tablas DB parl
		
			while ($row2 = mysql_fetch_row($result2)) {
		
				echo ("Tabla: " . $row2 [0] . "<br><BR>"); // 
				//$sql_string = backup_data($tablename_array, 0, 0);	 
				$table_sql_string = create_table_sql_string($tablename_array);
				echo "SQL: $table_sql_string - ";
			
				//$data_sql_string = create_data_sql_string($tablename_array);		
				//echo "SQL: $sql_string - ";
			}
		}
	}

	echo "END<BR>";

	echo "</body>\n";
	echo "</html>\n";

?>