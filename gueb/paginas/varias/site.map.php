<?php 
session_name('nelosa');

include ( "../../inc/headers/vbles_sesion.php" );

include ( "../../inc/config.php" );

include ( "../../inc/funciones.php" );

include ( "../../inc/objetos/class-db/class-db.php" );
include ( "../../inc/objetos/class-languages/class-languages.php" );

$db = new BaseDeDatos($db_hostname,$db_username,$db_password,$db_name);
$db->openDatabase();

$Langy = new Languages($_SESSION['vs_lang']) ;

?>
<HTML>
<HEAD>
<title>Mapa de la web</title>

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
                    <p align="center">Mapa de la web</p>
                    <table width="97%"  border="0">
                      <tr>
                        <td><div align="center">
                            <h5>&nbsp;</h5>
                            <h5 align="left"><strong><a href="about.php" class="AZUL">Quien somos</a></strong><br>
                              <strong><a href="prods.php" class="AZUL">Productos</a></strong><br>
&nbsp;&nbsp;&nbsp;&nbsp;Audio<br>
&nbsp;&nbsp;&nbsp;&nbsp;Video<br>
&nbsp;&nbsp;&nbsp;&nbsp;Informatica<br>
&nbsp;&nbsp;&nbsp;&nbsp;Printables<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="../Refill/_Pages/Espanol/MainEsp.php">Recargas Universales cartuchos Ink-Jet</a><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../Refill/_Pages/Espanol/ChipPages/MultiResseter.php">Reseteador universal chip Epson&reg;</a><br>
                  <strong><a href="contactar.php">Contactar</a><br>
                  <a href="support.php">Servicio tecnico</a><br>
&nbsp;&nbsp;&nbsp;<a href="../Refill/_Pages/Espanol/mailPages/Main.php">&nbsp;</a></strong><a href="../Refill/_Pages/Espanol/mailPages/Main.php">Instrucciones recarga</a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="../Refill/_Pages/Espanol/FaqEsp.php">Preguntas frequentes</a><strong> <br>
<a href="Soporte/compraImpresora.php">Soporte compra impresora</a><br>
<a href="soft.php">Software</a><br>
<a href="comprar.php">Comprar</a><br>
<a href="Links.php">Links</a><br>
<a href="../_Pages/ValidationPages/registrar.php">Registrese</a></strong><a href="../_Pages/ValidationPages/registrar.php"> </a>
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
