<HTML>
<HEAD>
<TITLE>Ins Mant</TITLE>

</HEAD>
<BODY bgcolor="#FFFFFF" text="#0000FF" link="#0000FF" vlink="#0000FF" alink="#0000FF">
<table width="600" border="0" align="center">
  <tr>
    <td><div align="center">
      <p><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Ins Mant - Procedimientos</font></strong></p>
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
	$dbname = 'nelosa_nelosa_printers';
	
	if (!mysql_connect($jost,"nelosa","mqm1804")) {	   echo 'Could not connect to mysql';	   exit;	}
	$result = mysql_list_tables($dbname);
	
	if (!$result) {	   echo "DB Error, could not list tables\n";	   echo 'MySQL Error: ' . mysql_error();	   exit;	}
	
	$arry_cnt = 0 ;
	while ($row = mysql_fetch_row($result)) {
			$rest [$arry_cnt] = $row[0];
			$arry_cnt = $arry_cnt + 1 ;
		
	}
	mysql_free_result($result);
require_once("../../../inc/funciones/Funciones_PHP.php");

$link = conectarse_param("nelosa_nelosa_printers") ;


$last = $arry_cnt ;
$arry_cnt = 1 ; // Para que salte Ins_Brand

for ( $j = 1; $j < $last ; $j++ )
{
	echo ('<table width="100%"  border="0"><tr><td><div align="center"><b><font size="3" face="Arial, Helvetica, sans-serif">' . $rest [$j] . '</font></b></div></td></tr></table>');
	echo ('<table width="100%"  border="0"><tr>');
	$result=mysql_query("Select distinct proced From " . $rest [$j] ,$link);
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
}
?>
</BODY>
</HTML>
