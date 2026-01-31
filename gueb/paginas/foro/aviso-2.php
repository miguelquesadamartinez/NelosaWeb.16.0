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
          <p>Solicitar aviso para una respuesta</p>
          <table width="654" border="0" align="center">
            <?php 
require_once("../../../inc/funciones/Funciones_PHP.php");
require_once "../../eMiKi/libmail.php";
$link=conectarse();  
$link_2=conectarse();  
mysql_query("Insert Into foro_aviso (indise,email) VALUES (" . $ind . ",'" . $emilio . "')",$link);	
      
	  //echo ("Insert Into foro_aviso (indise,email) VALUES (" . $ind . ",'" . $emilio . "')" );

$result_2=mysql_query("Select * From foro_index where indise = " . $ind,$link_2); 
$row_2 = mysql_fetch_array($result_2) ;
$asunto=(string)$row_2["asunto"];

$result=mysql_query("Select * From foro_resp where indise = " . $ind,$link); 

while($row = mysql_fetch_array($result)) 
	{ 
		$texto=(string)$row["texto"];
			
			$filon = "Respuestas del foro de la web www.nelosa.net \n a la pregunta : \n" . $asunto . " \n" . $texto ;
			
			$m = new Mail(); // create the mail
					
			$m->From( "avisos_foro@nelosa.net" ) ; 
			$m->To( $emilio ) ;
			$m->Subject( "Respuesta del foro para " . $asunto ) ;
			$m->Body( $filon ); 
			$m->Send(); // send the mail */
	}
?>
            <tr align="center" valign="middle">
              <td>&nbsp;</td>
            </tr>
            <tr align="center" valign="middle">
              <td><p>Su solicitud ha sido cursada, ahora recibira, si las hay, todas las respuestas </p></td>
            </tr>
            <tr align="center" valign="middle">
              <td width="875">y en el futuro recibira emails con las respuestas del foro </td>
            </tr>
            <tr align="center" valign="middle">
              <td>&nbsp;</td>
            </tr>
          </table>
          <p><a href="index.php"><img src="../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
          <p align="left">&nbsp; </p>
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
