<?php 
require_once ( "../../eMiKi/headers/vbles_sesion.php" );
require_once ( "../../eMiKi/libmail2.php" ) ;
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Soporte tecnico</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15"/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>
<?php 
if ( $usr == "" ){ 
		//echo ('<meta http-equiv="refresh" content="0;url=../varias/restricted.php">'); 
	}?>

</HEAD>

<body bgcolor="#000099">
<div align="center">
  <div align="center">
    <table width="650" border="0">
      <tr>
        <td><div align="center"><a href="../../../index.php"><img src="../../../../img/diseno.paginas/botones/home.gif" width="89" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="../../productos/index.php"><img src="../../../../img/diseno.paginas/botones/prods.gif" width="119" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="../../instrucciones/index.php"><img src="../../../../img/diseno.paginas/botones/ins.gif" width="132" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="../../varias/comprar.php"><img src="../../../../img/diseno.paginas/botones/comprar.gif" width="99" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="../../varias/soporte.php"><img src="../../../../img/diseno.paginas/botones/soporte.gif" width="96" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="../index.php"><img src="../../../../img/diseno.paginas/botones/club.gif" width="88" height="29" border="0"></a></div></td>
      </tr>
    </table>
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
    <table width="765" border="0" bgcolor="#FFFF00">
      <tr>
        <td><table width="99%"  border="0" align="center">
            <tr>
              <td width="15%"><div align="center"><a href="../../varias/about.php">Quien somos</a></div></td>
              <td width="29%"><div align="center"><a href="../../stp/index.php">Servicio Tecnico Paralelo </a></div></td>
              <td width="30%"><div align="center"><a href="../../instrucciones/aa.procedures/index.php">Sistemas Anti Recarga </a></div></td>
              <td width="26%"><div align="center"><a href="../../Mailing/index.php">Alta / Baja Mailing </a></div></td>
            </tr>
            <tr>
              <td><div align="center"><a href="../../varias/donde.php">Donde estamos </a></div></td>
              <td><div align="center"><a href="../../varias/software.php">Software para printables</a></div></td>
              <td><div align="center"><a href="../../rincon/index.php">Rincon Tecnico </a></div></td>
              <td><div align="center"><a href="../../distris/index.php">Acceso Tiendas y Distribuidores </a></div></td>
            </tr>
        </table></td>
      </tr>
    </table>
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
                <td height="95" valign="top"><p>&nbsp;</p>
                    <div align="center">
                      <form name="Formulario_1" id="Formulario_1" method="post" action="RespProp.php" onSubmit="return validarDatos_1()">
                        <table width="650" border="1" align="center">
                          <tr>
                            <td> <font face="Arial, Helvetica, sans-serif" size="2"><b>Contrato de Venta // Sales Contract</b></font></td>
                            <td bgcolor="#FFFF00">
                              <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"><b>Calcule primero el pedido ! ! </b></font>
                                  <input type="submit" name="BT_Enviar" value="Enviar pedido">
                            </div></td>
                          </tr>
                        </table>
                        <table width="650" border="1" align="center">
                          <tr>
                            <td rowspan="5" bgcolor="#FFFFFF" width="162"><img src="../images/UpFac.jpg" width="169" height="220"></td>
                            <td width="263"><b><font face="Arial, Helvetica, sans-serif" size="2">Compa&ntilde;&iacute;a
                                    <input type="text" name="compania" size="20" value="<?php echo $t6;?>">
                            </font></b></td>
                            <td width="203"><b><font face="Arial, Helvetica, sans-serif" size="2">Fecha
                                    <input type="text" name="fecha" value="<?php echo Date("d-m-Y");?>">
                            </font></b></td>
                          </tr>
                          <tr>
                            <td colspan="2"><b><font face="Arial, Helvetica, sans-serif" size="2">C.I.F.
                                    <input type="text" name="cif" size="12" value="<?php echo $t5;?>">
        Persona Contacto
        <input type="text" name="contacto" size="25" value="<?php echo $t1 . " " . $t2;?>">
                            </font></b></td>
                          </tr>
                          <tr>
                            <td colspan="2"><b><font face="Arial, Helvetica, sans-serif" size="2">Direcci&oacute;n
                                    <textarea name="direccion" cols="40" ?php echo $t7;?></textarea>
                                    <input type="hidden" name="chkPed">
                            </font></b></td>
                          </tr>
                          <tr>
                            <td colspan="2" height="54">
                              <p> <b><font face="Arial, Helvetica, sans-serif" size="2"> Pais
                                      <input type="text" name="pais" size="12" value="<?php echo $tpais;?>">
          Provincia
          <input type="text" name="prov" size="12" value="<?php echo $t10;?>">
          C.P
          <input type="text" name="cp" size="10" value="<?php echo $t8;?>">
                            </font> </b> </td>
                          </tr>
                          <tr>
                            <td colspan="2"><b><font face="Arial, Helvetica, sans-serif" size="2">Tel
                                    <input type="text" name="tel" size="12" value="<?php echo $t3;?>">
        Fax
        <input type="text" name="fax" size="12">
        email
        <input type="text" name="email" value="<?php echo $t0;?>">
                            </font></b></td>
                          </tr>
                        </table>
                      </form>
                      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1">Rellene la cantidad, pulse calcular y depues rellene sus datos, para finalizar pulsando enviar pedido </font></div>
                      <form name="Formulario_2" id="Formulario_2" method="post" action="" onSubmit="return validarDatos_2()">
                        <div align="center"> </div>
                        <table width="650" border="1" align="center">
                          <tr>
                            <td height="29" width="6%">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b>Ref.</b></font></div></td>
                            <td height="29" width="7%">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif">Und&acute;s</font></div></td>
                            <td height="29" width="73%">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><font color="#FF0000">Recargas Universales Ink-Jet <strong>@</strong> Soportes impresion Ink-Jet / L&aacute;ser <strong>@</strong> Accesorios Audio Video - informatica - C.D. - D.V.D.</font></font></div></td>
                            <td height="29" width="7%">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif">Precio<br>
          Und</font></div></td>
                            <td height="29" width="7%">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b>Total</b></font></div></td>
                          </tr>
                          <tr>
                            <td height="29" width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">3197</font></b></font></div></td>
                            <td height="29" width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t3197" maxlength="3" size="3" value=<?php if ($t3197>"0" ) {echo $t3197; }?>>
                            </font></div></td>
                            <td height="29" width="73%"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Recarga Universal Ink-Jet Negro</font></td>
                            <td height="29" width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '3197'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td height="29" width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p3197!="") { echo $p3197 * $Presio; $Total=(float)$Total + $p3197 * $Presio; } else echo "0"; ?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">3198</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t3198" maxlength="3" size="3" value=<?php if ($t3198>"0") {echo $t3198; }?>>
                            </font></div></td>
                            <td width="73%"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Recarga Universal Ink-Jet Color</font></td>
                            <td width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '3198'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p3198!=""){ echo $p3198 * $Presio; $Total=(float)$Total + $p3198 * $Presio; } else echo "0";  ?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">3199</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t3199" maxlength="3" size="3" value=<?php if ($t3199>"0") {echo $t3199; }?>>
                            </font></div></td>
                            <td width="73%"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Kit Recarga Universal Ink-Jet Negro / Color</font></td>
                            <td width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '3199'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p3199!="") { echo $p3199 * $Presio;  $Total=(float)$Total + $p3199 * $Presio; } else echo "0"; ?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">3200</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t3200" maxlength="3" size="3" value=<?php if ($t3200>"0") {echo $t3200; }?>>
                            </font></div></td>
                            <td width="73%"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Recarga Ink-Jet Photo</font></td>
                            <td width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '3200'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p3200!="") { echo $p3200 * $Presio; $Total=(float)$Total + $p3200 * $Presio; }else echo "0"; ?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">3201</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t3201" maxlength="3" size="3" value=<?php if ($t3201>"0") {echo $t3201; }?>>
                            </font></div></td>
                            <td width="73%"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Recarga Ink-Jet Black 50 ml</font></td>
                            <td width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '3201'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p3201!="") { echo $p3201 * $Presio;$Total=(float)$Total +  $p3201 * $Presio;} else echo "0";    ?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">3202</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t3202" maxlength="3" size="3" value=<?php if ($t3202>"0") {echo $t3202; }?>>
                            </font></div></td>
                            <td width="73%"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Recarga Ink-Jet Yellow 50 ml</font></td>
                            <td width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '3202'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p3202!="") { echo $p3202 * $Presio;  $Total=(float)$Total + $p3202 * $Presio; }  else echo "0"; ?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">3203</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t3203" maxlength="3" size="3" value=<?php if ($t3203>"0") {echo $t3203; }?>>
                            </font></div></td>
                            <td width="73%"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Recarga Ink-Jet Cyan 50 ml</font></td>
                            <td width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '3203'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p3203!="") { echo $p3203 * $Presio;  $Total=(float)$Total + $p3203 * $Presio; } else echo "0"; ?>
                                <php //406------------------ ?> </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">3204</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t3204" maxlength="3" size="3" value=<?php if ($t3204>"0") {echo $t3204; }?>>
                            </font></div></td>
                            <td width="73%"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Recarga Ink-Jet Magenta 50 ml</font></td>
                            <td width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '3204'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p3203!="") { echo $p3204 * $Presio;  $Total=(float)$Total + $p3204 * $Presio;  }else echo "0"; ?>
                                <php //426------------------ ?> </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%" height="36">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">3121</font></b></font></div></td>
                            <td width="7%" height="36">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t3121" maxlength="3" size="3" value=<?php if ($t3121>"0") {echo $t3121; }?>>
                            </font></div></td>
                            <td width="73%" height="36">
                              <div align="left"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Personal Print 60 Etiquetas para C.D.</font></div></td>
                            <td width="7%" height="36">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '3121'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td width="7%" height="36">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p3121!="") { echo $p3121 * $Presio; $Total=(float)$Total + $p3121 * $Presio; }  else echo "0"; ?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">3178</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t3178" maxlength="3" size="3" value=<?php if ($t3178>"0") {echo $t3178; }?>>
                            </font></div></td>
                            <td width="73%">
                              <div align="left"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Dise&ntilde;a e imprime Tarjetas de Visita + C.D.-ROM</font></div></td>
                            <td width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '3178'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p3178!="") { echo $p3178 * $Presio;$Total=(float)$Total + $p3178 * $Presio;} else echo "0";   ?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">8015</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t8015" maxlength="3" size="3" value=<?php if ($t8015>"0") {echo $t8015; }?>>
                            </font></div></td>
                            <td width="73%">
                              <div align="left"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Universal Photo Paper&nbsp; 10 Hojas A4, 170 gramos 1440 dpi</font></div></td>
                            <td width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '8015'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p8015!="") { echo $p8015 * $Presio; $Total=(float)$Total + $p8015 * $Presio; } else echo "0";  ?>
                                <php //484------------------ ?> </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">8016</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t8016" maxlength="3" size="3" value=<?php if ($t8016>"0") {echo $t8016; }?>>
                            </font></div></td>
                            <td width="73%">
                              <div align="left"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Universal Photo Paper&nbsp; 20 Hojas A4, 130 gramos 720 dpi</font></div></td>
                            <td width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '8016'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p8016!="") { echo $p8016 * $Presio; $Total=(float)$Total + $p8016 * $Presio; } else echo "0";  ?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">8017</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t8017" maxlength="3" size="3" value=<?php if ($t8017>"0") {echo $t8017; }?>>
                            </font></div></td>
                            <td width="73%">
                              <div align="left"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Universal Photo Paper&nbsp; 10 Hojas A4, 140 gramos doble cara 1440 dpi</font></div></td>
                            <td width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '8017'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p8017!="") { echo $p8017 * $Presio; $Total=(float)$Total + $p8017 * $Presio; } else echo "0";  ?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">3190</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t3190" maxlength="3" size="3" value=<?php if ($t3190>"0") {echo $t3190; }?>>
                            </font></div></td>
                            <td width="73%">
                              <div align="left"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">24 C.D. Inlays</font></div></td>
                            <td width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '3190'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p3190!=""){ echo $p3190 * $Presio; $Total=(float)$Total + $p3190 * $Presio; } else echo "0";  ?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">9017</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t9017" maxlength="3" size="3" value=<?php if ($t9017>"0") {echo $t9017; }?>>
                            </font></div></td>
                            <td width="73%">
                              <div align="left"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">60 Tarjetas de Visita Dobles:</font></div></td>
                            <td width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '9017'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p9017!="") { echo $p9017 * $Presio;$Total=(float)$Total + $p9017 * $Presio; } else echo "0";   ?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">7005</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t7005" maxlength="3" size="3" value=<?php if ($t7005>"0") {echo $t7005; }?>>
                            </font></div></td>
                            <td width="73%">
                              <div align="left"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Kit party</font></div></td>
                            <td width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '7005'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p7005!="") { echo $p7005 * $Presio;$Total=(float)$Total + $p7005 * $Presio; } else echo "0";   ?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">9001</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t9001" maxlength="3" size="3" value=<?php if ($t9001>"0") {echo $t9001; }?>>
                            </font></div></td>
                            <td width="73%">
                              <div align="left"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">36 tarjetas + 24 etiquetas + Software + 36 Sobres</font></div></td>
                            <td width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '9001'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p9001!="") { echo $p9001 * $Presio;$Total=(float)$Total + $p9001 * $Presio; } else echo "0"; ?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">9009</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <input type="text" name="t9009" maxlength="3" size="3" value=<?php if ($t9009>"0") {echo $t9009; }?>>
                            </font></div></td>
                            <td width="73%">
                              <div align="left"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">30 Greetings + 30 Sobres + Software</font></div></td>
                            <td width="7%">
                              <div align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '9009'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></div></td>
                            <td width="7%">
                              <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2">
                                <?php if ($p9009!="") { echo $p9009 * $Presio;  $Total=(float)$Total + $p9009 * $Presio; } else echo "0";  ?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">9073</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <input type="text" name="t9073" maxlength="3" size="3" value=<?php if ($t9073>"0") {echo $t9073; }?>>
                            </font></font></font></div></td>
                            <td width="73%">
                              <div align="left"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">15 Estuches regalo o recuerdo:</font><font face="Arial, Helvetica, sans-serif"></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '9073'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <?php if ($p9073!="") {  echo $p9073 * $Presio;  $Total=(float)$Total + $p9073 * $Presio; } else echo "0"; ?>
                            </font></font></font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">7010</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <input type="text" name="t7010" maxlength="3" size="3" value=<?php if ($t7010>"0") {echo $t7010; }?>>
                            </font></font></font></div></td>
                            <td width="73%">
                              <div align="left"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">36 tarjetas + 24 etiquetas + 36 sobres para fiesta</font><font face="Arial, Helvetica, sans-serif"></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '7010'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font><font face="Arial, Helvetica, sans-serif"></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <?php if ($p7010!="") { echo $p7010 * $Presio; $Total=(float)$Total + $p7010 * $Presio; } else echo "0";  ?>
                            </font></font></font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">8006</font></b></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <input type="text" name="t8006" maxlength="3" size="3" value=<?php if ($t8006>"0") {echo $t8006; }?>>
                            </font></font></font></div></td>
                            <td width="73%">
                              <div align="left"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">50 Hojas papel especial decorado</font><font face="Arial, Helvetica, sans-serif"></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '8006'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <?php if ($p8006!="") { echo $p8006 * $Presio; $Total=(float)$Total + $p8006 * $Presio; } else echo "0"; ?>
                            </font></font></font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">9033</font></b></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <input type="text" name="t9033" maxlength="3" size="3" value=<?php if ($t9033>"0") {echo $t9033; }?>>
                            </font></font></font></div></td>
                            <td width="73%">
                              <div align="left"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">15 Greetings + 15 Sobres + Software</font><font face="Arial, Helvetica, sans-serif"></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '9033'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <?php if ($p9033!="") {echo $p9033 * $Presio;  $Total=(float)$Total + $p9033 * $Presio;  } else echo "0";  ?>
                            </font></font></font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">8005</font></b></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <input type="text" name="t8005" maxlength="3" size="3" value=<?php if ($t8005>"0") {echo $t8005; }?>>
                                <php //751------------------ ?> </font></font></font></div></td>
                            <td width="73%">
                              <div align="left"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">BANNER Papel continuo para letreros</font><font face="Arial, Helvetica, sans-serif"></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '8005'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <?php if ($p8005!="") { echo $p8005 * $Presio; $Total=(float)$Total + $p8005 * $Presio; } else echo "0";  ?>
                            </font></font></font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">8012</font></b></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <input type="text" name="t8012" maxlength="3" size="3" value=<?php if ($t8012>"0") {echo $t8012; }?>>
                            </font></font></font></div></td>
                            <td width="73%">
                              <div align="left"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Kit Puzzle</font><font face="Arial, Helvetica, sans-serif"></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '8012'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <?php if ($p8012!="") { echo $p8012 * $Presio; $Total=(float)$Total + $p8012 * $Presio; } else echo "0";  ?>
                            </font></font></font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">8010</font></b></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <input type="text" name="t8010" maxlength="3" size="3" value=<?php if ($t8010>"0") {echo $t8010; }?>>
                            </font></font></font></div></td>
                            <td width="73%">
                              <div align="left"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Kit album digital</font><font face="Arial, Helvetica, sans-serif"></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '8010'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <?php if ($p8010!="") { echo $p8010 * $Presio; $Total=(float)$Total + $p8010 * $Presio; } else echo "0";  ?>
                            </font></font></font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">3120</font></b></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <input type="text" name="t3120" maxlength="3" size="3" value=<?php if ($t3120>"0") {echo $t3120; }?>>
                            </font></font></font></div></td>
                            <td width="73%">
                              <div align="left"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">C.D.-ROM Limpiador interactivo</font><font face="Arial, Helvetica, sans-serif"></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '3120'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <?php if ($p3120!="") { echo $p3120 * $Presio; $Total=(float)$Total + $p3120 * $Presio; } else echo "0";  ?>
                                <php //829------------------ ?> </font></font></font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#0000FF">0128</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2">
                                <input type="text" name="t0128" maxlength="3" size="3" value=<?php if ($t0128>"0") {echo $t0128; }?>>
                            </font></font></font></div></td>
                            <td width="73%">
                              <div align="left"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">2 archivos de 24 C.D.&acute;s</font><font size="2"></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '0128'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2">
                                <?php if ($p0128!="") { echo $p0128 * $Presio; $Total=(float)$Total + $p0128 * $Presio; } else echo "0";  ?>
                            </font></font></font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">0129</font></b></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2">
                                <input type="text" name="t0129" maxlength="3" size="3" value=<?php if ($t0129>"0") {echo $t0129; }?>>
                            </font></font></font></div></td>
                            <td width="73%">
                              <div align="left"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Dis Man Plus</font><font size="2"></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '0129'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2">
                                <?php if ($p0129!="") { echo $p0129 * $Presio; $Total=(float)$Total + $p0129 * $Presio; } else echo "0";  ?>
                            </font></font></font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">0131</font></b></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2">
                                <input type="text" name="t0131" maxlength="3" size="3" value=<?php if ($t0131>"0") {echo $t0131; }?>>
                            </font></font></font></div></td>
                            <td width="73%">
                              <div align="left"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">D.J. C.D. BOX 12 C.D.&acute;s</font><font size="2"></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '0131'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2">
                                <?php if ($p0131!="") { echo $p0131 * $Presio; $Total=(float)$Total + $p0131 * $Presio; } else echo "0";  ?>
                            </font></font></font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">0133</font></b></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2">
                                <input type="text" name="t0133" maxlength="3" size="3" value=<?php if ($t0133>"0") {echo $t0133; }?>>
                            </font></font></font></div></td>
                            <td width="73%">
                              <div align="left"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">D.J. C.D. BOX 48 C.D.&acute;s</font><font size="2"></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '0133'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2">
                                <?php if ($p0133!="") { echo $p0133 * $Presio; $Total=(float)$Total + $p0133 * $Presio; } else echo "0";  ?>
                            </font></font></font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">1155</font></b></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2">
                                <input type="text" name="t1155" maxlength="3" size="3" value=<?php if ($t1155>"0") {echo $t1155; }?>>
                            </font></font></font></div></td>
                            <td width="73%">
                              <div align="left"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">D.V.D. Limpiador lente laser</font><font size="2"></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '1155'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2">
                                <?php if ($p1155!="") { echo $p1155 * $Presio; $Total=(float)$Total + $p1155 * $Presio; } else echo "0";  ?>
                            </font></font></font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">0122</font></b></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2">
                                <input type="text" name="t0122" maxlength="3" size="3" value=<?php if ($t0122>"0") {echo $t0122; }?>>
                            </font></font></font></div></td>
                            <td width="73%">
                              <div align="left"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Kit limpiador lente laser</font><font size="2"></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '0122'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2">
                                <?php if ($p0122!="") { echo $p0122 * $Presio;$Total=(float)$Total + $p0122 * $Presio; } else echo "0";   ?>
                            </font></font></font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2"><b><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">3177</font></b></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2">
                                <input type="text" name="t3177" maxlength="3" size="3" value=<?php if ($t3177>"0") {echo $t3177; }?>>
                            </font></font></font></div></td>
                            <td width="73%">
                              <div align="left"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">Ordena cables</font><font size="2"></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '3177'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2">
                                <?php if ($p3177!="") { echo $p3177 * $Presio; $Total=(float)$Total + $p3177 * $Presio; } else echo "0"; ?>
                                <php //979------------------ ?> </font></font></font></div></td>
                          </tr>
                          <tr>
                            <td width="6%">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">0127</font></b></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <input type="text" name="t0127" maxlength="3" size="3" value=<?php if ($t0127>"0") {echo $t0127; }?>>
                            </font></font></font></div></td>
                            <td width="73%">
                              <div align="left"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">50 Sobres para C.D.</font><font face="Arial, Helvetica, sans-serif"></font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="2">
                                <?php 
