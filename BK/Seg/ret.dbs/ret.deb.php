<?php 
require_once("../../../inc/funciones/Funciones_PHP.php");
require_once("../../../gueb/eMiKi/libmail.php");

if ($printers <> "") {
	$link=conectarse_param("nelosa_printers") ;
	
	$result=mysql_query("Select * From " . $Brandy ,$link); 
	
	$pos = substr_count($Brandy, "_laser");
	if ($pos == 0 ){
		while($row = mysql_fetch_array($result)) 	{ 
			echo (string)$row["Printer"] . "#1#" . (string)$row["Ins"] . "#2#" . (string)$row["proced"] . "#@\n";	
		}
	}
	else
	{
		while($row = mysql_fetch_array($result)) 	{ 
			echo (string)$row["Printer"] . "#1#" . (string)$row["Ins"] . "#2#" . (string)$row["proced"] . "#3#" . (string)$row["carga"] . "#@\n";	
		}
	}
	mysql_free_result($result);
}

if ($nelosa <> "") {
$cnt = 0 ;
	$link=conectarse_param("nelosa_nelosa") ;
	$result=mysql_query("Select * From emails" ,$link); 
		while($row = mysql_fetch_array($result)) 	{ 
			echo $cnt . " " . (string)$row["email"] . "<BR>";
			$cnt = $cnt + 1 ;
		}
}

?>
