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
                  <tr>
                    <td height=15 width=78>&nbsp;</td>
                    <td width=382>&nbsp;</td>
                    <td width=72>&nbsp;</td>
                  </tr>
                  <tr height=15>
                    <td height=15>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr height=24>
                    <td height=24 align=left valign=top>
                        <table cellpadding=0 cellspacing=0>
                          <tr>
                            <td height=24 width=78>&nbsp;</td>
                          </tr>
                        </table>
                      </span></td>
                    <td>Listado articulos</td>
                    <td>01.06.2005</td>
                  </tr>
                  <tr height=17>
                    <td height=17>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td></td>
                  </tr>
                  <tr height=15>
                    <td height=15>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr height=15>
                    <td height=15 class=xl352>Ref.</td>
                    <td class=xl362 x:str="D E N O M I N A C I O N ">D E N O M I N A C I O N </td>
                    <td class=xl352>Precio &euro;</td>
                  </tr>
                  <tr height=15>
                    <td height=15 class=xl272>&nbsp;</td>
                    <td class=xl272>IMAGEN Y SONIDO</td>
                    <td class=xl272>&nbsp;</td>
                  </tr>
                  <tr height=15>
                    <td height=15>&nbsp;</td>
                    <td class=xl282>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl312 style='height:15.0pt'>0120</td>
                    <td class=xl322 x:str="Limpiador lente laser en seco ">Limpiador lente laser en seco </td>
                    <td class=xl312>10,20</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl332 style='height:15.0pt'>0122</td>
                    <td class=xl342>Compacto limpiador lente l&aacute;ser</td>
                    <td class=xl332>11,65</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl312 style='height:15.0pt'>0123</td>
                    <td class=xl322>Limpieza r&aacute;pida discos compactos</td>
                    <td class=xl312>4,65</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl332 style='height:15.0pt'>0127</td>
                    <td class=xl342>Archivo 24 C.D.&acute;s</td>
                    <td class=xl332>5,00</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl312 style='height:15.0pt'>0128</td>
                    <td class=xl322>Archivo 48 C.D.&acute;s</td>
                    <td class=xl312>6,35</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl332 style='height:15.0pt'>0129</td>
                    <td class=xl342>DIS-MAN-PLUS</td>
                    <td class=xl332>12,60</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl312 style='height:15.0pt'>0131</td>
                    <td class=xl322 x:str="Funda Nylon 12 C.D. -C.D-ROM ">Funda Nylon 12 C.D. -C.D-ROM </td>
                    <td class=xl312>8,70</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl332 style='height:15.0pt'>0132</td>
                    <td class=xl342 x:str="Funda Nylon 24 C.D. . C.D-ROM ">Funda Nylon 24 C.D. . C.D-ROM </td>
                    <td class=xl332>11,00</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl312 style='height:15.0pt'>0133</td>
                    <td class=xl322 x:str="Funda Nylon 48 C.D.  C.D.-ROM ">Funda Nylon 48 C.D.&nbsp;C.D.-ROM </td>
                    <td class=xl312>14,20</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl332 style='height:15.0pt'>1145</td>
                    <td class=xl342>Limpiador profesional lente l&aacute;ser</td>
                    <td class=xl332>11,00</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl312 style='height:15.0pt'>1155</td>
                    <td class=xl322>D.V.D. Limpiador lente l&aacute;ser</td>
                    <td class=xl312>11,00</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl332 style='height:15.0pt'>3120</td>
                    <td class=xl342>C.D. Limpiador interactivo</td>
                    <td class=xl332>10,10</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl312 style='height:15.0pt'>4121</td>
                    <td class=xl322>V&iacute;deo limpiador + test de imagen sonido</td>
                    <td class=xl312>10,80</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl332 style='height:15.0pt'>4122</td>
                    <td class=xl342>C. Limpiadora + liquido VHS</td>
                    <td class=xl332>9,25</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl312 style='height:15.0pt'>4129</td>
                    <td class=xl322>Protector mando a distancia grande</td>
                    <td class=xl312>5,40</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl332 style='height:15.0pt'>4130</td>
                    <td class=xl342>Protector mando a distancia peque&ntilde;o</td>
                    <td class=xl332>4,15</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl312 style='height:15.0pt'>4142</td>
                    <td class=xl322>Base de giro basculante TV HI-FI<span style="mso-spacerun:
  yes">&nbsp; </span>35 cm.</td>
                    <td class=xl312>17,60</td>
                  </tr>
                  <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                    <td height=20 class=xl332 style='height:15.0pt'>4143</td>
                    <td class=xl342 x:str="Base de giro basculante  TV, HI-FI 25 cm ">Base de giro basculante&nbsp;TV, HI-FI 25 cm </td>
                    <td class=xl332>12,30</td>
                  </tr>
                  
                  <tr height=0 style='display:none'>
                    <td width=78 style='width:59pt'></td>
                    <td width=382 style='width:287pt'></td>
                    <td width=72 style='width:54pt'></td>
                  </tr>
                  
                </table>
                  <p>&nbsp;</p>
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
