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
<title>Links</title>

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
                  <p>&nbsp;</p>
                  <table width="95%"  border="0">
                    <tr>
                      <td><div align="center">
                          <table width="751" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="45%" height="1026" valign="top" bgcolor="#FFFFFF"><div align="center">
                                  <div align="center">
                                    <p><img src="../../../img/diseno.paginas/comunes/logos/logo_brother.jpg" width="127" height="60"> <br>
                                        <a href="http://www.brother.es" target="_blank">Home Page </a> </p>
                                  </div>
                                  <p align="center"><a href="http://www.brother.es/consultas.htm" target="_blank">Pagina soporte </a>
                                  <p align="center"><a href="http://www.brother.com/E-ftp/swin2-main.html" target="_blank">Software y drivers</a>
                                  <p align="center"><img src="../../../img/diseno.paginas/comunes/logos/logo_canon.jpg" width="127" height="60"> <br>
                                      <a href="http://www.canon.es" target="_blank">Home Page </a>
                                  <p align="center"><a href="http://www.canon.es/asistencia.asp?1" target="_blank">Pagina soporte </a>
                                  <p align="center"><a href="http://www.canon.es/menu_drivers.asp" target="_blank">Software y drivers </a>
                                  <p align="center"><img src="../../../img/diseno.paginas/comunes/logos/logo_Compaq.jpg" width="127" height="60"><br>
                                      <a href="http://www.hp.com/country/es/spa/welcome.html" target="_blank">Home Page </a>
                                  <p align="center"><a href="http://www.hp.com/country/es/spa/support.html" target="_blank">Pagina soporte</a>
                                  <p align="center"><a href="http://www.hp.com/country/es/spa/drivers.html" target="_blank">Pagina Drivers</a>
                                  <p align="center"><img src="../../../img/diseno.paginas/comunes/logos/logo_epson.jpg" width="127" height="60">
                                  <p align="center"><a href="http://www.epson.es" target="_blank">Home Page </a>
                                  <p align="center"><a href="http://www.epson.es/support/index.htm" target="_blank">Pagina soporte </a>
                                  <p align="center"><a href="http://www.epson.es/support/download/index.htm" target="_blank">Software y drivers</a>
                                  <p align="center"><img src="../../../img/diseno.paginas/comunes/logos/logo_hp.jpg" width="127" height="60">
                                  <p align="center"><a href="http://www.hp.com/country/es/spa/welcome.html" target="_blank">Home Page </a>
                                  <p align="center"><a href="http://www.hp.com/country/es/spa/support.html" target="_blank">Pagina soporte</a>
                                  <p align="center"><a href="http://www.hp.com/country/es/spa/drivers.html" target="_blank">Pagina Drivers</a>
                                  <p align="center"><img src="../../../img/diseno.paginas/comunes/logos/logo_lexmark.jpg" width="127" height="60"> <br>
                                      <a href="http://www.lexmark.es/" target="_blank">Home Page </a>
                                  <p align="center">                   
                              </div></td>
                              <td width="45%" valign="top" bgcolor="#FFFFFF"><p align="center">&nbsp;</p>
                                  <p align="center"><a href="http://www.todoexpertos.com/categorias/tecnologia_e_internet/hardware/impresoras/" target="_blank">Pagina de Expertos en impresoras</a></p>
                                  <p align="center"><a href="http://members.shaw.ca/hargravep/head.htm" target="_blank">Limpieza de cartuchos <font size="1">(Sitio en ingles)</font></a></p>
                                  <p align="center"><a href="http://eddiem.com/photo/printer/unclog/unclog.html" target="_blank">Limpieza de cabezales <font size="1">(Sitio en ingles)</font></a></p>
                                  <p align="center"><a href="http://howstuffworks.lycoszone.com/inkjet-printer.htm/printable" target="_blank">Como funciona una impresora <font size="1">(Sitio en ingles)</font></a></p>
                                  <p align="center"><a href="http://www.ampoule.ru/epson/en/index.html" target="_blank">Para mas aventurados <font size="1">(Sitio en ingles)</font></a></p>
                                  <p align="center"><a href="http://www.mwords.co.uk/pages/printers/printersHowDoI.htm">Algunos consejos para Epson</a></p>
                                  <p align="center">&nbsp;</p>
                                <p align="center"><strong>Epson Chip</strong><br>
                                <img src="../../../img/a.inkjet/chip/epson/epson.chip.jpg" width="235" height="64"></p>
                                  <p align="center"><a href="http://www.jimstar.narod.ru/Eng/index.html" target="_blank">Jim Star Web Page</a></p>
                                  <p align="center"><a href="http://www.ssclg.com/epsone.shtml" target="_blank">Utilidad para las impresoras Epson</a></p>
                                  <p align="center"><a href="http://www.freeinklevel.cjb.net" target="_blank">Ink Level </a></p>
                                  <p align="right">&nbsp;</p></td>
                            </tr>
                          </table>
                      </div></td>
                    </tr>
                  </table>
                  <p align="center">&nbsp;</p>
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
</body>
</html>
