<HTML>
<HEAD>
<TITLE>Traductor</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<meta http-equiv="refresh" content="2;url=traductor.php">

</HEAD>

<BODY>
<table width="600" border="0" align="center">
  <tr> 
    <td><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Nuevo 
        texto producto<br>
        <br>
        </font></strong></div></td>
  </tr>
  <tr> 
    <td><div align="center"> 
        <p>&nbsp;</p>
        <p>
	       <?php 
			require_once("../../../inc/funciones/Funciones_PHP.php");
			$link=conectarse_param("nelosa_nelosa_textos") ;

$des_p = ereg_replace ("'", "%B4", $des_p);		
$den_p = ereg_replace ("'", "%B4", $den_p);		

mysql_query("INSERT INTO `Descs_esp` ( `Ref` , `texto` , `denom` ) VALUES ( '". $ref_p . "', '". $des_p . "', '". $den_p . "' )",$link);		
mysql_query("INSERT INTO `Descs_cat` ( `Ref` , `texto` , `denom` ) VALUES ( '". $ref_p . "', '". $des_p . "', '". $den_p . "' )",$link);		
mysql_query("INSERT INTO `Descs_eng` ( `Ref` , `texto` , `denom` ) VALUES ( '". $ref_p . "', '". $des_p . "', '". $den_p . "' )",$link);		
mysql_query("INSERT INTO `Descs_fra` ( `Ref` , `texto` , `denom` ) VALUES ( '". $ref_p . "', '". $des_p . "', '". $den_p . "' )",$link);		
mysql_query("INSERT INTO `Descs_ned` ( `Ref` , `texto` , `denom` ) VALUES ( '". $ref_p . "', '". $des_p . "', '". $den_p . "' )",$link);		
mysql_query("INSERT INTO `Descs_por` ( `Ref` , `texto` , `denom` ) VALUES ( '". $ref_p . "', '". $des_p . "', '". $den_p . "' )",$link);;		
			?>
		</p>
        <p>&nbsp; </p>
      </div></td>
  </tr>
  <tr>
    <td><div align="right"><a href="traductor.php"><img src="../../../gueb/imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></div></td>
  </tr>
</table>
</BODY>
</HTML>
