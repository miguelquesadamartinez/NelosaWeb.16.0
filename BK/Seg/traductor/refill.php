<HTML>
<HEAD>
<TITLE>Textos recarga</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>

<?php 
//echo "de: " . $de . " - " . "hasta: " . $hasta ;
?>

</HEAD>

<BODY>
<table width="600" border="0" align="center">
  <tr> 
    <td><div align="center">
      <p><font face="Arial, Helvetica, sans-serif"><strong><font color="#FF0000">Textos 
        recarga</font></strong></font><font face="Arial, Helvetica, sans-serif"><strong><font color="#FF0000"><br>
          <br>
        </font></strong></font></p>
      </div></td>
  </tr>
  <tr> 
    <td><div align="center"> 
        <p>&nbsp;</p>
        <form action="new_refill.php" method="post" name="form1" target="_blank">
          <p><font face="Arial, Helvetica, sans-serif"><a class="AZUL" href="new_refill.php">Nuevo texto</a></font></p>
          <p> 
            <font face="Arial, Helvetica, sans-serif">
            <input type="submit" name="Submit" value="Submit">
            </font></p>
        </form>
        
      </div></td>
  </tr>
  <tr>
    <td><div align="right"><font face="Arial, Helvetica, sans-serif"><a href="traductor.php"><img src="../../../gueb/imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></font></div></td>
  </tr>
</table>
<?php 
require_once("../../../inc/funciones/Funciones_PHP.php");
require_once("../../../gueb/eMiKi/libmail.php");

if ($lineas == "") {
	$alto_txt = 3 ;
}
else
{
	$alto_txt = $lineas ;
}


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
/*if ($JustMiss = "si")
{
	$result=mysql_query("Select * From txt_esp where texto = ''" ,$link); 
	if ($chkCat=="si"){		$result_Cat=mysql_query("Select * From txt_cat where texto = ''" ,$link_Cat); }	
	if ($chkEng=='si'){		$result_Eng=mysql_query("Select * From txt_eng where texto = ''" ,$link_Eng); }	
	if ($chkFra=='si'){		$result_Fra=mysql_query("Select * From txt_fra where texto = ''" ,$link_Fra); }	
	if ($chkNed=='si'){		$result_Ned=mysql_query("Select * From txt_ned where texto = ''" ,$link_Ned); }	
	if ($chkPor=='si'){		$result_Por=mysql_query("Select * From txt_por where texto = ''" ,$link_Por); }
}
elseif ($de=="" && $hasta=="")*/
if ($de=="" && $hasta=="")
{
	echo ("1 - Select * From txt_esp<BR>");
	$result=mysql_query("Select * From txt_esp" ,$link); 
	if ($chkCat=="si"){		$result_Cat=mysql_query("Select * From txt_cat" ,$link_Cat); }	
	if ($chkEng=='si'){		$result_Eng=mysql_query("Select * From txt_eng" ,$link_Eng); }	
	if ($chkFra=='si'){		$result_Fra=mysql_query("Select * From txt_fra" ,$link_Fra); }	
	if ($chkNed=='si'){		$result_Ned=mysql_query("Select * From txt_ned" ,$link_Ned); }	
	if ($chkPor=='si'){		$result_Por=mysql_query("Select * From txt_por" ,$link_Por); }
	//echo "ninguno <BR>" ;
}
else if ($de!="" && $hasta!="")
{
	echo ("2 - Select * From txt_esp where id >= '" . $de . "' and id <= '" . $hasta . "'<BR>");
	$result=mysql_query("Select * From txt_esp where id >= '" . $de . "' and id <= '" . $hasta . "'" ,$link); 
	if ($chkCat=="si"){		$result_Cat=mysql_query("Select * From txt_cat where id >= '" . $de . "' and id <= '" . $hasta . "'" ,$link_Cat); }	
	if ($chkEng=='si'){		$result_Eng=mysql_query("Select * From txt_eng where id >= '" . $de . "' and id <= '" . $hasta . "'" ,$link_Eng); }	
	if ($chkFra=='si'){		$result_Fra=mysql_query("Select * From txt_fra where id >= '" . $de . "' and id <= '" . $hasta . "'" ,$link_Fra); }	
	if ($chkNed=='si'){		$result_Ned=mysql_query("Select * From txt_ned where id >= '" . $de . "' and id <= '" . $hasta . "'" ,$link_Ned); }	
	if ($chkPor=='si'){		$result_Por=mysql_query("Select * From txt_por where id >= '" . $de . "' and id <= '" . $hasta . "'" ,$link_Por); }
	//echo "los dos <BR>" ;
	}
