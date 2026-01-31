<?php 
session_register('str_arry'); session_register('str_arry_cnt');
/* * * * * * * * * * * * * * * * * * * * * * */
/* Para busqueda desde " Texto Paginas Amarillas "
/* Del www.pagina.net del texto que se copia de la pagina,
/* devuelve el link para guardarlo en db
/* Se guarda en la db seleccionada segun el select
/* * * * * * * * * * * * * * * * * * * * * * */
?>

<HTML><HEAD><TITLE>email search by eMiKi</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<style TYPE="text/css">
A:link {color:"#0000FF";  text-decoration: none;}
A:hover{color:"#00FF00";  text-decoration: none;}
A:visited {color: "#0000FF";  text-decoration: none;}
</style>
</HEAD><body bgcolor="#FFFFFF">
<table width="626" border="0" align="center">
  <tr><td width="620" height="21"><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Email search en texto www desde amarillas </font></strong></div>      
      <div align="center">
      </div></td></tr><tr><td height="21">
<?php 
$email_vec_cnt = 0 ;
$email_vec_chivi = 0 ;

	for ($a = 0; $a <= $str_arry_cnt; $a++) {

				eregi('www.(.*)+\.[A-Z]{2,4}', $str_arry[$a], $mails); // Busca email en line y lo guarda en mails
				//eregi('([A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4})', $line, $mails); // Busca email en line y lo guarda en mails

					 for ($i = 0; $i <= 300; $i++) { // No se cuantos habra
						if ( $mails[$i] != "" )	{ // si no esta vacio
								 for ($j = 0;$j <= $email_vec_cnt ; $j++) { // Por cada elemento de los que se hayan guardado
									if ( $mails_vec[$j] == trim( $mails[$i] ) )	{	// Si lo encuentra
										$email_vec_chivi = 1 ; // Enciende el chivato
									}
								 }
								if($email_vec_chivi == 0 ) { // Si NO ha encontrado
									$mails_vec[$email_vec_cnt] = trim($mails[$i] ); // Lo guarda 
	
									//echo ( trim($mails[$i] ) ) ;	
									echo ( "
									<form name='form1' method='post' action='add.link.php' target='_blank'>
									<input name='db_paramy' type='hidden' value='" . $db_p . "'>$email_vec_cnt
									<input name='web_paramy' type='text' size='100' value='http://" . trim($mails[$i] ) . "'>
									<input type='submit' name='Submit' value='Enviar'>
									</form>
									<BR>------------------------<BR>" );
									$email_vec_cnt = $email_vec_cnt + 1 ; // Y aumenta contador
								}
								$email_vec_chivi = 0 ;
							}
						}
	}
?>
</td></tr></table></BODY></HTML>