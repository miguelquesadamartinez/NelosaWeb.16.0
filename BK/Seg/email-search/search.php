<?php 
/* * * * * * * * * * * * * * * * * * * * * * */
/* 
/* 
/* * * * * * * * * * * * * * * * * * * * * * */
?>

<HTML><HEAD><TITLE>email search by eMiKi</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
</HEAD>
<body bgcolor="#FFFFFF">
<table width="770" border="0" align="center">
  <tr>
    <td height="21" colspan="2"><div align="center"></div>      <div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">
      Email search to <a href="<?php echo $web_paramy ;?>" target="_blank"><?php echo $web_paramy ;?></a> <br>
      <font color="#0000FF" size="2">pinchar en lo azul si no sale nada </font></font></strong>
    </div></td>
    </tr><tr>
      <td width="50%"><p><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Patrones Busqueda Links</font></strong></p>
        <p><strong><font color="#FF00FF" face="Arial, Helvetica, sans-serif">http://www.pagina.es/algomas<br>
  http://www.pagina.es/algomas.xxxx</font></strong></p></td>
      <td width="50%" height="21"><p><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Patron Busqueda emails </font></strong></p>
        <p><strong><font color="#FF00FF" face="Arial, Helvetica, sans-serif">      nombre @ algomas . xxxx</font></strong></p></td>
      </tr>
      <tr>
        <td height="21" colspan="2"><div align="center"></div>          
		<?php 
		$email_cnt = 0 ;	
		$email_vec_cnt = 0 ; 
		$links_cnt = 0 ;	
		$links_vec_cnt = 0 ; 

echo ("Inicio b_e_y_l: " . $web_paramy . " - " . $db_paramy . "<BR>" );		
		$file = fopen ( $web_paramy , "r" );
		if (!$file) {
		   echo "<p>Unable to open remote file. \n";
		   exit;
		}
		while (!feof ($file)) {
		   $line = fgets ($file, 1024);
		   //echo "Line: " . $line . "<BR>";
		   /* This only works if the title and its tags are on one line */

			/*<p align="center"><a href="aa.php">link</a></p>
			<p align="center"><a href="mailto:info@nelosa.net">mail</a></p>*/
			
			eregi('([A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4})', $line, $mails); // Busca email en line y lo guarda en mails

			//eregi ('mailto:(.*).*>([^<]*)', $line, $mails_2);
			
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
									$links_vec_cnt = $links_vec_cnt + 1 ; // Y aumenta contador
								}
								$links_vec_chivi = 0 ;
							}
						}
						
		}
		 echo ( "emails<BR>------<BR>" );
		 for ($j = 0;$j <= $email_vec_cnt -1 ; $j++) 
		 {
			echo ( "
			<form name='form1' method='post' action='add.php' target='_blank'>
			<input name='db_paramy' type='hidden' value='" . $db_paramy . "'>$email_vec_cnt
			<input name='web_paramy' type='text' value='" . trim($mails_vec[$j] ) . "' size='50'>
			<input type='submit' name='Submit' value='Enviar'>
			</form>
			") ;	
		 }
		 echo ( "links<BR>------<BR>" );
		 for ($j = 0;$j <= $links_vec_cnt - 1 ; $j++) 
		 {
			echo ( "
			<form name='form1' method='post' action='add.link.php' target='_blank'>
			<input name='db_paramy' type='hidden' value='" . $db_paramy . "'>$links_vec_cnt
			<input name='web_paramy' type='text' value='". $web_paramy . "/" . trim($links_vec[$j] ) . "' size='50'>
			<input type='submit' name='Submit' value='Enviar'>
			</form>
			") ;	
		 }

		fclose($file);
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804");
mysql_select_db("nelosa_nelosa",$link);
$mail_db = "" ;
$result=mysql_query("Select * From webs_" . $db_paramy ." where web = '" . $web_paramy . "'",$link);   
$row = mysql_fetch_array($result);
$mail_db=(string)$row["email"];

if ( $mail_db == "" )	
{
	mysql_query("Insert Into webs_" . $db_paramy . " (web) VALUES('" . $web_paramy . "')",$link);
	echo "Insertado " . $web_paramy ;
}
else
{
	echo ("Tengi !!");
}

	
mysql_free_result($result);  
mysql_close($link);

?>
          <div align="center"></div>
        <div align="center"></div></td>
      </tr>
</table>
</BODY></HTML>