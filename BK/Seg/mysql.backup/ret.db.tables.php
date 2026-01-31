<?php   
//$dbname = $_GET[$dbparam];     
//$dbname = $_POST[$dbparam];     

//echo( "DB: " . $param . "--<BR>");

   if (!($link=mysql_connect( "localhost" ,"nelosa","mqm1804")))    { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
    if (!mysql_select_db($dbparam,$link))    { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   }
	$result2 = mysql_list_tables($dbparam); // Tablas DB parl
	while ($row2 = mysql_fetch_row($result2)) {
		echo ($row2 [0] . "~"); // 
	}
?>