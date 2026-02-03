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
  <table width="750" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF8400">
    <tr>
      <td height="13"><img src="../../../img/diseno.paginas/middle/middle.jpg" width="750" height="28"></td>
    </tr>
  </table>
  <table width="750" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF8400">
    <tr>
      <td width="9" height="13" bgcolor="#FF8400"><img src="../../../img/diseno.paginas/lateral/left.jpg" width="9" height="450"></td>
      <td width="203" valign="top" bgcolor="#FF8400"><p align="center"><strong><a href="../../../archivos/interactivo/index.php" target="_blank">Instrucciones interactivas</a></strong></p>
        <p align="center"><strong><a href="aa.instrucciones.laser/consejos-generales-laser.php">Consejos Generales</a></strong></p>
        <p align="center"><strong>Tipos de Cartuchos</strong></p>
        <p align="center"><strong>A tener en cuenta sobre las diferentes marcas de impresoras<br>
  Laser</strong></p>
        <p align="center"><a href="aa.instrucciones.laser/mantener-cartucho-laser.php">Como mantener el<br>
  cartucho en <br>
  prefecto estado</a> </p></td>
      <td width="11" bgcolor="#FFFFFF"><img src="../../../img/diseno.paginas/lateral/right.jpg" width="11" height="450"></td>
      <td width="529" rowspan="2" valign="top" bgcolor="#FFFFFF"><div align="center">
        <p align="center">Seleccione su impresora LASER </p>
        <table width="97%"  border="0">
          <tr>
            <td><div align="center"><a href="apple/index.php"><img src="../../../img/diseno.paginas/comunes/logos/logo_apple.gif" width="77" height="30" border="0"></a></div></td>
            <td><div align="center"><a href="brother/index.php"><img src="../../../img/diseno.paginas/comunes/logos/logo_brother.jpg" width="127" height="60" border="0"></a></div></td>
          </tr>
          <tr>
            <td><div align="center"><a href="canon/index.php?brand=canon"><img src="../../../img/diseno.paginas/comunes/logos/logo_canon.jpg" width="127" height="60" border="0"></a></div></td>
            <td><div align="center"><a href="epson/index.php?brand=epson"><img src="../../../img/diseno.paginas/comunes/logos/logo_epson.jpg" width="127" height="60" border="0"></a></div></td>
          </tr>
          <tr>
            <td><div align="center"><a href="hp/index.php?brand=hp"><img src="../../../img/diseno.paginas/comunes/logos/logo_hp.jpg" width="127" height="60" border="0"></a></div></td>
            <td><div align="center"><a href="ibm/index.php"><img src="../../../img/diseno.paginas/comunes/logos/logo_ibm.jpg" width="94" height="80" border="0"></a></div></td>
          </tr>
          <tr>
            <td><div align="center"><a href="lexmark/index.php?brand=lexmark"><img src="../../../img/diseno.paginas/comunes/logos/logo_lexmark.jpg" width="127" height="60" border="0"></a></div></td>
            <td><div align="center"><img src="../../../img/diseno.paginas/comunes/logos/logo_oki.jpg" width="127" height="60"></div></td>
          </tr>
          <tr>
            <td><div align="center"><a href="sharp/index.php?brand=sharp"><img src="../../../img/diseno.paginas/comunes/logos/logo_sharp.gif" width="102" height="15" border="0"></a></div></td>
            <td><div align="center"><a href="xerox/index.php?brand=xerox"><img src="../../../img/diseno.paginas/comunes/logos/logo_xerox.jpg" width="127" height="60" border="0"></a></div></td>
          </tr>
        </table>
        <p>Consulte en <a href="mailto:info@nelosa.net">info@nelosa.net</a> si su impresora o marca no aparece</p>
      </div></td>
    </tr>
    <tr>
      <td height="13" colspan="3" bgcolor="#000099"><img src="../../../img/diseno.paginas/lateral/down.jpg" width="221" height="22"></td>
    </tr>
  </table>
<?php 
require_once ('../../../page.parts/p/p/down.php'); 
?>
</div>
</body>
</html>
