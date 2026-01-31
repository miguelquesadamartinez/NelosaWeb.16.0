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
<title>Software</title>

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
                    <p align="center">Software</p>
                    <p align="center">Descarga de plantillas para centrar sus dise&ntilde;os en los Soportes de impresion personalizables Nelosa<br>
                      Seleccione la que corresponda, segun el numero impreso en la hoja del producto </p>
                    <table width="650" border="0">
                      <tr>
                        <td width="25%"><div align="center"><strong><a class="AZUL" href="../../../archivos/templates/01.zip">01</a></strong></div></td>
                        <td width="25%"><div align="center"><strong><a href="../../../archivos/templates/02.zip">02</a></strong></div></td>
                        <td width="25%"><div align="center"><strong><a href="../../../archivos/templates/03.zip">03</a></strong></div></td>
                        <td width="25%"><div align="center"><strong><a href="../../../archivos/templates/04.zip">04</a></strong></div></td>
                      </tr>
                      <tr>
                        <td><div align="center"><strong><a href="../../../archivos/templates/05.zip">05</a></strong></div></td>
                        <td><div align="center"><strong><a href="../../../archivos/templates/06.zip">06</a></strong></div></td>
                        <td><div align="center"><strong><a href="../../../archivos/templates/07.zip">07</a></strong></div></td>
                        <td><div align="center"><strong><a href="../../../archivos/templates/08.zip">08</a></strong></div></td>
                      </tr>
                      <tr>
                        <td><div align="center"><strong><a href="../../../archivos/templates/09.zip">09</a></strong></div></td>
                        <td><div align="center"><strong><a href="../../../archivos/templates/10.zip">10</a></strong></div></td>
                        <td><div align="center"><strong><a href="../../../archivos/templates/11.zip">11</a></strong></div></td>
                        <td><div align="center"><strong><a href="../../../archivos/templates/12.zip">12</a></strong></div></td>
                      </tr>
                      <tr>
                        <td><div align="center"><strong><a href="../../../archivos/templates/13.zip">13</a></strong></div></td>
                        <td><div align="center"><strong><a href="../../../archivos/templates/14.zip">14</a></strong></div></td>
                        <td><div align="center"><strong><a href="../../../archivos/templates/15.zip">15</a></strong></div></td>
                        <td><div align="center"><strong><a href="../../../archivos/templates/16.zip">16</a></strong></div></td>
                      </tr>
                      <tr>
                        <td><div align="center"><strong><a href="../../../archivos/templates/17.zip">17</a></strong></div></td>
                        <td><div align="center"><strong><a href="../../../archivos/templates/18.zip">18</a></strong></div></td>
                        <td><div align="center"><strong><a href="../../../archivos/templates/19.zip">19</a></strong></div></td>
                        <td><div align="center"><strong><a href="../../../archivos/templates/20.zip">20</a></strong></div></td>
                      </tr>
                      <tr>
                        <td><div align="center"><strong><a href="../../../archivos/templates/21.zip">21</a></strong></div></td>
                        <td><div align="center"><strong><a href="../../../archivos/templates/30.zip">30</a></strong></div></td>
                        <td><div align="center"><strong><a href="../../../archivos/templates/31.zip">31</a></strong></div></td>
                        <td><div align="center"><strong><a href="../../../archivos/templates/36.zip">36</a></strong></div></td>
                      </tr>
                    </table>
                    <p align="center"><strong><font size="3" face="Arial, Helvetica, sans-serif">Como utilizar el software (Pantillas) para centrar los dise&ntilde;o en los <br>
                    Soportes de impresion personalizables Nelosa</font></strong></p>
                    <table width="95%"  border="0">
                      <tr>
                        <td><p>Para ayudar a centrar los dise&ntilde;os en la hoja de impresi&oacute;n para tarjetas devisita, etiquetas C.D., greetings, bolsas de regalo, etc.</p>
                          <p>Necesitar&aacute; tener instalados en el ordenador alguno de los siguientes programas</p>
                          <ul>
                            <li>Microsoft Word</li>
                            <li>CorelDraw</li>
                            <li>Corel Photo Saint</li>
                            <li>FreeHand</li>
                            <li>Photoshop</li>
                          </ul>
                          <p>Pueden obtener las plantillas en el CD de instrucciones, o la secci&oacute;n software de nuestra pagina web <strong>www.nelosa.net.</strong></p>
                          <p>Al abrir la plantilla, correspondiente a alguno de los programas que tenga instalado, (Editor de texto, Editor de gr&aacute;ficos, ...) podr&aacute; ver el formato de la hoja de impresi&oacute;n en el documento abierto en el programa de su ordenador, para despu&eacute;s insertar im&aacute;genes y textos como habitualmente trabaje con el programa .</p>
                          <h2>Como crear sus propias plantillas para todos los programas</h2>
                          <p>Tomar medidas de la hoja de pruebas en pulgadas o cent&iacute;metros., y trace l&iacute;neas verticales y horizontales, como tienen las hojas de impresi&oacute;n, en la plantilla de su creaci&oacute;n.</p>
                          <div align="center">
                            <p align="center"><img src="../../../img/printables/plantillas.jpg" width="484" height="335"></p>
                            <p align="left">F&aacute;cilmente sabr&aacute; donde tiene que situar el texto o imagen.</p>
                            <p align="left">Podr&iacute;a ser necesario ajustar las l&iacute;neas verticales, por los m&aacute;rgenes de impresi&oacute;n de su impresora </p>
                        </div></td>
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
