<?php 
/* * * * * * * * * * * * * * * * * * * * * * */
/* Muestra los links que haya en la DB seleccionada
/* Los prepara para mandar a search.php
/* * * * * * * * * * * * * * * * * * * * * * */
?>

<HTML><HEAD><TITLE>email search by eMiKi</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
</HEAD><body bgcolor="#FFFFFF">
<table width="431" border="0" align="center">
  <tr><td width="425" height="21"><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Email search - Listado de Webs en webs_new_<?php echo $basededatos ; ?></font></strong></div>      
      <div align="center">
      </div></td></tr><tr><td height="21">
<?php 

$array_cnt = 1 ;

$link=mysql_connect("localhost","nelosa_nelosa","mqm1804");
mysql_select_db("nelosa_nelosa",$link);
$result=mysql_query("Select * From web_paginas_amarillas",$link); 
while($row = mysql_fetch_array($result)) 
	{ 
		$web=(string)$row["parte1"];
		echo ( "
		<form name='form1' method='post' action='mostrar.webs.amarillas.2.php' target='_blank'>
		<input name='db_paramy_2' type='hidden' value='web_paginas_amarillas'>$array_cnt
		<input name='web_paramy_2' type='text' value='" . $web . "' size='100'>
		 de <input name='de' type='text' id='de' value='1' size='4'>
		 hasta <input name='hasta' type='text' id='hasta' value='1' size='4'>
		 <input type='submit' name='Submit' value='Enviar'>
		</form>
		") ;	
		
		$array_cnt = $array_cnt + 1 ;
	}
mysql_close($link);
?></td></tr></table></BODY></HTML>