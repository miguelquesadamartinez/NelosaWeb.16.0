<title>Modificar tablas de nelosa_nelosa_emails </title>
  <p>Mantenimiento de bases de datos </p>
    <?php
	
//	$link=mysql_connect("nelosa.net","nelosa","mqm1804") ;
//	mysql_select_db("nelosa_nelosa_emails",$link) ;
	 
    echo "Select: " . $select . "<BR>";
    echo "File: " . $file . "<BR>";

//abrimos el archivo en lectura
//$archivo = 'path/archivo.txt';
$archivo = $file;
$fp = fopen($archivo,'r');

//leemos el archivo
$texto = fread($fp, filesize($archivo));

//transformamos los saltos de línea en etiquetas <br>
$texto = nl2br($texto);

//echo $texto;

//Muy interesante la funcion nl2br (new line to break) que transforma los saltos de línea de un archivo texto en etiquetas <br>
	
	$link=mysql_connect("nelosa.net","nelosa","mqm1804") ;
	mysql_select_db("nelosa_nelosa_emails",$link) ;
	 
	//$lines = file('http://www.nelosa.net/');
	$lines = file($archivo);

	// Loop through our array, show HTML source as HTML source; and line numbers too.
	foreach ($lines as $line_num => $line) {
//    echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n<BR>";
	
	$pos = strpos($line, "\t");
	
	$printer = trim ( strip_tags ( substr ($line, 0, $pos ) ) ) ;
	$carga = trim ( strip_tags ( substr ($line, $pos, 5 ) ) ) ;
	
	//echo "Printer : " . trim ( strip_tags ( substr ($line, 0, $pos ) ) ) . "<BR>";

	//echo "Capasida: " . trim ( strip_tags ( substr ($line, $pos, 5 ) ) ) . "<BR>";
	
	mysql_query( "UPDATE `" . $select . "` SET `carga` = '" . $carga . "' WHERE `Printer` = '" . $printer . "'" ,$link); 
	
	echo ("UPDATE " . $select . " SET carga = '" . $carga . "' WHERE `Printer = '" . $printer . "'<BR>");
	
	} 

	//mysql_free_result($result);
?>
  </div>
