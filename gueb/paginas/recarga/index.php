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
    <table width="765" border="0" bgcolor="#FFFF00">
      <tr>
        <td><table width="99%"  border="0" align="center">
            <tr>
              <td width="15%"><div align="center"><strong><a href="../varias/about.php">Quien somos</a></strong></div></td>
              <td width="29%"><div align="center"><a href="../stp/index.php">Servicio Tecnico Paralelo </a></div></td>
              <td width="30%"><div align="center"><a href="../instrucciones/aa.procedures/index.php">Sistemas Anti Recarga </a></div></td>
              <td width="26%"><div align="center"><a href="../Mailing/index.php">Alta / Baja Mailing </a></div></td>
            </tr>
            <tr>
              <td><div align="center"><a href="../varias/donde.php">Donde estamos </a></div></td>
              <td><div align="center"><a href="../varias/software.php">Software para printables</a></div></td>
              <td><div align="center"><a href="../rincon/index.php">Rincon Tecnico </a></div></td>
              <td><div align="center"></div>
                  <div align="center"><a href="../distris/index.php">Acceso Tiendas y Distribuidores </a></div></td>
            </tr>
        </table></td>
      </tr>
    </table>
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
                <td height="95" valign="top" background="../../../img/recarga/fondo.samall.jpg"><div align="center"> 
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td><img src="../../../img/recarga/parte1.jpg" width="740" height="318"></td>
                      </tr>
                      <tr>
                        <td><img src="../../../img/recarga/parte2.jpg" width="740" height="56"></td>
                      </tr>
                      <tr>
                        <td><img src="../../../img/recarga/parte3.jpg" width="740" height="281"></td>
                      </tr>
                      <tr>
                        <td><img src="../../../img/recarga/parte4.jpg" width="740" height="185"></td>
                      </tr>
                      <tr>
                        <td><img src="../../../img/recarga/parte5.jpg" width="740" height="218"></td>
                      </tr>
                    </table>
                    
                  </div></td>
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
