<HTML><HEAD><TITLE></TITLE>
</HEAD>
<body bgcolor="#FFFFFF">
<table width="300" border="0" align="center">
  <tr><td>
<?php
require_once("../../../inc/funciones/Funciones_PHP.php");
require_once("../../../gueb/eMiKi/libmail.php");

$link = conectarse_param("nelosa_printers") ;

$result=mysql_query("Select * From " . $tabla . "_laser  WHERE Printer = '" . $prn . "'",$link);	

$row = mysql_fetch_array($result);
$bar=(string)$row["Printer"];
if ($bar==""){
mysql_query("Insert Into " . $tabla . "_laser (Printer,Ins,proced) VALUES ('" . $prn . "','" . $ins . "','" . $proce . "')",$link);	
echo("Insert Into " . $tabla . "_laser (Printer,Ins,proced) VALUES ('" . $prn . "','" . $ins . "','" . $proce . "')<BR>");	
}
else{
	mysql_query("Update " . $tabla . "_laser Set Ins = '" . $ins . "', proced = '" . $proc . "'  WHERE Printer = '" . $prn . "'",$link);	
	echo("Update " . $tabla . "_laser Set Ins = '" . $ins . "', proced = '" . $proc . "'  WHERE Printer = '" . $prn . "'<BR>");	

}
?>
	</td></tr></table>