else if ($de=="" && $hasta!="")
{
	echo ("3 - Select * From txt_esp where id = '" . $hasta . "'<BR>");
	$result=mysql_query("Select * From txt_esp where id = '" . $hasta . "'" ,$link); 
	if ($chkCat=="si"){		$result_Cat=mysql_query("Select * From txt_cat where id = '" . $hasta . "'" ,$link_Cat); }	
	if ($chkEng=='si'){		$result_Eng=mysql_query("Select * From txt_eng where id = '" . $hasta . "'" ,$link_Eng); }	
	if ($chkFra=='si'){		$result_Fra=mysql_query("Select * From txt_fra where id = '" . $hasta . "'" ,$link_Fra); }	
	if ($chkNed=='si'){		$result_Ned=mysql_query("Select * From txt_ned where id = '" . $hasta . "'" ,$link_Ned); }	
	if ($chkPor=='si'){		$result_Por=mysql_query("Select * From txt_por where id = '" . $hasta . "'" ,$link_Por); }
	//echo "hasta <BR>" ;
	}
else if ($de!="" && $hasta=="")
{
	echo ("4 - Select * From txt_esp where id = '" . $de . "'<BR>");
	$result=mysql_query("Select * From txt_esp where id = '" . $de . "'" ,$link); 
	if ($chkCat=="si"){		$result_Cat=mysql_query("Select * From txt_cat where id = '" . $de . "'" ,$link_Cat); }	
	if ($chkEng=='si'){		$result_Eng=mysql_query("Select * From txt_eng where id = '" . $de . "'" ,$link_Eng); }	
	if ($chkFra=='si'){		$result_Fra=mysql_query("Select * From txt_fra where id = '" . $de . "'" ,$link_Fra); }	
	if ($chkNed=='si'){		$result_Ned=mysql_query("Select * From txt_ned where id = '" . $de . "'" ,$link_Ned); }	
	if ($chkPor=='si'){		$result_Por=mysql_query("Select * From txt_por where id = '" . $de . "'" ,$link_Por); }
	//echo "de <BR>" ;
}

echo ( "<table width='670' border='0' align='center'>" ) ;

