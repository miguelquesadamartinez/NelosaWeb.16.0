<?php session_register('impresora');  session_register('brand');  session_register('INS'); 

	if ($Brandy <> "" )
	{	$impresora = $Brandy ; }
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<TITLE></TITLE>
<meta name="title" content=""/>
<meta http-equiv="title" content=""/>
<meta name="DC.Title" content=""/>

<meta name="description" content="">
<meta http-equiv="description" content="">
<meta http-equiv="DC.Description" content="">

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta name="keywords" content=""/>
<meta http-equiv="keywords" content=""/>

<meta name="Revisit" content="20 days"/>

<meta name="distribution" content="global"/>
<meta name="resource-type" content="document"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>

</HEAD>
<body bgcolor="#FFFFFF" text="#0000FF" link="#0000FF" vlink="#0000FF" alink="#0000FF">
<table width="300" border="0" align="center">
  <tr><td height="21"><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Mantenimiento
    DB <?php echo $impresora ; ?></font></strong></div></td>
  </tr><tr>
    <td><div align="center">
      <p>
	   </p>
      </div></td>
  </tr>
</table>
<table width="498" border="0" align="center">
  <tr>
    <td width="492"><form name="form1" method="post" action="New.php">
      <div align="center">
        <p><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">Modelo                <input name="_Prn" type="text" id="_Prn" >
</font></strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>Instruccion</strong></font>
<input name="_Ins" type="text" id="_Ins">
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
require_once("../../../../inc/funciones/Funciones_PHP.php"); 
$link=conectarse(); 
//$result=mysql_query("Select * From " . $impresora . " Order By Ins" ,$link); 
$result=mysql_query("Select * From " . $impresora ,$link); 
		  
while($row = mysql_fetch_array($result)) 
	{ 
		$prn=(string)$row["Printer"];	
		$ins=(string)$row["Ins"];
		echo "<form action='Del.php' method='post' name='form2'>";
		echo "<tr>";
			echo "<td><input name='textPRN' type='text' value='".$prn."'></td>";
	    	echo "<td><input name='textINS' type='text' value='".$ins."'></td>";
	    echo "<td><input type='submit' name='Submit' value='Eliminar'></td>";
		echo "</form>";

			echo "<form action='Mod.php' method='post' name='form3'>";
			echo "<td><input name='textPRN_H' type='hidden' value='".$prn."'></td>";
	    	echo "<td><input name='textINS_H' type='text' size='3' value='".$ins."'></td>";
			echo "<td><input type='submit' name='Submit' value='Modificar'></td>";
	   		echo "</form>";

		echo "</tr>";
	}
?>
</table>

  
