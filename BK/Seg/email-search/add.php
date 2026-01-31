<HTML><HEAD><TITLE>email search by eMiKi</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
</HEAD><body bgcolor="#FFFFFF">
<table width="431" border="0" align="center">
  <tr><td width="425" height="21"><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Email search </font></strong></div>      <div align="center">
      </div></td></tr><tr><td height="21">
<?php 

$mail_db = "" ;

$link=mysql_connect("localhost","nelosa_nelosa","mqm1804");
mysql_select_db("nelosa_nelosa",$link);

$result=mysql_query("Select * From emails_" . $db_paramy ." where email = '" . $web_paramy . "'",$link);   
$row = mysql_fetch_array($result);
$mail_db=(string)$row["email"];
	//echo ("Web_DB" . $web_db ."<BR>");

if ( $mail_db == "" )	
{
	mysql_query("Insert Into emails_" . $db_paramy . " (email) VALUES('" . $web_paramy . "')",$link);
	echo "Insertado " . $web_paramy ;
}
else
{
	echo ("Tengi !!");
}

	
mysql_free_result($result);  
mysql_close($link);
?>
</td></tr></table></p></BODY></HTML>