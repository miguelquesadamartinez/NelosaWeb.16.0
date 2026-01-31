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
    <table width="745" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="13" bgcolor="#FFFFFF"><div align="center">
            <table width="100%"  border="0">
              <tr>
                <td height="95" valign="top"><div align="center">
                    <p>&nbsp;</p>
                    <p align="center"><strong><a class="AZUL14" href="index-refill_ink-jet.php">Kits universales recarga Cartuchos Impresoras Ink-Jet</a></strong></p>
                    <p align="center"><strong><a class="AZUL14" href="index-refill_laser.php">Kits universales recarga Cartuchos Impresoras Laser <font color="#000000">NEGRO</font></a></strong></p>
                    <p align="center"><strong><a class="AZUL14" href="index-refill_laser_color.php">Kits universales recarga Cartuchos Impresoras Laser <font color="#FF0000">CO</font><font color="#FFCC00">L</font>OR</a></strong></p>
                    <p align="center"><strong><a class="AZUL14" href="accesorios-recarga.php">Accesorios recarga y Reseteadores chips cartuchos Epson </a></strong> </p>
                    <p align="center"><strong><a class="AZUL14" href="etq-cd.php">Etiquetas y Dorsos para CD&acute;s y DVD</a></strong></p>
                    <p align="center"><strong><a class="AZUL14" href="deluxe-cards.php">Deluxe cards y soportes impresion variados</a></strong></p>
                    <p align="center"><strong><a class="AZUL14" href="accesorios.cd.dvd.audio.video.php">Accesorios Audio - Video - <strong>CD - DVD - CD ROM</strong></a></strong></p>
                    <p align="center">&nbsp;</p>
                </div></td>
              </tr>
            </table>
        </div></td>
      </tr>
    </table>
  
<?php 
require_once ('../../../page.parts/p/p/down.php'); 
?>
</div>

</body>
</html>