$result=mysql_query("Select precio_nelosa From prods Where Ref = '0127'",$link);
$row = mysql_fetch_array($result);
$Presio=$row["precio_nelosa"];
echo $Presio ;
?>
                            </font></font></font></div></td>
                            <td width="7%">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">
                                <?php if ($p0127!="") { echo $p0127 * $Presio; $Total=(float)$Total + $p0127 * $Presio; } else echo "0";  ?>
                            </font></font></font></div></td>
                          </tr>
                        </table>
                        <table width="650" border="1" align="center">
                          <tr>
                            <td width="152">
                              <div align="center"><font color="#FF0000" size="2" face="Arial, Helvetica, sans-serif"><b>Condiciones Venta</b></font></div></td>
                            <td colspan="3">
                              <div align="center"><font color="#FF0000" size="2" face="Arial, Helvetica, sans-serif"><b>Descuento seg&uacute;n compra </b><font color="#0000FF">(Seleccione una opcion)</font></font></div></td>
                            <td width="110">
                              <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Valor pedido</font></b></font></div></td>
                            <td width="55">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"> <?php echo $Total; ?> </font></div></td>
                          </tr>
                          <tr>
                            <td width="152">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif">Descuento seg&uacute;n compra</font></div></td>
                            <td width="163" bgcolor="#FFFF00">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b>Peninsula/Baleares
                                      <input type="checkbox" name="chk1" value="chk1" <?php if (isset($chk1))echo "checked";?> >
                            </b></font></div></td>
                            <td width="93" bgcolor="#FFFF00">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif"><b>Canarias
                                          <input type="checkbox" name="chk2" value="chk2" <?php if (isset($chk2))echo "checked";?> >
                            </b></font></font></font></div></td>
                            <td width="37">
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b>Dto.</b></font></div></td>
                            <td width="110">
                              <div align="right"><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif">Descuento</font><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font><font size="2" face="Arial, Helvetica, sans-serif">
                                <?php

     if ($chk1=="chk1")
     {
           if ($Total < 250){ $DtoPer=25; }
		   elseif ($Total >= 251 && $Total <= 400 ){ $DtoPer="27"; }
		   elseif ($Total >= 401 && $Total <= 600 ){ $DtoPer="29"; }
		   elseif ($Total >= 601 && $Total <= 1000 ){ $DtoPer="31"; }
		   else { $DtoPer="33"; }  
     }

     if ($chk2=="chk2")
     {
           if ($Total < 300){ $DtoPer=25; }
		   elseif ($Total >= 301 && $Total <= 600 ){ $DtoPer="27"; }
		   elseif ($Total >= 601 && $Total <= 1000 ){ $DtoPer="29"; }
		   elseif ($Total >= 1001 && $Total <= 1500 ){ $DtoPer="31"; }
		   else { $DtoPer="33"; }     
     }
	echo $DtoPer . "%" ;
	$DtoPer_Int=(int)$DtoPer; 
