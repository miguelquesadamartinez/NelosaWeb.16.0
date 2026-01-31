<?php session_register('usr'); session_register('v_Pais'); session_register('tabla');   session_register('brand');  session_register('INS'); 
if ( $VBtabla <> "" ) $tabla = strtolower ( $VBtabla ) ;
 ?>
<HTML><HEAD><TITLE></TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
</HEAD>
<body bgcolor="#FFFFFF">
<table width="300" border="0" align="center">
  <tr><td><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Mantenimiento ( del ) LASER DB <?php echo $Brandy ; ?></font></strong></div></td>
  </tr></table>
<table width="300" border="0" align="center">
  <tr><td>
<?php
require_once("../../../inc/funciones/Funciones_PHP.php");
require_once("../../../gueb/eMiKi/libmail.php");

$link = conectarse_param("nelosa_printers") ;

	mysql_query("TRUNCATE TABLE `apple_laser` ",$link);
	mysql_query("TRUNCATE TABLE `brother_laser` ",$link);
	mysql_query("TRUNCATE TABLE `canon_laser` ",$link);
	mysql_query("TRUNCATE TABLE `dell_laser` ",$link);
	mysql_query("TRUNCATE TABLE `epson_laser` ",$link);
	mysql_query("TRUNCATE TABLE `hp_laser` ",$link);
	mysql_query("TRUNCATE TABLE `ibm_laser` ",$link);
	mysql_query("TRUNCATE TABLE `lexmark_laser` ",$link);
	mysql_query("TRUNCATE TABLE `oki_laser` ",$link);
	mysql_query("TRUNCATE TABLE `olivetti_laser` ",$link);
	mysql_query("TRUNCATE TABLE `samsung_laser` ",$link);
	mysql_query("TRUNCATE TABLE `sharp_laser` ",$link);
	mysql_query("TRUNCATE TABLE `xerox_laser` ",$link);
	
	echo "DELETE FROM " . $tabla . " WHERE Printer ='" . $textPRN . "'<BR>" ;
	//echo "Impresora " . $textPRN_H . " eliminada" ;
//mysql_free_result($result);  
mysql_close($link);?>
	</td></tr></table>
<p align="center"><a href="Mantenimiento.php"><img src="../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
<p align="center">&nbsp;</p>
