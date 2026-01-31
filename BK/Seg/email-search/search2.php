<HTML><HEAD><TITLE>email search by eMiKi</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
</HEAD><body bgcolor="#FFFFFF">
<table width="431" border="0" align="center">
  <tr><td width="425" height="21"><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Email search </font></strong></div>      <div align="center">
      </div></td></tr><tr><td height="21">
<?php 
		$email_cnt = 0 ;	
		$email_vec_cnt = 0 ; 
		$links_cnt = 0 ;	
		$links_vec_cnt = 0 ; 

//echo ("Inicio b_e_y_l: " . $web_p . " - " . $db_p . "<BR>" );		
		$file = fopen ( $web_paramy , "r" );
		if (!$file) {
		   echo "<p>Unable to open remote file. \n";
		   exit;
		}
		while (!feof ($file)) {
		   $line = fgets ($file, 1024);
		   /* This only works if the title and its tags are on one line */

			/*<p align="center"><a href="aa.php">link</a></p>
			<p align="center"><a href="mailto:info@nelosa.net">mail</a></p>*/
			
			eregi('([A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4})', $line, $mails); // Busca email en line y lo guarda en mails

			eregi ('mailto:(.*).*>([^<]*)', $line, $mails_2);
			
			eregi ('(<a [^<]*href=["|\']?([^ "\']*)["|\']?[^>].*>([^<]*)</a>)', strtolower($line), $links);
			
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
									<form name='form1' method='post' action='add.php' target='_blank'>
									<input name='db_paramy' type='hidden' value='" . $db_paramy . "'>$email_vec_cnt
									<input name='web_paramy' type='text' value='" . trim($mails[$i] ) . "' size='50'>
									<input type='submit' name='Submit' value='Enviar'>
									</form>
									") ;	
									$email_vec_cnt = $email_vec_cnt + 1 ; // Y aumenta contador
								}
								$email_vec_chivi = 0 ;
							}
						}

					 for ($i = 0; $i <= 300; $i++) { // No se cuantos habra
						if ( $mails_2[$i] != "" )	{ // si no esta vacio
								 for ($j = 0;$j <= $email_vec_cnt ; $j++) { // Por cada elemento de los que se hayan guardado
									
									if ( $mails_vec[$j] == trim( $mails_2[$i] ) )	{	// Si lo encuentra
										$email_vec_chivi = 1 ; // Enciende el chivato
									}
								 }
								if($email_vec_chivi == 0 ) { // Si NO ha encontrado
									$mails_vec[$email_vec_cnt] = trim($mails_2[$i] ); // Lo guarda 
									echo ( "
									<form name='form1' method='post' action='add.php' target='_blank'>
									<input name='db_paramy' type='hidden' value='" . $db_paramy . "'>$email_vec_cnt
									<input name='web_paramy' type='text' value='" . trim($mails_2[$i] ) . "' size='50'>
									<input type='submit' name='Submit' value='Enviar'>
									</form>
									") ;	
									$email_vec_cnt = $email_vec_cnt + 1 ; // Y aumenta contador
								}
								$email_vec_chivi = 0 ;
							}
						}

					 for ($i = 0; $i <= 300; $i++) { // No se cuantos habra
						if ( $links[$i] != "" )	{ // si no esta vacio
								 for ($j = 0;$j <= $links_vec_cnt ; $j++) { // Por cada elemento de los que se hayan guardado
									
									if ( $links_vec[$j] == trim( $links[$i] ) )	{	// Si lo encuentra
										$links_vec_chivi = 1 ; // Enciende el chivato
									}
								 }
								if($links_vec_chivi == 0 ) { // Si NO ha encontrado
									$links_vec[$links_vec_cnt] = trim($links[$i] ); // Lo guarda 
									echo ( "
									<form name='form1' method='post' action='add.php' target='_blank'>
									<input name='db_paramy' type='hidden' value='" . $db_paramy . "'>$links_vec_cnt
									<input name='web_paramy' type='text' value='" . trim($links[$i] ) . "' size='50'>
									<input type='submit' name='Submit' value='Enviar'>
									</form>
									") ;	
									$links_vec_cnt = $links_vec_cnt + 1 ; // Y aumenta contador
								}
								$links_vec_chivi = 0 ;
							}
						}
						
		}
		fclose($file);

?></td></tr></table></BODY></HTML>