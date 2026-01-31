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
                  <p><strong>Accesorios Audio - Video - <strong>CD - DVD - CD ROM</strong></strong></p>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>4121 - V&iacute;deo limpiador + test de imagen sonido</b><br>
      Limpia , cuida y protege los cabezales del v&iacute;deo y recorrido completo de la cinta magn&eacute;tica. La cinta limpiadora NELOSA se ocupa de proteger cuidadosamente los cabezales evitando, con su uso regular, el deterioro de los cabezales.</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/4121.jpg' width="66" height="113" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>4122 - C. Limpiadora + liquido VHS</b><br>
      Cinta para la limpieza de los cabezales de video, as&iacute; como el recorrido completo de la cinta. Liquido limpiador no abrasivo que elimina la acumulaci&oacute;n de polvo y oxido en los cabezales restaurando la calidad de imagen y sonido.</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/4122.jpg' width="77" height="108" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>0120 - Limpiador lente laser en seco</b><br>
      Nelosa ha fabricado el limpiador de la lente l&aacute;ser del C.D. Para que, sin riesgo alguno, pueda eliminar el polvo y la suciedad acumulado en la &oacute;ptica l&aacute;ser del aparato. El C.D. limpiador NELOSA, elimina el polvo acumulado en la lente a trav&eacute;s de un micro pincel siendo de gran utilidad para equipos de hi-fi , port&aacute;tiles, coche o C.D.</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/0120.jpg' width="93" height="100" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>0122 - Compacto limpiador lente l&aacute;ser</b><br>
      Conjunto limpieza lente. El C.D. Lleva incorporado un micro pincel para la limpieza de la lente &oacute;ptica del aparato reproductor de C.D. L&iacute;quido limpiador no abrasivo que elimina y disuelve la suciedad acumulada en la lente. Depositar el l&iacute;quido en el pincel del disco limpiador se adjunta tambi&eacute;n un cepillo de piel natural para la limpieza de los discos compactos.</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/0122.jpg' width="90" height="115" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>0127 - Archivo 24 C.D.&acute;s</b><br>
      Ingenioso, efectivo y econ&oacute;mico &aacute;lbum para guardar ordenadamente 24 C.D.</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/0127.jpg' width="89" height="97" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>0128 - Archivo 48 C.D.&acute;s</b><br>
      Ingenioso, efectivo y econ&oacute;mico &aacute;lbum para guardar ordenadamente 48 C.D.</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/0128.jpg' width="58" height="114" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>0129 - DIS-MAN-PLUS</b><br>
      Funda protectora de loneta acolchada , para transportar y proteger el aparato reproductor port&aacute;til y 12 discos compactos. Se puede sujetar al cintur&oacute;n o cogido por el asa. Fabricado con materiales de m&aacute;xima calidad. Lavable e impermeable</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/0129.jpg' width="102" height="110" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>0131 - Funda Nylon 12 C.D. -C.D-ROM</b><br>
      Funda protectora de loneta acolchada, para transportar y proteger 12 C.D.&acute;s se puede sujetar al cintur&oacute;n o cogido por el asa. Fabricado con materiales de m&aacute;xima calidad.</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/0131.jpg' width="92" height="101" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>0132 - Funda Nylon 24 C.D. . C.D-ROM</b><br>
      Funda protectora de loneta acolchada, para transportar y proteger 24 C.D.&acute;s se puede sujetar al cintur&oacute;n o cogido por el asa. Fabricado con materiales de m&aacute;xima calidad.</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/0132.jpg' width="73" height="130" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>0133 - Funda Nylon 48 C.D. C.D.-ROM</b><br>
      Funda protectora de loneta acolchada, para transportar y proteger 24 C.D.&acute;s se puede sujetar al cintur&oacute;n o cogido por el asa. Fabricado con materiales de m&aacute;xima calidad.</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/0133.jpg' width="170" height="312" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>1145 - Limpiador profesional lente l&aacute;ser</b><br>
      Limpieza de la lente l&aacute;ser y 18 controles para analizar el sonido con calidad de estudio. Diagnostico sonido estereo y dolby pro-logic cada uno de los test le ayudara a mejorar el sonido de su equipo.</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/1145.jpg' width="93" height="100" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>1155 - D.V.D. Limpiador lente l&aacute;ser</b><br>
      Nelosa ha fabricado el limpiador de la lente l&aacute;ser del D.V.D. Para que, sin riesgo alguno, pueda eliminar el polvo y la suciedad acumulado en la &oacute;ptica l&aacute;ser del aparato. El D.V.D. Limpiador Nelosa, elimina el polvo acumulado en la lente a trav&eacute;s de un micro pincel siendo de gran utilidad para equipos port&aacute;tiles, casa u ordenador.</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/1155.jpg' width="150" height="233" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3120 - C.D. Limpiador interactivo</b><br>
      Nelosa ha fabricado el limpiador de lente l&aacute;ser interactivo para que sin riesgo alguno, pueda eliminar el polvo y la suciedad acumulado en la &oacute;ptica l&aacute;ser de aparato de C.D. El limpiador NELOSA, elimina el polvo acumulado en la lente a trav&eacute;s de un micro pincel siendo de gran utilidad para equipos de C.D.-ROM</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3120.jpg' width="98" height="109" > </font>                      </tr>
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
