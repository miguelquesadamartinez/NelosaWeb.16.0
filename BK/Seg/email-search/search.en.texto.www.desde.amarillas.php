<?php 
session_register('str_arry'); session_register('str_arry_cnt');
/* * * * * * * * * * * * * * * * * * * * * * */
/* Para busqueda desde " Texto Paginas Amarillas "
/* Del www.pagina.net del texto que se copia de la pagina,
/* devuelve el link para guardarlo en db
/* Se guarda en la db seleccionada segun el select
/* * * * * * * * * * * * * * * * * * * * * * */
?>

<HTML><HEAD><TITLE>email search by eMiKi</TITLE><META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<style TYPE="text/css">
A:link {color:"#0000FF";  text-decoration: none;}
A:hover{color:"#00FF00";  text-decoration: none;}
A:visited {color: "#0000FF";  text-decoration: none;}
</style>
</HEAD>
<body bgcolor="#FFFFFF">
<table width="626" border="0" align="center">
  <tr><td width="620" height="21"><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Email search en texto www desde amarillas </font></strong></div>      
      <div align="center">      </div></td></tr><tr><td height="21">
<?php
echo ("<BR><BR>WebParamy: " . $web_paramy . "<BR><BR>" );		
echo ("<BR><BR>DBParamy: " . $db_paramy . "<BR><BR>" );		

$file = fopen ( $web_paramy , "r" );
if (!$file) {
   echo "<p>Unable to open remote file. \n";
   exit;
}

$str_arry_cnt = 0 ;

while (!feof ($file)) 
{
	$line = fgets ($file, 1024);
	$str_arry [$str_arry_cnt] = $line ;
//echo ("<BR>" . $line . "------------------------------------------------------<BR>" );		
	$str_arry_cnt = $str_arry_cnt + 1 ;
}		
echo (  "<BR>FIN<BR>") ;

?>
<p align="center"><strong><a href="search.en.texto.www.desde.amarillas.2.php"><font face="Arial, Helvetica, sans-serif">Completar Proceso</font></a></strong></p>
<p align="center">&nbsp; </p></td></tr></table></BODY></HTML>