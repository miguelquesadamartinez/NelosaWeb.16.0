<HTML><HEAD><TITLE>email search by eMiKi</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
</HEAD><body bgcolor="#FFFFFF">
<table width="431" border="0" align="center">
  <tr><td width="425" height="21"><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Email search </font></strong></div>      <div align="center">
      </div></td></tr><tr><td height="21">
<?php 
function rebuscar_emails ( $param, $db_param, $web_param  )
{
	$cadena = $param ;
	$tok = strtok ($cadena,">");
	while ($tok) {
	   if ( !strrpos ( $tok , "@")){}
	   else 	echo ( "
				<form name='form1' method='post' action='add.php'>
				<input name='web_paramy' type='hidden' value='" . $web_param . "'>
				<input name='db_paramy' type='hidden' value='" . $db_param . "'>
				<input name='mail_paramy' type='text' value='" . $tok . "' size='60'>
				<input type='submit' name='Submit' value='Enviar'>
				</form>
				") ;	

	   $tok = strtok (" ");
	} 
}// end function
function buscar_emails_y_links ( $web_p, $db_p )
{
echo ("Inicio b_e_y_l: " . $web_p . " - " . $db_p . "<BR>" );		
		$file = fopen ( $web_p , "r" );
		if (!$file) {
		   echo "<p>Unable to open remote file. \n";
		   exit;
		}
		while (!feof ($file)) {
		   $line = fgets ($file, 1024);
		   /* This only works if the title and its tags are on one line */

			/*<p align="center"><a href="aa.php">link</a></p>
			<p align="center"><a href="mailto:info@nelosa.net">mail</a></p>*/
			eregi ('<a href="(.*)">', $line, $links);
			eregi ("<a href='(.*)'>", $line, $links2);
			eregi ('<a href="mailto:(.*)">', $line, $mails);
			eregi ("<a href='mailto:(.*)'>", $line, $mails2);
			
	  			//echo ( "Links<BR>");
				for ($i = 1; $i <= 100; $i++) {
					 if ( ( $links[$i] != "" ) && ( strstr ( $links[$i], "@" )) == "" )
					 {
					 	//echo ( $links[$i] . " - $i<BR>" ) ;	
						buscar_emails_y_links ( $web_p . "/" . $links[$i] , $base ) ;
					}
				 }
				 
	  			//echo ( "<BR>Links2<BR>");
				for ($i = 1; $i <= 100; $i++) {
					 if ( $links2[$i] != "" )echo ($links2[$i] . "<BR>" ) ;				 }
			
			$email_cnt = 1 ;	 
	  			//echo ( "<BR>emails<BR>");
				for ($i = 1; $i <= 10; $i++) {
					 if ( $mails[$i] != "" )
					 {
							
							//if ( strstr ( $links[$i], "@" ) )
		
						echo ( "
						<form name='form1' method='post' action='add.php'>
						<input name='web_paramy' type='hidden' value='" . $web_p . "'>
						<input name='db_paramy' type='hidden' value='" . $db_p . "'>
						<input name='mail_paramy' type='text' value='" . $mails[$i] . "' size='60'>
						<input type='submit' name='Submit' value='Enviar'>
						</form>
						") ;	

							/*$link2=mysql_connect("localhost","nelosa_nelosa","mqm1804");
							mysql_select_db("nelosa_nelosa",$link2);
							mysql_query("UPDATE `" . $base . "` SET `email" . $email_cnt . "` = ' " . $mails[$i] . "' WHERE `web` = 'a'" ,$link2); */
						 	$email_cnt = $email_cnt + 1 ;
					 }			 
				}
				 
	  			//echo ( "<BR>emails2<BR>");
				for ($i = 1; $i <= 10; $i++) {
					 if ( $mails2[$i] != "" )echo ( "
					<form name='form1' method='post' action='add.php'>
					<input name='web_paramy' type='hidden' value='" . $web_p . "'>
					<input name='db_paramy' type='hidden' value='" . $db_p . "'>
					<input name='mail_paramy' type='text' value='" . $mails2[$i] . "' size='60'></form>
					") ;		
				}
					 
					//if ($email_cnt == 1)rebuscar_emails ($line);
					//rebuscar_emails ($line, $db_p, $web_p);
					 
		}
		fclose($file);
}//end function
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804");
mysql_select_db("nelosa_nelosa",$link);

$result=mysql_query("Select * From " . $db ,$link); 

while($row = mysql_fetch_array($result)) 
	{ 
		//$count = $count + 1 ;
		
		
		$web=(string)$row["web"];
		echo (  "Web: " . $web . "<BR>") ;
		buscar_emails_y_links ( $web, $db ) ;

	}
		
mysql_free_result($result);  
mysql_close($link);
?>

</td>
      </tr></table></BODY></HTML>