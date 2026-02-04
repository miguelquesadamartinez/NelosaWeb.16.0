<?php 
session_name('nelosa');
session_start();

require_once ( "../inc/headers/vbles_sesion.php" );

require_once ( "../inc/config.php" );

require_once ( "../inc/funciones.php" );

require_once ( "../inc/objetos/class-db/class-db.php" );
require_once ( "../inc/objetos/class-languages/class-languages.php" );

$db = new BaseDeDatos($db_hostname,$db_username,$db_password,$db_name);
$db->openDatabase();

?>
<HTML>
<HEAD>
<TITLE>Universal Refill Kit  -  -  Nelosa Accesrios  -  -  </TITLE>

<?php
//<meta http-equiv="refresh" content="1;url=gueb/index.php">

require_once ( '../inc/headers/headers.php' );

if ($usr == "")
{
	$var = $_COOKIE["nelosa"];
	//echo "<BR>var : " .$var." <BR>" ;
	//echo "<BR> -- <BR>" ;
	if ($var <> "") { $usr = $var;  $distri='' ;}
	$var = $_COOKIE["nelosadistri"];
	if ($var <> "") { $usr = $var; $distri='si' ; }
}

if ($usr == "")	{ $tamano_barra=350; }
else { $tamano_barra=350; }

?>

<LINK REL="stylesheet" HREF="../inc/css/styles.css" TYPE="text/css">

</HEAD>

<BODY>

<div align="center">
<?php 
require_once ('../page.parts/up.menu.php'); 
?>
    <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../img/diseno.paginas/base/arriba-up.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF0000">
    <tr>
      <td height="13"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="776" height="130">
        <param name="movie" value="../img/animaciones/banner-arriva.swf">
        <param name="quality" value="high">
        <embed src="../img/animaciones/banner-arriva.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="776" height="130"></embed>
      </object></td>
    </tr>
  </table>
<?php 
require_once ('../page.parts/med.menu.php'); 
?>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../img/diseno.paginas/base/arriba-down.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="750" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF8400">
    <tr>
      <td height="13"><img src="../img/diseno.paginas/middle/middle.jpg" width="750" height="28"></td>
    </tr>
  </table>
  <table width="750" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF8400">
    <tr> 
      <td width="5" height="13" bgcolor="#FF8400"><img src="../img/diseno.paginas/lateral/left.jpg" width="9" height="<?php echo ($tamano_barra);?>"></td>
      <td width="204" valign="top" bgcolor="#FF8400">
<p align="center"><img src="../img/diseno.paginas/comunes/Nelosas/nelosa.web.gif" width="195" height="86"></p>
        <p align="left">&nbsp; </p>
        </td>
      <td width="11" bgcolor="#FFFFFF"><img src="../img/diseno.paginas/lateral/right.jpg" width="11" height="<?php echo ($tamano_barra);?>"></td>
      <td width="530" valign="top" bgcolor="#FFFFFF"><div align="center"> 
          <table width="100%"  border="0">
            <tr> 
              <td width="57%" height="307" valign="top">
<div align="center"> 
                  <p><font face="Arial, Helvetica, sans-serif"><a href="paginas/instrucciones/index.php" class="AZUL"><strong>Instrucciones 
                    para la<br>
                    recarga de cartuchos</strong></a></font><br>
                  </p>
                  <table width="75%" height="10"  border="0">
                    <tr> 
                      <td height="10" bgcolor="#FFFFCC"></td>
                    </tr>
                  </table>
                  <p><img src="../img/recarga/nelosa.recarga.gif" width="250" height="172"></p>
                  <p>&nbsp;</p>
                </div>
                </td>
              <td width="43%" valign="top"> 
                <?php 

				/*if ($usr == "")
				{
					$var = $_COOKIE["nelosa"];
					//echo "<BR>var : " .$var." <BR>" ;
					//echo "<BR> -- <BR>" ;
					if ($var <> "")
					{
						$usr = $var;
					}
				}*/
if ($distri=="")
{
			if ($usr == "")
			{
				echo ('<form action="paginas/club/validationpages/check.php?lastpage=index.php" name="Formulario_3" id="Formulario_3"  onSubmit="return validarDatos_3()" >');
				echo ('<div align="center">');
				echo ('<p><font face="Arial, Helvetica, sans-serif">Registro<br> email ');
				echo ('<input name="user" type="text" size="20"><br> Clave ');
				echo ('<input name="pwd" type="password" size="20"><br>');
				echo ('<input name="Login" type="submit" value="Login" size="20"><br>');
				echo ('<a class="AZUL" href="paginas/club/validationpages/forgetPwd.php?lastpage=index.php">Olvido su clave ? ! ? </a><BR>');
				echo ('<a class="AZUL" href="paginas/club/validationpages/registrar.php?lastpage=index.php">Nuevo Usuario </a></font></p></div></form>');
			}
			else
			{
					// 
					$var = "Select * from Clientes where email = '". $usr ."'" ;
					$db->consulta($var);
					$db->retriveData ();
					$storer = $db->db_row["idUser"];
			
					$usr=$db->db_row["email"];
					$vs_email=$db->db_row["email"];
					$vs_nom=$db->db_row["Nombre"];
					$vs_ape1=$db->db_row["Apellido1"];
					$vs_tel=$db->db_row["Telefono"];
					$vs_ape2=$db->db_row["Apellido2"];
					$vs_doc=$db->db_row["Doc"];
					$vs_empresa=$db->db_row["Empresa"];
					$vs_adr=$db->db_row["Direccion"];
					$vs_cp=$db->db_row["Cp"];
					$vs_pob=$db->db_row["Poblacion"];
					$vs_prov=$db->db_row["Provincia"];
					$vs_pais=$db->db_row["Pais"];
					
					$var = "Select * from Datas where mail = '". $usr ."'" ;
					$db->consulta($var);
					$db->retriveData ();
			
					$miki=$db->db_row["otro"];

				
				echo ('<p align="center">Hola <b>' . $vs_nom . '</b><BR><BR>Usuario registrado:<BR>' . $usr . '<BR><BR></p>');
				echo ('<p align="center"><a class="AZUL" href="paginas/club/validationpages/modifUser.php">Modificar usuario</a>');
				echo ('<a href="paginas/varias/log.out.php"><BR>Cerrar sesion</a></p>');
			}
}
			?>
                <div align="center"> 
                  <table width="75%" height="10"  border="0" align="center">
                    <tr> 
                      <td height="10" bgcolor="#FFFFCC"></td>
                    </tr>
                  </table>
                  <div align="center"><font color="#0000FF"><strong><a href="paginas/varias/soporte.php" class="AZUL">Contactar</a></strong></font></div>
                </div>
                <div align="center">
                  <p><a href="paginas/varias/donde.php" class="AZUL"><strong>Donde estamos</strong></a> 
                  </p>
                  <table width="75%" height="10"  border="0">
                    <tr> 
                      <td height="10" bgcolor="#FFFFCC"></td>
                    </tr>
                  </table>
                  <p><strong> </strong> </p>
                  
                </div></td>
            </tr>
          </table>
        </div></td>
    </tr>
    <tr> 
      <td height="22" colspan="4" bgcolor="#000099"><img src="../img/diseno.paginas/middle/down2.jpg" width="750" height="28"></td>
    </tr>
  </table>
<?php 
require_once ('../page.parts/down.php'); 
?>
</div>
</body>
</html>
