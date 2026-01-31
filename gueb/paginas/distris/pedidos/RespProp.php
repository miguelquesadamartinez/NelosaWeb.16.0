<?php 
require_once ( "../../eMiKi/headers/vbles_sesion.php" );
require_once ( "../../eMiKi/libmail2.php" ) ;
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Soporte tecnico</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15"/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>
<?php 
if ( $usr == "" ){ 
		echo ('<meta http-equiv="refresh" content="0;url=../varias/restricted.php">'); 
	}?>
</HEAD>

<body bgcolor="#000099">
<div align="center">
  <div align="center">
    <table width="650" border="0">
      <tr>
        <td><div align="center"><a href="../../../index.php"><img src="../../../../img/diseno.paginas/botones/home.gif" width="89" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="../../productos/index.php"><img src="../../../../img/diseno.paginas/botones/prods.gif" width="119" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="../../instrucciones/index.php"><img src="../../../../img/diseno.paginas/botones/ins.gif" width="132" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="../../varias/comprar.php"><img src="../../../../img/diseno.paginas/botones/comprar.gif" width="99" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="../../varias/soporte.php"><img src="../../../../img/diseno.paginas/botones/soporte.gif" width="96" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="../index.php"><img src="../../../../img/diseno.paginas/botones/club.gif" width="88" height="29" border="0"></a></div></td>
      </tr>
    </table>
    <table width="765" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="13"><img src="../../../../img/diseno.paginas/base/arriba-up.png" width="765" height="16"></td>
      </tr>
    </table>
    <table width="765" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF0000">
      <tr>
        <td height="13"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="776" height="130">
            <param name="movie" value="../../../../img/animaciones/banner-arriva.swf">
            <param name="quality" value="high">
            <embed src="../../../../img/animaciones/banner-arriva.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="776" height="130"></embed>
        </object></td>
      </tr>
    </table>
    <table width="765" border="0" bgcolor="#FFFF00">
      <tr>
        <td><table width="99%"  border="0" align="center">
            <tr>
              <td width="15%"><div align="center"><a href="../../varias/about.php">Quien somos</a></div></td>
              <td width="29%"><div align="center"><a href="../../stp/index.php">Servicio Tecnico Paralelo </a></div></td>
              <td width="30%"><div align="center"><a href="../../instrucciones/aa.procedures/index.php">Sistemas Anti Recarga </a></div></td>
              <td width="26%"><div align="center"><a href="../../Mailing/index.php">Alta / Baja Mailing </a></div></td>
            </tr>
            <tr>
              <td><div align="center"><a href="../../varias/donde.php">Donde estamos </a></div></td>
              <td><div align="center"><a href="../../varias/software.php">Software para printables</a></div></td>
              <td><div align="center"><a href="../../rincon/index.php">Rincon Tecnico </a></div></td>
              <td><div align="center"><a href="../../distris/index.php">Acceso Tiendas y Distribuidores </a></div></td>
            </tr>
        </table></td>
      </tr>
    </table>
    <table width="765" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="13"><img src="../../../../img/diseno.paginas/base/arriba-down.png" width="765" height="16"></td>
      </tr>
    </table>
    <table width="745" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="13" bgcolor="#FFFFFF"><div align="center">
            <table width="100%"  border="0">
              <tr>
                <td height="95" valign="top"><p>&nbsp;</p>
                    <div align="center">
                      <table width="600" border="1" align="center">
                        <tr bgcolor="#FFFFFF">
                          <td width="240">Factura OnLine
                              <?php 
	$result=mysql_query("Select max(last) From lasty_nelosa",$link);

$row = mysql_fetch_array($result);

$TmpNum=(int)$row["max(last)"];

$next = $TmpNum + 1 ;

echo $next;

//Establecemos el siguiente numero de referencia de pedido

