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
          <p align="left">&nbsp; </p>
      </div></td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
</div>

<p align="center">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</p>
<p>&nbsp;</p>
</BODY></HTML>
<?php 
$link=conectarse();  
$link_2=conectarse();  
$link_3=conectarse();  
//Insrtamos la respuesta que viene del email
mysql_query("Insert Into foro_resp (email,indise,texto) VALUES('" . $email . "'," . $indise . ",'" . $texto . "')",$link);	

echo "Insert Into foro_resp (email,indise,texto) VALUES('" . $email . "'," . $indise . ",'" . $texto . "')" ;

//echo "Select * From foro_index where indise = " . $indise ;
//Obtenemos el asunto
$result_2=mysql_query("Select * From foro_index where indise = " . $indise ,$link_2); 
$row_2 = mysql_fetch_array($result_2) ;
$asunto=(string)$row_2["asunto"];

//Obtenemos la respuesta
$result_3=mysql_query("Select * From foro_resp where indise = " . $indise ,$link_3); 
$row_3 = mysql_fetch_array($result_3) ;
$resp=(string)$row_3["texto"];

// Por cada email que tenga ese indice enviamos un email con la respuesta
$result=mysql_query("Select * From foro_aviso where indise = " . $indise ,$link); 
while($row = mysql_fetch_array($result)) 
	{ 
		$email=(string)$row["email"];
			//$resp2 = ereg_replace( " ", "%20", $resp );
		if ($email != "" )
		{
			$filon = "Como solicito en el foro de la web www.nelosa.net recibe \nla respuesta a la pregunta de: \n" . $asunto . " \n" . $resp ;
			
			$m = new Mail(); // create the mail
					
			$m->From( "avisos_foro@nelosa.net" ) ; 
			$m->To( $email ) ;
			$m->Subject( "Respuesta del foro para " . $asunto ) ;
			$m->Body( $filon ); 
			$m->Send(); // send the mail */
		}
	}
?>
