<?php        
if (!($link=mysql_connect( "localhost" ,"nelosa","mqm1804")))    { 
  echo "Error conectando a la base de datos."; 
  exit(); 
} 
if (!mysql_select_db("nelosa_nelosa",$link))    { 
  echo "Error seleccionando la base de datos."; 
  exit(); 
}

$db_list = mysql_list_dbs($link);
while ($row = mysql_fetch_object($db_list)) {
	$dbname = $row->Database;
    echo $row->Database . "~";
}
?>