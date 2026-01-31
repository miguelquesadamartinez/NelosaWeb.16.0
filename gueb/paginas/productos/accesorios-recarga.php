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
                  <p><strong>Accesorios recarga y Reseteadores chips cartuchos Epson </strong></p>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='70%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3220 - Reseteador universal Chip Epson + Recarga Universal Ink-Jet Negro</b><br>
                        </font>
                      <TD align='center' width='30%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3220.jpg' width="200" height="241" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='70%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3224 - Reseteador universal Chip Epson</b><br>
      - Identificaci&oacute;n autom&aacute;tica del modelo de cartucho.<br>
      - Duraci&oacute;n ilimitada, bater&iacute;as reemplazables.<br>
      - Activaci&oacute;n luz verde indicando cuando el chip est&aacute; reseteado.<br>
      - Duraci&oacute;n reseteado: 4 Segundos.<br>
      - Sin quitar el chip del cartucho. </font>
                          <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong>Compatible con todos los cartuchos Epson</strong></font></p>
                    <TD align='center' width='30%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3224.jpg' width="150" height="246" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='70%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3240 - Epson chip resetter Gran formato</b><b>+ Recarga Universal Ink-Jet Negro</b><br>
                        </font>
                      <TD align='center' width='30%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3240.jpg' width="200" height="241" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='70%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3235 - Liquido limpiador Ink-Jet 50 ml.</b><br>
      Soluci&oacute;n limpiadora para tinta reseca, envase de 50 ml.</font>
                      <TD align='center' width='30%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3235.jpg' width="150" height="217" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='70%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3215 - Liquido limpiador Ink-Jet 100 ml.</b><br>
                        </font>
                      <TD align='center' width='30%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3235.jpg' width="150" height="217" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='70%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3206 - Dry Ink Recuperator 50 ml. + Extractor tinta</b><br>
      Reducido kit para el mantenimiento y reparacion de cartuchos con cabezal incorporado (HP. Lexmark, ...) Contiene liquido limpiador y extractor de tinta universal.</font>
                      <TD align='center' width='30%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3206.jpg' width="150" height="299" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='70%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3216 - Dry Ink Recuperator 100 ml.</b><br>
                        </font>
                      <TD align='center' width='30%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3216.jpg' width="102" height="148" > </font>                      </tr>
                  </table>
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
