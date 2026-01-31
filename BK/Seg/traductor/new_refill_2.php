<HTML>
<HEAD>
<TITLE>Traductor</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<meta http-equiv="refresh" content="2;url=traductor.php">

</HEAD>

<BODY>
<table width="600" border="0" align="center">
  <tr> 
    <td><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Nuevo 
        texto recarga<br>
        <br>
        </font></strong></div></td>
  </tr>
  <tr> 
    <td><div align="center"> 
        <p>&nbsp;</p>
        <p>&nbsp; </p>
      </div></td>
  </tr>
  <tr>
    <td><div align="right"><a href="traductor.php"><img src="../../../gueb/imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></div></td>
  </tr>
</table>
<?php 
require_once("../../../inc/funciones/Funciones_PHP.php");
$link=conectarse_param("nelosa_nelosa_textos") ;

			$texto = ereg_replace ("'", "%B4", $texto);

mysql_query("Insert Into txt_esp (id,texto) VALUES('" . $iden . "','" . $texto . "')" ,$link);
mysql_query("Insert Into txt_cat (id,texto) VALUES('" . $iden . "','')" ,$link);
mysql_query("Insert Into txt_eng (id,texto) VALUES('" . $iden . "','')" ,$link);
mysql_query("Insert Into txt_fra (id,texto) VALUES('" . $iden . "','')" ,$link);
mysql_query("Insert Into txt_ned (id,texto) VALUES('" . $iden . "','')" ,$link);
mysql_query("Insert Into txt_por (id,texto) VALUES('" . $iden . "','')" ,$link);

mysql_close ($link) ; 

?>

</BODY>
</HTML>
