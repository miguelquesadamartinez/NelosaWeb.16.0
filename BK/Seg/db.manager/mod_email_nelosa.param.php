<?php session_register('usr'); session_register('v_Pais'); session_register('tabla');
/*
Clientes to wwwDB
Si no existe el email que se le pasas desde vb.DbManager lo inserta
*/
require_once("../../../inc/funciones/Funciones_PHP.php");
require_once("../../../gueb/eMiKi/libmail.php");

$link = conectarse_param("nelosa_nelosa") ;
$link_2 = conectarse_param("nelosa_nelosa") ;

$result = mysql_query("Select * From " . $db_param . "  WHERE email = '" . $email_param . "'",$link);	
echo "Select * From " . $db_param . "  WHERE email = '" . $email_param . "'<BR>";
// Si existe el email no hace nada
if ( $row = mysql_fetch_array($result) )
{
	// DoNothing
	$TMPemail = (string)$row["email"] ;
	echo ( "NO insertado " . $TMPemail . "<BR>" ) ;
}
else // si no estaba lo inserta en la de que se le pasa por param
{
	echo "Insert Into " . $db_param . " (email) VALUES('" . $email_param . "')";
	mysql_query("Insert Into " . $db_param . " (email) VALUES('" . $email_param . "')" ,$link_2); 
}
mysql_close($link);?>
