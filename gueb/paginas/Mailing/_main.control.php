<HTML>
<HEAD>
<TITLE>Mailing Nelosa</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<LINK REL="stylesheet" HREF="../../../css/styles.css" TYPE="text/css">
</HEAD>
<BODY>
<table width="700" border="0" align="center">
    <tr> 
      <td width="165"><img src="../../../img/diseno.paginas/comunes/Nelosas/Nelosa_2.gif" width="165" height="64"></td>
      <td width="525"> <div align="center">
        <p><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Mailing 
            consejos y novedades recarga de cartuchos Ink-Jet</font></strong></p>
        </div>
        <div align="center"></div></td>
    </tr>
</table>
<div align="center"> 
  <p><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>Emails 
    subscritos 
    <?php 
require_once("../../../inc/funciones/Funciones_PHP.php");
$link = conectarse();  
//$link_p = conectarse_param("nelosa_nelosa_emails") ;

$result=mysql_query("Select * From emails",$link); 

$count = 0 ;
		  
while($row = mysql_fetch_array($result)) 
	{ 
		$count = $count + 1 ;
	}
	echo $count ;?>
    - Unsuscritos 
    <?php 
  $result=mysql_query("Select * From Unsuscribed",$link); 

$count2 = 0 ;
		  
while($row = mysql_fetch_array($result)) 
	{ 
		$count2 = $count2 + 1 ;
	}
	echo $count2 ;?>
    </strong></font> </p>
</div>
<form action="SendMailing.php" method="post" name="form1" target="_blank">
  <p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif">De 
    <input name="de" type="text" id="de" value="0" size="3">
    Hasta 
    <input name="hasta" type="text" id="hasta" value="<?php echo $count ;?>" size="3">
    </font> </p>
  <p align="center"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF">Base 
    de datos 
    <?php
	$dbname = 'nelosa_nelosa_emails';
	
	if (!mysql_connect("nelosa.net","nelosa","mqm1804")) {
	   echo 'Could not connect to mysql';
	   exit;
	}
	$result = mysql_list_tables($dbname);
	
	if (!$result) {
	   echo "DB Error, could not list tables\n";
	   echo 'MySQL Error: ' . mysql_error();
	   exit;
	}
	
	echo ('<select name="db" id="db">');
	echo "<option></option>";
	echo "<option>emails</option>";
	echo "<option>emails_nelosa</option>";
	
	while ($row = mysql_fetch_row($result)) {
	   if ( strncmp ( $row[0], "emails", 5 ) == 0  )  {
			echo "<option>$row[0]</option>";
		}
	}
	echo ('</select>');
	
	mysql_free_result($result);
?> 
  </font><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF"> </font> <font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF"> <font color="#FFFFFF">.........</font></font></font></font></font></font><font color="#0000FF">Documento
  <select name="doc">
    <?php
if ($handle = opendir("Doks")) {
    /* This is the correct way to loop over the directory. */
    while (false !== ($file = readdir($handle))) { 
 			if ( ( $file != "." ) and ( $file != ".." ) ) echo "<option> $file</option> \n";
    }
    closedir($handle); 
}
?>
  </select>
</font> <font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF">
<font color="#FFFFFF">.........</font>
<input type="submit" name="Submit" value="Do IT">
</font></font></font><font color="#0000FF">  </font></font><font color="#0000FF">  </font></font></p>
  <p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif">Asunto
    <select name="asunto" id="asunto">
      <option>Propuesta de pedido</option>
      <option>Felicitacion</option>
      <option>Oferta Recargas y Consumibles.net</option>
      <option>Mailing Recargas Y Consumibles.net</option>
    </select>
</font><font face="Arial, Helvetica, sans-serif"><font color="#0000FF"> 
  </font></font></p>
  <p align="center"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF"> 
</font><font face="Arial, Helvetica, sans-serif"><font color="#0000FF">
</font></font><font color="#0000FF">    </font></font> </p>
</form>
<p align="center"><a href="../../../BK/ControlMenu.php"><img src="../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
<p>  
  <?php 
echo "<div align='center'>";
echo "<font face='Arial, Helvetica, sans-serif'><font color='#0000FF'>";
echo "Emails enviados<BR>";
echo "---------------<BR><BR>";
echo "</font></font></div>";

$link = conectarse();  

$result=mysql_query("Select * From Send_Ins",$link); 

$count = 0 ;
echo "<table width='75%' border='0' align='center'>";
  echo "<tr>";
    echo "<td><font face='Arial, Helvetica, sans-serif'><font color='#0000FF'>";
		  
while($row = mysql_fetch_array($result)) 
	{ 
		$nombre=(string)$row["name"];
		$fecha=(string)$row["date"];
		$de=(string)$row["de"];
		$hasta=(string)$row["hasta"];
		$db=(string)$row["db"];
		$count = $count + 1 ;
		echo "<TR><TD><font face='Arial, Helvetica, sans-serif'><font color='#0000FF'><STRONG>" . $count . ".</STRONG> $nombre </font></font></TD>";
		echo "<TD><font face='Arial, Helvetica, sans-serif'><font color='#0000FF'> Fecha: $fecha </font></font></TD>" ;
		echo "<TD><font face='Arial, Helvetica, sans-serif'><font color='#0000FF'> Desde: $de  Hasta: $hasta </font></font></TD>" ;
		echo "<TD><font face='Arial, Helvetica, sans-serif'><font color='#0000FF'> DB: $db </font></font></TD></TR>" ;
	}
?>
  </font></font>
  </td>
  </tr> 
  </table> 
</p>
<div align="center"></div>

<?php require_once("../../../inc/funciones/Funciones_JavaScript.miki"); 
mysql_free_result($result);  
mysql_close($link);?>

</BODY>
</HTML>