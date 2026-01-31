<?php 
require_once ( "../../../inc/headers/vbles_sesion.php" );
$tipo = "inkjet" ;
?>
<HTML><HEAD>
<TITLE>Subscripcion mailing Nelosa</title>
<meta name="title" content=""/>
<meta http-equiv="title" content=""/>
<meta name="DC.Title" content=""/>

<meta name="description" content="">
<meta http-equiv="description" content="">
<meta http-equiv="DC.Description" content="">

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta name="keywords" content=""/>
<meta http-equiv="keywords" content=""/>


<LINK REL="stylesheet" HREF="../../../inc/css/styles.css" TYPE="text/css">
</HEAD>
<body bgcolor="#000099">
<div align="center">
  <table width="650" border="0">
    <tr>
      <td><div align="center"><a href="../../index.php"><img src="../../../img/diseno.paginas/botones/home.gif" width="89" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="index.php"><img src="../../../img/diseno.paginas/botones/prods.gif" width="119" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../instrucciones/index.php"><img src="../../../img/diseno.paginas/botones/ins.gif" width="132" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../varias/comprar.php"><img src="../../../img/diseno.paginas/botones/comprar.gif" width="99" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../varias/soporte.php"><img src="../../../img/diseno.paginas/botones/soporte.gif" width="96" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../club/index.php"><img src="../../../img/diseno.paginas/botones/club.gif" width="88" height="29" border="0"></a></div></td>
    </tr>
  </table>
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
  <?php 
require_once ('../../../page.parts/med.menu.php'); 
?>

  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../../img/diseno.paginas/base/arriba-down.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="745" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13" bgcolor="#FFFFFF"><div align="center">
          <table width="100%"  border="0">
            <tr>
              <td height="95" valign="top"><div align="center">
                  <p>&nbsp;</p>
                  <p align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Mailing consejos y novedades recarga de cartuchos Ink-Jet</font></strong></p>
                  <p align="center">
                    <?php
require_once("../../../inc/funciones/Funciones_PHP.php");

$link=conectarse();

$db="emails";
//$result=mysql_query("Select * From emails Where email = '" . $email . "')" ,$link);   
//$row = mysql_fetch_array($result);
//$emi=(string)$row["Ins"];
//if ($emi!="")
//{		
	$result=mysql_query("Insert Into " . $db . " (email) VALUES('" . $email . "')" ,$link);   
//}
?>
</p>
                  <p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>La direccion de correo electronico <?php echo $email ; ?> ha sido insertada en nuestra base de datos,<BR>
  para su utilizaci&oacute;n en el mailing de consejos y novedades para la recarga de cartuchos Ink-Jet.</strong></font></p>
                  <p align="center"><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">Atentamente</font></strong></p>
                  <?php require_once("../../../inc/funciones/Funciones_JavaScript.miki"); 
mysql_free_result($result);  
mysql_close($link);?>
<p align="center">&nbsp;</p>
              </div></td>
            </tr>
          </table>
      </div></td>
    </tr>
  </table>
<?php 
require_once ('../../../page.parts/down.php'); 
?>
</div>
</BODY>
</HTML>