while($row = mysql_fetch_array($result)) 
	{ 
		// 
		$ref=(string)$row["id"];
		$texto=(string)$row["texto"];
			
        //if ($printable=="si")
		//{
			echo ( "<tr><td><font color='#FF0000' size='2'><STRONG>Texto: " . $ref . "</STRONG></font></td></tr>" ) ;
			echo ( "<tr><td>Español</td></tr>" ) ;
	  //	}
		//else
		//{
			//echo ("<tr><td><textarea name='texto' cols='100' rows='1' id='varref' >" . $ref . "</textarea></td></tr>" ) ;
		//}

	  	echo ( "<tr><td><form name='form1' method='post' action='mod_refill.php' target='_blank'>" ) ;
		
        if ($printable!="si")
		{
				echo ( " <textarea name='texto' cols='100' rows='" . $alto_txt  . "' id='texto' >" . $texto . "</textarea>" ) ;
        }
		else
		{
				echo ( $texto . "<BR>" ) ;
		}
				echo ( " <input name='codigo' type='hidden' id='codigo' value='" . $ref . "'>" ) ;
        		echo ( " <input name='idioma' type='hidden' id='idioma' value='esp'>" ) ; // watch here !!
        if ($printable!="si")
		{
      			echo ( " <input type='submit' name='Submit' value='Submit'></form></td></tr>" ) ;
		}
		$ref="";
		$texto="";

if ($chkCat=='si')
{	
		$row_Cat = mysql_fetch_array($result_Cat);
		$ref=(string)$row_Cat["id"];
		$texto=(string)$row_Cat["texto"];
		
		$texto = ereg_replace ("%B4", "'", $texto);
			
 		echo ( "<tr><td>Catalá</td></tr><tr><td>" ) ;
  		echo ( "<form name='form1' method='post' action='mod_refill.php' target='_blank'>" ) ;
        if ($printable!="si")
		{
				echo ( " <textarea name='texto' cols='100' rows='" . $alto_txt  . "' id='texto' >" . $texto . "</textarea>" ) ;
        }
		else
		{
				echo ( $texto . "<BR>" ) ;
		}
				echo ( " <input name='codigo' type='hidden' id='codigo' value='" . $ref . "'>" ) ;
        		echo ( " <input name='idioma' type='hidden' id='idioma' value='cat'>" ) ; // watch here !!
        if ($printable!="si")
		{
      			echo ( " <input type='submit' name='Submit' value='Submit'></form></td></tr>" ) ;
		}
		$ref="";
		$texto="";
}
if ($chkEng=='si')
{	
		$row_Eng = mysql_fetch_array($result_Eng);
		$ref=(string)$row_Eng["id"];
		$texto=(string)$row_Eng["texto"];
		
		$texto = ereg_replace ("%B4", "'", $texto);
			
 		echo ( "<tr><td>English</td></tr><tr><td>" ) ;
  		echo ( "<form name='form1' method='post' action='mod_refill.php' target='_blank'>" ) ;
        if ($printable!="si")
		{
				echo ( " <textarea name='texto' cols='100' rows='" . $alto_txt  . "' id='texto' >" . $texto . "</textarea>" ) ;
        }
		else
		{
				echo ( $texto . "<BR>" ) ;
		}
				echo ( " <input name='codigo' type='hidden' id='codigo' value='" . $ref . "'>" ) ;
        		echo ( " <input name='idioma' type='hidden' id='idioma' value='eng'>" ) ; // watch here !!
        if ($printable!="si")
		{
      			echo ( " <input type='submit' name='Submit' value='Submit'></form></td></tr>" ) ;
		}
		$ref="";
		$texto="";
}
if ($chkFra=='si')
{	
		$row_Fra = mysql_fetch_array($result_Fra);
		$ref=(string)$row_Fra["id"];
		$texto=(string)$row_Fra["texto"];
		
		$texto = ereg_replace ("%B4", "'", $texto);
			
 		echo ( "<tr><td>French</td></tr><tr><td>" ) ;
  		echo ( "<form name='form1' method='post' action='mod_refill.php' target='_blank'>" ) ;
        if ($printable!="si")
		{
        		echo ( " <textarea name='texto' cols='100' rows='" . $alto_txt  . "' id='texto' >" . $texto . "</textarea>" ) ;
        }
		else
		{
				echo ( $texto . "<BR>" ) ;
		}
        		echo ( " <input name='codigo' type='hidden' id='codigo' value='" . $ref . "'>" ) ;
        		echo ( " <input name='idioma' type='hidden' id='idioma' value='fra'>" ) ; // watch here !!
        if ($printable!="si")
		{
      			echo ( " <input type='submit' name='Submit' value='Submit'></form></td></tr>" ) ;
		}
		$ref="";
		$texto="";
}
if ($chkNed=='si')
{	
		$row_Ned = mysql_fetch_array($result_Ned);

		$ref=(string)$row_Ned["id"];
		$texto=(string)$row_Ned["texto"];
		
		$texto = ereg_replace ("%B4", "'", $texto);
			
 		echo ( "<tr><td>Dutch</td></tr><tr><td>" ) ;
  		echo ( "<form name='form1' method='post' action='mod_refill.php' target='_blank'>" ) ;
        if ($printable!="si")
		{
        		echo ( " <textarea name='texto' cols='100' rows='" . $alto_txt  . "' id='texto' >" . $texto . "</textarea>" ) ;
        }
		else
		{
				echo ( $texto . "<BR>" ) ;
		}
        		echo ( " <input name='codigo' type='hidden' id='codigo' value='" . $ref . "'>" ) ;
        		echo ( " <input name='idioma' type='hidden' id='idioma' value='ned'>" ) ; // watch here !!
        if ($printable!="si")
		{
      			echo ( " <input type='submit' name='Submit' value='Submit'></form></td></tr>" ) ;
		}
		$ref="";
		$texto="";
}
if ($chkPor=='si')
{	
		$row_Por = mysql_fetch_array($result_Por);
		$ref=(string)$row_Por["id"];
		$texto=(string)$row_Por["texto"];
		
		$texto = ereg_replace ("%B4", "'", $texto);
			
 		echo ( "<tr><td>Portugues</td></tr><tr><td>" ) ;
  		echo ( "<form name='form1' method='post' action='mod_refill.php' target='_blank'>" ) ;
        if ($printable!="si")
		{
        		echo ( " <textarea name='texto' cols='100' rows='" . $alto_txt  . "' id='texto' >" . $texto . "</textarea>" ) ;
        }
		else
		{
				echo ( $texto . "<BR>" ) ;
		}
        		echo ( " <input name='codigo' type='hidden' id='codigo' value='" . $ref . "'>" ) ;
        		echo ( " <input name='idioma' type='hidden' id='idioma' value='por'>" ) ; // watch here !!
        if ($printable!="si")
		{
      			echo ( " <input type='submit' name='Submit' value='Submit'></form></td></tr>" ) ;
		}
		$ref="";
		$texto="";
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
</BODY>
</HTML>
