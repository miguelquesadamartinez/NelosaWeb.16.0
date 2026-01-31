<?php session_register('usr'); session_register('v_Pais'); session_register('tabla');
if ( $VBtabla <> "" ) $tabla =  strtolower ( $VBtabla ) ;
 ?>
<?php
require_once("../../../inc/funciones/Funciones_PHP.php");
require_once("../../../gueb/eMiKi/libmail.php");

$link = conectarse_param("nelosa_nelosa") ;
$link_2 = conectarse_param("nelosa_nelosa") ;

$cnt = 0 ;
$result=mysql_query("Select * From emails" ,$link);	
while($row = mysql_fetch_array($result))
{
	mysql_query("Update emails Set ind = '" . $cnt . "'  WHERE email = '" . (string)$row["email"] . "'",$link_2);	
	echo ("ind = '" . $cnt . "'  email = " . (string)$row["email"]. "'<BR>");
	$cnt = $cnt + 1 ;
}
//mysql_free_result($result);  
mysql_close($link);?>