?>
                            </font></div></td>
                            <td width="55">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif">
                                <?php 
$Dto = $Total * $DtoPer_Int / 100 ;
$Dto=round ($Dto, 2);  
$Dto_S=(string)$Dto;
echo $Dto_S; ?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="152" height="21" bgcolor="#CCFFCC">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#FF0000">Portes pagados</font></b></font></div></td>
                            <td width="163" height="21" bgcolor="#CCFFCC">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif"><b>Exp. Minima<font color="#FF0000"> 250 &euro;</font></b></font></font></font></div></td>
                            <td width="93" height="21" bgcolor="#CCFFCC">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif"><b><font color="#FF0000">300 &euro;</font></b></font></font></font></div></td>
                            <td width="37" height="21">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#FF0000">25 %</font></b></font></div></td>
                            <td width="110" height="21">
                              <div align="right"><font size="2" face="Arial, Helvetica, sans-serif">Base imponible</font></div></td>
                            <td width="55" height="21">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif">
                                <?php 
$B_I=(float)$Total-$Dto; 
echo $B_I;?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="152">
                              <div align="center"></div></td>
                            <td width="163">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">de 251 a 400 &euro;</font></font></font></div></td>
                            <td width="93">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">301 - 600 &euro;</font></font></font></div></td>
                            <td width="37">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#FF0000">27 %</font></b></font></div></td>
                            <td width="110">
                              <div align="right"><font size="2" face="Arial, Helvetica, sans-serif">IVA&nbsp;&nbsp; + 16 %</font></div></td>
                            <td width="55">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif">
                                <?php 
