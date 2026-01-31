<?php
require_once("../../../inc/funciones/Funciones_PHP.php");
require_once("../../../gueb/eMiKi/libmail.php");

$link = conectarse_param("nelosa_nelosa") ;
//echo "Select * from prods WHERE Ref = '" . $VBref . "'";
$result = mysql_query("Select * from prods WHERE Ref = '" . $VBref . "'" ,$link);	

$row = mysql_fetch_array($result);

echo (string)$row["precio_eshop"] ;
//mysql_free_result($result);  
mysql_close($link);?>
