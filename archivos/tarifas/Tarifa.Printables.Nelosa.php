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
                    <td><span class="xl321">3121</span></td>
                    <td><span class="xl331">CD &amp; DVD Labels + Software 50 Etiquetas</span></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>3122</td>
                    <td>CD &amp; DVD Labels: etiquetas imprimibles 50 Etiquetas</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><span class="xl321">3178</span></td>
                    <td><span class="xl331">120 tarjetas de visita</span></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>3179</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><span class="xl321">3180</span></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>3181</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><span class="xl321">3184</span></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>3185</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><span class="xl321">3186</span></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                <table x:str border=0 cellpadding=0 cellspacing=0 width=608>
                  <tr height=17>
                    <td width=73 height="17" style='width:55pt'>&nbsp;</td>
                    <td width=386 style='width:290pt'>&nbsp;</td>
                    <td width=76 style='width:57pt'>&nbsp;</td>
                  </tr>
                  <tr height=24>
                    <td height="24" align=left valign=top>
                        <table cellpadding=0 cellspacing=0>
                          <tr>
                            <td height=24 class=xl271 width=73 style='height:18.0pt;width:55pt'>&nbsp;</td>
                          </tr>
                        </table>
                      </span></td>
                    <td class=xl281>Listado articulos ESPA&Ntilde;A</td>
                    <td class=xl291>01.06.2005</td>
                  </tr>
                  <tr height=14 style='mso-height-source:userset;height:10.5pt'>
                    <td height="14" class=xl271>&nbsp;</td>
                    <td colspan=2 class=xl301 style='mso-ignore:colspan'>&nbsp;</td>
                  </tr>
                  <tr height=13 style='mso-height-source:userset;height:9.75pt'>
                    <td height="13" colspan=3>&nbsp;</td>
                  </tr>
                  <tr height=15 style='mso-height-source:userset;height:11.25pt'>
                    <td height="15" class=xl391>Ref.</td>
                    <td class=xl401 x:str="D E N O M I N A C I O N ">D E N O M I N A C I O N </td>
                    <td class=xl391>Precio &euro;</td>
                  </tr>
                  <tr height=24>
                    <td height="24" class=xl311>&nbsp;</td>
                    <td>PRINTABLES</td>
                    <td class=xl311>&nbsp;</td>
                  </tr>
                  <tr height=8 style='mso-height-source:userset;height:6.0pt'>
                    <td height="8" class=xl251>&nbsp;</td>
                    <td class=xl261>&nbsp;</td>
                    <td class=xl251>&nbsp;</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321 x:num>&nbsp;</td>
                    <td class=xl331>&nbsp;</td>
                    <td class=xl321>10,90</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>8,45</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321>&nbsp;</td>
                    <td class=xl331>&nbsp;</td>
                    <td class=xl321>11,45</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">&nbsp;</td>
                    <td>120 tarjetas Recambio de la Ref&ordf; 3178</td>
                    <td>7,65</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321>&nbsp;</td>
                    <td class=xl331>Sobres Fashion C.D. - D.V.D.</td>
                    <td class=xl321>7,35</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">&nbsp;</td>
                    <td>Fashion Kit C.D. - D.V.D. 15 Sobres + 15 Etiquetas</td>
                    <td>7,35</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321>&nbsp;</td>
                    <td class=xl331>TARJETAS + ETIQUETAS CON C.D.</td>
                    <td class=xl321>10,75</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">&nbsp;</td>
                    <td>TARJETAS + ETIQUETAS RECAMBIO</td>
                    <td>7,35</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321>&nbsp;</td>
                    <td class=xl331>30 GREETINGS CON C.D.</td>
                    <td class=xl321>10,75</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">3187</td>
                    <td>30 GREETINGS RECAMBIO</td>
                    <td>7,35</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321>3188</td>
                    <td class=xl331>BOLSA REGALO / RECUERDO CON C.D.</td>
                    <td class=xl321>10,75</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">3190</td>
                    <td>24 CD Inlays - Comfort + C.D.</td>
                    <td>11,40</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321>3191</td>
                    <td class=xl331>24 CD Inlays - Comfort - Recambio</td>
                    <td class=xl321>8,70</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">3192</td>
                    <td>ESTUCHE CAJA CON C.D.</td>
                    <td>16,60</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321>3193</td>
                    <td class=xl331>ESTUCHE CAJA CON C.D.</td>
                    <td class=xl321>12,85</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">3195</td>
                    <td x:str="PRINTABLES PACK ">PRINTABLES PACK </td>
                    <td>37,35</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321>3196</td>
                    <td class=xl331>PRINTABLE PACK</td>
                    <td class=xl321>37,35</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">7005</td>
                    <td>Kit Party</td>
                    <td>20,80</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321>7010</td>
                    <td class=xl331>36 tarjetas + 24 etiquetas para fiestas con C.D.-ROM</td>
                    <td class=xl321>7,90</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">8005</td>
                    <td>Banner papel para letreros</td>
                    <td>8,85</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321>8006</td>
                    <td class=xl331>50 hojas papel 90 gr. Decorado Hojas</td>
                    <td class=xl321>7,50</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">8007</td>
                    <td>50 hojas papel 90 gr. Decorado Pluma</td>
                    <td>7,50</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321>8008</td>
                    <td class=xl331>50 hojas papel 90 gr. Decorado Copa</td>
                    <td class=xl321>7,50</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">8009</td>
                    <td>50 hojas papel 90 gr. Decorado Peluches</td>
                    <td>7,50</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321>8010</td>
                    <td class=xl331>Kit album digital 12 A4 Papel 150 gr. Brillante</td>
                    <td class=xl321>21,40</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">8011</td>
                    <td>Kit album digital 12 A4 Papel 130 gr. Mate</td>
                    <td>12,65</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321>8012</td>
                    <td class=xl331>Kit puzzle 12 unidades</td>
                    <td class=xl321>10,35</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">8013</td>
                    <td>Kit puzzle 24 unidades</td>
                    <td>18,60</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321>8014</td>
                    <td class=xl331>100 hojas papel decorado 90 Gr.</td>
                    <td class=xl321>13,60</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">8015</td>
                    <td>10 A4 Photo Paper Brillante 170 Gr.</td>
                    <td>9,10</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321>8016</td>
                    <td class=xl331>20 A4 Photo Paper Mate&nbsp;130 Gr.</td>
                    <td class=xl321>6,25</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">8017</td>
                    <td>10 A4 Photo PaperDoble Cara Mate</td>
                    <td>6,10</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl351>&nbsp;</td>
                    <td class=xl351>OFERTA MINI PRIX</td>
                    <td class=xl351>&nbsp;</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321>8020</td>
                    <td class=xl331>12 Sobres protectores C.D. - D.V.D.</td>
                    <td class=xl321>2,25</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">8021</td>
                    <td>12 Fotos 12 x 15 - 130 gr.</td>
                    <td>2,40</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20" class=xl321>8022</td>
                    <td class=xl331>30 Tarjetas de visita</td>
                    <td class=xl321>1,35</td>
                  </tr>
                  <tr class=xl341 height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height="20">8023</td>
                    <td>12 Etiquetas adhesivas C.D. - D.V.D.</td>
                    <td>2,25</td>
                  </tr>
                  <tr height=15>
                    <td height="15">&nbsp;</td>
                    <td class=xl421>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr height=15>
                    <td height="15">&nbsp;</td>
                    <td>www.nelosa.net<span style="mso-spacerun: yes">&nbsp;&nbsp; </span>www.recargas-y-consumibles.net</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr height=17>
                    <td height=17 colspan=3 style='height:12.75pt;mso-ignore:colspan'>&nbsp;</td>
                  </tr>
                  <tr height=0 style='display:none'>
                    <td width=73 style='width:55pt'></td>
                    <td width=386 style='width:290pt'></td>
                    <td width=76 style='width:57pt'></td>
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
