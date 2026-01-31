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
                    <p>Zona para distribuidores</p>
                    <table width="100%"  border="0">
                      <tr>
                        <td width="350"><div align="center">
                          <p><strong>Contactar con Nelosa </strong></p>
                          <table width="100%"  border="0">
                            <tr>
                              <td><div align="center">
                                  <form name="form1" method="post" action="send.consulta.php">
                                    <div align="center">
                                      <p>email<br>
                                          <input name="hd_usr" type="text" id="hd_email3" value="<?php echo $usr ; ?>" size="40">
                                        </p>
                                      <p>Asunto<br>
                                          <input name="hd_asunto" type="text" id="hd_asunto" size="40">
                                      </p>
                                      <p>Consulta<br>
                                          <textarea name="hd_consulta" cols="40" rows="6" id="hd_consulta"></textarea>
                                      </p>
                                      <p>
                                        <input type="submit" name="Submit" value="Enviar consulta">
                                        <br>
                                  </p>
                                    </div>
                                    </form>
                                  </div></td>
                            </tr>
                          </table>
                          </div></td>
                        <td width="50%"><div align="center">
                          <table width="100%"  border="0">
                            <tr>
                              <td><div align="center">Descarga de archivos</div></td>
                            </tr>
                            <tr>
                              <td><a href="descarga.php">Para descargar videos interactivos de promocion. publicidades, carteles instrucciones de recarga, etc pinche AQUI </a></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td><div align="center"><a href="pedidos/disponible.en.breve.php">Pedidos</a></div></td>
                            </tr>
                            <tr>
                              <td><div align="center"><a href="pedidos/disponible.en.breve.php">Para realizar un pedido o ver el importe pinche AQUI </a></div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>
							  <?php 
							  if ($usr="emiki@nelosa.net" or $usr="miki@nelosa.net" or $usr="info@nelosa.net" )
							  {echo('<form name="form2" method="post" action="printers/consulta.impresora.php">');}
							  else
							  {echo('<form name="form2" method="post" action="printers/no.disponible.php">');}
							  ?>
                                <table width="100%"  border="0">
                                  <tr>
                                    <td colspan="2"><strong>Consulta de las instrucciones de recarga</strong> para el</td>
                                  </tr>
                                  <tr>
                                    <td><div align="right"><strong>Modelo</strong> de impresora :</div></td>
                                    <td>
                                      <input name="modelo" type="text" id="modelo" size="25">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td colspan="2">Escriba solo el numero del modelo, sin LaserJet o </td>
                                    </tr>
                                  <tr>
                                    <td><div align="right">Marca : </div></td>
                                    <td>
                                      <input name="marca" type="text" id="marca" size="25">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td><div align="right">N&ordm; de cartucho: </div></td>
                                    <td>
                                      <input name="crt" type="text" id="crt" size="25">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td colspan="2">&nbsp;</td>
                                    </tr>
                                </table>
                                <p align="center">
                                  <input type="submit" name="Submit2" value="Consultar">
                                </p>
                              </form></td>
                            </tr>
                          </table>
                        </div></td>
                      </tr>
                      <tr>
                        <td><div align="center"></div></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><div align="center"></div></td>
                        <td><div align="center">                          </div></td>
                      </tr>
                    </table>
                    <div align="center"></div>
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
