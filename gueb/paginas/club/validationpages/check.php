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
<?php 	

//echo "USer: " . $user . " - PWD: " . $pwd . "<BR>" ;

$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;
//mysql_select_db ("nelosa_nelosa"); 

//$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
//mysql_select_db("nelosa_nelosa",$link) ;

if ( $user <> "" )  // Si le pasamos param.
{
	$result=mysql_query("select * from Datas where mail = '". $user ."'" ,$link); 
	$row = mysql_fetch_array($result);
	$numi=(string)$row["mail"];
}
//echo "USer: " . $user . " - PWD: " . $pwd . " - numi: " . $numi . "<BR>" ;
if ($numi==""){	$algo="1";} //No existe el usuario
else
{
	$result=null; // ! ! !
	
	$result=mysql_query("select * from Datas where mail = '". $user ."' AND otro='" . $pwd . "'" ,$link); 
	$row = mysql_fetch_array($result);
		
	$numi=(string)$row["mail"];
	if ($numi=="")
	{
		$algo="2"; // No coincide PWD
	}
	else
	{
			$algo="0";
			
			$result=mysql_query("select * from Clientes where email = '". $user ."'" ,$link); 
			$row = mysql_fetch_array($result);
			
			$usr=$user;
			$vs_email=(string)$row["email"];
			$vs_nom=(string)$row["Nombre"];
			$vs_ape1=(string)$row["Apellido1"];
			$vs_ape2=(string)$row["Apellido2"];
			$vs_cp=(string)$row["Cp"];
			$vs_prov=(string)$row["Provincia"];
			$vs_pais=(string)$row["Pais"];
			$vs_pob=(string)$row["Poblacion"];
			$vs_tel=(string)$row["Telefono"];
			$vs_doc=(string)$row["Doc"];
			$vs_empresa=(string)$row["Empresa"];
			$vs_adr=(string)$row["Direccion"];
			$vs_pais=(string)$row["Pais"];
			
			$miki=$pwd;
			
	}
}

	if ( $algo == "1" ){ 
		echo ('<meta http-equiv="refresh" content="2;url=NoUser.php">'); 
		$usr = "" ;
		$fontaneda = "" ;
		//echo "Roger 1<BR>" ;
	}
	elseif (  $algo == "2"  ) { 
		echo ('<meta http-equiv="refresh" content="2;url=NoPwd.php">');
		$usr = "" ;
		$fontaneda = "" ;
		//echo "Roger 2<BR>" ;
	}
	elseif ( $trickyu == $nom_v && $tricky_v == $trickyp) 
	{ 
		echo ('<meta http-equiv="refresh" content="2;url=viewUser.php">');
		//echo "Roger 3<BR>" ;
	}

	mysql_free_result($result);  
	mysql_close($link);
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
              <td height="95" valign="top"><p>&nbsp;</p>
              <p align="center">Comprobando usuario . . . . . . </p>
              <p align="center">&nbsp;</p></td>
            </tr>
          </table>
      </div></td>
    </tr>
  </table>
<?php 
require_once ('../../../../page.parts/down.php'); 
?>
</div>
