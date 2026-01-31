<HTML><HEAD><TITLE>email search by eMiKi</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<style TYPE="text/css">
A:link {color:"#0000FF";  text-decoration: none;}
A:hover{color:"#00FF00";  text-decoration: none;}
A:visited {color: "#0000FF";  text-decoration: none;}
</style>
</HEAD><body bgcolor="#FFFFFF">
<table width="431" border="0" align="center">
  <tr><td width="425" height="21"><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Email search Insertar LINK </font></strong></div>      
      <div align="center">
      </div></td></tr><tr><td height="21">
<?php 
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804");
mysql_select_db("nelosa_nelosa",$link);


	mysql_query("Insert Into web_paginas_amarillas (parte1) VALUES('" . $web_paramy . "')",$link);
	echo "Insertado " . $web_paramy ;
	
//mysql_free_result($result);  
mysql_close($link);
?>
</td></tr></table></p></BODY></HTML>