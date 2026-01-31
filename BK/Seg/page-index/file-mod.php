<?php session_register('prox'); session_register('items'); session_register('lastpaz'); ?>
<HTML>
<HEAD><TITLE>prods DB Update</TITLE>
<meta http-equiv="refresh" content="0;url=pageindex-main.php">

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
</HEAD>
<BODY bgcolor="#FFFFFF">
 <?php 
require_once ("../../../gueb/eMiKi/eMiKi/headers/Styles/Style_001.htm") ; 
require_once ("../../../gueb/eMiKi/eMiKi/Funciones_PHP.php");

$link=conectarse();  
if (!isset($hidden))
{
		$result=mysql_query("Select * From indexPage where nom ='" . $archivo . "'" ,$link); 
		$row = mysql_fetch_array($result);
		
		$indexar=(string)$row[$campo] ;
		if ( $indexar == "si" || $indexar == " " )	
		{
				mysql_query("UPDATE indexPage SET " . $campo . " = 'no' Where nom='" . $archivo . "'",$link);		
				print ( "Updated to <B>NO</B>" ) ;
		}
		else
		{
				mysql_query("UPDATE indexPage SET " . $campo . " = 'si' Where nom='" . $archivo . "'",$link);	
				print ( "Updated<B>si</B>" ) ;
	
		}
mysql_free_result($result);  
mysql_close($link);
}
else // Esto es para actualizar los comentarios
{
		mysql_query("UPDATE indexPage SET coment = '" . $cmt . "' Where nom='" . $hidden . "'",$link);
		print ( "<B>Comantario</B> Updated" ) ;

		mysql_close($link);
}
?>