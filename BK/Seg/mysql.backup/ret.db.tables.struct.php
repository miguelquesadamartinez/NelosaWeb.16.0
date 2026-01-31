<?php
//$tablename = $_GET[$tablenamep];     
$tablename = $param;
require_once("../../../inc/funciones/Funciones.PHP.MySql.BackUp.php");
// Defines
DEFINE ("DB_SELECT_FORM", 1);
DEFINE ("POST_DB_SELECT_FORM", 2);
DEFINE ("POST_SELECT_TABLES_FORM", 3);
DEFINE ("RESTORE_DATA", 4);
DEFINE ("POST_CONFIG_FORM", 5);
DEFINE ("DELETE_CONFIG_FILE", 6);
DEFINE ("TITLE", "class-1 MySQL Backup/Restore");
DEFINE ("VERSION", "0.1");

   if (!($link=mysql_connect( "localhost" ,"nelosa","mqm1804")))    { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
    if (!mysql_select_db("nelosa_nelosa",$link))    { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   }
	//$sql_string = backup_data($tablename_array, 0, 0);	 
	$table_sql_string = create_table_sql_string($tablename);
	echo $table_sql_string ;
?>