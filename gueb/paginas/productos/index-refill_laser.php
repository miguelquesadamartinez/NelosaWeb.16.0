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
                  <p align="center"><strong>Kits universales recarga Cartuchos Impresoras Laser <font color="#000000">NEGRO</font></strong></p>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><p><font size="2" face="Arial, Helvetica, sans-serif"><b>3301 - Kit Toner universal NEGRO - 2 cargas de 125 Gr.</b><br>
        Contenido 2 Bolsas de 125 gramos CD instrucciones paso a paso + Varias herramientas para facilitar la recarga</font> </p>
                    <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3301.jpg' width="200" height="244" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3303 - Toner universal NEGRO - 1 carga de 125 Gr.</b><br>
      Contenido 1 Bolsa de 125 gramos CD instrucciones paso a paso + Varias herramientas para facilitar la recarga</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3303.jpg' width="200" height="257" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3305 - Recarga Universal Toner Fotocopiadoras </b><br>
      Contenido 1 Bolsa de 250 gramos CD instrucciones paso a paso + Varias herramientas para facilitar la recarga</font>
                      <TD align='center' width='25%'> <font size="2" face="Arial, Helvetica, sans-serif"><IMG SRC='../../../img/prods/3305.jpg' width="200" height="244" > </font>                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face='Arial, Helvetica, sans-serif'><strong>3307 - Kit Toner universal NEGRO ALTA DENSIDAD - 2 cargas de 125 Gr.</strong><br>
      Contenido 1 Bolsa de 250 gramos CD instrucciones paso a paso + Varias herramientas para facilitar la recarga</font>
                      <TD align='center' width='25%'><img src="../../../img/prods/3307.jpg" width="200" height="244">                      </tr>
                  </table>
                  <table width='95%' border=1 align='center'>
                    <tr>
                      <TD height=175 align='left' width='55%'><font size="2" face="Arial, Helvetica, sans-serif"><b>3308 - Recarga Toner universal NEGRO ALTA DENSIDAD - 1 carga de 125 Gr.</b><br>
      Contenido 1 Bolsa de 250 gramos CD instrucciones paso a paso + Varias herramientas para facilitar la recarga</font>
                      <TD align='center' width='25%'><img src="../../../img/prods/3308.jpg" width="200" height="257">                      </tr>
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
