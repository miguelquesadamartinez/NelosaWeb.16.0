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
                  <table width=99% cellpadding=0 cellspacing=0 align=center>
                    <tr>
                      <td height="464" valign=top><div align="center"><img src="../../../img/diseno.paginas/comunes/varias/pagepic.jpg" width=287 height=134> <br>
                          </div>
                        <h4><BR>
                           <b><font face="Arial, Helvetica, sans-serif">Quien somos</font></b>  </h4>
                          <h5 align="justify"> <font face="Arial, Helvetica, sans-serif">Nelosa se fundo en 1975 como fabricante de accesorios para imagen y sonido, para llegar a nuestros dias como uno de los principales fabricantes nacionales de Recargas de tinta universales para cartuchos de impresoras Ink-Jet y Laser, soportes de impresion y Accesorios para imagen, sonido e informatica, destacando siempre por la innovacion de sus productos y la calidad de la fabricacion totalmente nacional, siendo estos los pilares en los que se basan los departamentos de la empresa.</font></h5>
                          <p align="center"><font face="Arial, Helvetica, sans-serif"><img src="../../../img/diseno.paginas/comunes/varias/images.jpg" width="97" height="74"></font></p></td>
                      <td>&nbsp;</td>
                      <td><img src="../../../img/diseno.paginas/comunes/varias/Nelosa_Doblao_Peq.jpg" width=177 height="464"></td>
                    </tr>
                  </table>
                  </div></td>
            </tr>
          </table>
      </div></td>
    </tr>
  </table>
</div>
<p align="center">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</p>
</BODY>
</HTML>