mysql_query("Insert Into lasty_nelosa (last)Values(" . $next . ")",$link);
	?>
                          </td>
                          <td width="191">
                            <div align="center"></div></td>
                          <td width="147">
                            <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="2"> <?php echo Date("d-m-Y");?> </font></b> </div></td>
                        </tr>
                      </table>
                      <table width="600" border="1" align="center">
                        <tr>
                          <td width="180" bgcolor="#FFFFFF" valign="top">
                            <p><img src="../images/UpFac2.jpg" width="134" height="115"></p></td>
                          <td width="404"><b><font face="Arial, Helvetica, sans-serif" size="2">
                            <?php 
	  if (isset($pcompania)){echo $pcompania . "-";} echo $pcontacto;?>
                            <br>
                            <?php echo $pcif;?> <br>
                            <?php echo $pdireccion;?> <br>
                            <?php echo $pcp . " " . $pprov;?> <br>
                            <?php echo $ppais;?> </font> </b> </td>
                        </tr>
                      </table>
                      <table width="600" border="0" align="center" height="43">
                        <tr>
                          <td width="600" height="69" bgcolor="#FFFFFF">
                            <table width="600" border="0" align="center" height="27">
                              <tr>
                                <td width="375" bgcolor="#0000FF"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">Articulo</font></b></td>
                                <td width="75" bgcolor="#0000FF">
                                  <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Cantidad</font></b></font></div></td>
                                <td width="75" bgcolor="#0000FF">
                                  <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Precio</font></b></font></div></td>
                                <td width="75" bgcolor="#0000FF">
                                  <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Total &euro; </font></b></font></div></td>
                              </tr>
                            </table>
                            <?php	 // linea 97

if($p3197>"0"){
$texto = $texto . "3197 - " . (string)$p3197 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Recarga Universal Ink-Jet Negro</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p3197");
$FPrecio=$p3197 * 12;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>12</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");
}

if($p3198>"0"){
$texto = $texto . "3198 - " . (string)$p3198 . "\n";	
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Recarga Universal Ink-Jet Color</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p3198");
$FPrecio=$p3198 * 15;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>15</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");
}

if($p3199>"0"){
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Kit Recarga Universal Ink-Jet Negro / Color </font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p3199");
$FPrecio=$p3199 * 24;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>24</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");$texto = $texto . "3199 - " . (string)$p3199 . "\n";
}

