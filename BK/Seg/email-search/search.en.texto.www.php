<?php 
/* * * * * * * * * * * * * * * * * * * * * * */
/* Para busqueda desde " Texto Paginas Amarillas "
/* Del www.pagina.net del texto que se copia de la pagina,
/* devuelve el link para guardarlo en db
/* Se guarda en la db seleccionada segun el select
/* * * * * * * * * * * * * * * * * * * * * * */
?>

<HTML><HEAD><TITLE>email search by eMiKi</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
</HEAD><body bgcolor="#FFFFFF">
<table width="626" border="0" align="center">
  <tr><td width="620" height="21"><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Email search en texto www </font></strong></div>      
      <div align="center">
      </div></td></tr><tr><td height="21">
<?php 
function buscar_emails_y_links ( $texto_p, $db_p )
{
$email_vec_cnt = 0 ;
$email_vec_chivi = 0 ;


echo ("Inicio Busqueda en Texto<BR>" );		
echo ( "Send To add.link.php - webs_new_" . $db_p . "<BR>" );		
//echo ( "Tamaño cadena: " . strlen ($texto_p) . "<BR>" );		

		$email_cnt = 1 ;	 
		$file = $texto_p;

//$arr1 = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);

// Falta que busque links



$str = trim ($texto_p);
$chars = preg_split('/ /', $str, -1, PREG_SPLIT_OFFSET_CAPTURE);

	for ($a = 0; $a <= 1000; $a++) {
		for ($b = 0; $b <= 5; $b++) {
			//echo ( $a . " - " . $b .  " : " . $chars[$a][$b] . "<BR>");
				//eregi('([A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4})', $chars[$a][$b], $mails); // Busca email en line y lo guarda en mails
				
				//eregi('www.(.*).*>([^<]*)', $chars[$a][$b], $mails); // Busca email en line y lo guarda en mails
				eregi('www.(.*)+\.[A-Z]{2,4}', $chars[$a][$b], $mails); // Busca email en line y lo guarda en mails
				
				//eregi ('www.(.*).*>([^<]*)', $line, $links_www);
					 for ($i = 0; $i <= 300; $i++) { // No se cuantos habra
						if ( $mails[$i] != "" )	{ // si no esta vacio
								 for ($j = 0;$j <= $email_vec_cnt ; $j++) { // Por cada elemento de los que se hayan guardado
									if ( $mails_vec[$j] == trim( $mails[$i] ) )	{	// Si lo encuentra
										$email_vec_chivi = 1 ; // Enciende el chivato
									}
								 }
								if($email_vec_chivi == 0 ) { // Si NO ha encontrado
									$mails_vec[$email_vec_cnt] = trim($mails[$i] ); // Lo guarda 
	
									echo ( "
									<form name='form1' method='post' action='add.link.php' target='_blank'>
									<input name='db_paramy' type='hidden' value='" . $db_p . "'>$email_vec_cnt
									<input name='web_paramy' type='text' value='http://" . trim($mails[$i] ) . "' size='50'>
									<input type='submit' name='Submit' value='Enviar'>
									</form>
									") ;	
									$email_vec_cnt = $email_vec_cnt + 1 ; // Y aumenta contador
								}
								$email_vec_chivi = 0 ;
							}
						}
		}
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