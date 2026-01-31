<?php 
require_once("../inc/funciones/Funciones_PHP.php");
echo ($db ."<BR>");
  if (!($link=mysql_connect("localhost","nelosa","mqm1804"))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   }
   else {
   	echo ("Conectado<BR>");
   }
$soru = 'CREATE DATABASE '.$name;
//if (mysql_query($soru,$link)) {
if (mysql_query($soru)) {
   echo "Database created successfully". $name . "\n";
} else {
   echo 'Error creating database: ' . $name . " - " . mysql_error() . "\n";
}
//if (mysql_create_db($db)) {
/*if (mysql_createdb($name,$link)) {
   echo "Database created successfully\n";
} else {
   echo 'Error creating database: '. $name . " - " . mysql_error() . "\n";
}*/

?>
<HTML>
<HEAD>
<TITLE>Menu control de mi gueb</TITLE>
<?php 
if ( ( $usr <> "emiki@nelosa.net" ) AND ( $usr <> "miki@nelosa.net" ) AND ( $usr <> "info@nelosa.net" ) ){ 
		//echo ('<meta http-equiv="refresh" content="0;url=../../paginas/varias/restricted.php">'); 
		//echo ("User: SIN ACCESO : " . $usr . "<BR>"); 
}
else
{
		//echo ("User: ACCESO : " . $usr . "<BR>"); 
}
?>

<p>&nbsp;</p>
<p align="center"><a class="AZUL" href="ControlMenu.php"><img src="../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
</BODY>
</HTML>
