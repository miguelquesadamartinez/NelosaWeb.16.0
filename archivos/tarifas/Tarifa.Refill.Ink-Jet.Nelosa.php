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
              <td height="95" valign="top"><div align="center">
                <table width="90%"  border="0">
                  <tr>
                    <td width="70">&nbsp;</td>
                    <td>&nbsp;</td>
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
                    <td>&nbsp;</td>
                    <td><div align="center">RECARGAS INK-JET</div></td>
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
                    <td height="22">3197</td>
                    <td>Recarga Universal Ink-Jet Negro</td>
                    <td>11,40</td>
                  </tr>
                  <tr>
                    <td>3198</td>
                    <td>Recarga Universal Ink-Jet Color</td>
                    <td>14,50</td>
                  </tr>
                  <tr>
                    <td>3199</td>
                    <td>Kit Recarga Universal Ink-Jet Negro / Color</td>
                    <td>21,90</td>
                  </tr>
                  <tr>
                    <td>3200</td>
                    <td>Kit Recarga Universal Ink-Jet Photo</td>
                    <td>24,90</td>
                  </tr>
                  <tr>
                    <td>3211</td>
                    <td>Refill Ink Black 100 ml.</td>
                    <td>16,60</td>
                  </tr>
                  <tr>
                    <td>3212</td>
                    <td>Refill Ink Yellow&nbsp;100 ml.</td>
                    <td>19,15</td>
                  </tr>
                  <tr>
                    <td>3213</td>
                    <td>Refill Ink Magenta&nbsp;100 ml.</td>
                    <td>19,15</td>
                  </tr>
                  <tr>
                    <td>3214</td>
                    <td>Refill Ink Cyan&nbsp;100 ml.</td>
                    <td>19,15</td>
                  </tr>
                  <tr>
                    <td>3217</td>
                    <td>Refill Ink Light Cyan 100 ml.</td>
                    <td>19,15</td>
                  </tr>
                  <tr>
                    <td>3218</td>
                    <td>Refill Ink Light Magenta 100 ml.</td>
                    <td>19,15</td>
                  </tr>
                  <tr>
                    <td>3228</td>
                    <td>Refill Ink Black 50 ml.</td>
                    <td>9,25</td>
                  </tr>
                  <tr>
                    <td>3229</td>
                    <td>Refill Ink Yellow 50 ml.</td>
                    <td>10,50</td>
                  </tr>
                  <tr>
                    <td>3230</td>
                    <td>Refill Ink Magenta 50 ml. </td>
                    <td>10,50</td>
                  </tr>
                  <tr>
                    <td>3231</td>
                    <td>Refill Ink Cyan 50 ml.</td>
                    <td>10,50</td>
                  </tr>
                  <tr>
                    <td>3232</td>
                    <td>Refill Ink Light Magenta 50 ml.</td>
                    <td>10,50</td>
                  </tr>
                  <tr>
                    <td>3233</td>
                    <td>Refill Ink Light Cyan 50 ml.</td>
                    <td>10,50</td>
                  </tr>
                  <tr>
                    <td>3234</td>
                    <td>Yellow - Magenta - Cyan 20 ml.</td>
                    <td>10,40</td>
                  </tr>
                  <tr>
                    <td>3236</td>
                    <td>Kit compensacion Photo Yellow - Light Magenta - Light Cyan</td>
                    <td>10,40</td>
                  </tr>
                  <tr>
                    <td>3241</td>
                    <td>Refill Ink Black 500 ml. </td>
                    <td>69,75</td>
                  </tr>
                  <tr>
                    <td>3242</td>
                    <td>Refill Ink Yellow 500 ml.</td>
                    <td>80,10</td>
                  </tr>
                  <tr>
                    <td>3243</td>
                    <td>Refill Ink Magenta 500 ml.</td>
                    <td>80,10</td>
                  </tr>
                  <tr>
                    <td>3244</td>
                    <td>Refill Ink Cyan 500 ml.</td>
                    <td>80,10</td>
                  </tr>
                  <tr>
                    <td>3245</td>
                    <td>Refill Ink Gris 500 ml.</td>
                    <td>80,10</td>
                  </tr>
                  <tr>
                    <td>3246</td>
                    <td>Refill Ink Light Magenta 500 ml.</td>
                    <td>80,10</td>
                  </tr>
                  <tr>
                    <td>3247</td>
                    <td>Refill Ink Light Cyan 500 ml.</td>
                    <td>80,10</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Accesorios Recarga Ink-Jet</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>3206</td>
                    <td>DRY INK Recuperator + Extractor Tinta</td>
                    <td>14,50</td>
                  </tr>
                  <tr>
                    <td>3210</td>
                    <td>Accesorios Recarga Universal</td>
                    <td>16,90</td>
                  </tr>
                  <tr>
                    <td>3215</td>
                    <td>Liquido limpiador Ink-Jet 100 ml.</td>
                    <td>8,60</td>
                  </tr>
                  <tr>
                    <td>3216</td>
                    <td>DRY INK Recuperator 100 ml.</td>
                    <td>10,80</td>
                  </tr>
                  <tr>
                    <td>3235</td>
                    <td>Refill Ink-Jet Cleaner 50 ml.</td>
                    <td>4,65</td>
                  </tr>
                  <tr>
                    <td>3220</td>
                    <td>Reseteador universal Chip Epson + Recarga Universal Ink-Jet Negro</td>
                    <td>31,00</td>
                  </tr>
                  <tr>
                    <td>3224</td>
                    <td>Reseteador universal Chip Epson</td>
                    <td>19,95</td>
                  </tr>
                  <tr>
                    <td>3225</td>
                    <td>Kit especial Epson</td>
                    <td>38,80</td>
                  </tr>
                  <tr>
                    <td>3226</td>
                    <td>Sistema Continuo de Carga Rapida</td>
                    <td>11,30</td>
                  </tr>
                  <tr>
                    <td>3240</td>
                    <td>Epson chip resetter Gran formato</td>
                    <td>55,00</td>
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
