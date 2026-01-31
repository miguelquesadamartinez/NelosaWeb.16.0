<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<TITLE></TITLE>
</HEAD><body bgcolor="#FFFFFF">
<form name="form1" method="post" action="ret.deb.php">
  <?php 
	$dbname = 'nelosa_printers';
	if (!mysql_connect("localhost","nelosa","mqm1804")) {	   echo 'Could not connect to mysql';	   exit;	}
	$result = mysql_list_tables($dbname);
	if (!$result) {	   echo "DB Error, could not list tables\n";	   echo 'MySQL Error: ' . mysql_error();	   exit;	}
	$arry_cnt = 0 ;
	echo ('<select name="printers" id="printers">');
	echo "<option></option>";
	while ($row = mysql_fetch_row($result)) {
	   if (  ( $row[0] != "Ins_Brand" ) && ( $row[0] != "Error_Codes" )  )  {
			//echo "" . $row[0] . "<BR>\n";
			echo "<option>" . $row[0] . "</option>";
		}
	}
	echo ('</select>');
	mysql_free_result($result);
echo "<BR>";
	$dbname = 'nelosa_nelosa';
	if (!mysql_connect("localhost","nelosa","mqm1804")) {	   echo 'Could not connect to mysql';	   exit;	}
	$result = mysql_list_tables($dbname);
	if (!$result) {	   echo "DB Error, could not list tables\n";	   echo 'MySQL Error: ' . mysql_error();	   exit;	}
	$arry_cnt = 0 ;
	echo ('<select name="nelosa" id="nelosa">');
	echo "<option></option>";
	while ($row = mysql_fetch_row($result)) {
			echo "<option>" . $row[0] . "</option>";
	}
	echo ('</select>');
	mysql_free_result($result);
echo "<BR>";

?>
  <p>
    <input type="submit" name="Submit" value="Submit">
  </p>
</form>
<p>&nbsp;</p>
<p align="center"><a class="AZUL" href="ret.T1.php">Aj T1</a></p>
<p align="center"><a class="AZUL" href="ret.T2.php">Aj T2</a></p>
<p align="center"><a class="AZUL" href="ret.T3.php">Aj T3</a></p>
<p align="center"><a class="AZUL" href="ret.T4.php">Aj T4</a></p>
<p align="center"><a class="AZUL" href="ret.T5.php">Aj T5</a></p>
</BODY>
</HTML>
