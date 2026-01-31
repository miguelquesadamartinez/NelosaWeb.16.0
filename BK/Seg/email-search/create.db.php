<HTML><HEAD><TITLE>email search by eMiKi</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<meta http-equiv='refresh' content=4;url=index.php>
</HEAD><body bgcolor="#FFFFFF">
<table width="431" border="0" align="center">
  <tr><td width="425" height="21"><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Email search </font></strong></div>      <div align="center">
      </div></td></tr><tr><td height="21">
<?php 
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804");
mysql_select_db("nelosa_nelosa",$link);

mysql_query("CREATE TABLE `nelosa_nelosa`.`emails_" . $db . "` ( `email` varchar( 100 ) NOT NULL default '') " ,$link); 
mysql_query("CREATE TABLE `nelosa_nelosa`.`webs_" . $db . "` ( `web` varchar( 150 ) NOT NULL default '') " ,$link); 
mysql_query("CREATE TABLE `nelosa_nelosa`.`webs_new_" . $db . "` ( `web` varchar( 150 ) NOT NULL default '') " ,$link); 
mysql_close($link);

echo ("<BR><BR><BR> Base de datos emails_$db creada<BR>");
echo ("<BR> Base de datos webs_$db creada<BR>");
echo ("<BR> Base de datos webs_new_$db creada<BR><BR><BR>");
?>
</td></tr></table>

</p>
<div align="center"><a href="index.php"><img src="../../../gueb/imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></div>
</BODY></HTML>