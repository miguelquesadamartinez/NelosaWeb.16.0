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

for ($i = $de; $i <= $hasta; $i++) 
	{ 
		echo ( "
		<form name='form1' method='post' action='search.en.texto.www.desde.amarillas.php' target='_blank'>
		<input name='db_paramy' type='hidden' value='web_paginas_amarillas'>
		<input name='web_paramy' type='text' value='" . $web_paramy_2 . $i . "' size='100'>
		 <input type='submit' name='Submit' value='Enviar'>
		</form>
		") ;	
		
		$array_cnt = $array_cnt + 1 ;
	}
mysql_close($link);
?></td></tr></table></BODY></HTML>