<?php session_register('prox'); session_register('items'); session_register('lastpaz'); ?>
<HTML><HEAD><TITLE>prods DB Update</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
</HEAD>
<BODY bgcolor="#FFFFFF">
 <table width="100%"  border="1">
   <tr bgcolor="#FFFFCC">
     <td>Nombre</td>
     <td>Idioma</td>
     <td>Blacky</td>
     <td>BR</td>
     <td>Enlaces</td>
     <td>Texto</td>
     <td>Imagenes</td>
     <td>Ruta</td>
     <td>Comentario</td>
   </tr>

 <?php 
require_once ("../../../gueb/eMiKi/eMiKi/headers/Styles/Style_001.htm") ; 
require_once ("../../../gueb/eMiKi/eMiKi/Funciones_PHP.php");
require_once ("../../../gueb/eMiKi/eMiKi/libmail.php");
require_once ("../../../gueb/eMiKi/eMiKi/scan_dir_F2.php");
require_once ("../../../gueb/eMiKi/eMiKi/scan_only_files_F.php");
require_once ("../../../gueb/eMiKi/eMiKi/scan_only_dir_F.php");

$link=conectarse();  
$linkTmp=conectarse();  
$linkDel=conectarse();  

if ($chk == "si")
{	
	print ( "Indexando<BR>" );	
	$scan  = array();
	$files = array();
	$dirs  = array();
	
	$scan = scan_only_dir("/home/nelosa/nelosa-www");
	
	$scan = scan_only_files("/home/nelosa/nelosa-www");
	
	$scan = scan_dir("/home/nelosa/nelosa-www/eMiKi",TRUE,SORT_REGULAR);
	
	$scan = scan_dir("/home/nelosa/nelosa-www/_pagesnelosa",TRUE,SORT_REGULAR);
	
	$scan = scan_dir("/home/nelosa/nelosa-www/_pages",TRUE,SORT_REGULAR);
	
	$scan = scan_dir("/home/nelosa/nelosa-www/refill",TRUE,SORT_REGULAR);
	
	// Para elimimar de DB las paginas eliminadas del server
	$result=mysql_query("Select * From indexPage" ,$link); 
		while($row = mysql_fetch_array($result)) 
			{  // Por cadauna de las paginas que estan indexadas
				$pepe=(string)$row["nom"] ;
				$resultTmp=mysql_query("Select * From indexPageTmp where nom ='" . $pepe . "'" ,$linkTmp);
				// Busacmos si esta en la que se acaban de reindexar
				$rowTmp = mysql_fetch_array($resultTmp);
				$store=(string)$rowTmp["nom"] ;
				if ( $store == "" )//Si no esta en el temporal, es k no esta la page
				{
					// Esta select la repite varias veces, por los idiomas, aunque no importa, con una bastaria para todas 
					mysql_query("DELETE FROM `indexPage` where nom ='" . $pepe . "'",$linkDel);
					//print ( "DELETE FROM `indexPage` where nom ='" . $pepe . "'<BR>" );	
					//print ( "-" . $store . "-" . $pepe . "<BR>" );	
				}
				else
				{
//					print ("Not delete !!");
				}
			}			

} //if ($chk == "si")
$miki = 0 ;  $cnt = 0 ;  
		$result=mysql_query("Select * From indexPage" ,$link); 
		while($row = mysql_fetch_array($result)) 
			{ 
				if ( $miki == 0 ) { $color = "#FFFFFF" ; $miki = 1 ; }  //to white
				elseif ( $miki == 1 ) { $color = "#FFFFCC" ; $miki = 2 ; } //to yellow
				elseif ( $miki == 2 ) { $color = "#FFFFFF" ; $miki = 3 ; } //to white
				elseif ( $miki == 3 ) { $color = "#CCFFFF" ; $miki = 4 ; } //to blue
				elseif ( $miki == 4 ) { $color = "#FFFFFF" ; $miki = 5 ; } //to white
				elseif ( $miki == 5 ) { $color = "#CCCCCC" ; $miki = 0 ; } //to gris
				
				$nom=(string)$row["nom"] ;
				print ( "<tr bgcolor='" . $color . "'><td width='20%'><B>" . $nom . "</B></td>");
				print ( "<td width='5%'><B>" . $idioma=(string)$row["idioma"] . "</B></td>");
				
				$bk=(string)$row["bk"] ;
				if ($bk == "si")	$tmp = " checked" ;
				else $tmp = "" ;
				print ( "<td width='5%'><input name='checkbox' type='checkbox' value='checkbox'" . $tmp .">");
				print ("<a href='file-mod.php?archivo=" . $nom ."&campo=bk' target='_blank'> XG </a></td>");
				
				$br=(string)$row["br"] ;
				if ($br == "si")	$tmp = " checked" ;
				else $tmp = "" ;
				print ( "<td width='5%'><input name='checkbox' type='checkbox' value='checkbox'" . $tmp .">");
				print ("<a href='file-mod.php?archivo=" . $nom ."&campo=br' target='_blank'> XG </a></td>");
				
				$enlaces=(string)$row["enlaces"];
				if ($enlaces == "si")	$tmp = " checked" ;
				else $tmp = "" ;
				print ( "<td width='5%'><input name='checkbox' type='checkbox' value='checkbox'" . $tmp .">");
				print ("<a href='file-mod.php?archivo=" . $nom ."&campo=enlaces' target='_blank'> XG </a></td>");
				
				$texto=(string)$row["texto"] ;
				if ($texto == "si")	$tmp = " checked" ;
				else $tmp = "" ;
				print ("<td width='5%'><input name='checkbox' type='checkbox' value='checkbox'" . $tmp .">");
				print ("<a href='file-mod.php?archivo=" . $nom ."&campo=texto' target='_blank'> XG </a></td>");
				
				$imagenes=(string)$row["imagenes"] ;
				if ($imagenes == "si")	$tmp = " checked" ;
				else $tmp = "" ;
				print ("<td width='5%'><input name='checkbox' type='checkbox' value='checkbox'" . $tmp .">");
				print ("<a href='file-mod.php?archivo=" . $nom ."&campo=imagenes' target='_blank'> XG </a></td>");

				print ("<td width='30%'>" . $paz=(string)$row["paz"] . "</td>");

				$coment=(string)$row["coment"] ;
				print ("<td><form name='" . $nom . "' method='post' action='file-mod.php'>");
				print ("<input name='cmt' type='text' value='" . $coment . "'>");
				print ("<input name='hidden' type='hidden' value='" . $nom . "'>");
				print ("</form></td></tr>");
				
				$cnt = $cnt + 1 ;  
			}
			print ( "</table>" );	
		
		print ( "<BR> Directorios <BR> ------------ <BR>" );		
?>		
	<table width="100%"  border="1">
   	<tr bgcolor="#FFFFCC">
     <td>Indexar</td>
     <td>Directorio</td>
   </tr>
<?php
		$result=mysql_query("Select * From indexDir" ,$link); 
		while($row = mysql_fetch_array($result)) 
			{ 
			    $dir=(string)$row["dir"] ;

				$indexar=(string)$row["indexar"] ;
				if ($indexar == "si")	$tmp = " checked" ;
				else $tmp = "" ;
				print ("<tr><td width='7%'><input name='checkbox' type='checkbox' value='checkbox'" . $tmp .">");
				print ("<a href='dir-mod.php?dir=" . $dir ."' target='_blank'> XG </a></td>");

				print ("<td>" . $dir . "</td></tr>");
			}
			print ( "</table>" );	

mysql_query("DELETE FROM `indexPageTmp`",$link);	
			
			
mysql_free_result($result);  
mysql_close($link);
?>