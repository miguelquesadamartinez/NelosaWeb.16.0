<title>Rellenar el indice de los emails</title><div align="center">
  <p>Mantenimiento de bases de datos </p>
  <p>Rellenar el indice de los emails </p>
</div>
<?php
// Primero hago el cambio en la db de nelosa_nelosa emails, copio el codigo sql
// y lo ejecuto desde estas paginas en cada tabla de la db nelosa_nelosa_emails

	$totcounter = 0 ;

	$link=mysql_connect("nelosa.net","nelosa","mqm1804") ;
	mysql_select_db("nelosa_nelosa",$link) ;
	
	$otro=mysql_connect("nelosa.net","nelosa","mqm1804") ;
	mysql_select_db("nelosa_nelosa",$otro) ;
	
		$result = mysql_query( "Select * from emails" ,$link); 
		echo ( "Select * from emails<BR>--------------------<BR><BR>" ); 
		$indise = 1 ;
		while ($row = mysql_fetch_row($result)) {
			mysql_query( "UPDATE `emails` SET `ind` = '" . $indise . "' WHERE `email` = '" . $row ["email"] . "'",$otro); 
			//UPDATE `emails` SET `ind` = '2' WHERE `email` = '100030224@eresmas.com' AND `ind` = '0' LIMIT 1 ;

			echo ( "UPDATE `emails` SET `ind` = '" . $indise . "' WHERE `email` = '" . $row ["email"] . "'<BR>" ); 
			$indise = $indise + 1 ; // 
			$totcounter = $totcounter + 1 ; // 
		}
	
	/*$link=mysql_connect("nelosa.net","nelosa","mqm1804") ;
	mysql_select_db("nelosa_nelosa",$link) ;
	
	$otro=mysql_connect("nelosa.net","nelosa","mqm1804") ;
	mysql_select_db("nelosa_nelosa",$otro) ;
	
		$result = mysql_query( "Select * from emails_nelosa" ,$link); 
		echo ( "Select * from emails<BR>--------------------<BR><BR>" ); 
		$indise = 1 ;
		while ($row = mysql_fetch_row($result)) {
			mysql_query( "UPDATE emails SET ind=" . $indise . " Where email='" . $row ["email"] . "'",$otro); 
			echo ( "UPDATE emails SET ind = " . $indise . " Where email = '" . $row [0] . "'<BR>" ); 
			$indise = $indise + 1 ; // 
			$totcounter = $totcounter + 1 ; // 
		}
	


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
	
	$otro=mysql_connect("nelosa.net","nelosa","mqm1804") ;
	mysql_select_db("nelosa_nelosa_emails",$otro) ;
	
	for ($j=0;$j<$arry_cnt;$j++) {
		echo ( "Select * from `" . $tablas [ $j ] . "`<BR>--------------------<BR><BR>" ); 
		$result = mysql_query( "Select * from `" . $tablas [ $j ] . "`" ,$link); 
		
		$indise = 1 ;
		while ($row = mysql_fetch_row($result)) {
			echo ( $totcounter . " - UPDATE " . $tablas [ $j ] . " SET ind=" . $indise . " Where email='" . $row [0] . "'<BR>" ); 
			mysql_query( "UPDATE " . $tablas [ $j ] . " SET ind = " . $indise . " Where email = '" . $row ["email"] . "'",$otro); 
			$indise = $indise + 1 ; // 
			$totcounter = $totcounter + 1 ; // 
		}
	}
	
	mysql_free_result($result);
	*/
	
	echo ("<BR><BR>Fin proceso ! !");
?> 

