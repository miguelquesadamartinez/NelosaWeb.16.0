<HTML><HEAD><TITLE>email search by eMiKi</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
</HEAD><body bgcolor="#FFFFFF">
<table width="431" border="0" align="center">
  <tr><td width="425" height="21"><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Email search </font></strong></div>      <div align="center">
      </div></td></tr><tr><td height="21">
<?php 

require_once ("../../../gueb/eMiKi/funcion_email.php") ;

$link=mysql_connect("localhost","nelosa_nelosa","mqm1804");
mysql_select_db("nelosa_nelosa",$link);

$level_counter = 0 ;

		//echo (  "Web: " . $web . "<BR>") ;
		buscar_emails_y_links ( $paginasola, $db , $niveles) ;
		echo (  "<BR>FIN<BR>") ;

mysql_close($link);
?>
</td></tr></table></BODY></HTML>