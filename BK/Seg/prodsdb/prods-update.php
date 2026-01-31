<?php session_register('prox');?>
<HTML><HEAD><TITLE>prods DB Update</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
</HEAD>
<BODY bgcolor="#FFFFFF">
<form name="form1" method="post" action="prods-update.php">
  <?php 
$cnt = -1 ;
$cnt = 0 ;
$chivi = -1 ;

// Si se utiliza el form de mostrar NOse rellena
if ($hidden == '') {
	if ($refy == "") $refy = "0120"; // Para que empiece del principio
	echo "HID: $hidden - Refy: $refy<BR>" ;
		$result=mysql_query("Select * From prods where Ref = '$refy'" ,$link); 
		$row = mysql_fetch_array($result);
					$vRef=(string)$row["Ref"];
					$vCode=(string)$row["Code"];
					$vDes=(string)$row["Des"];
					$vUnd=(string)$row["Und"];
					$vUnd_Box=(string)$row["Und_Box"];
					$vpeso=(string)$row["peso"];
					$vprecio_eshop=(string)$row["precio_eshop"];
					$vprecio_nelosa=(string)$row["precio_nelosa"];
					$vprecio_ibero=(string)$row["precio_ibero"];
					$vprecio_europa=(string)$row["precio_europa"];
					$vGrupo=(string)$row["Grupo"];
					$vcomentario=(string)$row["comentario"];
		$result=mysql_query("Select * From prods where Ref > '$refy'" ,$link); 
		$row = mysql_fetch_array($result);
		$prox =	(string)$row["Ref"];

}
elseif ($hidden="si") // Si se ha utilizado el Form de Update
{	
	// Para ver si existe
	echo ("Select * From prods where Ref = '$pRef'<BR>"); 
	$result=mysql_query("Select * From prods where Ref = '$pRef'" ,$link); 
	$row = mysql_fetch_array($result);
	$tmp=(string)$row["Ref"];
	if ($tmp != ""){ // Si existe

echo ("UPDATE prods SET Code='$pCode', Des='$pDes', Und=$pUnd, Und_Box=$pUnd_Box, peso=$ppeso, 
		precio_eshop=$pprecio_eshop, precio_nelosa=$pprecio_nelosa, precio_ibero=$pprecio_ibero, 
		precio_europa=$pprecio_europa, Grupo='$pGrupo', comentario='$pcomentario' Where Ref='$pRef'<BR>");

		//echo "HID2: $hidden - Refy2: $refy" ;
		mysql_query("UPDATE prods SET Code='$pCode', Des='$pDes', Und=$pUnd, Und_Box=$pUnd_Box, peso=$ppeso, 
		precio_eshop=$pprecio_eshop, precio_nelosa=$pprecio_nelosa, precio_ibero=$pprecio_ibero, 
		precio_europa=$pprecio_europa, Grupo='$pGrupo', comentario='$pcomentario' Where Ref='$pRef'",$link);	
		
		$result=mysql_query("Select * From prods Where Ref = '$pRef'" ,$link); 
		$row = mysql_fetch_array($result);
						$vRef=(string)$row["Ref"];
						$vCode=(string)$row["Code"];
						$vDes=(string)$row["Des"];
						$vUnd=(string)$row["Und"];
						$vUnd_Box=(string)$row["Und_Box"];
						$vpeso=(string)$row["peso"];
						$vprecio_eshop=(string)$row["precio_eshop"];
						$vprecio_nelosa=(string)$row["precio_nelosa"];
						$vprecio_ibero=(string)$row["precio_ibero"];
						$vprecio_europa=(string)$row["precio_europa"];
						$vGrupo=(string)$row["Grupo"];
						$vcomentario=(string)$row["comentario"];
		$result=mysql_query("Select * From prods where Ref > '$pRef'" ,$link); 
		$row = mysql_fetch_array($result);
		$prox =	(string)$row["Ref"];
		echo "$pRef Actualizado - 2" ;
	}
	else // Si NO existe
	{
echo "HID2: $hidden - Refy2: $pRef<BR>" ;

echo ("INSERT INTO prods (Ref,Code,Des,Und,Und_Box,peso,precio_eshop,precio_nelosa,precio_ibero,precio_europa,Grupo,comentario) 
VALUES 
('$pRef','$VB_Code','$VB_Des',$VB_Und,$VB_Und_Box,'$VB_peso','$VB_precio_eshop','$VB_precio_nelosa','$VB_precio_ibero','$VB_precio_europa','$VB_Grupo','$VB_comentario'<BR>");

mysql_query("INSERT INTO prods (Ref,Code,Des,Und,Und_Box,peso,precio_eshop,precio_nelosa,precio_ibero,precio_europa,Grupo,comentario) 
VALUES 
('$pRef','$VB_Code','$VB_Des',$VB_Und,$VB_Und_Box,'$VB_peso','$VB_precio_eshop','$VB_precio_nelosa','$VB_precio_ibero','$VB_precio_europa','$VB_Grupo','$VB_comentario'",$link);

	$result=mysql_query("Select * From prods Where Ref = '$pRef'" ,$link); 
	$row = mysql_fetch_array($result);
					$vRef=(string)$row["Ref"];
					$vCode=(string)$row["Code"];
					$vDes=(string)$row["Des"];
					$vUnd=(string)$row["Und"];
					$vUnd_Box=(string)$row["Und_Box"];
					$vpeso=(string)$row["peso"];
					$vprecio_eshop=(string)$row["precio_eshop"];
					$vprecio_nelosa=(string)$row["precio_nelosa"];
					$vprecio_ibero=(string)$row["precio_ibero"];
					$vprecio_europa=(string)$row["precio_europa"];
					$vGrupo=(string)$row["Grupo"];
					$vcomentario=(string)$row["comentario"];
	$result=mysql_query("Select * From prods where Ref > '$pRef'" ,$link); 
	$row = mysql_fetch_array($result);
	$prox =	(string)$row["Ref"];
	echo "$pRef Actualizado - 3" ;
	}
}
mysql_free_result($result);  
mysql_close($link);
?>
  <table width="306" border="0" align="center">
    <tr>
      <td><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">prods DB Update </font></strong></div></td>
    </tr>
    <tr>
      <td width="401">
        <div align="center"><strong>
          <input name="refy" type="text" id="refy" value="<?php echo $prox ;?>"> 
          <input type="submit" name="Submit" value="Mostrar">
      </strong></div></td>
    </tr>
    <tr>
      <td>
</TD>
    </TR>
  </TABLE>
  <input name="hidden" type="hidden" id="hidden" value="">
</form>

<form name="form2" method="post" action="prods-update.php">
<table width="500" border="0" align="center">
  <tr>
    <td>
	        <table width="100%"  border="0">
          <tr>
            <td width="42%"><div align="right">Ref</div></td>
            <td width="58%"><input name="pRef" type="text" id="pRef" value="<?php echo $vRef ;?>"></td>
          </tr>
          <tr>
            <td><div align="right">Code</div></td>
            <td><input name="pCode" type="text" id="pCode" value="<?php echo $vCode ;?>"></td>
          </tr>
          <tr>
            <td><div align="right">Des</div></td>
            <td><input name="pDes" type="text" id="pDes" value="<?php echo $vDes ;?>"></td>
          </tr>
          <tr>
            <td><div align="right">Und</div></td>
            <td><input name="pUnd" type="text" id="pUnd" value="<?php echo $vUnd ;?>"></td>
          </tr>
          <tr>
            <td><div align="right">Und_Box</div></td>
            <td><input name="pUnd_Box" type="text" id="pUnd_Box" value="<?php echo $vUnd_Box ;?>"></td>
          </tr>
          <tr>
            <td><div align="right">peso</div></td>
            <td><input name="ppeso" type="text" id="ppeso" value="<?php echo $vpeso ;?>"></td>
          </tr>
          <tr>
            <td><div align="right">precio_eshop</div></td>
            <td><input name="pprecio_eshop" type="text" id="pprecio_eshop" value="<?php echo $vprecio_eshop ;?>"></td>
          </tr>
          <tr>
            <td><div align="right">precio_nelosa</div></td>
            <td><input name="pprecio_nelosa" type="text" id="pprecio_nelosa" value="<?php echo $vprecio_nelosa ;?>"></td>
          </tr>
          <tr>
            <td><div align="right">precio_ibero</div></td>
            <td><input name="pprecio_ibero" type="text" id="pprecio_ibero" value="<?php echo $vprecio_ibero ;?>"></td>
          </tr>
          <tr>
            <td><div align="right">precio_europa</div></td>
            <td><input name="pprecio_europa" type="text" id="pprecio_europa" value="<?php echo $vprecio_europa ;?>"></td>
          </tr>
          <tr>
            <td><div align="right">Grupo</div></td>
            <td><input name="pGrupo" type="text" id="pGrupo" value="<?php echo $vGrupo ;?>"></td>
          </tr>
          <tr>
            <td><div align="right">comentario</div></td>
            <td><input name="pcomentario" type="text" id="pcomentario" value="<?php echo $vcomentario ;?>"></td>
          </tr>
      </table>
	</td>
  </tr>
</table>
<p align="center">
  <input type="submit" name="Submit2" value="UpDaTe">
  <input name="hidden" type="hidden" id="hidden" value="si">
</p>
</form>
<p align="center"><a href="../../ControlMenu.php"><img src="../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
</HTML>