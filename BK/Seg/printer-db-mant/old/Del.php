<?php session_register('impresora');   session_register('brand');  session_register('INS'); 
if ( $VBimpresora <> "" ) $impresora = $VBimpresora ;
 ?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<TITLE></TITLE>
<meta name="title" content=""/>
<meta http-equiv="title" content=""/>
<meta name="DC.Title" content=""/>

<meta name="description" content="">
<meta http-equiv="description" content="">
<meta http-equiv="DC.Description" content="">

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta name="keywords" content=""/>
<meta http-equiv="keywords" content=""/>

<meta name="Revisit" content="20 days"/>

<meta name="distribution" content="global"/>
<meta name="resource-type" content="document"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>

<meta http-equiv='refresh' content=1;url=Mantenimiento.php>

</HEAD><body bgcolor="#FFFFFF" text="#0000FF" link="#0000FF" vlink="#0000FF" alink="#0000FF">
<table width="300" border="0" align="center">
  <tr><td><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Mantenimiento
            DB <?php echo $Brandy ; ?></font></strong></div></td>
  </tr></table>
<table width="300" border="0" align="center">
  <tr><td>
<?php
	require_once("../../../../inc/funciones/Funciones_PHP.php");
$link=conectarse(); 

	mysql_query("DELETE FROM " . $impresora . " WHERE Printer ='" . $textPRN . "'",$link);
	
	echo "Impresora " . $textPRN . " eliminada" ;
?>
	</td></tr></table>
<p align="center"><a href="Mantenimiento.php"><img src="../../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>