$IVA=$B_I * 16 / 100 ;
$IVA=round ($IVA, 2);  
echo $IVA ;?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="152">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font color="#000000"><font face="Arial, Helvetica, sans-serif" color="#FF0000" size="2"><b>Forma de pago</b></font><b><font color="#FF0000"></font></b></font></font></div></td>
                            <td width="163">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">de 401 a 600 &euro;</font></font></font></div></td>
                            <td width="93">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">601-1000 &euro;</font></font></font></div></td>
                            <td width="37">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#FF0000">29 %</font></b></font></div></td>
                            <td width="110" bgcolor="#FFFF00">
                              <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>R.E. + 4 %</b></font><b><font size="2" face="Arial, Helvetica, sans-serif"> </font></b><font size="2" face="Arial, Helvetica, sans-serif">
                    <input type="checkbox" name="chk3" value="chk3" <?php if (isset($chk3))echo "checked";?> >
                </font></div></td>
                            <td width="55">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif">
                                <?php 
if (isset($chk3))
{
     $Recargo=$B_I *  4 / 100 ;
     $Recargo=round ($Recargo, 2);  
     echo $Recargo ;
}
else
{
    echo "0";
    $Recargo=0;
}?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="152" bgcolor="#FFFF00">
                              <div align="center"><font face="Arial, Helvetica, sans-serif"><font color="#000000"><font color="#0000FF"><font face="Arial, Helvetica, sans-serif"><font color="#000000"><font color="#0000FF"><font size="2">
                                <input type="checkbox" name="chk4" value="chk4" <?php if (isset($chk4))echo "checked";?> >
                                <b>Transferencia</b></font></font></font></font><font size="2"> </font></font></font></font></div></td>
                            <td width="163">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">de 601 a 1000 &euro;</font></font></font></div></td>
                            <td width="93">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">1001-1500 &euro;</font></font></font></div></td>
                            <td width="37">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#FF0000">31 %</font></b></font></div></td>
                            <td width="110">
                              <div align="right"><font size="2" face="Arial, Helvetica, sans-serif">Gastos Envio</font></div></td>
                            <td width="55">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif">
                                <?php 
