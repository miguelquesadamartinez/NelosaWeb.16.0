<?php
/*
Clientes to serverDB
*/
require_once("../../../inc/funciones/Funciones_PHP.php");
require_once("../../../gueb/eMiKi/libmail.php");

$cnt = 0 ;

$link = conectarse_param("nelosa_nelosa") ;
//echo "";
$result = mysql_query("Select * from " . $db_param ,$link);	

while($row = mysql_fetch_array($result)) 	{ 
	$tmpvar = (string)$row["email"] ;
	echo ( $tmpvar . "<BR>" ) ;
	$cnt = $cnt + 1 ;
}
//echo ("Total: $cnt");
mysql_close($link);?>