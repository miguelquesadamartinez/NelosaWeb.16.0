<HTML>
<HEAD>
<TITLE>Textos productos</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>

<?php 
//echo "de: " . $de2 . " - " . "hasta: " . $hasta2 ;
?>

</HEAD>

<BODY>
<table width="600" border="0" align="center">
  <tr> 
    <td><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Textos 
        productos<br>
        <br>
        </font></strong></div></td>
  </tr>
  <tr> 
    <td><div align="center"> 
        <p>&nbsp;</p>
        <form name="form1" method="post" action="new_prod.php">
          <p><a class="AZUL" href="new_prod.php">Nuevo producto</a></p>
          <p> 
            <input type="submit" name="Submit" value="Submit">
          </p>
        </form>
      </div></td>
  </tr>
  <tr>
    <td><div align="right"><a href="traductor.php"><img src="../../../gueb/imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></div></td>
  </tr>
</table>
<?php 
require_once("../../../inc/funciones/Funciones_PHP.php");
require_once("../../../gueb/eMiKi/libmail.php");

   if (!($link=mysql_connect( "localhost" ,"nelosa_nelosa","mqm1804"))) { echo "Error conectando a la base de datos."; exit(); } 
   if (!mysql_select_db("nelosa_textos",$link)) { echo "Error seleccionando la base de datos."; exit(); } 

   if (!($link_Cat=mysql_connect( "localhost" ,"nelosa_nelosa","mqm1804"))) { echo "Error conectando a la base de datos."; exit(); } 
   if (!mysql_select_db("nelosa_textos",$link_Cat)) { echo "Error seleccionando la base de datos."; exit(); } 

   if (!($link_Eng=mysql_connect( "localhost" ,"nelosa_nelosa","mqm1804"))) { echo "Error conectando a la base de datos."; exit(); } 
   if (!mysql_select_db("nelosa_textos",$link_Eng)) { echo "Error seleccionando la base de datos."; exit(); } 

   if (!($link_Fra=mysql_connect( "localhost" ,"nelosa_nelosa","mqm1804"))) { echo "Error conectando a la base de datos."; exit(); } 
   if (!mysql_select_db("nelosa_textos",$link_Fra)) { echo "Error seleccionando la base de datos."; exit(); } 

   if (!($link_Ned=mysql_connect( "localhost" ,"nelosa_nelosa","mqm1804"))) { echo "Error conectando a la base de datos."; exit(); } 
   if (!mysql_select_db("nelosa_textos",$link_Ned)) { echo "Error seleccionando la base de datos."; exit(); } 

   if (!($link_Por=mysql_connect( "localhost" ,"nelosa_nelosa","mqm1804"))) { echo "Error conectando a la base de datos."; exit(); } 
   if (!mysql_select_db("nelosa_textos",$link_Por)) { echo "Error seleccionando la base de datos."; exit(); } 


