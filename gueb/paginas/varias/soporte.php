<?php 
session_name('nelosa');

include ( "../../../inc/headers/vbles_sesion.php" );

include ( "../../../inc/config.php" );

include ( "../../../inc/funciones.php" );

include ( "../../../inc/objetos/class-db/class-db.php" );
include ( "../../../inc/objetos/class-languages/class-languages.php" );

$db = new BaseDeDatos($db_hostname,$db_username,$db_password,$db_name);
$db->openDatabase();

$Langy = new Languages($_SESSION['vs_lang']) ;

?>
<HTML>
<HEAD>
<title>Soporte tecnico</title>

<?php include ( '../../../inc/headers/headers.php' ); ?>

<LINK REL="stylesheet" HREF="../../../inc/css/styles.css" TYPE="text/css">

</HEAD>

<BODY>

<div align="center">
  <div align="center"> 
    <?php  include ('../../../page.parts/p/p/up.menu.php');  ?>
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
    <?php include ('../../../page.parts/p/p/med.menu.php'); ?>
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
                    <p align="center">Soporte tecnico </p>
                    <table width="97%"  border="0">
                      <tr>
                        <td>
						    <p align="center"><strong><a href="../instrucciones/index.php">Instrucciones Recarga</a></strong></p>
                            <p align="center"><strong><a href="../../../archivos/interactivo/index.php">Instrucciones Recarga interactivas</a></strong></p>
                            <p align="center"><strong><a href="../../../archivos/interactivo/interactivo.zip">Descarga (2.646 KB)</a></strong></p>
                            <p align="center"><strong><a href="mailto:info@nelosa.net">Preguntanos</a></strong></p>
                            <p align="center"><strong><a href="software.php">Como utilizar el software (Pantillas) para centrar los dise&ntilde;os</a></strong></p>
                            <p align="center"><strong><a href="../faq/index.php">Preguntas Hechas Frequentes - Recarga Ink-Jet</a></strong></p>
                            <p align="center">Telefono</p>
                            <p align="center"><strong>(+34) 93 352 20 03 - 902 32 20 03 </strong></p>
                            <p align="center">Fax</strong></p>
                            <p align="center"><strong>(+34) 93 340 45 60</strong></p>
                            <p align="center">Email</p>
                           <p align="center"><strong><a href="mailto:info@nelosa.net"><strong>&#105;&#110;&#102;&#111;&#64;&#110;&#101;&#108;&#111;&#115;&#97;&#46;&#110;&#101;&#116;</a></strong></p>                           
                            <p align="left"><br>
                        </p></td>
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
