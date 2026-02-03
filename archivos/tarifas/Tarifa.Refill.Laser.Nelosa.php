<?php 
include ( "../../eMiKi/headers/vbles_sesion.php" );
include ( "../../eMiKi/Funciones_PHP.php" );
?><!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Zona para distribuidores</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15"/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>
<?php 
if ( $distri == "" ){ 
		if ( $usr == "" ){ 
			echo ('<meta http-equiv="refresh" content="0;url=restricted.php">'); 
		}
	}
?>

<style TYPE="text/css">
A:link {color:"#0000FF";  text-decoration: none;}
A:hover{color:"#00FF00";  text-decoration: none;}
A:visited {color: "#0000FF";  text-decoration: none;}
H1{font-family:Arial, Helvetica, sans-serif}
H2{font-family:Arial, Helvetica, sans-serif}
H3{font-family:Arial, Helvetica, sans-serif}
P{font-family:Arial, Helvetica, sans-serif}
BODY{color:"#0000FF"; font-family:Arial, Helvetica, sans-serif}
body,td,th {
	color: #0000FF;
	font-size: 16px;
}
.Estilo4 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.Estilo11 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.Estilo6 {font-size: 12px}
.Estilo16 {
	font-size: 24px;
	font-weight: bold;
	color: #FF0000;
}
.Estilo19 {
	font-size: 16px;
	font-weight: bold;
}
.Estilo31 {color: #FFFFFF}
.Estilo42 {font-size: 9px}
.Estilo43 {
	font-size: 18px;
	color: #FF0000;
}
</style></HEAD>

<body bgcolor="#000099">

<div align="center">
  <table width="650" border="0">
    <tr>
      <td><div align="center"><a href="../../index.php"><img src="../../img/diseno.paginas/botones/home.gif" width="89" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../productos/index.php"><img src="../../img/diseno.paginas/botones/prods.gif" width="119" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../instrucciones/index.php"><img src="../../img/diseno.paginas/botones/ins.gif" width="132" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="comprar.php"><img src="../../img/diseno.paginas/botones/comprar.gif" width="99" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="soporte.php"><img src="../../img/diseno.paginas/botones/soporte.gif" width="96" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../club/index.php"><img src="../../img/diseno.paginas/botones/club.gif" width="88" height="29" border="0"></a></div></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../img/diseno.paginas/base/arriba-up.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF0000">
    <tr>
      <td height="13"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="776" height="130">
          <param name="movie" value="../../img/animaciones/banner-arriva.swf">
          <param name="quality" value="high">
          <embed src="../../img/animaciones/banner-arriva.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="776" height="130"></embed>
      </object></td>
    </tr>
  </table>
  <table width="765" border="0" bgcolor="#FFFF00">
    <tr>
      <td><table width="99%"  border="0" align="center">
          <tr>
            <td width="15%"><div align="center" class="Estilo11"><a href="about.php">Quien somos</a></div></td>
            <td width="33%"><div align="center" class="Estilo11"><a href="../instrucciones/aa.varios/lo.basico.php">Lo basico a saber sobre las recargas</a></div></td>
            <td width="29%"><div align="center" class="Estilo11"><a href="../instrucciones/aa.varios/tipos.impresoras.php">Tipos de impresoras y cartuchos</a></div></td>
            <td width="23%"><div align="center" class="Estilo11"><a href="sat.paralelo.php">Servicio Tecnico Paralelo </a></div></td>
          </tr>
          <tr>
            <td><div align="center" class="Estilo11"><a href="../varias/donde.php">Donde estamos </a></div></td>
            <td><div align="center" class="Estilo11"><a href="../instrucciones/aa.varios/impresoras.recomendadas.php">Impresoras recomendadas </a></div></td>
            <td><div align="center" class="Estilo11"><a href="software.php">Software para printables</a></div></td>
            <td><div align="center" class="Estilo11"><a href="../Mailing/index.php">Alta / Baja Mailing </a></div>
                <div align="center" class="Estilo11"></div></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../img/diseno.paginas/base/arriba-down.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="745" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13" bgcolor="#FFFFFF"><div align="center">
          <table width="100%"  border="0">
            <tr>
              <td height="95" valign="top"><div align="center" class="Estilo6">
                <table width="90%"  border="0">
                  <tr>
                    <td width="56">&nbsp;</td>
                    <td width="505">&nbsp;</td>
                    <td width="90">01.06.2005</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><div align="center">Listado articulos ESPA&Ntilde;A</div></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>Ref.</td>
                    <td>D E N O M I N A C I O N </td>
                    <td>Precio &euro;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><span class="xl271">3301</span></td>
                    <td><span class="xl281">Kit Toner universal <font class=font111>NEGRO</font><font
  class=font101> - 2 cargas de 125 Gr.</font></span></td>
                    <td><span class="xl301">26,00</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl311">3304</span></td>
                    <td>Toner universal <font class=font111>NEGRO</font><font
  class=font101> - 1 carga de 125 Gr.</font></td>
                    <td><span class="xl331">11,00</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl271">3305</span></td>
                    <td><span class="xl281">Recarga Universal Toner <font class=font111>Fotocopiadoras</font></span></td>
                    <td><span class="xl301">18,90</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl311">3307</span></td>
                    <td><span class="xl321">Kit Toner universal <font class=font111>NEGRO ALTA DENSIDAD</font><font
  class=font101> - 2 cargas de 125 Gr.</font></span></td>
                    <td><span class="xl331">30,00</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl271">3308</span></td>
                    <td><span class="xl281">Recarga Toner universal<font class=font111> NEGRO ALTA DENSIDAD </font><font class=font101>- 1 carga de 125 Gr.</font></span></td>
                    <td><span class="xl301">15,00</span></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Recargas Laser COLOR Toner Quimico UNIVERSAL</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><span class="xl271">3420</span></td>
                    <td><span class="xl281">5 Recargas Toner UNIVERSAL - 3 Color ( C - M - Y ) y 2 Negro </span></td>
                    <td><span class="xl301">79,80</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl311">3417</span></td>
                    <td><span class="xl321">Kit <font class=font111>Cyan - Magenta - Yellow </font><font
  class=font101>Toner UNIVERSAL</font></span></td>
                    <td><span class="xl331">59,40</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl271">3409</span></td>
                    <td><span class="xl281">1 Carga <font class=font111>Yellow</font><font class=font101> Toner UNIVERSAL</font></span></td>
                    <td><span class="xl301">19,80</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl311">3410</span></td>
                    <td><span class="xl321">1 Carga <font class=font111>Magenta</font><font class=font101> Toner UNIVERSAL</font></span></td>
                    <td><span class="xl331">19,80</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl271">3411</span></td>
                    <td><span class="xl281">1 Carga <font class=font111>Cyan</font><font class=font101> Toner UNIVERSAL</font></span></td>
                    <td><span class="xl301">19,80</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl311">3412</span></td>
                    <td><span class="xl321">1 Carga <font class=font111>Negro</font><font class=font101> Toner UNIVERSAL</font></span></td>
                    <td><span class="xl331">15,00</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl271">3405</span></td>
                    <td><span class="xl281">3 cargas <font class=font111>Yellow </font><font class=font101>Toner UNIVERSAL</font></span></td>
                    <td><span class="xl301">39,80</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl311">3406</span></td>
                    <td><span class="xl321">3 cargas <font class=font111>Magenta</font><font class=font101> Toner UNIVERSAL</font></span></td>
                    <td><span class="xl301">39,80</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl271">3407</span></td>
                    <td><span class="xl281">3 cargas <font class=font111>Cyan</font><font class=font101> Toner UNIVERSAL</font></span></td>
                    <td><span class="xl301">39,80</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl311">3408</span></td>
                    <td><span class="xl321">3 cargas <font class=font111>Negro</font><font class=font101> Toner UNIVERSAL</font></span></td>
                    <td><span class="xl331">29,80</span></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Recargas Laser COLOR Toner Quimico ESPECIFICO</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><span class="xl271">3451</span></td>
                    <td><span class="xl281">5 Recargas Toner ESPECIFICO - 3 <font class=font111>Color</font><font
  class=font101> ( C - M - Y ) y 2 </font><font class=font111>Negro</font><font
  class=font101> </font></span></td>
                    <td><span class="xl301">Consultar</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl311">3452</span></td>
                    <td><span class="xl321">Kit <font class=font111>Cyan - Magenta - Yellow </font><font
  class=font101>Toner ESPECIFICO</font></span></td>
                    <td><span class="xl301">Consultar</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl271">3453</span></td>
                    <td><span class="xl281">1 Carga <font class=font111>Yellow</font><font class=font101> Toner ESPECIFICO</font></span></td>
                    <td><span class="xl301">Consultar</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl311">3454</span></td>
                    <td><span class="xl321">1 Carga <font class=font111>Magenta</font><font class=font101> Toner ESPECIFICO</font></span></td>
                    <td><span class="xl301">Consultar</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl271">3455</span></td>
                    <td><span class="xl281">1 Carga <font class=font111>Cyan</font><font class=font101> Toner ESPECIFICO</font></span></td>
                    <td><span class="xl301">Consultar</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl311">3456</span></td>
                    <td><span class="xl321">1 Carga <font class=font111>Negro</font><font class=font101> Toner ESPECIFICO</font></span></td>
                    <td><span class="xl301">Consultar</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl271">3457</span></td>
                    <td><span class="xl281">3 cargas <font class=font111>Yellow </font><font class=font101>Toner ESPECIFICO</font></span></td>
                    <td><span class="xl301">Consultar</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl311">3458</span></td>
                    <td><span class="xl321">3 cargas <font class=font111>Magenta</font><font class=font101> Toner ESPECIFICO</font></span></td>
                    <td><span class="xl301">Consultar</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl271">3459</span></td>
                    <td><span class="xl281">3 cargas <font class=font111>Cyan</font><font class=font101> Toner ESPECIFICO</font></span></td>
                    <td><span class="xl301">Consultar</span></td>
                  </tr>
                  <tr>
                    <td><span class="xl311">3460</span></td>
                    <td><span class="xl321">3 cargas <font class=font111>Negro</font><font class=font101> Toner ESPECIFICO</font></span></td>
                    <td><span class="xl301">Consultar</span></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Partes recambio</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><span class="xl271">Consulte en www.nelosa.net o en info@nelosa.net para solicitar informacion sobre su impresora</span></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><span class="xl271">le facilitaremos soluciones a todas las trabas para la recarga que tienen los cartuchos</span></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><span class="xl271">asi como de las diferentes piezas de recambio disponibles para cartuchos</span></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                </div></td>
            </tr>
          </table>
      </div></td>
    </tr>
  </table>
</div>
<p align="center"><span class="Estilo4">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
  C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</span></p>
</body>

</html>
