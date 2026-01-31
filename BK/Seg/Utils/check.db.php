<HTML>
<HEAD>
<TITLE>Check DB</TITLE>

</HEAD>
<BODY bgcolor="#FFFFFF" text="#0000FF" link="#0000FF" vlink="#0000FF" alink="#0000FF">
<table width="600" border="0" align="center">
  <tr>
    <td><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">NS
            Look UP</font></strong></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<div align="right"></div>
<table width="600" border="0" align="center">
  <tr>
    <td>
<?
require_once("../../../inc/funciones/Funciones_PHP.php");

$link = conectarse_param("nelosa_nelosa_newebs") ;

$result=mysql_query("Select * From webs_new_abogados",$link);
$row = mysql_fetch_array($result);
$mail=$row["web"];
echo $mail ;


?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</BODY>
</HTML>
