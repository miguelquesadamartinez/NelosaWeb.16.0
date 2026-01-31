<?php 
session_name('nelosa');

require_once ( "../../../../inc/headers/vbles_sesion.php" );
setcookie("nelosadistri", $usr, time() + 31536000 , "/", "www.nelosa.net");
?>
<HTML>
<HEAD>

<TITLE>Validacion y creacion de usuarios</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="refresh" content="2;url=../index.php">
</HEAD>
<body bgcolor="#000099">
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
                  <td height="95" valign="top"><div align="center">
                      <p><font color="#FF0000" size="5"><strong><font face="Arial, Helvetica, sans-serif">Usuario validado ! ! </font></strong></font></p>
                      <form action="modifUser.php" name="Formulario_3" id="Formulario_3" >
                        <div align="center">
                          <table border="0">
                            <tr>
                              <td width="115" bgcolor="#FFFFCC">
                                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>e-mail</b> / Usuario: </font></div></td>
                              <td width="214" bgcolor="#FFFFCC"><b><font face="Arial, Helvetica, sans-serif"><?php echo htmlentities ( $vs_email ) ; ?>
                                <input name="hd_email" type="hidden" id="hd_email" value="<?php echo $vs_email ; ?>">
                              </font></b></td>
                              <td bordercolor="#FFFFFF" bgcolor="#FFFFCC" width="95">
                                <div align="right"><strong><font face="Arial, Helvetica, sans-serif"><font size="2">Clave :</font> </font></strong></div></td>
                              <td bordercolor="#FFFFFF" bgcolor="#FFFFCC" width="246">
                                <div align="left"><strong><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><?php echo  htmlentities ( $miki ) ; ?>
                                <font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif">
                                <input name="hd_pwd" type="hidden" id="hd_ape122" value="<?php echo $miki;?>">
                                          </font></b></font></font></b></font></strong></div></td>
                            </tr>
                            <tr>
                              <td width="115" bgcolor="#FFFFCC">
                                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif">Nombre : </font></div></td>
                              <td width="214" bgcolor="#FFFFCC"><b><font face="Arial, Helvetica, sans-serif"><?php echo htmlentities ( $vs_nom ) ; ?>
                                <input name="hd_nom" type="hidden" id="hd_nom" value="<?php echo $vs_nom;?>">
                              </font></b></td>
                              <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                                <div align="right"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2">Apellido 1 : </font></b></font></div></td>
                              <td width="246" bgcolor="#FFFFCC"><b><font face="Arial, Helvetica, sans-serif"><?php echo  htmlentities ( $vs_ape1 ) ; ?>
                                <input name="hd_ape1" type="hidden" id="hd_ape1" value="<?php echo $vs_ape1;?>">
                              </font></b></td>
                            </tr>
                            <tr>
                              <td width="115" bgcolor="#FFFFCC" height="29">
                                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>Telefono :</b></font></div></td>
                              <td width="214" height="29" bgcolor="#FFFFCC"><font size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"><?php echo htmlentities ( $vs_tel ) ; ?>
                                <input name="hd_tel" type="hidden" id="hd_tel" value="<?php echo $vs_tel ; ?>">
                              </font></b> </font></font></td>
                              <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b> Apelido 2 : </b></font></div></td>
                              <td width="246" height="29" bgcolor="#FFFFCC"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><b><font size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><?php echo  htmlentities ( $vs_ape2 ) ; ?> <b><font face="Arial, Helvetica, sans-serif">
                              <input name="vs_ape2" type="hidden" id="vs_ape2" value="<?php echo $vs_ape2;?>">
                              </font></b></font></b> </font></b></font></font></b></font></b> </font></b></font></td>
                            </tr>
                            <tr>
                              <td width="115" bgcolor="#FFFFCC" height="29">
                                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>C.I.F. / N.I.F. : </b></font></div></td>
                              <td width="214" height="29" bgcolor="#FFFFCC"><font size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"><?php echo htmlentities ( $vs_doc ) ; ?>
                                <input name="hd_doc" type="hidden" id="hd_email4" value="<?php echo $vs_doc ; ?>">
                              </font></b> </font></font></td>
                              <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                                <div align="right"><font face="Arial, Helvetica, sans-serif" size="2"><b>Empresa : </b></font></div></td>
                              <td width="246" height="29" bgcolor="#FFFFCC"><font size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>  <font face="Arial, Helvetica, sans-serif"><?php echo htmlentities ( $vs_empresa ) ; ?>
                                <input name="hd_empresa" type="hidden" id="hd_email6" value="<?php echo $vs_empresa ; ?>">
                              </font></b> </font></font></td>
                            </tr>
                            <tr>
                              <td rowspan="2" bgcolor="#FFFFCC" width="115">
                                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>Direcci&oacute;n :</b></font></div></td>
                              <td width="214" rowspan="2" bgcolor="#FFFFCC">                               <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"><?php echo htmlentities ( $vs_adr ) ; ?>
                                <input name="hd_adr" type="hidden" id="hd_email5" value="<?php echo $vs_adr ; ?>">
                              </font></b> </font></td>
                              <td bgcolor="#FFFFCC" width="95">
                                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b>C. P. : </b></font></b></font></div></td>
                              <td width="246" bgcolor="#FFFFCC"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"><?php echo  htmlentities ( $vs_cp ) ; ?>
                                <input name="hd_cp" type="hidden" id="hd_cp" value="<?php echo $vs_cp;?>">
                              </font></b></font></font></b></font></b></font></b> </font></b> </font></td>
                            </tr>
                            <tr>
                              <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="32">
                                <div align="right"> <font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b>Poblacion</b></font> : </b></font></div></td>
                              <td width="246" height="32" bgcolor="#FFFFCC">  <font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><?php echo htmlentities ( $vs_pob ) ; ?>
                                <input name="hd_pob" type="hidden" id="hd_email7" value="<?php echo $vs_pob ; ?>">
                              </font></b></font></td>
                            </tr>
                            <tr>
                              <td width="115" bgcolor="#FFFFCC">
                                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>Pais : </b></font></div></td>
                              <td width="214" bgcolor="#FFFFCC">                                <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"><?php echo  htmlentities ( $vs_pais ) ; ?>
                                <input name="hd_pais" type="hidden" id="hd_pais" value="<?php echo $vs_pais;?>">
                              </font></b> </font>
                              
                              <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                                <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b>Provincia</b></font> : </b></font></div>
                              <td width="246" bgcolor="#FFFFCC"><font size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>                              <font face="Arial, Helvetica, sans-serif"><?php echo htmlentities (  $vs_prov ) ; ?>
                                <input name="hd_prov" type="hidden" id="hd_prov" value="<?php echo $vs_prov;?>">
                              </font></b></font></font>                           
                              </tr>
                            <tr>
                              <td colspan="4" bgcolor="#FFFFCC"><div align="center"><font face="Arial, Helvetica, sans-serif">
                                <?PHP
							  if ($algo=="0"){
							  	echo "<input type='submit' name='iniciar2' value='Modificar usuario'>";
							  }
            				  ?>
                              </font> </div></td>
                            </tr>
                          </table>
                        </div>
                      </form>
                      <p><a href="modifUser.php"><font face="Arial, Helvetica, sans-serif">Modificar usuario </font></a></p>
                      <p><a href="../index.php"><img src="../../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
                      <p>&nbsp;                        </p>
                  </div></td>
                </tr>
              </table>
          </div></td>
        </tr>
      </table>
</div>
	<p align="center">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
  C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</p>
	<p align="center">
	<?php /*
	$var = $_COOKIE["nelosa"];
echo "<BR>var : " .$var." <BR>" ;
echo "<BR> -- <BR>" ;
	*/?>
	</p>
</body>

