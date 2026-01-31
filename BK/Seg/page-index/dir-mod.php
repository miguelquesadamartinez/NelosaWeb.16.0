<?php session_register('prox'); session_register('items'); session_register('lastpaz'); ?>
<HTML>
<HEAD><TITLE>prods DB Update</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<meta http-equiv="refresh" content="0;url=pageindex-main.php">
</HEAD>
<BODY bgcolor="#FFFFFF">
 <?php 
require_once ("../../../gueb/eMiKi/eMiKi/headers/Styles/Style_001.htm") ; 
require_once ("../../../gueb/eMiKi/eMiKi/Funciones_PHP.php");
//echo $dir . " = dir<BR>" ;
$link=conectarse();  
		$result=mysql_query("Select * From indexDir where dir ='" . $dir . "'" ,$link); 
		$row = mysql_fetch_array($result);
		
		$ixr=(string)$row["indexar"] ;

		if ( $ixr == "si" || $ixr == " " )	
		{
			mysql_query("UPDATE indexDir SET indexar = 'no' Where dir='" . $dir . "'",$link);		
		}
		else
		{
			mysql_query("UPDATE indexDir SET indexar = 'si' Where dir='" . $dir . "'",$link);		
		}
mysql_free_result($result);  
mysql_close($link);
?>