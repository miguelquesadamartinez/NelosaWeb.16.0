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
      <td height="141" valign="top" bgcolor="#FFFFFF"><div align="center">
        <p>&nbsp;</p>
        <p>Soporte tecnico </p>
        <table width="97%"  border="0">
          <tr>
            <td><div align="center">
              <h5>&nbsp;</h5>
              <h5><font size="4" face="Arial, Helvetica, sans-serif"><a href="../instrucciones/index.php"><font size="3">Instrucciones Recarga</font></a></font></h5>
              <h5><strong><a href="../../../archivos/instrucciones.interactivas/index.php">Instrucciones Recarga interactivas <br>
              </a>
              <a href="../../../archivos/instrucciones.interactivas/interactivo.zip">Descarga (2.646 KB)</a></strong></h5>
              <h5><strong><font size="3" face="Arial, Helvetica, sans-serif"><a href="ask.php">Preguntanos</a></font></strong></h5>
              <p><strong><font size="3" face="Arial, Helvetica, sans-serif"><a href="../varias/software.php">Como utilizar el software (Pantillas) para centrar los dise&ntilde;os</a></font></strong></p>
              <p><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Telefono</font> </strong></p>
            </div>
              <p align="center"><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"> (+34) 93 352 20 03 - 902 32 20 03 </font>
              </strong>
              <p align="center"><strong><font face="Arial, Helvetica, sans-serif"><font color="#FF0000">Fax</font></font></strong></p>
              <p align="center"><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"> (+34) 93 340 45 60</font></strong><br>
              </td>
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
<p align="center">&nbsp;</p>
</body>
</html>
