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
                  <p align="center"><strong><a href="index-refill_laser_color.php">Kits universales recarga Cartuchos Impresoras Laser <font color="#FF0000">CO</font><font color="#FFCC00">L</font>OR</a></strong></p>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='70%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3420 - 5 Recargas Toner UNIVERSAL 
      3 Color ( C - M - Y ) y 2 Negro </b><br>
                        </font>
                      <TD align='center' width='30%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3420.jpg' width="200" height="242" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='70%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3417 - Kit Cyan - Magenta - Yellow Toner UNIVERSAL</b><br>
                        </font>
                      <TD align='center' width='30%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3417.jpg' width="200" height="241" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='70%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3409 - 1 Carga Yellow Toner UNIVERSAL</b> </font>
                      <TD align='center' width='30%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3409.jpg' width="200" height="293" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='70%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3410 - 1 Carga Magenta Toner UNIVERSAL</b> </font>
                      <TD align='center' width='30%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3410.jpg' width="200" height="293" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='70%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3411 - 1 Carga Cyan Toner UNIVERSAL</b> </font>
                      <TD align='center' width='30%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3411.jpg' width="200" height="293" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='70%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3412 - 1 Carga Negro Toner UNIVERSAL</b> </font>
                      <TD align='center' width='30%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3412.jpg' width="200" height="293" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='70%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3405 - 3 cargas Yellow Toner UNIVERSAL</b> </font>
                      <TD align='center' width='30%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3405.jpg' width="200" height="241" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='70%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3406 - 3 cargas Magenta Toner UNIVERSAL</b> </font>
                      <TD align='center' width='30%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3406.jpg' width="200" height="241" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='70%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3407 - 3 cargas Cyan Toner UNIVERSAL</b> </font>
                      <TD align='center' width='30%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3407.jpg' width="200" height="241" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='70%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3408 - 3 cargas Negro Toner UNIVERSAL</b> </font>
                      <TD align='center' width='30%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3408.jpg' width="200" height="241" > </font>                      </tr>
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
