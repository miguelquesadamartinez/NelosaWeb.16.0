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
                  <div align="center"> 
                    <table width="100%"  border="0">
                      <tr> 
                        <td width="54%"><div align="center"> 
                            <p>Descarga de archivos</p>
                            <p><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/Impresoras.Recomendadas.pdf">Impresoras.Recomendadas</a><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/Impresoras.Recomendadas.zip"> 
                              (Descargar) </a><br>
                              <a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/Recomendacion.Nelosa.pdf">Recomendacion.Nelosa</a><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/Recomendacion.Nelosa.zip"> 
                              Descargar)</a></p>
                            <p>Instrucciones Recarga LASER</p>
                            <table width="100%"  border="0">
                              <tr> 
                                <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Estructura.de.un.cartucho.de.toner.pdf" target="_blank">Estructura 
                                    de un cartucho de toner </a><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Estructura.de.un.cartucho.de.toner.zip">(Descargar) 
                                    </a></div></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr> 
                                <td><div align="center"></div></td>
                                <td><div align="center"> 
                                    <div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Estructura%20de%20un%20cartucho%20de%20toner%20y%20proceso%20basico%20de%20recarga.pdf" target="_blank">Estructura 
                                      de un cartucho de toner y proceso basico 
                                      de recar </a><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Estructura%20de%20un%20cartucho%20de%20toner%20y%20proceso%20basico%20de%20recarga.zip">(Descargar) 
                                      </a></div>
                                  </div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"> 
                                    <div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Laser%20Consejos%20Generales%20de%20Recarga.pdf" target="_blank">Laser 
                                      Consejos Generales de Recarga</a> <a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Laser%20Consejos%20Generales%20de%20Recarga.zip">(Descargar) 
                                      </a></div>
                                  </div></td>
                                <td><div align="center"></div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"></div></td>
                                <td><div align="center"> 
                                    <div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Sistemas%20AntiRecarga%20Impresoras%20Laser%20Negro.pdf" target="_parent">Sistemas 
                                      AntiRecarga Impresoras Laser Negro</a> <a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Sistemas%20AntiRecarga%20Impresoras%20Laser%20Negro.zip">(Descargar) 
                                      </a></div>
                                  </div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Tipos.de.Cartuchos.Laser.zip" target="_blank">Tipos.de.Cartuchos.Laser 
                                    (Descargar) </a></div></td>
                                <td><div align="center"></div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"></div></td>
                                <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Tipos.de.Reseteador.doc">Tipos 
                                    de Reseteadores</a> <a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Tipos.de.Reseteador.zip">(Descargar) 
                                    </a></div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Cambio.de.chip.doc">Instrucciones 
                                    para el cambio del Chip</a><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Cambio.de.chip.zip"> 
                                    (Descargar) </a></div></td>
                                <td><div align="center"></div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"></div></td>
                                <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Impresoras.Laser.Con.Chip.zip">Impresoras 
                                    Laser Con Chip </a><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Reactivacion.Nivel.Tinta.Epson.AcuLaser.C900.zip">(Descargar) 
                                    </a></div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Como.sustituir.chip.de.HP4600.pdf">Como 
                                    sustituir chip de HP 4600</a><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Como.sustituir.chip.de.HP4600.zip"> 
                                    (Descargar) </a></div></td>
                                <td><div align="center"></div></td>
                              </tr>
                              <tr> 
                                <td>&nbsp;</td>
                                <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Reactivacion.Nivel.Tinta.Epson.AcuLaser.C900.pdf">Reactivacion 
                                    Nivel Tinta Epson AcuLaser C900</a><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Reactivacion.Nivel.Tinta.Epson.AcuLaser.C900.zip"> 
                                    (Descargar) </a></div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Como.sustituir.chip.de.HP2550.pdf">Como 
                                    sustituir chip de HP 2550</a><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.laser/Como.sustituir.chip.de.HP2550.zip"> 
                                    (Descargar) </a></div></td>
                                <td>&nbsp;</td>
                              </tr>
                            </table>
                            <p>Instrucciones Recarga Ink-Jet</p>
                            <table width="100%"  border="0">
                              <tr> 
                                <td width="62%"><div align="center"> 
                                    <div align="center"> 
                                      <div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.ink.jet/Tipos.de.Cartuchos.Ink.Jet.pdf" target="_blank">Tipos.de.Cartuchos.Ink.Jet</a> 
                                        <a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.ink.jet/Tipos.de.Cartuchos.Ink.Jet.zip">(Descargar) 
                                        </a></div>
                                    </div>
                                  </div></td>
                                <td width="62%"><div align="center"></div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"></div></td>
                                <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.ink.jet/Ink-Jet.CONSEJOS.GENERALES.DE.RECARGA.pdf" target="_blank">Consejos 
                                    Generales Recarga</a><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.ink.jet/Ink-Jet.CONSEJOS.GENERALES.DE.RECARGA.zip"> 
                                    (Descargar) </a></div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.ink.jet/errores.mas.comunes.pdf" target="_blank">Errores 
                                    mas comunes (Descargar) </a></div></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr> 
                                <td><div align="center"></div></td>
                                <td><div align="center"> 
                                    <div align="center"> 
                                      <div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.ink.jet/instrucciones.accesorios.ink.jet.doc" target="_blank">Instrucciones.accesorios.ink.jet</a> 
                                        <a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.ink.jet/instrucciones.accesorios.ink.jet.zip">(Descargar) 
                                        </a></div>
                                    </div>
                                  </div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.ink.jet/proceso.basico.de.recarga.pdf">Proceso 
                                    basico de recarga</a> <a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.ink.jet/proceso.basico.de.recarga.zip">(Descargar) 
                                    </a></div></td>
                                <td><div align="center"> 
                                    <div align="center"></div>
                                  </div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"></div></td>
                                <td><div align="center"> 
                                    <div align="center"> 
                                      <div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.ink.jet/recarga.cartuchos.hp.pdf">Recarga 
                                        cartuchos NEGRO HP </a><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.ink.jet/recarga.cartuchos.hp.zip">(Descargar) 
                                        </a></div>
                                    </div>
                                  </div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.ink.jet/Instrucciones.recarga.Cartuchos.Individuales.Epson.pdf">Recarga 
                                    Cartuchos Individuales Epson(Descargar) </a></div></td>
                                <td><div align="center"> 
                                    <div align="center"></div>
                                  </div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"></div></td>
                                <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.ink.jet/Sistemas.antirecarga.epson.brother.pdf">Sistemas.antirecarga.Epson.Brother(Descargar) 
                                    </a></div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.ink.jet/USOS.DEL.LIMPIADOR.pdf">Usos 
                                    del Limpiador</a> <a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.ink.jet/USOS.DEL.LIMPIADOR.zip">(Descargar) 
                                    </a></div></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr> 
                                <td><div align="center"></div></td>
                                <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/instrucciones.recarga/doks.ink.jet/Sistemas.antirecarga.hp.pdf">Sistemas 
                                    Antirecarga.HP(Descargar) </a></div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"></div></td>
                                <td><div align="center"> 
                                    <div align="center"></div>
                                  </div></td>
                              </tr>
                            </table>
                            <table width="100%"  border="0">
                              <tr> 
                                <td><p align="center">CD.instrucciones</p>
                                  <p align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/cd.instrucciones/cd.instrucciones.zip">Descargar</a></p></td>
                                <td><p align="center">Instrucciones.interactivas</p>
                                  <p align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/interactivo/high.html">Ver</a> 
                                    / <a class="AZUL" href="http://www.nelosa.net/archivos/interactivo/video.swf">Descargar 
                                    </a></p></td>
                              </tr>
                              <tr> 
                                <td><div align="center"></div></td>
                                <td><div align="center"></div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"> 
                                    <p>Catalogo</p>
                                    <p><a class="AZUL" href="http://www.nelosa.net/archivos/catalogo/Catalogo.Nelosa.pdf">Ver 
                                      Catalogo</a><br>
                                      <a class="AZUL" href="http://www.nelosa.net/archivos/catalogo/Catalogo.Nelosa.zip">Descargar</a></p>
                                  </div></td>
                                <td><div align="center"> 
                                    <p align="center">Carteles</p>
                                    <p align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/carteles/cartel.epson.zip">Cartel 
                                      Epson</a><br>
                                      <a class="AZUL" href="http://www.nelosa.net/archivos/carteles/cartel.maximo.ahorro.zip">Cartel 
                                      Maximo Ahorro</a><br>
                                      <a class="AZUL" href="http://www.nelosa.net/archivos/carteles/cartel.recarga.laser.zip">Cartel 
                                      Recarga Laser</a></p>
                                  </div></td>
                              </tr>
                            </table>
                            <p align="center">Video promocion</p>
                            <div align="center"> 
                              <table width="100%" border="0">
                                <tr> 
                                  <td colspan="5"><div align="center">Ver Video 
                                    </div></td>
                                </tr>
                                <tr> 
                                  <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/video/Nelosa.1280x960.avi.avi">avi<br>
                                      1280 X 960 </a></div></td>
                                  <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/video/Nelosa.640x480.avi.avi">avi<br>
                                      640 x 480 </a></div></td>
                                  <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/video/Nelosa.exe">exe 
                                      ejecutable </a></div></td>
                                  <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/video/Nelosa.1280x960.mpg.mpg">mpg<br>
                                      1280 x 960 </a></div></td>
                                  <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/video/Nelosa.640x480.mpg.mpg">mpg<br>
                                      640 x 480 </a></div></td>
                                </tr>
                              </table>
                            </div>
                            <p align="center"> </p>
                            <div align="center"> 
                              <table width="100%" border="0">
                                <tr> 
                                  <td colspan="5"><div align="center">Descargar</div></td>
                                </tr>
                                <tr> 
                                  <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/video/Nelosa.1280x960.avi.zip">avi<br>
                                      1280 X 960 </a></div></td>
                                  <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/video/Nelosa.640x480.avi.zip">avi<br>
                                      640 x 480 </a></div></td>
                                  <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/video/Video.Promocion.Nelosa.zip">exe 
                                      ejecutable </a></div></td>
                                  <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/video/Nelosa.1280x960.mpg.zip">mpg<br>
                                      1280 x 960 </a></div></td>
                                  <td><div align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/video/Nelosa.640x480.mpg.zip">mpg<br>
                                      640 x 480</a> </div></td>
                                </tr>
                              </table>
                            </div>
                            <p align="center"><a class="AZUL" href="http://www.nelosa.net/archivos/video/CD.Video.Promocion.zip">Descargar 
                              CD completo </a></p>
                            <p align="center">Software</p>
                            <p align="center">Descarga de plantillas para centrar 
                              sus dise&ntilde;os en los Soportes de impresion 
                              personalizables Nelosa<br>
                              Seleccione la que corresponda, segun el numero impreso 
                              en la hoja del producto </p>
                            <table width="650" border="0">
                              <tr> 
                                <td width="25%"><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/01.zip">01</a></strong></div></td>
                                <td width="25%"><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/02.zip">02</a></strong></div></td>
                                <td width="25%"><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/03.zip">03</a></strong></div></td>
                                <td width="25%"><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/04.zip">04</a></strong></div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/05.zip">05</a></strong></div></td>
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/06.zip">06</a></strong></div></td>
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/07.zip">07</a></strong></div></td>
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/08.zip">08</a></strong></div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/09.zip">09</a></strong></div></td>
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/10.zip">10</a></strong></div></td>
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/11.zip">11</a></strong></div></td>
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/12.zip">12</a></strong></div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/13.zip">13</a></strong></div></td>
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/14.zip">14</a></strong></div></td>
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/15.zip">15</a></strong></div></td>
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/16.zip">16</a></strong></div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/17.zip">17</a></strong></div></td>
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/18.zip">18</a></strong></div></td>
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/19.zip">19</a></strong></div></td>
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/20.zip">20</a></strong></div></td>
                              </tr>
                              <tr> 
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/21.zip">21</a></strong></div></td>
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/30.zip">30</a></strong></div></td>
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/31.zip">31</a></strong></div></td>
                                <td><div align="center"><strong><a class="AZUL" href="http://www.nelosa.net/archivos/templates/36.zip">36</a></strong></div></td>
                              </tr>
                            </table>
                            <p><strong><font size="3" face="Arial, Helvetica, sans-serif"><a href="../varias/software.php">Como 
                              utilizar el software (Pantillas) para centrar los 
                              dise&ntilde;o en los <br>
                              Soportes de impresion personalizables Nelosa</a></font></strong></p>
                            <p>&nbsp; </p>
                          </div></td>
                      </tr>
                    </table>
                    <p>&nbsp;</p>
                  </div>
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