/*$link=conectarse_param("nelosa_textos") ;
$link_Cat=conectarse_param("nelosa_textos") ; 
$link_Eng=conectarse_param("nelosa_textos") ; 
$link_Fra=conectarse_param("nelosa_textos") ;  
$link_Ned=conectarse_param("nelosa_textos") ;  
$link_Por=conectarse_param("nelosa_textos") ;
*/
if ($de2=="" && $hasta2=="")
{
echo "1<BR>de: " . $de2 . " - hasta: " . $hasta2 . "<BR>" ;
	$result=mysql_query("Select * From Descs_esp order by Ref" ,$link); 
	if ($chkCat2=='si'){		$result_Cat=mysql_query("Select * From Descs_cat order by Ref" ,$link_Cat); }	
	if ($chkEng2=='si'){		$result_Eng=mysql_query("Select * From Descs_eng order by Ref" ,$link_Eng); }	
	if ($chkFra2=='si'){		$result_Fra=mysql_query("Select * From Descs_fra order by Ref" ,$link_Fra); }	
	if ($chkNed2=='si'){		$result_Ned=mysql_query("Select * From Descs_ned order by Ref" ,$link_Ned); }	
	if ($chkPor2=='si'){		$result_Por=mysql_query("Select * From Descs_por order by Ref" ,$link_Por); }
}
else if ($de2!="" && $hasta2!="")
{
//echo "2<BR>de: " . $de2 . " - hasta: " . $hasta2 . "<BR>" ;
//echo "Select * From Descs_esp where Ref >= '" . $de2 . "' and Ref <= '" . $hasta2 . "' order by Ref<BR>" ;
	$result=mysql_query("Select * From Descs_esp where Ref >= '" . $de2 . "' and Ref <= '" . $hasta2 . "' order by Ref" ,$link); 
	if ($chkCat2=='si'){		$result_Cat=mysql_query("Select * From Descs_cat where Ref >= '" . $de2 . "' and Ref <= '" . $hasta2 . "' order by Ref" ,$link_Cat); }	
	if ($chkEng2=='si'){		$result_Eng=mysql_query("Select * From Descs_eng where Ref >= '" . $de2 . "' and Ref <= '" . $hasta2 . "' order by Ref" ,$link_Eng); }	
	if ($chkFra2=='si'){		$result_Fra=mysql_query("Select * From Descs_fra where Ref >= '" . $de2 . "' and Ref <= '" . $hasta2 . "' order by Ref" ,$link_Fra); }	
	if ($chkNed2=='si'){		$result_Ned=mysql_query("Select * From Descs_ned where Ref >= '" . $de2 . "' and Ref <= '" . $hasta2 . "' order by Ref" ,$link_Ned); }	
	if ($chkPor2=='si'){		$result_Por=mysql_query("Select * From Descs_por where Ref >= '" . $de2 . "' and Ref <= '" . $hasta2 . "' order by Ref" ,$link_Por); }
}
else if ($de2=="" && $hasta2!="")
{
echo "3<BR>de: " . $de2 . " - hasta: " . $hasta2 . "<BR>" ;
	$result=mysql_query("Select * From Descs_esp where Ref = '" . $hasta2 . "' order by Ref" ,$link); 
	if ($chkCat2=='si'){		$result_Cat=mysql_query("Select * From Descs_cat where Ref = '" . $hasta2 . "' order by Ref" ,$link_Cat); }	
	if ($chkEng2=='si'){		$result_Eng=mysql_query("Select * From Descs_eng where Ref = '" . $hasta2 . "' order by Ref" ,$link_Eng); }	
	if ($chkFra2=='si'){		$result_Fra=mysql_query("Select * From Descs_fra where Ref = '" . $hasta2 . "' order by Ref" ,$link_Fra); }	
	if ($chkNed2=='si'){		$result_Ned=mysql_query("Select * From Descs_ned where Ref = '" . $hasta2 . "' order by Ref" ,$link_Ned); }	
	if ($chkPor2=='si'){		$result_Por=mysql_query("Select * From Descs_por where Ref = '" . $hasta2 . "' order by Ref" ,$link_Por); }
}
else if ($de2!="" && $hasta2=="")
{
echo "4<BR>de: " . $de2 . " - hasta: " . $hasta2 . "<BR>" ;
	$result=mysql_query("Select * From Descs_esp where Ref = '" . $de2 . "' order by Ref" ,$link); 
	if ($chkCat2=='si'){		$result_Cat=mysql_query("Select * From Descs_cat where Ref = '" . $de2 . "' order by Ref" ,$link_Cat); }	
	if ($chkEng2=='si'){		$result_Eng=mysql_query("Select * From Descs_eng where Ref = '" . $de2 . "' order by Ref" ,$link_Eng); }	
	if ($chkFra2=='si'){		$result_Fra=mysql_query("Select * From Descs_fra where Ref = '" . $de2 . "' order by Ref" ,$link_Fra); }	
	if ($chkNed2=='si'){		$result_Ned=mysql_query("Select * From Descs_ned where Ref = '" . $de2 . "' order by Ref" ,$link_Ned); }	
	if ($chkPor2=='si'){		$result_Por=mysql_query("Select * From Descs_por where Ref = '" . $de2 . "' order by Ref" ,$link_Por); }
}
echo ( "<table width='670' border='0' align='center'>" ) ;

