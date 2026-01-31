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
  <table width="765" border="0" bgcolor="#FFFF00">
    <tr>
      <td><table width="99%"  border="0" align="center">
          <tr>
            <td width="15%"><div align="center"><strong><a href="../varias/about.php">Quien somos</a></strong></div></td>
            <td width="29%"><div align="center"><a href="../stp/index.php">Servicio Tecnico Paralelo </a></div></td>
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
  <table width="740" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="141" valign="top" bgcolor="#FFFFFF"><div align="center">
          <p>&nbsp;</p>
          <p>El Foro de la Recarga </p>
          <table width="654" border="0" align="center" bgcolor="#FFFFCC">
            <tr>
              <td width="883"><div align="center">Responder a una consulta</div></td>
            </tr>
          </table>
          <table width="654" border="0" align="center">
            <?php  
require_once( "../../../inc/funciones/Funciones_PHP.php" ) ;
require_once( "../../eMiKi/libmail2.php" ) ;
			
			if ($usr == "" ) $nombre = "Anonimo" ;
			else $nombre = $usr ;
			
			$resp2 = ereg_replace( " ", "%20", $resp );
			$hidden = ereg_replace( " ", "%20", $hidden );
			$resp2 = ereg_replace( " ", "%20", $resp2 );
			
			$filon = "Respuesta de: " . $nombre . "\nTexto: " . $resp . "\nPara la respuesta con indice: " . $hidden .
			"\nhttp://www.nelosa.net/gueb/paginas/foro/addResp.php?email=" . $nombre . "&indise=" . $hidden . "&texto=" . $resp2 ;
			
			$m = new Mail(); // create the mail
			//echo "<BR>1<BR>" ;
			$m->From( "web@nelosa.net" ); 
			//echo "<BR>2<BR>" ;
			$m->To("emiki@nelosa.net");
			$m->Cc("foro@nelosa.net");
			//echo "<BR>3<BR>" ;
			$m->Subject( "Respuesta para el foro" ) ;
			//echo "<BR>4<BR>" ;
			$m->Body( $filon ); 
			//echo "<BR>5<BR>" ;
			$m->Send(); // send the mail */
			//echo "<BR>6<BR>" ;
			
			//echo "<BR>THE END" ;

	//		mail($emilio,"Password recargas-y-consumibles.net",$text,"From: <password@recargas-y-consumibles.net>");

	?>
            <tr align="center" valign="middle">
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr align="center" valign="middle">
              <td bgcolor="#FFFFFF"><p>Gracias por su colaboracion<br>
              </p></td>
            </tr>
            <tr align="center" valign="middle">
              <td width="875" bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr align="center" valign="middle">
              <td bgcolor="#FFFFFF">En breves segundos sera redirigido a la pagina principal del foro </td>
            </tr>
            <tr align="center" valign="middle">
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
          </table>
          <p><a href="index.php"><img src="../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
      </div></td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
  <p>www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</p>
</div>
<p>&nbsp;</p>
</BODY>
</HTML>
