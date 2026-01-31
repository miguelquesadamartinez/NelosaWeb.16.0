<?php
require_once("../inc/headers/vbles_sesion.php");

require_once("../gueb/eMiKi/Funciones_PHP.php");

$link=conectarse_param("nelosa_printers") ; 

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

</HEAD>
<body bgcolor="#FFFFFF" text="#0000FF" link="#0000FF" vlink="#0000FF" alink="#0000FF">
<table width="600" border="0" align="center"><tr>
    <td>&nbsp;</td>
    <td><div align="right"><a href="http://www.nelosa.net"><img src="../img/diseno.paginas/comunes/Nelosas/NelosaP.jpg" width="172" height="59" border="0"></a></div>
    </td></tr><tr>
    <td colspan="2"> <font color="#FFFFFF">&nbsp; 
<?php 
$result=mysql_query("Select * From Ins_Brand" ,$link);   
$row = mysql_fetch_array($result); 
?>
      </font></td>
  </tr></table><div align="right"></div>
<table width="619" border="0" align="center">
  <tr> 
    <td width="613"><div align="center"><strong><font face="Arial, Helvetica, sans-serif">Brother</font></strong></div></td>
    <td width="613"><div align="center"><strong><font face="Arial, Helvetica, sans-serif">Canon</font></strong></div></td>
    <td width="613"><div align="center"><strong><font face="Arial, Helvetica, sans-serif">Compaq</font></strong></div></td>
    <td width="613" height="20" colspan="2"><div align="center"><strong><font face="Arial, Helvetica, sans-serif">Epson</font></strong></div></td>
  </tr>
  <tr> 
    <td><div align="center"><font face="Arial, Helvetica, sans-serif"><?php echo (string)$row["Brother"]; ?></font></div></td>
    <td><div align="center"><?php echo (string)$row["Canon"];?></div></td>
    <td><div align="center"><?php echo (string)$row["Compaq"];?></div></td>
    <td height="20" colspan="2"><div align="center"><?php echo (string)$row["Epson"];?></div></td>
  </tr>
</table>
<p>&nbsp;</p><table width="619" border="0" align="center">
  <tr> 
    <td width="150"><div align="center"><strong><font face="Arial, Helvetica, sans-serif">HP</font></strong></div></td>
    <td width="147"><div align="center"><strong><font face="Arial, Helvetica, sans-serif">Lexmark</font></strong></div></td>
    <td width="156"><div align="center"><strong><font face="Arial, Helvetica, sans-serif">Olivetti</font></strong></div></td>
    <td width="148" height="20" colspan="2"><div align="center"><strong><font face="Arial, Helvetica, sans-serif">Xerox</font></strong></div></td>
  </tr>
  <tr> 
    <td><div align="center"><?php echo (string)$row["HP"];?></div></td>
    <td><div align="center"><?php echo (string)$row["Lexmark"];?></div></td>
    <td><div align="center"><?php echo (string)$row["Olivetti"];?></div></td>
    <td height="20" colspan="2"><div align="center"><?php echo (string)$row["Xerox"];?></div></td>
  </tr>
</table>
</BODY>
</HTML>