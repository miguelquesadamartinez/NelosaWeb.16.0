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
          <p>El Foro de la Recarga </p>
          <form name="form1" method="post" action="responder-2.php">
            <table width="654" border="0" align="center" bgcolor="#FFFFCC">
              <tr>
                <td width="883"><div align="center">Responder a una consulta </div></td>
              </tr>
            </table>
            <?php 
require_once("../../../inc/funciones/Funciones_PHP.php");
$link=conectarse();  

$result=mysql_query("Select * From foro_index where indise = " . $indise,$link); 
$row = mysql_fetch_array($result);
		$text=(string)$row["text"];
		$asunto=(string)$row["asunto"];
		$email=(string)$row["email"];
		$ind=(string)$row["indise"];
	
?>
            <table width="654" border="0" align="center">
              <tr align="center" valign="middle">
                <td bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr align="center" valign="middle">
                <td bgcolor="#FFFFFF"><p><?php echo $asunto ; ?></p></td>
              </tr>
              <tr align="center" valign="middle">
                <td width="875" bgcolor="#FFFFFF"><?php echo $text ; ?></td>
              </tr>
              <tr align="center" valign="middle">
                <td bgcolor="#FFFFFF"><br>
                Respuesta<br>
                <input name="hidden" type="hidden" id="hidden" value="<?php echo $indise ?>">
                <textarea name="resp" cols="75" rows="6" id="resp"></textarea></td>
              </tr>
              <tr align="center" valign="middle">
                <td bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr align="center" valign="middle">
                <td bgcolor="#FFFFFF"><input type="submit" name="Submit" value="Enviar"></td>
              </tr>
              <tr align="center" valign="middle">
                <td bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr align="center" valign="middle">
                <td bgcolor="#FFFFFF"><a href="index.php"><img src="../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></td>
              </tr>
            </table>
          </form>
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