if($p3200>"0"){
$texto = $texto . "3200 - " . (string)$p3200 . "\n";	
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Recarga Ink-Jet Photo</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p3200");
$FPrecio=$p3200 * 28;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>28</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p3201>"0"){
$texto = $texto . "3201 - " . (string)$p3201 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Recarga Ink-Jet Bla ck 60 ml</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p3201");
$FPrecio=$p3201 * 8.40;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>8.40</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p3202>"0"){
$texto = $texto . "3202 - " . (string)$p3202 . "\n";	
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Recarga Ink-Jet Yellow 60 ml</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p3202");
$FPrecio=$p3202 * 9.60;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>9.60</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p3203>"0"){
$texto = $texto . "3203 - " . (string)$p3203 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Recarga Ink-Jet Cyan 60 ml</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p3203");
$FPrecio=$p3203 * 9.60;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>9.60</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p3204>"0"){
$texto = $texto . "3204 - " . (string)$p3204 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Recarga Ink-Jet Magenta 60 ml</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p3204");
$FPrecio=$p3204 * 9.60;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>9.60</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p3121>"0"){
$texto = $texto . "3121 - " . (string)$p3121 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Personal Print 60 Etiquetas para C.D.</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p3121");
$FPrecio=$p3121 * 9.55;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>9.55</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p3178>"0"){
$texto = $texto . "3178 - " . (string)$p3178 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Dise&ntilde;a e imprime Tarjetas de Visita + C.D.-ROM</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p3178");
$FPrecio=$p3178 * 10.10;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>10.10</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p8015>"0"){
$texto = $texto . "8015 - " . (string)$p8015 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Universal Photo Paper  10 Hojas A4, 170 gramos 1440 dpi</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p8015");
$FPrecio=$p8015 * 7.95;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>7.95</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p8016>"0"){
$texto = $texto . "8016 - " . (string)$p8016 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Universal Photo Paper  20 Hojas A4, 130 gramos 720 dpi</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p8016");
$FPrecio=$p8016 * 5.45;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>5.45</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p8017>"0"){
$texto = $texto . "8017 - " . (string)$p8017 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Universal Photo Paper  10 Hojas A4, 140 gramos doble cara 1440 dpi</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p8017");
$FPrecio=$p8017 * 5.35;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>5.35</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p3190>"0"){
$texto = $texto . "3190 - " . (string)$p3190 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>24 C.D. Inlays</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p3190");
$FPrecio=$p3190 * 9.95;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>9.95</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p9017>"0")
{$texto = $texto . "9017 - " . (string)$p9017 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>60 Tarjetas de Visita Dobles:</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p9017");
$FPrecio=$p9017 * 7.70;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>7.70</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p7005>"0")
{$texto = $texto . "7005 - " . (string)$p7005 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Kit party</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p7005");
$FPrecio=$p7005 * 18.30;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>18.30</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p9001>"0")
{$texto = $texto . "9001 - " . (string)$p9001 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>36 tarjetas + 24 etiquetas + Software + 36 Sobres</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p9001");
$FPrecio=$p9001 * 7.80;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>7.80</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p9009>"0")
{$texto = $texto . "9009 - " . (string)$p9009 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>30 Greetings + 30 Sobres + Software</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p9009");
$FPrecio=$p9009 * 7.80;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>7.80</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p9073>"0")
{$texto = $texto . "9073 - " . (string)$p9073 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>15 Estuches regalo o recuerdo:</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p9073");
$FPrecio=$p9073 * 7.70;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>7.70</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p7010>"0")
{$texto = $texto . "7010 - " . (string)$p7010 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>36 tarjetas + 24 etiquetas + 36 sobres para fiesta</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p7010");
$FPrecio=$p7010 * 6.90;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>6.90</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p8006>"0")
{$texto = $texto . "8006 - " . (string)$p8006 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>50 Hojas papel especial decorado</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p8006");
$FPrecio=$p8006 * 6.60;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>6.60</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p9033>"0")
{$texto = $texto . "9033 - " . (string)$p9033 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>15 Greetings + 15 Sobres + Software</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p9033");
$FPrecio=$p9033 * 7.80;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>7.80</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p8005>"0")
{$texto = $texto . "8005 - " . (string)$p8005 . "\n";	
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>BANNER Papel continuo para letreros</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p8005");
$FPrecio=$p8005 * 7.80;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>7.80</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p8012>"0")
{$texto = $texto . "8012 - " . (string)$p8012 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Kit Puzzle</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p8012");
$FPrecio=$p8012 * 9.10;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>9.10</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p8010>"0")
{$texto = $texto . "8010 - " . (string)$p8010 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Kit album digital</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p8010");
$FPrecio=$p8010 * 18.80;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>18.80</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p3120>"0")
{$texto = $texto . "3120 - " . (string)$p3120 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>C.D.-ROM Limpiador interactivo</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p3120");
$FPrecio=$p3120 * 8.85;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>8.85</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p0128>"0")
{$texto = $texto . "0128 - " . (string)$p0128 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>2 archivos de 24 C.D.&acute;s</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p0128");
$FPrecio=$p0128 * 5.60;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>5.60</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p0129>"0")
{$texto = $texto . "0129 - " . (string)$p0129 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Dis Man Plus</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p0129");
$FPrecio=$p0129 * 11.05;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>11.05</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p0131>"0")
{$texto = $texto . "0131 - " . (string)$p0131 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>D.J. C.D. BOX 12 C.D.&acute;s</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p0131");
$FPrecio=$p0131 * 7.65;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>7.65</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p0133>"0")
{$texto = $texto . "0133 - " . (string)$p0133 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>D.J. C.D. BOX 48 C.D.&acute;s</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p0133");
$FPrecio=$p0133 * 12.50;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>12.50</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p1155>"0")
{$texto = $texto . "1155 - " . (string)$p1155 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>D.V.D. Limpiador lente laser</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p1155");
$FPrecio=$p1155 * 10.00;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>10.00</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p0122>"0")
{$texto = $texto . "0122 - " . (string)$p0122 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>  Kit limpiador lente laser </font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p0122");
$FPrecio=$p0122 * 10.30;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>10.30</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p3177>"0")
{$texto = $texto . "3177 - " . (string)$p3177 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>Ordena cables </font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p3177");
$FPrecio=$p3177 * 4.55;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>4.55</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

if($p0127>"0")
{$texto = $texto . "0127 - " . (string)$p0127 . "\n";
  if ($color=="#CCFFFF")   {
   		$color="#FFFFFF";   }
   else    {
   		$color="#CCFFFF";   }
printf("<table width='600' border='0' align='center'><tr bgcolor='" . $color . "'>");
printf("<td width='375'><font size='2' face='Arial, Helvetica, sans-serif' color='#0000FF'>50 Sobres para C.D.</font></td>");
printf("<td width='75'>");
printf("<div valign='center' align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$p0127");
$FPrecio=$pp0127 * 4.40;
printf("</font></div></td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>4.40</font></div>");
printf("</td><td width='75'>");
printf("<div align='center'><font face='Arial, Helvetica, sans-serif' color='#0000FF'>$FPrecio</font></div>");
printf("</td></tr></table><hr>");}

mail("info@nelosa.net","Pedido",$texto ,"From: <pedidos_web@nelosa.net>");
mail($pemail,"Confirmacion Pedido Nelosa",$texto ,"From: <pedidos_web@nelosa.net>");
?>
                            <table width="600" border="0" align="center" height="28">
                              <tr>
                                <td width="89" height="33" bgcolor="#FFFFCC">
                                  <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"><b>Total</b></font></div></td>
                                <td width="86" height="33" bgcolor="#FFFFCC">
                                  <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"><b>Dto</b></font></div></td>
                                <td width="85" height="33" bgcolor="#FFFFCC">
                                  <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"><font size="1"><font size="1">B.Imponible</font></font></font></div></td>
                                <td width="78" height="33" bgcolor="#FFFFCC">
                                  <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"><b>Iva </b></font></div></td>
                                <td width="67" height="33" bgcolor="#FFFFCC">
                                  <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"><b>R.E.</b></font></div></td>
                                <td width="66" height="33" bgcolor="#FFFFCC">
                                  <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"><b>G. Envio</b></font></div></td>
                                <td width="99" height="33" bgcolor="#FFFFCC">
                                  <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"><b>Total pedido</b></font></div></td>
                              </tr>
                              <tr>
                                <td width="89" height="33" bgcolor="#FFFFCC">
                                  <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"> <?php echo $Total; ?> </font></div></td>
                                <td width="86" height="33" bgcolor="#FFFFCC">
                                  <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"> <?php echo $DtoPer . "% = " . $Dto_S; ?> </font></div></td>
                                <td width="85" height="33" bgcolor="#FFFFCC">
                                  <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"><font size="1"><font size="1" face="Arial, Helvetica, sans-serif"> <?php echo $B_I; ?> </font><font size="1"></font></font> </font></div></td>
                                <td width="78" height="33" bgcolor="#FFFFCC">
                                  <div align="center"><font size="1" face="Arial, Helvetica, sans-serif">16% = <?php echo $IVA ;?> </font></div></td>
                                <td width="67" height="33" bgcolor="#FFFFCC">
                                  <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"> <?php echo $Recargo ;?> </font></div></td>
                                <td width="66" height="33" bgcolor="#FFFFCC">
                                  <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"> <?php echo $Gastos; ?> </font></div></td>
                                <td width="99" height="33" bgcolor="#FFFFCC">
                                  <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"> <?php echo $Total_Pedido; ?> </font></div></td>
                              </tr>
                          </table></td>
                        </tr>
                      </table

>
                      <p>&nbsp;</p>
                  </div>
                    <p align="center"><a href="../index.php"><img src="../../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>                    
                    <p align="center">&nbsp;</p></td>
              </tr>
            </table>
        </div></td>
      </tr>
    </table>
  </div>
  <p align="center">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
  C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</p>
</div>
</body>
</html>
