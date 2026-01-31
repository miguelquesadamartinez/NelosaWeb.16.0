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
          <p>&nbsp;</p>
          <p>En breve recibira un email en la direccion utilizada como usuario<br>
            para finalizar el proceso de creacion de su usuario </p>
          <p>
		  <?php 
$emilio=$hi_usr;

require_once("../../../../inc/funciones/Funciones_PHP.php");
require_once "../../../eMiKi/libmail2.php";

/*$text = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"><HTML><HEAD><META http-equiv=Content-Type content="text/html; charset=iso-8859-1"><META content="MSHTML 6.00.2900.2668" name=GENERATOR><STYLE></STYLE></HEAD><BODY><DIV><FONT face=Arial size=2>';
$text = $text . "Pinche en el siguiente link, o copielo en la barra de direccion del navegador<BR>para finalizar el proceso de creacion del usuario<BR><BR>";
$text = $text . "<a class="AZUL" href='http://www.nelosa.net/gueb/paginas/club/validationpages/doneUser.php?";
$text = $text . "hd_usr=" . $hi_usr . "&hd_pwd=" . $hi_pwd . "&hd_nom=" . $hi_nom . "&hd_ape1=" . $hi_ape1 . "&hd_tel=" . $hi_tel . "&hd_ape2=" . $hi_ape2 . "&hd_doc=" . $hi_doc ;
$text = $text . "&hd_empresa=" . $hi_empresa . "&hd_dir=" . $hi_dir . "&hd_cp=" . $hi_cp . "&hd_pob=" . $hi_pob . "&hd_pais=" . $hi_pais . "&hd_prov=" . $hi_prov ;
$text = $text . "'>Crear Usuario</a></DIV></FONT></BODY></HTML>";

mail($emilio,"Usuario www.nelosa.net",$text,"From: <usuarios@nelosa.net>");
*/

$usr = str_replace ( " ", "%20", $hi_usr );
$pwd = str_replace ( " ", "%20", $hi_pwd );
$nom = str_replace ( " ", "%20", $hi_nom );
$ape1 = str_replace ( " ", "%20", $hi_ape1 );
$tel = str_replace ( " ", "%20", $hi_tel );
$ape2 = str_replace ( " ", "%20", $hi_ape2 );
$doc = str_replace ( " ", "%20", $hi_doc );
$empresa = str_replace ( " ", "%20", $hi_empresa );
$cp = str_replace ( " ", "%20", $hi_cp );
$pob = str_replace ( " ", "%20", $hi_pob );
$pais = str_replace ( " ", "%20", $hi_pais );
$prov = str_replace ( " ", "%20", $hi_prov );
$adr = str_replace ( " ", "%20", $hi_adr );
//echo "<BR>bar: " . $bar ."<BR>";
$text = "Pinche en el siguiente link, o copielo en la barra de direccion del navegador\npara finalizar el proceso de creacion del usuario\n";
$text = $text . "http://www.nelosa.net/gueb/paginas/club/validationpages/doneUser.php?hd_usr=" .
 $usr . "&hd_pwd=" . $pwd . "&hd_nom=" . $nom . "&hd_ape1=" . $ape1 . "&hd_tel=" . $tel . "&hd_ape2=" .
  $ape2 .  "&hd_doc=" . $doc ."&hd_empresa=" . $empresa . "&hd_cp=" . $cp . "&hd_pob=" . $pob . "&hd_pais=" .
   $pais . "&hd_prov=" . $prov . "&hd_adr=" . $adr  ;
$text = $text . "\n\nReciba un cordial saludo";

			
			$m = new Mail(); // create the mail
					
			$m->From( "creacion.usuarios@nelosa.net" ) ; 
			$m->To( $hi_usr ) ;
			$m->Subject( "Usuario www.nelosa.net" ) ;
			$m->Body( $text ); 
			$m->Send(); // send the mail */
			
			$m = new Mail(); // create the mail
					
			$m->From( "creacion.usuarios@nelosa.net" ) ; 
			$m->To( "emiki@nelosa.net" ) ;
			$m->Subject( "Usuario www.nelosa.net" ) ;
			$m->Body( $text ); 
			$m->Send(); // send the mail */
?>
          <a class="AZUL" href="../../../index.php"><img src="../../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a>		  </p>
          <table width="100%"  border="0">
            <tr>
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