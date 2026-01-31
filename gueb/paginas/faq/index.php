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
<?php include ('../../../page.parts/p/p/med.menu.php'); ?>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="13"><img src="../../../img/diseno.paginas/base/arriba-down.png" width="765" height="16"></td>
      </tr>
    </table>
  <table width="765" border="0" bgcolor="#FFFF00">
    <tr>
      <td><table width="99%"  border="0" align="center">
          <tr>
            <td width="15%"><div align="center"><strong><a href="../varias/about.php">Quien somos</a></strong></div></td>
            <td width="29%"><div align="center"><a href="paginas/instrucciones/aa.varios/tipos.impresoras.php"></a><a href="../stp/index.php">Servicio Tecnico Paralelo </a></div></td>
            <td width="30%"><div align="center"><a href="../instrucciones/aa.procedures/index.php">Sistemas Anti Recarga </a></div></td>
            <td width="26%"><div align="center"><a href="../Mailing/index.php">Alta / Baja Mailing </a></div></td>
          </tr>
          <tr>
            <td><div align="center"><a href="../varias/donde.php">Donde estamos </a></div></td>
            <td><div align="center"><a href="../varias/software.php">Software para printables</a></div></td>
            <td><div align="center"><a href="../rincon/index.php">Rincon Tecnico </a></div></td>
            <td><div align="center"></div>
                <div align="center"><a href="../distris/index.php">Acceso Tiendas y Distribuidores </a></div></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../../img/diseno.paginas/base/arriba-down.png" width="765" height="16"></td>
    </tr>
  </table>
</div>
<table width="759" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="141" valign="top" bgcolor="#FFFFFF"><div align="center">
        <p>&nbsp;</p>
        <p>Preguntas Hechas Frecuentemente</p>
        <p><img src="../../imagenes/comunes/phf.jpg" width="113" height="113"></p>
        <table width="97%"  border="0">
          <tr>
            <td><p align="center"><img src="../../imagenes/comunes/logo-ink-jet-p.jpg" width="59" height="75"> </p>
                <p align="center">&iquest; CAPACIDADES CARTUCHOS ? </p>
                <p align="center"> &iquest; AL USAR LAS RECARGAS NELOSA SE INVALIDAR&Aacute; LA GRANTIA ? </p>
                <p align="center"> &iquest; COMO CREO LA DEPRESIO INTERNA EN EL CARTUCHO ? </p>
                <p align="center"> &iquest; COMO SACO LA TAPA EN EL CARTUCHO DE COLOR HP ? </p>
                <p align="center"> &iquest; COMO SON LAS TINTAS ? </p>
                <p align="center"> &iquest; CU&Aacute;NTAS IMPRESORAS PUEDEN USAR LA RECARGA UNIVERSAL NELOSA ? </p>
                <p align="center"> &iquest; CUANTAS VECES SE PUEDE RELLENAR UN CARTUCHO ? </p>
                <p align="center"> &iquest; CUANTAS VECES SE PUEDE RELLENAR UN CARTUCHO CON UN KIT NELOSA ? </p>
                <p align="center"> &iquest; DESPUES DE LA SEGUNDA O TERCERA LIMPIEZA IMPRIME PEOR ? </p>
                <p align="center"> &iquest; EL CARTUCHO DE HP O LEXMARK NO IMPRIME CORRECTAMENTE ? </p>
                <p align="center"> &iquest; EL CARTUCHO DE MI EPSON TIENE UN CHIP Y NO RECONOCE EL CARTUCHO RECARGADO ? </p>
                <p align="center"> &iquest; EL CARTUCHO GOTEA SOLO CUANDO LO PONGO EN LA IMPRESORA ? </p>
                <p align="center"> &iquest; LA TINTA ES RESISTENTE AL AGUA ? </p>
                <p align="center"> &iquest; LA TINTA NELOSA ESTA HECHA CON BASE DE AGUA ? </p>
                <p align="center"> &iquest; LAS TINTAS NELOSA SON COLORANTE O PIGMENTOS ? </p>
                <p align="center"> &iquest; QUE HAGO SI EL CARTUCHO GOTEA DESPUES DE RECARGADO ? </p>
                <p align="center"> &iquest; SE DESVANECE LA TINTA CON LA LUZ SOLAR ? </p>
                <p align="center"> &iquest; SE PUEDE ALARGAR LA VIDA DE LOS CABEZALES DE IMPRESI&Oacute;N ? </p>
                <p align="center"> &iquest; SE PUEDE RECARGAR UN CARTUCHO QUE HA ESTADO VAC&Iacute;O MUCHO TIEMPO ? </p>
                <p align="center"><img src="../../imagenes/comunes/logo-laser-p.jpg" width="59" height="74"></p>
                <p align="center">&nbsp;</p></td>
          </tr>
        </table>
        <p align="left">&nbsp; </p>
    </div></td>
  </tr>
  <tr>
    <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
<p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
</body>
</html>
