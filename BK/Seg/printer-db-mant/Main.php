<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<TITLE></TITLE>
</HEAD><body bgcolor="#FFFFFF">
<table width="619" border="0" align="center">
  <tr><td><div align="center"><strong><font face="Arial, Helvetica, sans-serif">Mantenimiento DB&acute;s impresoras</font></strong></div> 
    <div align="right"></div></td>
  </tr><tr> 
    <td><form action="Mantenimiento.php" method="post" name="form1">
      <div align="center">
        <p>&nbsp;          </p>
        <p>
          <font color="#0000FF">
<?php 
	$dbname = 'nelosa_printers';
	
	if (!mysql_connect("localhost","nelosa","mqm1804")) {	   echo 'Could not connect to mysql';	   exit;	}
	$result = mysql_list_tables($dbname);
	
	if (!$result) {	   echo "DB Error, could not list tables\n";	   echo 'MySQL Error: ' . mysql_error();	   exit;	}
	
	$arry_cnt = 0 ;
	
	echo ('<select name="Brandy" id="Brandy">');
	echo "<option></option>";
	while ($row = mysql_fetch_row($result)) {
	   if (  $row[0] != "Ins_Brand"  )  {
			
			echo "<option>" . $row[0] . "</option>";
		}
	}
	echo ('</select>');
	
	mysql_free_result($result);
          /*<select name="Brandy">
              <option>brother</option>
              <option>canon</option>
              <option>epson</option>
              <option>hp</option>
              <option>lexmark</option>
              <option>olivetti</option>
              <option>oki</option>
              <option>philips</option>
              <option>xerox</option>
              <option>brother_laser</option>
              <option>canon_laser</option>
              <option>epson_laser</option>
              <option>hp_laser</option>
              <option>ibm_laser</option>
              <option>lexmark_laser</option>
              <option>olivetti_laser</option>
              <option>oki_laser</option>
              <option>philips_laser</option>
              <option>sharp_laser</option>
              <option>xerox_laser</option>
            </select>*/

?>
</font></p>
        <p><font color="#0000FF" face="Arial, Helvetica, sans-serif">
          <input name="listar" type="checkbox" id="listar" value="si">
Listado </font></p>
        <p><font color="#0000FF" face="Arial, Helvetica, sans-serif">Ordenado X 
          <input name="chkIns" type="checkbox" id="chkIns" value="si">
</font><font color="#0000FF" face="Arial, Helvetica, sans-serif">
Instruccion, si no por impresora </font></p>
        <p>
          <font color="#0000FF">
          <input type="submit" name="Submit" value="Enviar">
          </font></p>
        </div>
    </form>      
      <p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><a class="AZUL" href="Mantenimiento.Proced.php"><strong>Procedimientos</strong></a></font></p></td>
  </tr>
</table>
<div align="right">
  <p align="center"><a href="../../ControlMenu.php"><img src="../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
  <p align="center">&nbsp;</p>
</div>
</BODY>
</HTML>
