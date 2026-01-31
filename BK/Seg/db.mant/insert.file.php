<title>Modificar tablas de nelosa_nelosa_emails </title><div align="center">
  <p>Mantenimiento de bases de datos </p>
  <form action="insert.file.2.php" method="post" enctype="multipart/form-data" name="form1">
    <div align="center">
      <p>Insertar archivo de texto en 
		<select name="select">
<?php        
	$dbname = 'nelosa_nelosa_printers';
	if (!mysql_connect("nelosa.net","nelosa","mqm1804")) {	   echo 'Could not connect to mysql';	   exit;	}
	$result = mysql_list_tables($dbname);
	if (!$result) {	   echo "DB Error, could not list tables\n";	   echo 'MySQL Error: ' . mysql_error();	   exit;	}
	$arry_cnt = 0 ;
	while ($row = mysql_fetch_row($result)) {
		echo ("<option>" . $row [0] . "</option>");
		}
?>
         
        </select>
</p>
      <p>
        <input type="file" name="file">
</p>
      <p>
        <input type="submit" name="Submit" value="Enviar">
</p>
    </div>
    <p>&nbsp;</p>
  </form>
  </div>
