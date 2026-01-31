<?php 
function getext($idioma_p,$texte) {

	$link_P=conectarse_param("nelosa_nelosa_textos") ; 

$result_P=mysql_query("Select * From txt_" . $idioma_p . " Where id = '" . $texte . "'",$link_P) ;
//echo "Select * From txt_" . $idioma_p . " Where id = '" . $texte . "'<BR>" ;
	$row_P = mysql_fetch_array($result_P);
	$texto=(string)$row_P["texto"];

	$texto = ereg_replace ("%B4", "'", $texto);
	if ($texto == "" ) {
		//$texto="Missing Text " . $texte . " !!";
		$result_P=mysql_query("Select * From txt_esp Where id = '" . $texte . "'",$link_P) ;
		$row_P = mysql_fetch_array($result_P);
		$texto=(string)$row_P["texto"];

		//echo getcwd() . "\n";
		$text = $texte . " \nidioma: " . $idioma_p . "\nFolder " . getcwd();
		mail("info@nelosa.net","Falta texto ".$texte." idioma ".$idioma_p,$text,"From: <missing.text@nelosa.net>");
		//mail("emiki@nelosa.net","Falta texto ".$texte." idioma ".$idioma_p,$text,"From: <missing.text@nelosa.net>");
	}

return $texto ;
}// - - - - - - - - - - - - - - - - 
function getDenom($idioma,$ref) {
	$link=conectarse_param("nelosa_nelosa_textos") ; 
	$result=mysql_query("Select * From Descs_" . $idioma . " Where Ref = '" . $ref . "'",$link) ;
	$row = mysql_fetch_array($result);
	$texto=(string)$row["denom"];
return $texto ;
}// - - - - - - - - - - - - - - - - 
function getDesc($idioma,$ref) {
	$link=conectarse_param("nelosa_nelosa_textos") ; 
	$result=mysql_query("Select * From Descs_" . $idioma . " Where Ref = '" . $ref . "'",$link) ;
	$row = mysql_fetch_array($result);
	$texto=(string)$row["texto"];
return $texto ;
}// - - - - - - - - - - - - - - - - 
function conectarse() 
{ 
   if (!($linkc=mysql_connect( "localhost" ,"nelosa_nelosa","mqm1804")))    { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
    if (!mysql_select_db("nelosa_nelosa",$linkc))    { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $linkc; 
} 
function conectarse_param($param) 
{ 
   $jost = "localhost";
   //$jost = "nelosa.net";
   
   if (!($linkparam=mysql_connect( "localhost" ,"nelosa_nelosa","mqm1804"))) 
   {
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
    if (!mysql_select_db($param,$linkparam)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $linkparam; 
}
function conectarse_jost_param($jost,$param) 
{ 
   if (!($linkfun=mysql_connect( "localhost" ,"nelosa_nelosa","mqm1804"))) 
   {
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
    if (!mysql_select_db($param,$linkfun)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $linkfun; 
}

function Get_Ip ()
{
  function iptype1 () 
  {
   if (getenv("HTTP_CLIENT_IP")) 
     {
      return getenv("HTTP_CLIENT_IP");
     }
   else 
    {
      return "none";
    }
  }
  function iptype2 () 
  {
    if (getenv("HTTP_X_FORWARDED_FOR")) 
     {
      return getenv("HTTP_X_FORWARDED_FOR");
     }  
   else  
     {
      return "none";
     }
  }
  function iptype3 ()
  {
    if (getenv("REMOTE_ADDR")) 
      {
        return getenv("REMOTE_ADDR");
      }
    else 
      {
        return "none";
      }
  }
  
 function ip() {
    $ip1 = iptype1();
    $ip2 = iptype2();
    $ip3 = iptype3();
    if (isset($ip1) && $ip1 != "none" && $ip1 != "unknown") {
      return $ip1;
    } else if (isset($ip2) && $ip2 != "none" && $ip2 != "unknown") {
      return $ip2;
    } else if (isset($ip3) && $ip3 != "none" && $ip3 != "unknown") {
      return $ip3;
    } else {
      return "none";
    }
  }
  return $ipaddress = ip();
}
?>
