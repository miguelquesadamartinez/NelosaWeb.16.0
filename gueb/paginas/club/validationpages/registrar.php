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
                  <p>&nbsp;</p>
                  <form action="check.php" name="Formulario_3" id="Formulario_3"  onSubmit="return validarDatos_3()" >
                    <div align="center">
                      <p><font face="Arial, Helvetica, sans-serif"><b>Validese con su usuario</b></font></p>
                      <p><font face="Arial, Helvetica, sans-serif"> email
                            <input name="user" type="text" size="20">
Clave
<input name="pwd" type="password" size="20">
                      </font></p>
                      <p><font face="Arial, Helvetica, sans-serif">
                        <input type="submit" value="Login" name="Login" ="20">
                      </font></p>
                    </div>
                  </form>
                  <p align="center"><font face="Arial, Helvetica, sans-serif"><a href="forgetPwd.php"><font size="2">Olvido su password ? ! ? </font></a></font></p>
                  <hr>
                  <form action="createUser.php" name="Formulario_2" id="Formulario_2"  onSubmit="return validarDatos()" >
                    <div align="center">
                      <p><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"><b>O cree un nuevo usuario </b></font></p>
                      <b><font face="Arial, Helvetica, sans-serif"> </font></b>
                      <table border="0">
                        <tr>
                          <td width="115" bgcolor="#FFFFCC">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>e-mail</b> / Usuario: </font></div></td>
                          <td width="214"><b><font face="Arial, Helvetica, sans-serif">
                            <input type="text" name="hd_usr" id="hd_usr" size="35" value="<?php echo htmlentities (  $usr ) ;?>">
</font></b></td>
                          <td bordercolor="#FFFFFF" bgcolor="#FFFFCC" width="95">
                            <div align="right"><font face="Arial, Helvetica, sans-serif"><font size="2">Clave :</font> </font></div></td>
                          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF" width="246">
                            <div align="left"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif">
                              <input name="hd_pwd" type="password" id="hd_pwd" value="<?php echo htmlentities (  $miki  ) ;?>" size="35">
                            </font></b></font></div></td>
                        </tr>
                        <tr>
                          <td width="115" bgcolor="#FFFFCC">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif">Nombre : </font></div></td>
                          <td width="214"><b><font face="Arial, Helvetica, sans-serif">
                            <input type="text" name="hd_nom" id="hd_nombre2" size="35" value="<?php echo htmlentities (  $vs_nom ) ;?>">
</font></b></td>
                          <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                            <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><b><font face="Arial, Helvetica, sans-serif" size="2">Apellido 1 : </font></b></font></div></td>
                          <td width="246"><b><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                            <input name="hd_ape1" type="text" id="hd_ape12" value="<?php echo htmlentities (  $vs_ape1 ) ;?>" size="35">
                          </font></b></font></font></b></font></font><font face="Arial, Helvetica, sans-serif">                          </font></b></td>
                        </tr>
                        <tr>
                          <td width="115" bgcolor="#FFFFCC" height="29">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Telefono :</font></b></font></div></td>
                          <td width="214" height="29"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                            <input type="text" name="hd_tel" id="hd_nombre3" size="35" value="<?php echo htmlentities (  $vs_tel ) ;?>">
                          </font></b> </font></font></td>
                          <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF"> Apelido 2 : </font></b></font></div></td>
                          <td width="246" height="29"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><b><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                            <input name="hd_ape2" type="text" id="hd_ape22" value="<?php echo  htmlentities ( $vs_ape2 ) ;?>" size="35">
                          </font></b></font></font></b></font></b> </font></b></font></td>
                        </tr>
                        <tr>
                          <td width="115" bgcolor="#FFFFCC" height="29">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C.I.F. / N.I.F. : </font></b></font></div></td>
                          <td width="214" height="29"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                            <input type="text" name="hd_doc" id="hd_nombre4" size="35" value="<?php echo htmlentities (  $vs_doc ) ;?>">
                          </font></b> </font></font></td>
                          <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                            <div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF" size="2"><b>Empresa : </b></font></div></td>
                          <td width="246" height="29"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"> </font><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">                          </font></b></font></font></b></font></font><font face="Arial, Helvetica, sans-serif">
                            <input type="text" name="hd_empresa" id="hd_nombre5" size="35" value="<?php echo htmlentities (  $vs_empresa ) ;?>"> 
                          </font></b> </font></font></td>
                        </tr>
                        <tr>
                          <td rowspan="2" bgcolor="#FFFFCC" width="115">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Direcci&oacute;n :</font></b></font></div></td>
                          <td rowspan="2" width="214"><font color="#000066" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font color="#000066" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif">
                            <textarea name="hd_adr" cols="30" rows="2" id="hd_adr"><?php echo htmlentities (  $vs_adr ) ;?></textarea>
                          </font></b></font><font face="Arial, Helvetica, sans-serif">                          </font></b></font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"> </font></b> </font></td>
                          <td bgcolor="#FFFFCC" width="95">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><font size="2" face="Arial, Helvetica, sans-serif"><b>C. P. : </b></font></font></div></td>
                          <td width="246"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                            <input name="hd_cp" type="text" id="hd_cp2" value="<?php echo  htmlentities ( $vs_cp ) ;?>" size="35">
                          </font></b></font></font></b></font></b></font></b> </font></b> </font></td>
                        </tr>
                        <tr>
                          <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="32">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF"> </font></b></font><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Poblacion</font></b></font><font color="#0000FF"> : </font></b></font><font face="Arial, Helvetica, sans-serif" color="#0000FF"></font></div></td>
                          <td width="246" height="32"><font color="#000066" size="2">&nbsp;</font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2">&nbsp; </font><font color="#000066" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"> </font></b></font><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif">
                            <input type="text" name="hd_pob" id="hd_nombre6" size="35" value="<?php echo htmlentities (  $vs_pob ) ;?>">
