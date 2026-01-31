<?php session_register('usr'); session_register('v_Pais'); session_register('tabla');
if ( $VBtabla <> "" ) $tabla =  strtolower ( $VBtabla ) ;
// Modifica el precio en www.nelosa.net campo precio_eshop en prods
require_once("../../../inc/funciones/Funciones_PHP.php");
require_once("../../../gueb/eMiKi/libmail.php");

$link = conectarse_param("nelosa_nelosa") ;

	//mysql_query("Update prods Set precio_eshop = '" . $precio_eshop_param . "'  WHERE Ref = " . $ref_param ,$link);	
	mysql_query("Update prods Set precio_eshop = '" . $precio_eshop_param . "', Des = '" . $desc . "' WHERE Ref = " . $ref_param ,$link);	
	echo "precio_eshop = '" . $precio_eshop_param . "', Des = '" . $desc . "'  WHERE Ref = " . $ref_param ;
//mysql_free_result($result);  
mysql_close($link);?>