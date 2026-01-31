<title>Modificar tablas de nelosa_nelosa_emails </title><div align="center">
  <p>Mantenimiento de bases de datos </p>
  <p>Modificar tablas de nelosa_nelosa_emails </p>
</div>
<?php
// Primero hago el cambio en la db de nelosa_nelosa emails, copio el codigo sql
// y lo ejecuto desde estas paginas en cada tabla de la db nelosa_nelosa_emails
	$dbname = 'nelosa_nelosa_emails';
	if (!mysql_connect("nelosa.net","nelosa","mqm1804")) {	   echo 'Could not connect to mysql';	   exit;	}
	$result = mysql_list_tables($dbname);
	if (!$result) {	   echo "DB Error, could not list tables\n";	   echo 'MySQL Error: ' . mysql_error();	   exit;	}
	$arry_cnt = 0 ;
	while ($row = mysql_fetch_row($result)) {
		$tablas [ $arry_cnt ] = $row [0]; // Guardo el nombre de las tablas de nelosa_nelosa_emails
		$arry_cnt ++ ; // Luego 1 menos
		}
	
	$link=mysql_connect("nelosa.net","nelosa","mqm1804") ;
	mysql_select_db("nelosa_nelosa_emails",$link) ;
	 
	for ($j=1;$j<$arry_cnt;$j++) {
		mysql_query( "ALTER TABLE `" . $tablas [ $j ] . "` ADD `ind` INT( 7 ) NOT NULL" ,$link); 
		echo ( "ALTER TABLE `" . $tablas [ $j ] . "` ADD `ind` INT( 7 ) NOT NULL<BR>" ); 
	}
	
	mysql_free_result($result);
?> 

