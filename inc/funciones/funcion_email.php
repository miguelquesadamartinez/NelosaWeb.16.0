<?php 
function quitar_marcas ( $estring )
{
	$chivi = 0 ; // Inicializamos el chivato a cero

	//echo ( "-|-" . substr( $estring , strlen ( $estring ) - 5 , 4 ) . "-|-");

	if ( substr( $estring , strlen ( $estring ) - 5 , 4 ) == "<BR>" ) $chivi = 1 ; // Si encuentra <BR> enciende el chivato a 1
	if ( substr( $estring , strlen ( $estring ) - 5 , 4 ) == "<br>" ) $chivi = 2 ; // Si encuentra <br> enciende el chivato a 2
	if ( substr( $estring , strlen ( $estring ) - 5 , 4 ) == "</p>" ) $chivi = 3 ; // Si encuentra </p> enciende el chivato a 3
	if ( substr( $estring , strlen ( $estring ) - 5 , 4 ) == "</P>" ) $chivi = 4 ; // Si encuentra </P> enciende el chivato a 4
	if ( substr( $estring , strlen ( $estring ) - 5 , 4 ) == "</a>" ) $chivi = 5 ; // Si encuentra </p> enciende el chivato a 3
	if ( substr( $estring , strlen ( $estring ) - 5 , 4 ) == "</A>" ) $chivi = 6 ; // Si encuentra </P> enciende el chivato a 4

	if ( $chivi == 0 ) { $ret = $estring ; }
	else { $ret = substr( $estring , 0 , strlen ( $estring ) - 5 ) ; }// Si ha cambiado el chivato le quita las ultimas 4 letras
// $ret = $estring ;
	return $ret ;
}
function buscar_emails_y_links ( $web_p, $db_p , $niveles_p)
{
$email_vec_cnt = 0 ;
$links_vec_cnt = 0 ;
echo ("Inicio one page: " . $web_p . " - " . $db_p . "<BR>" );		
		$email_cnt = 1 ;	 
		$file = fopen ( $web_p , "r" );
		if (!$file) {
		   echo "<p>Unable to open remote file. \n";
		   exit;
		}

		while (!feof ($file)) {
		   $line = fgets ($file, 1024);
		   /* This only works if the title and its tags are on one line */

 			eregi('([A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4})', $line, $mails); // Busca email en line y lo guarda en mails
			
			eregi ('http(.*)', $line, $links); // Busca LINKS en line y lo guarda en links

				 for ($i = 0; $i <= 300; $i++) { // No se cuantos habra
					if ( $mails[$i] != "" )	{ // si no esta vacio
							 $email_vec_chivi = 0 ;
							 
							 for ($j = 0;$j <= $email_vec_cnt ; $j++) { // Por cada elemento de los que se hayan guardado
								if ( $mails_vec[$j] == $mails[$i] )	{	// Si lo encuentra
									$email_vec_chivi = 1 ; // Enciende el chivato
								}
							 }
							if($email_vec_chivi == 0 ) { // Si NO ha encontrado
								$mails_vec[$email_vec_cnt] = $mails[$i] ; // Lo guarda 
								echo ( "
								<form name='form1' method='post' action='add.php' target='_blank'>
								<input name='web_paramy' type='hidden' value='" . $web_p . "'>
								<input name='db_paramy' type='hidden' value='" . $db_p . "'>" 
								. $email_vec_cnt . " - emails - Web: " . $web_p . " - db: " . $db_p . "
								<input name='mail_paramy' type='text' value='" .$mails[$i] . "' size='75'>
								<input type='submit' name='Submit' value='Enviar'>
								</form>
								") ;	
								$email_vec_cnt = $email_vec_cnt + 1 ; // Y aumenta contador

							}
					}
				}

				 for ($i = 0; $i <= 300; $i++) { // No se cuantos habra
					if ( $links[$i] != "" )	{ // si no esta vacio
							 $links_vec_chivi = 0 ;

							 $tmp_var = quitar_marcas ( $links[$i] ) ;

							 for ($j = 0;$j <= $links_vec_cnt ; $j++) { // Por cada elemento de los que se hayan guardado
								if ( $links_vec[$j] == $tmp_var )	{	// Si lo encuentra
									$links_vec_chivi = 1 ; // Enciende el chivato
								}
							 }
							if($links_vec_chivi == 0 ) { // Si NO ha encontrado
								$links_vec[$links_vec_cnt] = $tmp_var ; // Lo guarda 
								echo ( "
								<form name='form1' method='post' action='add.link.php' target='_blank'>
								<input name='web_paramy' type='hidden' value='" . $web_p . "'>
								<input name='db_paramy' type='hidden' value='" . $db_p . "'>" 
								. $links_vec_cnt . " - links - Web: " . $web_p . " - db: " . $db_p . "
								<input name='link_paramy' type='text' value='" . $tmp_var . "' size='75'>
								<input type='submit' name='Submit' value='Enviar'>
								</form>
								") ;	
								$links_vec_cnt = $links_vec_cnt + 1 ; // Y aumenta contador

							}
					}
				}

		}
		fclose($file);
		$links_vec_cnt = $links_vec_cnt - 1 ; 
		$level_counter = $level_counter + 1 ; // Aumenta el contador de niveles
		
		if ( $level_counter < $niveles_p ) {
			 for ($j = 0;$j <= $links_vec_cnt ; $j++) { // Por cada elemento de los que se hayan guardado
						buscar_emails_y_links ( $links_vec[$j], $db_p , $niveles_p) ; 
			 }
		}
}// End function
?>