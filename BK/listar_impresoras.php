<?php
$dir = ".";
$cnt_2=0 ;

$dh  = opendir($dir);
while (false !== ($filename = readdir($dh))) {
   $files[] = $filename;
   $cnt_2 ++ ;
}
sort($files);

$link = conectarse_param("nelosa_printers") ;
				if ($tipo == "inkjet")	{
					$result=mysql_query("Select * From " . $marca . " Order By Printer",$link);   
					//echo ("Select * From " . $marca . " Order By Printer" );
				}
				else{
					$result=mysql_query("Select * From " . $marca . "_laser Order By Printer",$link);   
					//echo ("Select * From " . $marca . "_laser Order By Printer" );
				}
				$cnt=0;
				while($row = mysql_fetch_array($result)) 	{ 
						$prn=(string)$row["Printer"];	
						$ins=(string)$row["Ins"];	
						$proced=(string)$row["proced"];	

						$prn=( htmlentities ( $prn ) ) ;
						$ins=( htmlentities ( $ins ) ) ;
						$proced=( htmlentities ( $proced ) ) ;
						
//echo ( "<td></td><td><div align='center'><b><a href='../check.php?page=".$marca.$ins.".php&brand=" . $marca . "'>" . $prn . "</a></b></div></td>\n" ) ;

$chivato = 0 ;
// Para ver si existe la instruccion, sino no se muestra
for ( $j = 2 ; $j <= $cnt_2 ; $j++ ){

   if ( $files[$j] == $marca.$ins.".php" ) {
		//echo $files[$j] . " - " . $marca.$ins.".php<BR>" ;
   		$chivato = 1 ;
	}
}
if ( $chivato == 1 ) {	// Sino ha variado el chivato es que tiene Ins en db y elk archivo
echo ( "<td></td><td><div align='center'><b><a href='".$marca.$ins.".php?proced=" . $proced . "'>" . $prn . "</a></b></div></td>\n" ) ;
						$cnt = $cnt + 1 ;
						if ( $cnt == 4 ){
							$cnt=0 ;
							echo "<tr></tr>";
						}
					}
}
mysql_free_result($result);  
mysql_close($link);
?>