while($row = mysql_fetch_array($result)) 
	{ 
		// 
		$ref=(string)$row["Ref"];
		$texto=(string)$row["texto"];
		$vble=(string)$row["denom"];
			
		$texto = ereg_replace ("%B4", "'", $texto);	
			
 		echo ( "<tr><td><font color='#FF0000'>Ref. : " . $ref . "</font></td></tr><tr><td>Español</td></tr><tr><td>" ) ;
  		echo ( "<form name='form1' method='post' action='mod_prod.php' target='_blank'>" ) ;

        if ($printable2!="si")
		{
			echo ( " <textarea name='denom' cols='90' rows='1' id='denom' >" . $vble . "</textarea>" ) ;
			echo ( " <textarea name='texto' cols='90' rows='3' id='texto' >" . $texto . "</textarea>" ) ;
        }
		else
		{
			echo ( $vble ) ;
			echo ( $texto ) ;
		}

				echo ( " <input name='codigo' type='hidden' id='codigo' value='" . $ref . "'>" ) ;
        		echo ( " <input name='idioma' type='hidden' id='idioma' value='esp'>" ) ; // watch here !!
        if ($printable2!="si")
		{
      			echo ( " <input type='submit' name='Submit' value='Submit'></form></td></tr>" ) ;
		}		
	
if ($chkCat2=='si')
{	
		$row_Cat = mysql_fetch_array($result_Cat);
		$ref=(string)$row_Cat["Ref"];
		$texto=(string)$row_Cat["texto"];
		$vble=(string)$row_Cat["denom"];
			
		$texto = ereg_replace ("%B4", "'", $texto);	
		$vble = ereg_replace ("%B4", "'", $vble);	
			
			
 		echo ( "<tr><td>Catalá</td></tr><tr><td>" ) ;
  		echo ( "<form name='form1' method='post' action='mod_prod.php' target='_blank'>" ) ;
        if ($printable2!="si")
		{
				echo ( "<textarea name='denom' cols='90' rows='1' id='denom' >" . $vble . "</textarea>" ) ;
        		echo ( " <textarea name='texto' cols='90' rows='3' id='texto' >" . $texto . "</textarea>" ) ;
        }
		else
		{
			echo ( $vble ) ;
			echo ( $texto ) ;
		}
        		echo ( " <input name='codigo' type='hidden' id='codigo' value='" . $ref . "'>" ) ;
        		echo ( " <input name='idioma' type='hidden' id='idioma' value='cat'>" ) ; // watch here !!
        if ($printable2!="si")
		{
      			echo ( " <input type='submit' name='Submit' value='Submit'></form></td></tr>" ) ;
		}
}	
if ($chkEng2=='si')
{	
		$row_Eng = mysql_fetch_array($result_Eng);
		$ref=(string)$row_Eng["Ref"];
		$texto=(string)$row_Eng["texto"];
		$vble=(string)$row_Eng["denom"];
				
		$texto = ereg_replace ("%B4", "'", $texto);	
		$vble = ereg_replace ("%B4", "'", $vble);	
			
		
 		echo ( "<tr><td>English</td></tr><tr><td>" ) ;
  		echo ( "<form name='form1' method='post' action='mod_prod.php' target='_blank'>" ) ;
        if ($printable2!="si")
		{
				echo ( "<textarea name='denom' cols='90' rows='1' id='denom' >" . $vble . "</textarea>" ) ;
        		echo ( " <textarea name='texto' cols='90' rows='3' id='texto' >" . $texto . "</textarea>" ) ;
        }
		else
		{
			echo ( $vble ) ;
			echo ( $texto ) ;
		}
        		echo ( " <input name='codigo' type='hidden' id='codigo' value='" . $ref . "'>" ) ;
        		echo ( " <input name='idioma' type='hidden' id='idioma' value='eng'>" ) ; // watch here !!
        if ($printable2!="si")
		{
      			echo ( " <input type='submit' name='Submit' value='Submit'></form></td></tr>" ) ;
		}
}	
if ($chkFra2=='si')
{	
		$row_Fra = mysql_fetch_array($result_Fra);
		$ref=(string)$row_Fra["Ref"];
		$texto=(string)$row_Fra["texto"];
		$vble=(string)$row_Fra["denom"];
			
		$texto = ereg_replace ("%B4", "'", $texto);	
		$vble = ereg_replace ("%B4", "'", $vble);	
			
			
 		echo ( "<tr><td>French</td></tr><tr><td>" ) ;
  		echo ( "<form name='form1' method='post' action='mod_prod.php' target='_blank'>" ) ;
        if ($printable2!="si")
		{
				echo ( "<textarea name='denom' cols='90' rows='1' id='denom' >" . $vble . "</textarea>" ) ;
        		echo ( " <textarea name='texto' cols='90' rows='3' id='texto' >" . $texto . "</textarea>" ) ;
        }
		else
		{
			echo ( $vble ) ;
			echo ( $texto ) ;
		}
        		echo ( " <input name='codigo' type='hidden' id='codigo' value='" . $ref . "'>" ) ;
        		echo ( " <input name='idioma' type='hidden' id='idioma' value='fra'>" ) ; // watch here !!
        if ($printable2!="si")
		{
      			echo ( " <input type='submit' name='Submit' value='Submit'></form></td></tr>" ) ;
		}
}	
if ($chkNed2=='si')
{	
		$row_Ned = mysql_fetch_array($result_Ned);
		$ref=(string)$row_Ned["Ref"];
		$texto=(string)$row_Ned["texto"];
		$vble=(string)$row_Ned["denom"];
			
		$texto = ereg_replace ("%B4", "'", $texto);	
		$vble = ereg_replace ("%B4", "'", $vble);	
			
			
 		echo ( "<tr><td>Dutch</td></tr><tr><td>" ) ;
  		echo ( "<form name='form1' method='post' action='mod_prod.php' target='_blank'>" ) ;
        if ($printable2!="si")
		{
				echo ( "<textarea name='denom' cols='90' rows='1' id='denom' >" . $vble . "</textarea>" ) ;
        		echo ( " <textarea name='texto' cols='90' rows='3' id='texto' >" . $texto . "</textarea>" ) ;
        }
		else
		{
			echo ( $vble ) ;
			echo ( $texto ) ;
		}
        		echo ( " <input name='codigo' type='hidden' id='codigo' value='" . $ref . "'>" ) ;
        		echo ( " <input name='idioma' type='hidden' id='idioma' value='ned'>" ) ; // watch here !!
        if ($printable2!="si")
		{
      			echo ( " <input type='submit' name='Submit' value='Submit'></form></td></tr>" ) ;
		}
}	
if ($chkPor2=='si')
{	
		$row_Por = mysql_fetch_array($result_Por);
		$ref=(string)$row_Por["Ref"];
		$texto=(string)$row_Por["texto"];
		$vble=(string)$row_Por["denom"];
			
		$texto = ereg_replace ("%B4", "'", $texto);	
		$vble = ereg_replace ("%B4", "'", $vble);	
			
			
 		echo ( "<tr><td>Portugues</td></tr><tr><td>" ) ;
  		echo ( "<form name='form1' method='post' action='mod_prod.php' target='_blank'>" ) ;
        if ($printable2!="si")
		{
				echo ( "<textarea name='denom' cols='90' rows='1' id='denom' >" . $vble . "</textarea>" ) ;
        		echo ( " <textarea name='texto' cols='90' rows='3' id='texto' >" . $texto . "</textarea>" ) ;
        }
		else
		{
			echo ( $vble ) ;
			echo ( $texto ) ;
		}
        		echo ( " <input name='codigo' type='hidden' id='codigo' value='" . $ref . "'>" ) ;
        		echo ( " <input name='idioma' type='hidden' id='idioma' value='por'>" ) ; // watch here !!
        if ($printable2!="si")
		{
      			echo ( " <input type='submit' name='Submit' value='Submit'></form></td></tr>" ) ;
		}
}
	}
	
echo ( "</table>" ) ;

mysql_close ($link) ; 
mysql_close ($link_Cat) ; 
mysql_close ($link_Eng) ; 
mysql_close ($link_Fra) ; 
mysql_close ($link_Ned) ; 
mysql_close ($link_Por) ; 

?>
<table width="670" border="0" align="center">
  <tr>
    <td><div align="right"><a href="traductor.php"><img src="../../../gueb/imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></div></td>
  </tr>
</table>
<p>&nbsp;</p>
</BODY>
</HTML>
