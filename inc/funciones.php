<?php
	
function conectarse() 
{
	if (!($db_link=mysql_connect ("localhost", "miki_emiki", "mqm1804")))    { 
	//if (!($db_link=mysql_connect ($db_hostname, $db_username, $db_password)))    { 
	  echo "Error conectando a la base de datos."; 
	  exit(); 
	} 
	// Seleccion de la base de datos.
	//if (!mysql_select_db($db_name, $db_link))    { 
	if (!mysql_select_db("miki_avg", $db_link))    { 
	  echo "Error seleccionando la base de datos."; 
	  exit(); 
	} 
	
	return $db_link ;
}
?>