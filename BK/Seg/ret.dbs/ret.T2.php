<?php 
function conectarse() 
{ 
   if (!($link=mysql_connect ("localhost", "nelosa_ajsere", "mqm1804")))    { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
    if (!mysql_select_db("nelosa_ajsere",$link))    { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
} 
$link=conectarse(); 
$link2=conectarse(); 
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<TITLE>AjSere.net</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF">
<?php 
		echo "<BR>Tarifa 2<BR>";
	$link=conectarse() ;
	$result=mysql_query("Select * From tarifa2" ,$link); 
		while($row = mysql_fetch_array($result)) 	{ 
			echo ("INSERT INTO `tarifa2` ( `code` , `preu` ) VALUES ('".(string)$row["code"]."', '".(string)$row["preu"]."')<BR>");
			$cnt = $cnt + 1 ;
		}

		?>
<p>end</p>
