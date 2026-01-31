<?php session_register('usr'); session_register('v_Pais'); session_register('tabla'); session_register('tmpy'); 
if ( $VBtabla <> "" ) $tabla =  strtolower ( $VBtabla ) ;
$tmpy = $_Ins;
?>
<HTML><HEAD><TITLE></TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<?php /* <meta http-equiv='refresh' content=25;url=Mantenimiento.php?Brandy=<?php echo $VBtabla ?>>
 */?></HEAD>
<body bgcolor="#FFFFFF">
<table width="300" border="0" align="center">
  <tr><td><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Mantenimiento
            
    Ink-Jet DB ( new ) <?php echo $Brandy ; ?></font></strong></div></td>
  </tr></table>
<table width="300" border="0" align="center">
  <tr><td>
<?php
	$tmpPrn = $impresora ;
require_once("../../../inc/funciones/Funciones_PHP.php");
require_once("../../../gueb/eMiKi/libmail.php");

$link = conectarse_param("nelosa_printers") ;
			//	 Comproamos si existe referencia
			echo "Select * From " . $tabla . " Where Printer='" . $textPRN_H . "'<BR>";
		 	$result=mysql_query("Select * From " . $tabla . " Where Printer='" . $textPRN_H . "'",$link);
			$row = mysql_fetch_array($result);
			$bar=(string)$row["Printer"];
			if ($bar=="")
			{
				if ( (  strtolower ($textproced_H) != "si") && ( strtolower ($textproced_H) != "s") && ( strtolower ($textproced_H) != "i") )	{ $proced_mod = "NO" ; }
				mysql_query("Insert Into " . $tabla . " (Printer,Ins,proced) VALUES ('" . $textPRN_H . "','" . $textINS_H . "','" . $proced_mod . "')",$link);	
				echo ("Insert Into " . $tabla . " (Printer,Ins,proced) VALUES ('" . $textPRN_H . "','" . $textINS_H . "','" . $proced_mod . "')<BR>" );
			 	echo "Referencia " . $textPRN_H . " Insertada";	
			}
			else
			{
				echo "La referencia ya existe !!";		
			}
				$tabla = $tmpPrn ;	
		  mysql_free_result($result);  
mysql_close($link);?>
	</td></tr></table>
<p align="center"><a href="Mantenimiento.php"><img src="../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
<p align="center">&nbsp;</p>
