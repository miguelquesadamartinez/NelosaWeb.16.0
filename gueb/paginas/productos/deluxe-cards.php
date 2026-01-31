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
                  <p><strong>Deluxe cards y soportes impresion variados</strong></p>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=23 align='left' width='55%'><b><font face='Arial, Helvetica, sans-serif'>3178 - 120 tarjetas de visita</font></b>
                      <TD align='center' width='25%'><img src="../../../img/prods/3178.jpg" width="180" height="252">                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=23 align='left' width='55%'><b><font face='Arial, Helvetica, sans-serif'>3179 - 120 tarjetas Recambio</font></b>
                      <TD align='center' width='25%'><img src="../../../img/prods/3178.jpg" width="180" height="252">                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><b><font face='Arial, Helvetica, sans-serif'>8015 - 10 A4 Photo Paper Brillante 170 Gr.</font></b><font face='Arial, Helvetica, sans-serif'><br>
      Universal Photo Paper 10 Hojas A4, 170 gramos 1440 dpi</font>
                      <TD align='center' width='25%'> <IMG SRC='../../../img/prods/8015.jpg' width="180" height="253" >                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><b><font face='Arial, Helvetica, sans-serif'>8016 - 20 A4 Photo Paper Mate 130 Gr.</font></b><font face='Arial, Helvetica, sans-serif'><br>
      Universal Photo Paper 20 Hojas A4, 130 gramos 720 dpi</font>
                      <TD align='center' width='25%'> <IMG SRC='../../../img/prods/8016.jpg' width="180" height="253" >                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><b><font face='Arial, Helvetica, sans-serif'>8017 - 10 A4 Photo PaperDoble Cara Mate</font></b><font face='Arial, Helvetica, sans-serif'><br>
      Universal Photo Paper 10 Hojas A4, 140 gramos doble cara 1440 dpi</font>
                      <TD align='center' width='25%'> <IMG SRC='../../../img/prods/8017.jpg' width="180" height="253" >                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><b><font face='Arial, Helvetica, sans-serif'>8012 - Kit puzzle 12 unidades</font></b><font face='Arial, Helvetica, sans-serif'><br>
      Kit Puzzle 12 Puzzles en blanco para decorar + 12 soportes de adhesivo removible</font>
                      <TD align='center' width='25%'> <IMG SRC='../../../img/prods/8012.jpg' width="180" height="230" >                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><b><font face='Arial, Helvetica, sans-serif'>8014 - 100 hojas papel decorado 80 Gr.</font></b><font face='Arial, Helvetica, sans-serif'><br>
      100 hojas decoradas para imprimir por impresora, fotocopiadora o escribir a mano</font>
                      <TD align='center' width='25%'> <IMG SRC='../../../img/prods/8014.jpg' width="180" height="238" >                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><b><font face='Arial, Helvetica, sans-serif'>3195 - PRINTABLES PACK</font></b><font face='Arial, Helvetica, sans-serif'><br>
      Contenido - 60 etiquetas imprimibles para C.D.- 24 Inlay confort, portadas y dorsos para C.D. - 120 tarjetas de visita en blanco y decoradas - 12 hojas A-4 adhesivas y 12 A-4 transparente para crear posters y pegatinas. + C.D.-ROM da ayuda para centrar los dise&ntilde;os valido para toda la gama NELOSA.</font>
                      <TD align='center' width='25%'> <IMG SRC='../../../img/prods/3195.jpg' width="180" height="253" >                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><p><b><font face='Arial, Helvetica, sans-serif'>8005 - Banner papel para letreros</font></b><font face='Arial, Helvetica, sans-serif'><br>
        Papel continuo para letreros<br>
                        </font><font face='Arial, Helvetica, sans-serif'>Suficiente para crear 15 pancartas de 1,5 m o 5 pancartas de 6 m., para decoraci&oacute;n de fiestas,...</font> </p>
                    <TD align='center' width='25%'><img src="../../../img/prods/8005.jpg" width="180" height="248">                                           </tr>
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
