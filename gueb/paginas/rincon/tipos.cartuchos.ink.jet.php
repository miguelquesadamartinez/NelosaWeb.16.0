<?php 
session_name('nelosa');

require_once ( "../../../inc/headers/vbles_sesion.php" );

require_once ( "../../../inc/config.php" );

require_once ( "../../../inc/funciones.php" );

require_once ( "../../../inc/objetos/class-db/class-db.php" );
require_once ( "../../../inc/objetos/class-languages/class-languages.php" );

$db = new BaseDeDatos($db_hostname,$db_username,$db_password,$db_name);
$db->openDatabase();

$Langy = new Languages($_SESSION['vs_lang']) ;

?>
<HTML>
<HEAD>
<TITLE>Nelosa Accesorios  -  Quien Somos</title>

<?php require_once ( '../../../inc/headers/headers.php' ); ?>

<LINK REL="stylesheet" HREF="../../../inc/css/styles.css" TYPE="text/css">

</HEAD>

<BODY>

<div align="center">

<?php  require_once ('../../../page.parts/p/p/up.menu.php');  ?>

  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../../img/diseno.paginas/base/arriba-up.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF0000">
    <tr>
      <td height="13"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="776" height="130">
          <param name="movie" value="../../../img/animaciones/banner-arriva.swf">
          <param name="quality" value="high">
          <embed src="../../../img/animaciones/banner-arriva.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="776" height="130"></embed>
      </object></td>
    </tr>
  </table>
<?php require_once ('../../../page.parts/p/p/med.menu.php'); ?>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="13"><img src="../../../img/diseno.paginas/base/arriba-down.png" width="765" height="16"></td>
      </tr>
    </table>
  <table width="740" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td valign="top" bgcolor="#FFFFFF"><div align="center">
        <p>&nbsp;</p>
        <p><strong>Tipos de cartuchos Ink-Jet</strong></p>
        <table width="97%"  border="0">
          <tr>
            <td colspan="2"><div align="center">
                <blockquote>
                  <blockquote>
                    <p>Cabezal fijo incorporado en Impresora + deposito de tinta</p>
                  </blockquote>
                </blockquote>
            </div></td>
            </tr>
          <tr>
            <td width="48%">&nbsp;</td>
            <td width="52%">&nbsp;</td>
          </tr>
          <tr>
            <td><div align="center"><img src="../../../img/a.inkjet/tipos.cartuchos/cabezal.fijo.con.esponja.interna.no.cabezal.jpg" width="290" height="151"></div></td>
            <td><div align="center"><img src="../../../img/a.inkjet/tipos.cartuchos/cabezal.fijo.sin.esponja.interna.no.cabezal.jpg" width="367" height="150"></div></td>
          </tr>
          <tr>
            <td><div align="center">
              <div align="left">Los que presentan menos dificultades para mantener el flujo de tinta en los cabezales, y al no tener cabezales de impresi&oacute;n pueden aguantar infinidad de recargas<br>
                Los cabezales se secan si no tienen el tanque de tinta puesto y lleno de tinta.</div>
            </div></td>
            <td><div align="center">
              <table width="100%"  border="0">
                <tr>
                  <td>Son los m&aacute;s delicados para mantener el flujo de tinta por su dise&ntilde;o para complicar la recarga.</td>
                  <td>Muy sencillos de recargar, capacidad entre 200 y 500 ml.</td>
                </tr>
              </table>
            </div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">Cabezal incorporado en Cartucho ( HP, Lexmark )</div></td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center"></div>              
              <div align="left">Presentan mas dificultades, por la delicadeza del cabezal de impresi&oacute;n y su exposici&oacute;n a golpes durante la recarga, No suelen aguantar muchas recargas entre 8 y 12.</div></td>
            </tr>
          <tr>
            <td><div align="center"></div></td>
            <td><div align="center"></div></td>
          </tr>
          <tr>
            <td><div align="center"><img src="../../../img/a.inkjet/tipos.cartuchos/cabezal.en.cartucho.esponja.interna.jpg" width="285" height="155"></div></td>
            <td><div align="center"><img src="../../../img/a.inkjet/tipos.cartuchos/cabezal.en.cartucho.sin.esponja.interna.jpg" width="371" height="155"></div></td>
          </tr>
          <tr>
            <td><div align="center">No recargar mas del 80% de su capacidad<br>
              Gotean si se cargan en exceso</div></td>
            <td><div align="center">Se deben cerrar al hermeticamente. No introducir mas de 5 m/m la aguja, para no deteriorar el interior</div></td>
          </tr>
          <tr>
            <td><div align="center"></div></td>
            <td><div align="center"></div></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">Cabezal substituible + Deposito de tinta</div></td>
            </tr>
          <tr>
            <td><div align="center"></div></td>
            <td><div align="center"></div></td>
          </tr>
          <tr>
            <td><div align="center"><img src="../../../img/a.inkjet/tipos.cartuchos/cabezal.subs.con.esponja.jpg" width="369" height="148"></div></td>
            <td><div align="center"><img src="../../../img/a.inkjet/tipos.cartuchos/cabezal.subs.sin.esponja.jpg" width="284" height="149"></div></td>
          </tr>
          <tr>
            <td>Presentan los problemas de las impresoras con Cabezal en Impresora y los de las impresoras con Cabezal en Cartucho</td>
            <td>Cabezales de impresion y cartuchos muy resistentes</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        </div></td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
  <p>www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</p>
</div>
<p align="center">&nbsp;</p>
</body>
</html>
