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
    <table width="750" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF8400">
      <tr>
        <td height="13"><img src="../../../img/diseno.paginas/middle/middle.jpg" width="750" height="28"></td>
      </tr>
    </table>
    <table width="750" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF8400">
      <tr>
        <td width="9" height="13" bgcolor="#FF8400"><img src="../../../img/diseno.paginas/lateral/left.jpg" width="9" height="575"></td>
        <td width="203" valign="top" bgcolor="#FF8400"><p align="center"><a class="AZUL" href="../varias/soporte.php"><img src="../../../img/diseno.paginas/comunes/varias/support.GIF" width="57" height="93" border="0"><br>
  Servicio tecnico</a></p>
          <p align="center"><a class="AZUL" href="../instrucciones/index.php"><img src="../../../img/diseno.paginas/comunes/varias/instrucciones.jpg" width="112" height="112" border="0"><br>
  Instrucciones recarga<br>
  impresoras</a></p>
          <p align="center"><img src="../../../img/diseno.paginas/comunes/varias/info.jpg" width="98" height="74"></p></td>
        <td width="11" bgcolor="#FFFFFF"><img src="../../../img/diseno.paginas/lateral/right.jpg" width="11" height="575"></td>
        <td width="529" rowspan="2" valign="top" bgcolor="#FFFFFF"><div align="center">
          <table width="97%"  border="0">
              <tr>
                <td colspan="2"><div align="center">
                    <p><a class="AZUL" href="validationpages/registrar.php"><img src="../../../img/diseno.paginas/comunes/varias/register.gif" width="48" height="48" border="0"><br>
          Unete el club ! !</a></p>
                  </div>
                    <div align="center"></div></td>
              </tr>
              <tr>
                <td><div align="center">
                    <p><a class="AZUL" href="../foro/index.php"><img src="../../../img/diseno.paginas/comunes/varias/typloop.gif" width="150" height="150" border="0"></a><br>
                        <a class="AZUL" href="../foro/index.php">El Foro de la Recarga</a></p>
                </div></td>
                <td><div align="center">
                    <p><a class="AZUL" href="../varias/compra-impresora.php"><img src="../../../img/diseno.paginas/comunes/varias/buyprinter.jpg" width="96" height="90" border="0"></a><br>
                        <a class="AZUL" href="../varias/compra-impresora.php">Soporte para la <BR>
          compra de una<br>
          impresora </a></p>
                </div></td>
              </tr>
              <tr>
                <td colspan="2"><div align="center">
                    <p>&nbsp;</p>
                    <p><a class="AZUL" href="../varias/software.php"><img src="../../../img/diseno.paginas/comunes/varias/software.gif" width="459" height="68" border="0"></a></p>
                </div></td>
              </tr>
              <tr>
                <td><div align="center"></div></td>
                <td><div align="center"></div></td>
              </tr>
            </table>
            <p align="center"><a class="AZUL" href="mailto:club@nelosa.net"><img src="../../../img/diseno.paginas/comunes/varias/correo.gif" width="50" height="66" border="0"></a></p>
            </div></td>
      </tr>
      <tr>
        <td height="13" colspan="3" bgcolor="#000099"><img src="../../../img/diseno.paginas/lateral/down.jpg" width="221" height="22"></td>
      </tr>
    </table>
  </div>
<?php 
require_once ('../../../page.parts/down.php'); 
?>
</div>
</body>
</html>
