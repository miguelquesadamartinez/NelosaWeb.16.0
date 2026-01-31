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
        <p>Impresoras Recomendadas</p>
        <table width="97%"  border="0">
          <tr>
            <td colspan="2"><div align="center">Ink-Jet </div></td>
          </tr>
          <tr>
            <td colspan="2"><p align="center">&nbsp; </p></td>
            </tr>
          <tr>
            <td width="42%"><div align="center"><img src="../../../img/impresoras.recomendadas/c46.jpg" width="161" height="118"></div></td>
            <td width="58%">Esta es la impresora ideal para poco uso.<br>
      Muy Facil de recargar<br>
      Los cartuchos de estas impresoras pueden durar muchas recargas<br>
      Tiene un chip en el cartucho que se debe RESETEAR en cada recarga</td>
          </tr>
          <tr>
            <td><div align="center"><img src="../../../img/impresoras.recomendadas/hp1200.jpg" width="142" height="119"></div></td>
            <td>Muy r&aacute;pida, e imprime a dos caras autom&aacute;ticamente.<br>
      Cartuchos y cabezales separados muy resistentes, pero bastante caros.<br>
      Se debe CAMBIAR CHIP en cada recarga </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <p align="left"></p>
        <table width="97%"  border="0">
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">Laser MonoCromo </div></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center"></div></td>
            </tr>
          <tr>
            <td width="39%">No utiliza CHIP.<br>
              La l&aacute;ser negro mas barata de mantener (Si se recarga)</td>
            <td width="61%"><div align="center"><img src="../../../img/impresoras.recomendadas/hp1022.jpg" width="143" height="123"></div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">Laser PoliCromaticas </div></td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td><div align="center"></div></td>
          </tr>
          <tr>
            <td rowspan="2"><div align="center">De las m&aacute;s baratas de mantener<br>
              No utiliza CHIP</div></td>
            <td><div align="center"><img src="../../../img/impresoras.recomendadas/clp500.jpg" width="331" height="200"></div></td>
          </tr>
          <tr>
            <td><div align="center"><img src="../../../img/impresoras.recomendadas/oki.jpg" width="240" height="169"></div></td>
          </tr>
        </table>
        <p align="left">&nbsp;        </p>
      </div></td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
</div>
<p align="center">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</p>
</body>
</html>