</font></b></font></td>
                        </tr>
                        <tr>
                          <td width="115" bgcolor="#FFFFCC">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif">Pais : </font></div></td>
                          <td width="214"><font color="#000066" size="2"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                            <input name="hd_pais" type="text" id="hd_pais2" value="<?php echo htmlentities ( $vs_pais ) ;?>" size="35">
                          </font></b></font></b></font></b></font></font></font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2">&nbsp;                            </font>
                          <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><font size="2" face="Arial, Helvetica, sans-serif"><b>Provincia</b></font> : </font></div>
                          <td width="246"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font color="#000066" size="2"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font color="#000066" size="2"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                          <input name="hd_prov" type="text" id="hd_prov2" value="<?php echo  htmlentities ( $vs_prov ) ;?>" size="35">
                          </font></b></font></b></font></b></font></font></font></b></font></font></font><font face="Arial, Helvetica, sans-serif">                          </font></b></font></font>                       
                        </tr>
                      </table>
                      En rojo los campos obligatorios <br>
                      <p><font color="#FF0000" face="Arial, Helvetica, sans-serif">
                        <input type="submit" name="iniciar2" value="Nuevo usuario">
                      </font></p>
                    </div>
                  </form>
                  <p><a href="../../../index.php"><img src="../../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
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
	<script language='JavaScript' type='text/javascript'>
		function validarDatos_3(){	
			if ( Formulario_3.user.value==""){
				alert ("Falta usuario !!");
				return (false);
			}
			if ( Formulario_3.pwd.value==""){
				alert ("Falta password !!");
				return (false);
			}
		}
		function validarDatos(){
		
			if ( Formulario_2.hd_usr.value=="" ) {
				alert ("Falta usuario / email !!");
				return (false); 
			}
			if ( Formulario_2.hd_pwd.value=="" ) {
				alert ("Falta clave !!");
				return (false); 
			}
			if ( Formulario_2.hd_nom.value=="" ) {
				alert ("Falta nombre !!");
				return (false); 
			}
			if ( Formulario_2.hd_pais.value=="" ) {
				alert ("Falta pais !!");
				return (false); 
			}
			if ( Formulario_2.hd_cp.value=="" ) {
				alert ("Falta Codigo Postal !!");
				return (false); 
			}
			if ( Formulario_2.hd_prov.value=="" ) {
				alert ("Falta Provincia !!");
				return (false); 
			}
			else			{
					return (true);
			}
		
		}
	</script>
