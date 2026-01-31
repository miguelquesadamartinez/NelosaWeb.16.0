<HTML>
<HEAD>
<TITLE>Ins Mant</TITLE>

</HEAD>
<BODY bgcolor="#FFFFFF" text="#0000FF" link="#0000FF" vlink="#0000FF" alink="#0000FF">
<table width="600" border="0" align="center">
  <tr>
    <td><div align="center">
      <p><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Ins Mant - Imprsoras X Ins </font></strong></p>
      <p>&nbsp;</p>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<div align="right"></div>
<table width="600" border="0" align="center">
  <tr>
    <td>
<?php
require_once("../../../inc/funciones/Funciones_PHP.php");

$link = conectarse_param("nelosa_nelosa_printers") ;

	echo ('<table width="100%"  border="0"><tr><td><div align="center"><b><font size="3" face="Arial, Helvetica, sans-serif">' . $instrucc . ' - ' . $bd . '</font></b></div></td></tr></table>');
	echo ('<table width="100%"  border="0"><tr>');
	
	//echo ("Select Printer From " . $bd . " where Ins = '" . $instrucc . "'");
	$result=mysql_query("Select Printer From " . $bd . " where Ins = '" . $instrucc . "'" ,$link);
	$cnt = 0 ;
	while ($row = mysql_fetch_row($result)) {
		$var=$row[0];
		//echo $var ;
		echo '<td><div align="center"><font size="2" face="Arial, Helvetica, sans-serif">' . $var . '</font></td>';
		
		$cnt = $cnt + 1 ;
		
		if ( $cnt == 5 )
		{
			$cnt=0 ;
			echo "<tr></tr>";
		}
	}
	echo "<table>";
?>
</BODY>
</HTML>
