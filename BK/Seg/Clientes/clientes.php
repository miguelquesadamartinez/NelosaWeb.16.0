<?
require_once("../../../inc/funciones/Funciones_PHP.php");
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
$link2=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;
mysql_select_db("nelosa_nelosa",$link2) ;

 
//$result=mysql_query("SELECT * FROM `Cart_DB_Pedidos` ORDER BY Fecha LIMIT 0 , 30",$link);	
$result=mysql_query("SELECT * FROM `Cart_DB_Pedidos` ORDER BY Fecha ",$link);	
while($row = mysql_fetch_array($result)) 
{ 
	$StrTmp = (string)$row["email"];

	$result2=mysql_query("Select * From Clientes where email = '" . $StrTmp . "'",$link2);	
	while($row2 = mysql_fetch_array($result2)) 
	{ 
		//echo $row2["Emprea"];
		//echo "~#~";
		echo $row2["Nombre"]; 
		echo "~";
		echo $row2["Apellido1"];
		echo "~";
		echo $row2["Apellido2"];
		echo "~";
		echo $row2["Direccion"];
		echo "~";
		echo $row2["CP"];
		echo "~";
		echo $row2["Poblacion"];
		echo "~";
		echo $row2["Provincia"];
		echo "~";
		echo $row2["Pais"];
		echo "#<BR>";
	} 
}

?>