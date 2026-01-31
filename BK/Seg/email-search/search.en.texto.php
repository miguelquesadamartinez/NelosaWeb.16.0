<HTML><HEAD><TITLE>email search by eMiKi</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
</HEAD><body bgcolor="#FFFFFF">
<table width="626" border="0" align="center">
  <tr><td width="620" height="21"><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Email search en texto </font></strong></div>      
      <div align="center">
      </div></td></tr><tr><td height="21">
<?php 
function buscar_emails_y_links ( $texto_p, $db_p )
{
$email_vec_cnt = 0 ;
$email_vec_chivi = 0 ;
$links_vec_cnt = 0 ;
$links_vec_chivi = 0 ;
echo ("Inicio Busqueda para db - " . $db_p . "<BR><BR><BR><BR>" );		
//echo ( "Texto: " . $texto_p . "<BR>" );		
//echo ( "Tamaño cadena: " . strlen ($texto_p) . "<BR>" );		

		$email_cnt = 1 ;	 
		$file = $texto_p;

//$arr1 = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);

// Falta que busque links



$str = trim ($texto_p);
$chars = preg_split('/ /', $str, -1, PREG_SPLIT_OFFSET_CAPTURE);

	for ($a = 0; $a <= 1500; $a++) {
		for ($b = 0; $b <= 1; $b++) {
			//echo ( $a . " - " . $b .  " : " . $chars[$a][$b] . "<BR>");
				eregi('([A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4})', strtolower($chars[$a][$b]), $mails); // Busca email en line y lo guarda en mails
				eregi('http://(.*)+\.[A-Z]{2,4}', strtolower($chars[$a][$b]), $links); // Busca email en line y lo guarda en mails
//				eregi('(<a [^<]*http://["|\']?([^ "\']*)["|\']?[^>].*>([^<]*)</a>)', strtolower($chars[$a][$b]), $links); // Busca email en line y lo guarda en mails
				
					 for ($i = 0; $i <= 300; $i++) { // No se cuantos habra
						if ( $mails[$i] != "" )	{ // si no esta vacio
								 for ($j = 0;$j <= $email_vec_cnt ; $j++) { // Por cada elemento de los que se hayan guardado
									if ( $mails_vec[$j] == trim( $mails[$i] ) )	{	// Si lo encuentra
										$email_vec_chivi = 1 ; // Enciende el chivato
									}
								 }
								if($email_vec_chivi == 0 ) { // Si NO ha encontrado
									$mails_vec[$email_vec_cnt] = trim($mails[$i] ); // Lo guarda 
									$email_vec_cnt = $email_vec_cnt + 1 ; // Y aumenta contador
									//echo ( "email-> " . $i . " - " . $mails[$i] . "<BR>");
									//echo ( "email_vec_cnt-> " . $email_vec_cnt . "<BR>");
									//echo ( "email_vec-> " . $emails_vec[$email_vec_cnt] . "<BR>");
								}
								$email_vec_chivi = 0 ;
							}
						}

					 for ($i = 0; $i <= 300; $i++) { // No se cuantos habra
						if ( $links[$i] != "" )	{ // si no esta vacio
						//echo ( "Links $i:  " . $links[$i] . "<BR>");
								 for ($j = 0;$j <= $links_vec_cnt ; $j++) { // Por cada elemento de los que se hayan guardado
									//echo ( "<BR>--<BR>links_vec-> " . $links_vec[$j] . "<BR>");
									if ( $links_vec[$j] == $links[$i]  )	{	// Si lo encuentra

										$links_vec_chivi = 1 ; // Enciende el chivato
									}
								 }
								if($links_vec_chivi == 0 ) { // Si NO ha encontrado
									$links_vec[$links_vec_cnt] = $links[$i] ; // Lo guarda 
									$links_vec_cnt = $links_vec_cnt + 1 ; // Y aumenta contador
									//echo ( "Links-> " . $i . " - " . $links[$i] . "<BR>");
									//echo ( "links_vec_cnt-> " . $links_vec_cnt . "<BR>");
								}
								$links_vec_chivi = 0 ;
							}
						}
		}
	}
	
		echo ( "emails<BR>------<BR>" );
		 echo ( "email_vec_cnt -> " . $email_vec_cnt . "<BR>------<BR>" );
		 for ($j = 0;$j <= $email_vec_cnt -1 ; $j++) 
		 {
			echo ( "
			<form name='form1' method='post' action='add.php' target='_blank'>
			<input name='db_paramy' type='hidden' value='" . $db_p . "'>$j
			<input name='web_paramy' type='text' value='" . trim($mails_vec[$j] ) . "' size='50'>
			<input type='submit' name='Submit' value='Enviar'>
			</form>
			") ;	
		 }
		 echo ( "links<BR>------<BR>" );
		 echo ( "links_vec_cnt -> " . $links_vec_cnt . "<BR>------<BR>" );
		 for ($j = 0;$j <= $links_vec_cnt - 1 ; $j++) 
		 {
			echo ( "
			<form name='form1' method='post' action='add.link.php' target='_blank'>
			<input name='db_paramy' type='hidden' value='" . $db_p . "'>$j
			<input name='web_paramy' type='text' value='" . trim($links_vec[$j] ) . "' size='50'>
			<input type='submit' name='Submit' value='Enviar'>
			</form>
			") ;	
		 }


}//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804");
mysql_select_db("nelosa_nelosa",$link);

		//echo (  "Texto: " . $texto . "<BR>") ;
		buscar_emails_y_links ( $texto, $basededatos ) ;
		echo (  "<BR>FIN<BR>") ;
		
//mysql_free_result($result);  
//mysql_close($link);
?>
</td></tr></table></BODY></HTML>