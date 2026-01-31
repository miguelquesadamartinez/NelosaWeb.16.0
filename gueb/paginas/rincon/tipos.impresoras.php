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
  <table width="740" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td valign="top" bgcolor="#FFFFFF"><div align="center">
        <p>&nbsp;</p>
        <p>Tipos de Impresoras</p>
        <table width="97%"  border="0">
          <tr>
            <td width="100%">Matriciales o de Contacto<br>
  Este tipo de impresora impacta sobre el papel y la cinta juntos, para formar un car&aacute;cter, como en una m&aacute;quina de escribir, son las &uacute;nicas que permiten obtener varias copias de un mismo impreso..<br>
  <p>Cera - Sublimacion<br>
    Impresoras para impresiones a alta resoluci&oacute;n.</p>
  <p>L&aacute;ser<br>
    Impresora electrofotogr&aacute;fica que utiliza la misma tecnolog&iacute;a que las fotocopiadoras. Para dibujar la imagen de la p&aacute;gina deseada se utiliza un rayo l&aacute;ser dirigido y un espejo giratorio, que act&uacute;a sobre un tambor fotosensible. La imagen se fija en el tambor en forma de carga electrost&aacute;tica que atrae y retiene el t&oacute;ner. Se enrolla una hoja de papel cargada electrost&aacute;ticamente alrededor del tambor, de forma que el t&oacute;ner depositado se queda pegado al papel. A continuaci&oacute;n se calienta el papel para que el t&oacute;ner se funda sobre su superficie. Por &uacute;ltimo, se elimina la carga el&eacute;ctrica del tambor y se recoge el t&oacute;ner sobrante. </p>
  <p>La mayor diferencia entre estos cartuchos es si tienen el tambor de impresion en el cartucho, o en la maquina.</p>
  <p>Ink-Jet<br>
    Su funcionamiento se basa en la expulsi&oacute;n de gotas de tinta l&iacute;quida a trav&eacute;s de unos inyectores que impactan en el papel formando los puntos necesarios para la realizaci&oacute;n de gr&aacute;ficos y textos.</p>
  <p>Plotter<br>
    Impresoras con tecnologia Ink-Jet destinadas a la impresi&oacute;n de planos para proyectos de arquitectura o ingenier&iacute;a, por lo que trabajan con enormes formatos, DIN-A1 (59,4x84 cm) o superiores. Utiliza la tecnolog&iacute;a Ink-Jet.<br>
    *&iquest;Qu&eacute; diferencia hay entre un plotter y una impresora?<br>
    Cuando la impresi&oacute;n digital estaba en su infancia, el t&eacute;rmino plotter se usaba para diferenciar un equipo de impresi&oacute;n de gr&aacute;ficos, a base de vectores (ploter de plumillas o de corte), de una impresora de texto tipo matricial. Hoy, la diferencia se diluye tanto como que cualquier impresora aborda ambos campos, gr&aacute;ficos y texto.</p>
  <p>&nbsp;</p></td></tr>
        </table>
        </div></td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
</div>
<p align="center">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a </p>
</body>
</html>
