<?php 
session_name('nelosa');

require_once ( "../../../../inc/headers/vbles_sesion.php" );

require_once ( "../../../../inc/config.php" );

require_once ( "../../../../inc/funciones.php" );

require_once ( "../../../../inc/objetos/class-db/class-db.php" );
require_once ( "../../../../inc/objetos/class-languages/class-languages.php" );

$db = new BaseDeDatos($db_hostname,$db_username,$db_password,$db_name);
$db->openDatabase();

$Langy = new Languages($_SESSION['vs_lang']) ;

?>
<HTML>
<HEAD>
<TITLE>Nelosa Accesorios  -  Quien Somos</title>

<?php require_once ( '../../../../inc/headers/headers.php' ); ?>

<LINK REL="stylesheet" HREF="../../../../inc/css/styles.css" TYPE="text/css">

</HEAD>

<BODY>

<div align="center">

<?php  require_once ('../../../../page.parts/p/p/p/up.menu.php');  ?>

  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../../../img/diseno.paginas/base/arriba-up.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF0000">
    <tr>
      <td height="13"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="776" height="130">
          <param name="movie" value="../../../../img/animaciones/banner-arriva.swf">
          <param name="quality" value="high">
          <embed src="../../../../img/animaciones/banner-arriva.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="776" height="130"></embed>
      </object></td>
    </tr>
  </table>
<?php require_once ('../../../../page.parts/p/p/p/med.menu.php'); ?>

  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../../../img/diseno.paginas/base/arriba-down.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="745" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13" bgcolor="#FFFFFF"><div align="center">
          <table width="100%"  border="0">
            <tr>
              <td height="95" valign="top"><div align="center">
                <p align="center"><strong><font color="#FF0000" size="5" face="Arial, Helvetica, sans-serif">No existe el usuario ! !</font></strong></p>
                <form action="registrar.php" name="Formulario_3" id="Formulario_3" method="post" >
                  <div align="center">
                    <table border="0" width="95%">
                      <tr bgcolor="#FFFFCC">
                        <td height="24" colspan="4"><div align="center">
                            <p><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">Pulse en el boton a continuacion para acceder <br>
              a la pagina de creacion de usuario</font></strong></p>
                            <p><font color="#FF0000" face="Arial, Helvetica, sans-serif">
                              <input type="submit" name="iniciar2" value="Crear usuario">
                            </font> </p>
                        </div></td>
                      </tr>
                    </table>
                  </div>
                </form>
                <p><a href="../../../index.php"><img src="../../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
              </div></td>
            </tr>
          </table>
      </div></td>
    </tr>
  </table>
<?php 
require_once ('../../../../page.parts/down.php'); 
?>
</div>
</body>