if ($Total<250)
{
     $Gastos=6 ;
	 echo $Gastos; 
}
else
{
     $Gastos=0;
	 echo $Gastos;      
}
?>
                            </font></div></td>
                          </tr>
                          <tr>
                            <td width="152" bgcolor="#FFFF00">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#000000"><font color="#0000FF"><font face="Arial, Helvetica, sans-serif"><font color="#000000"><font color="#0000FF"><font size="2">
                                <input type="checkbox" name="chk5" value="chk5" <?php if (isset($chk5))echo "checked";?> >
                                <b>Contrarrembolso</b></font></font></font></font></font></font></font> </font></div></td>
                            <td width="163">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">de 1001 a 1500 &euro;</font></font></font></div></td>
                            <td width="93">
                              <div align="center"><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif">1501-3000 &euro;</font></font></font></div></td>
                            <td width="37">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#FF0000">33 %</font></b></font></div></td>
                            <td width="110">
                              <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>Valor total </b></font></div></td>
                            <td width="55">
                              <div align="center"><font size="2" face="Arial, Helvetica, sans-serif">
                                <?php 
$Total_Pedido=$B_I +$IVA+$Recargo+$Gastos;
$chkPed=(string)$Total_Pedido;
echo $chkPed;
 ?>
                            </font></div></td>
                          </tr>
                        </table>
                        <div align="center"><font face="Arial, Helvetica, sans-serif" size="1">Seleccione el Dto. segun su zona, el recargo de equivalencia, si le corresponde y la forma de pago, recibira un email con la confirmacion del pedido<br>
    y las instrucciones de pago.</font></div>
                        <div align="center"></div>
                        <div align="center">
                          <input type="submit" name="Calcular_2" value="Calcular Pedido">
                        </div>
                      </form>
                      <p>
                        <script language="JavaScript">
