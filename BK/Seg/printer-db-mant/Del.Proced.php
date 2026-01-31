<?php session_register('usr'); session_register('v_Pais'); session_register('tabla');   session_register('brand');  session_register('INS'); 
if ( $VBtabla <> "" ) $tabla = strtolower ( $VBtabla ) ;
 ?>
<HTML><HEAD><TITLE></TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<?php /* <meta http-equiv='refresh' content=25;url=Mantenimiento.php?Brandy=<?php echo $VBtabla ?>>
 */?></HEAD>
<body bgcolor="#FFFFFF">
<table width="300" border="0" align="center">
  <tr><td><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Mantenimiento ( del )
            
    Ink-Jet DB <?php echo $Brandy ; ?></font></strong></div></td>
  </tr></table>
<table width="300" border="0" align="center">
  <tr><td>
<?php
require_once("../../../inc/funciones/Funciones_PHP.php");
require_once("../../../gueb/eMiKi/libmail.php");

$link = conectarse_param("nelosa_printers") ;

	mysql_query("DELETE FROM Proced WHERE Num ='" . $num . "'",$link);
	echo "Procedimiento " . $num . " eliminado" ;
//mysql_free_result($result);  
mysql_close($link);?>
	</td></tr></table>
<p align="center"><a href="Mantenimiento.php"><img src="../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
<p align="center">&nbsp;</p>
