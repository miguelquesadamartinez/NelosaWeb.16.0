<?php session_register('usr'); session_register('v_Pais'); session_register('impresora'); session_register('tabla');
session_register('brand');  session_register('INS');  session_register('tmpy'); 

	if ( $Brandy <> "" )	{	$impresora = strtolower ( $Brandy ) ; }
	?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<TITLE></TITLE>
</HEAD>
<body bgcolor="#FFFFFF">
<table width="300" border="0" align="center">
  <tr><td height="21"><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Mantenimiento
    LASER DB <?php echo $impresora ; ?></font></strong></div></td>
  </tr><tr>
    <td><div align="center">
      <p>
	   </p>
      </div></td>
  </tr>
</table>
<div align="center">
  <table width="732" border="0" align="center">
    <tr>
      <td width="726"><form name="form1" method="post" action="New.laser.php">
        <div align="center">
          <p><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">Modelo                <input name="Prn" type="text" id="Prn" >
  </font></strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>Instruccion</strong></font>
  <input name="Ins" type="text" id="Ins" value="<?php echo $tmpy ; ?>">
  <font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>Procedimiento</strong></font> 
  <input name="proced" type="text" id="proced">
          </p>
          <p>
            <input type="submit" name="Submit" value="Nueva">
            <input type="hidden" name="h_Prn">
  </p>
        </div>
      </form></td>
    </tr>
  </table>
  <table width="200" border="1" align="center">
      
  <?php 
 $chivi = 0;
 $cnt = 0;
 $bkcolor = '#FFFFCC' ;

require_once("../../../inc/funciones/Funciones_PHP.php");

$link = conectarse_param("nelosa_printers") ;

//echo ("Select * From " . $impresora ."<BR>");
if ($chkIns == "si")
{
	echo "Select * From " . $impresora . " Order By Ins" ;
	$result=mysql_query("Select * From " . $impresora . " Order By Ins" ,$link); 
}
else
{
	echo "Select * From " . $impresora . " Order By Printer" ;
	$result=mysql_query("Select * From " . $impresora . " Order By Printer" ,$link); 
}

if ($listar == "si")
{  
echo ("<table width='85%'  border='0'><tr bgcolor='#FFFFCC'>");

while($row = mysql_fetch_array($result)) 
	{ 
		$prn=(string)$row["Printer"];	
		$ins=(string)$row["Ins"];
		$proced=(string)$row["proced"];

		echo "<td><div align='right'><font color='#FF0000' size='2' face='Arial, Helvetica, sans-serif'>" . $prn . "</font></div></td>";
		echo "<td><strong><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>" . $ins . "</font></strong></td>";
	    echo "<td><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>" . $proced . "</font></td>";
		
		$cnt = $cnt + 1 ;
						
		if ( $cnt == 3 )
		{
			$cnt=0 ;
				
			if ( $bkcolor == '#FFFFFF' )
			{
				$bkcolor = '#FFFFCC' ;
			}
			else
			{
				$bkcolor = '#FFFFFF' ;
			}				
			echo "</tr><tr bgcolor='$bkcolor'>";
		}

	}
echo ("</tr></table>");
}
else
{
while($row = mysql_fetch_array($result)) 
	{ 
		$prn=(string)$row["Printer"];	
		$ins=(string)$row["Ins"];
		$proced=(string)$row["proced"];
		echo "<form action='Del.php' method='post' name='form2'>";
		echo "<tr>";
			//echo "<td><input name='textPRN' type='text' value='".$prn."'></td>";
			echo "<td><strong><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>" . $prn . "</font></strong></td>";
	    	//echo "<td><input name='textINS' type='text' value='".$ins."'></td>";
	    echo "<td><input type='submit' name='Submit' value='Del'></td>";
		echo "</form>";

			echo "<form action='Mod.php' method='post' name='form3'>";
			echo "<td><input name='textPRN_H' type='hidden' value='".$prn."'></td>";
	    	echo "<td><input name='textINS_H' type='text' value='".$ins."'></td>";
	    	echo "<td><input name='textPROCED_H' type='text' value='".$proced."'></td>";
			echo "<td><input type='submit' name='Submit' value='Mod'></td>";
	   		echo "</form>";

		echo "</tr>";
	}
}
		  
mysql_free_result($result);  
mysql_close($link);?>
  </table>
</div>
<p align="center"><a href="Main.php"><img src="../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
<p align="center">&nbsp;</p>