function backyF ()
{
	history.back(1);
}
function mesaje ()
{
	alert ("Solo disponible opcion Contrarrembolso\nPago por tarjeta disponible en breve");
}
function AbrirVentana(url) {
	var hWnd = window.open(url,"ayuda","width=350,height=400,resizable=no,scrollbars=yes");
}

			function validarDatos_1(){
			
			if ( Formulario_1.cif.value=="" ) {
				alert ("Falta Falta C.I.F. / N.I.F. !!");
				return (false); 
			}else if ( Formulario_1.direccion.value=="" ) {
				alert ("Falta direccion  !!");
				return (false); 
			}else if ( Formulario_1.cp.value=="" ) {
				alert ("Falta codigo postal  !!");
				return (false); 
			}else if ( Formulario_1.tel.value=="" ) {
				alert ("Falta telefono !!");
				return (false); 
			}else if ( Formulario_1.email.value=="" ) {
				alert ("Falta email !!");
				return (false); 
			}else if ( Formulario_1.pais.value=="" ) {
				alert ("Falta pais !!");
				return (false); 
			}else if ( Formulario_1.prov.value=="" ) {
				alert ("Falta provincia !!");
				return (false); 
			}else if ( Formulario_1.chkPed.value=="6" ) {
				alert ("No se ha calculado el pedido, rellene las cantidades y pulse el boton calcular pedido !!");
				return (false); 
			}else			{
					return (true);
			}
		
		}
		
		function validarDatos_2()
		{ 
			if (Formulario_2.chk1.checked==false)
			{
				if (Formulario_2.chk2.checked==false)
				{
					alert ("Seleccione un descuento por compra y una forma de pago, en la parte inferiro del formulario");
					return (false); 
				}
			}
			else if (Formulario_2.chk1.checked)
			{
				if (Formulario_2.chk2.checked)
				{
					alert ("Seleccione solo un descuento por compra !!");
					return (false); 
				}
			}
			else
			{
				return (true);
			}
			
			if (Formulario_2.chk4.checked==false)
			{
				if (Formulario_2.chk5.checked==false)
				{
					alert ("Seleccione un descuento por compra y una forma de pago, en la parte inferiro del formulario");
					return (false); 
				}
			}
			else if (Formulario_2.chk4.checked)
			{
				if (Formulario_2.chk5.checked)
				{
					alert ("Seleccione solo una forma de pago !!");
					return (false); 
				}
			}
			else
			{
				return (true);
			}</script>
                      </p>
                  </div>
                    <p align="center"><a href="../index.php"><img src="../../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p></td>
              </tr>
            </table>
        </div></td>
      </tr>
    </table>
  </div>
  <p align="center">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
  C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</p>
</div>
</body>
</html>
