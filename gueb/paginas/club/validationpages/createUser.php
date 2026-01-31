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
              <table width="100%"  border="0">
                <tr>
                  <td height="95" valign="top"><div align="center">
                    <p align="center">Son correctos estos datos ?? </p>
                    <form action="mail.php" name="Formulario_3" id="Formulario_3" >
                      <div align="center">
                        <table border="0">
                          <tr>
                            <td width="115" bgcolor="#FFFFCC"><div align="right"><b><font color="#0000FF">e-mail</font></b><font color="#0000FF"> / Usuario: </font></div></td>
                            <td width="214" bgcolor="#FFFFCC"><?php echo htmlentities ( $hd_usr ) ; ?>
                              <input name="hi_usr" type="hidden" id="hi_usr2" value="<?php echo $hd_usr;?>">
                            </td>
                            <td bordercolor="#FFFFFF" bgcolor="#FFFFCC" width="95">
                              <div align="right">Clave : </div></td>
                            <td bordercolor="#FFFFFF" bgcolor="#FFFFCC" width="246">
                              <div align="left"><strong><b><b><b><?php echo  htmlentities ( $hd_pwd) ; ?></b>
                              <input name="hi_pwd" type="hidden" id="hi_pwd2" value="<?php echo $hd_pwd;?>">
                            </b> </b></strong></div></td>
                          </tr>
                          <tr>
                            <td width="115" bgcolor="#FFFFCC">
                              <div align="right"><b><font color="#0000FF">Nombre : </font></b></div></td>
                            <td width="214" bgcolor="#FFFFCC"><?php echo htmlentities ( $hd_nom ) ; ?>
                              <input name="hi_nom" type="hidden" id="hi_nombre2" value="<?php echo $hd_nom;?>">
                            </td>
                            <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                              <div align="right"><font color="#0000FF"><b>Apellido 1 : </b></font></div></td>
                            <td width="246" bgcolor="#FFFFCC">                            <?php echo  htmlentities ( $hd_ape1 ) ; ?>
                              <input name="hi_ape1" type="hidden" id="hi_ape12" value="<?php echo $hd_ape1;?>">
                            </td>
                          </tr>
                          <tr>
                            <td width="115" bgcolor="#FFFFCC" height="29">
                              <div align="right"><b><font color="#0000FF">Telefono :</font></b></div></td>
                            <td width="214" height="29" bgcolor="#FFFFCC"><?php echo htmlentities ( $hd_tel ) ; ?>
                              <input name="hi_tel" type="hidden" id="hi_nombre3" value="<?php echo $hd_tel;?>">
                            </td>
                            <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                              <div align="right"><b><font color="#0000FF"> Apelido 2 : </font></b></div></td>
                            <td width="246" height="29" bgcolor="#FFFFCC"><b><b><b><b><b><?php echo  htmlentities ( $hd_ape2 ) ; ?></b>
                              <input name="hi_ape2" type="hidden" id="hi_ape22" value="<?php echo $hd_ape2;?>">
                            </b> </b></b></b> </td>
                          </tr>
                          <tr>
                            <td width="115" bgcolor="#FFFFCC" height="29">
                              <div align="right"><b><font color="#0000FF">C.I.F. / N.I.F. : </font></b></div></td>
                            <td width="214" height="29" bgcolor="#FFFFCC"><?php echo htmlentities ( $hd_doc ) ; ?>
                              <input name="hi_doc" type="hidden" id="hi_nombre4" value="<?php echo $hd_doc;?>">
                            </td>
                            <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                              <div align="right"><font color="#0000FF"><b>Empresa : </b></font></div></td>
                            <td width="246" height="29" bgcolor="#FFFFCC">  <?php echo htmlentities ( $hd_empresa ) ; ?>
                              <input name="hi_empresa" type="hidden" id="hi_nombre6" value="<?php echo $hd_empresa;?>">
                            </td>
                          </tr>
                          <tr>
                            <td rowspan="2" bgcolor="#FFFFCC" width="115">
                              <div align="right"><b><font color="#0000FF">Direcci&oacute;n :</font></b></div></td>
                            <td width="214" rowspan="2" bgcolor="#FFFFCC">                            <?php echo htmlentities ( $hd_adr ) ; ?>
                              <input name="hi_adr" type="hidden" id="hi_nombre5" value="<?php echo $hd_adr;?>">
                            </td>
                            <td bgcolor="#FFFFCC" width="95">
                              <div align="right"><b><b><font color="#0000FF">C. P. : </font></b></b></div></td>
                            <td width="246" bgcolor="#FFFFCC"><b><b><b><b><?php echo  htmlentities ( $hd_cp ) ; ?>
                              <input name="hi_cp" type="hidden" id="hi_cp2" value="<?php echo $hd_cp;?>">
                            </b></b></b></b>  </td>
                          </tr>
                          <tr>
                            <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="32">
                              <div align="right"> <b><b><font color="#0000FF">Poblacion</font></b><font color="#0000FF"> : </font></b></div></td>
                            <td width="246" height="32" bgcolor="#FFFFCC">  <b><b><b><b><b><?php echo  htmlentities ( $hd_pob ) ; ?>
                              <input name="hi_pob" type="hidden" id="hi_cp3" value="<?php echo $hd_pob;?>">
                            </b></b></b></b></b> </td>
                          </tr>
                          <tr>
                            <td width="115" bgcolor="#FFFFCC">
                              <div align="right"><b>Pais : </b></div></td>
                            <td width="214" bgcolor="#FFFFCC">                              <?php echo  htmlentities ( $hd_pais ) ; ?>
                              <input name="hi_pais" type="hidden" id="hi_pais2" value="<?php echo $hd_pais;?>">
                            
                            
                            <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                              <div align="right"><b><b><font color="#0000FF">Provincia</font></b> <font color="#0000FF">:</font> </b></div>
                            <td width="246" bgcolor="#FFFFCC">                            <?php echo htmlentities (  $hd_prov ) ; ?>
                              <input name="hi_prov" type="hidden" id="hi_prov2" value="<?php echo $hd_prov;?>">
                                                     
                          </tr>
                        </table>
                          <p><font color="#FF0000" face="Arial, Helvetica, sans-serif">
                          <input type="submit" name="iniciar2" value="Crear usuario">
                          </font></p>
                      </div>
                    </form>
                    <p><a class="AZUL" href="../../../index.php"><img src="../../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
                  </div></td>
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