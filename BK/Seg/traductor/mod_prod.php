<HTML>
<HEAD>
<TITLE>Traductor</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>

</HEAD>

<BODY>
<table width="600" border="0" align="center">
  <tr> 
    <td><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Modificar 
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
//			echo $idioma . "<BR><BR>------------<BR><BR>" . $codigo . "<BR><BR>------------<BR><BR>" . $texto . "<BR><BR>------------<BR><BR>" . $denom . "<BR><BR>------------<BR><BR>"; 

$denom = ereg_replace ("'", "%B4", $denom);			
$texto = ereg_replace ("'", "%B4", $texto);			

			//echo ("UPDATE Descs_" . $idioma . " SET texto='" . $texto . "', denom='" . $denom . "' Where Ref='" . $codigo . "'<BR>");
			echo ("Ref: " . $codigo . " - Actualizada<BR>");
			mysql_query("UPDATE Descs_" . $idioma . " SET texto='" . $texto . "', denom='" . $denom . "' Where Ref='" . $codigo . "'",$link);		
			?>
		</p>
      </div></td>
  </tr>
  <tr>
    <td><div align="right"><a href="traductor.php"><img src="../../../gueb/imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></div></td>
  </tr>
</table>
