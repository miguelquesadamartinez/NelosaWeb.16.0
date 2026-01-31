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
      <td height="141" valign="top" bgcolor="#FFFFFF"><div align="center">
        <p>&nbsp;</p>
        <p>Consulta enviada ! ! </p>
        <table width="97%"  border="0">
          <tr>
            <td><div align="center">
              <h5>&nbsp;</h5>
              <p>
			<?php	
				echo ( "Su consulta : " . $hd_asunto . "<BR>- - - - - - - - - - - - <BR><BR>". $hd_consulta .
				 "<BR>- - - - - - - - - - - - <BR><BR>sera respondida al email: " . $hd_email );
				$m = new Mail(); // create the mail
				$m->From( $hd_email ) ; 
				$m->To( "info@nelosa.net" ) ;
				$m->Subject( "Consulta: " . $hd_asunto  ) ;
				$m->Body ( $hd_consulta  ) ;
				$m->Send(); // send the mail 
				
/*				$m = new Mail(); // create the mail
				$m->From( $hd_email ) ; 
				$m->To( "emiki@nelosa.net" ) ;
				$m->Subject( "Consulta: " . $hd_asunto  ) ;
				$m->Body ( $hd_consulta  ) ;
				$m->Send(); // send the mail */
//mail("info@nelosa.net","Consulta: " . $hd_asunto , $hd_consulta ,"From: <" . $hd_email . ">");
//mail("emiki@nelosa.net","Consulta: " . $hd_asunto , $hd_consulta ,"From: <" . $hd_email . ">");
				$h = new Mail(); // create the mail
				$h->From( "soporte@nelosa.net" ) ; 
				$h->To( $hd_email ) ;
				$h->Subject( "Consulta al servicio tecnico de Nelosa" ) ;
				$h->Body ( $hd_asunto  . "\n- - - - - - - - - - - - \n\n". $hd_consulta ) ;
				$h->Send(); // send the mail 
//mail($hd_email,"Consulta al servicio tecnico de Nelosa", $hd_asunto  . "<BR>- - - - - - - - - - - - <BR><BR>". $hd_consulta ,"From: <soporte@nelosa.net>");				
			?>
			  </p>
              </div>
              <p align="center"><a href="../../index.php"><img src="../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
              <p align="center"><br>
              </p></td>
          </tr>
        </table>
        </div></td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
</body>
</html>
