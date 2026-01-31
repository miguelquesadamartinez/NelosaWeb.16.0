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
                    <p align="center">Servicio Tecnico Paralelo </p>
                    <table width="97%"  border="0">
                      <tr>
                        <td><p align="center">Modificacion Impresoras</p>
                          <p align="center"> Cartuchos acondicionados para la recarga</p>
                          <p align="center">Servicio Gratuito de recarga de Toner Laser</p>
                        <p align="center"><strong>Soporte para la compra de una impresora</strong></p></td>
                        <td><div align="center">
                            <p align="center">&nbsp;</p>
                            <div align="center">
                              <p><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Telefono</font> </strong></p>
                            </div>
                            <p align="center"><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"> (+34) 93 352 20 03 - 902 32 20 03 </font> </strong>
                            <p align="center"><strong><font face="Arial, Helvetica, sans-serif"><font color="#FF0000">Fax</font></font></strong></p>
                            <p align="center"><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"> (+34) 93 340 45 60</font> </strong>
                            <p align="center"><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"><font color="#FF0000">Email</font> </font> </strong>
                            <p align="center"> <font color="#0000FF" face="Arial, Helvetica, sans-serif"><a href="mailto:info@nelosa.net"><strong>&#105;&#110;&#102;&#111;&#64;&#110;&#101;&#108;&#111;&#115;&#97;&#46;&#110;&#101;&#116;</strong></a></font>
                            <h5>&nbsp;</h5>
                            <h5><br>
                          </h5>
                            </div>
                        </td>
                      </tr>
                    </table>
                    <p align="center">&nbsp;</p>
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
