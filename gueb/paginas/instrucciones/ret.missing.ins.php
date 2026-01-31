<?php 
require_once ( "../../../inc/funciones/Funciones_PHP.php" );
$link = conectarse_param("nelosa_printers") ;
// Segun venga el parametro seleko todas las impresoras laser o inkjet de la marca
if ($modo == "_inkjet")	{	$result=mysql_query("Select * From " . $marca . " Order By Printer",$link); }
else{	$result=mysql_query("Select * From " . $marca . "_laser Order By Printer",$link);   }

$dir = $marca;
$mises_cnt=0 ;
$chivi = 0 ;
$chivato = 0 ;

// Por cada instruccione de la DB
while($row = mysql_fetch_array($result)) 	{ 
	$ins=(string)$row["Ins"];	
	$ins_2=$marca.$ins.".php";
	$chivi = 0 ;
	$chivato = 0 ;
	//echo ( "Ins: " . $ins . "<BR>");
	$dh  = opendir($dir);
	while (false !== ($filename = readdir($dh))) {
	   if ($filename != "." && $filename != ".." && $filename != "index.php" ){	
	   //echo ($filename . " -> file - ". $ins_2 . " -> ins<BR>");
		    if ($ins_2 == $filename){ // si lo encuentra enciende chivato
				$chivi = 1 ;
				//echo ($filename . " -> file - ". $ins_2 . " -> ins<BR>");
			}
		}
	}
	//echo ( "chivi: ". $chivi . "<BR>");
	//echo ( "chivato: ". $chivato . "<BR>");
	if ( $chivi == 0 ) // Si no se encendio el chivato, no tiene fichero 
	{
		//echo ( $ins . " -> ins<BR>");
		for ( $j=0 ; $j <= $mises_cnt ; $j++ ){
			if ($ins == $mises[$j]){
				$chivato = 1 ;
				//echo ($mises[$j] . " -> file - ". $ins . " -> ins<BR>");
			}
		}
		if ($chivato == 0 ) {				
			$mises_cnt = $mises_cnt + 1 ;
			$mises[$mises_cnt]=$ins;
			//echo ( "Miss - " . $ins . "<BR>");
			$chivi = 0 ;
			$chivato = 0 ;
		}
	}
}
for ( $j=0 ; $j <= $mises_cnt ; $j++ ){
	if ($mises[$j] != "") echo ( $mises[$j] . "<BR>");
}
?>