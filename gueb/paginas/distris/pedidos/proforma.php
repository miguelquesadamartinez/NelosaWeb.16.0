<?php 
require_once ( "../../eMiKi/headers/vbles_sesion.php" );
require_once ( "../../eMiKi/libmail2.php" ) ;
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Soporte tecnico</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15"/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>
<?php 
if ( $usr == "" ){ 
		echo ('<meta http-equiv="refresh" content="0;url=../varias/restricted.php">'); 
	}?>

</HEAD>

<body bgcolor="#000099">
<div align="center">
  <div align="center">
    <table width="650" border="0">
      <tr>
        <td><div align="center"><a href="../../../index.php"><img src="../../../../img/diseno.paginas/botones/home.gif" width="89" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="../../productos/index.php"><img src="../../../../img/diseno.paginas/botones/prods.gif" width="119" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="../../instrucciones/index.php"><img src="../../../../img/diseno.paginas/botones/ins.gif" width="132" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="../../varias/comprar.php"><img src="../../../../img/diseno.paginas/botones/comprar.gif" width="99" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="../../varias/soporte.php"><img src="../../../../img/diseno.paginas/botones/soporte.gif" width="96" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="../index.php"><img src="../../../../img/diseno.paginas/botones/club.gif" width="88" height="29" border="0"></a></div></td>
      </tr>
    </table>
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
    <table width="765" border="0" bgcolor="#FFFF00">
      <tr>
        <td><table width="99%"  border="0" align="center">
            <tr>
              <td width="15%"><div align="center"><a href="../../varias/about.php">Quien somos</a></div></td>
              <td width="29%"><div align="center"><a href="../../stp/index.php">Servicio Tecnico Paralelo </a></div></td>
              <td width="30%"><div align="center"><a href="../../instrucciones/aa.procedures/index.php">Sistemas Anti Recarga </a></div></td>
              <td width="26%"><div align="center"><a href="../../Mailing/index.php">Alta / Baja Mailing </a></div></td>
            </tr>
            <tr>
              <td><div align="center"><a href="../../varias/donde.php">Donde estamos </a></div></td>
              <td><div align="center"><a href="../../varias/software.php">Software para printables</a></div></td>
              <td><div align="center"><a href="../../rincon/index.php">Rincon Tecnico </a></div></td>
              <td><div align="center"><a href="../../distris/index.php">Acceso Tiendas y Distribuidores </a></div></td>
            </tr>
        </table></td>
      </tr>
    </table>
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
                    <div align="center">
                      <table width="670" border="0" align="center">
                        <tr>
                          <td width="656"><div align="center">
                              <p><b><font face="Arial, Helvetica, sans-serif"><b>Generador de Facturas Proforma</b></font></b></p>
                          </div></td>
                        </tr>
                        <tr>
                          <td><div align="center"></div></td>
                        </tr>
                      </table>
                      <form action="" method="post" name="Formulario_2" id="Formulario_2" onSubmit="return validarDatos()">
                        <font size="2"> </font>
                        <div align="center"><font size="2"> </font> </div>
                        <table width="641" border="0" align="center">
                          <tr>
                            <td width="69"><div align="center"><font size="2"><strong>Articulo</strong></font></div></td>
                            <td width="94"><div align="center"><font size="2"><strong>Cantidad</strong></font></div></td>
                            <td width="289"><div align="left"><font size="2"><strong>Descripcion</strong></font></div></td>
                            <td width="87"><div align="center"><font size="2"><strong>Precio Und</strong></font></div></td>
                            <td width="80"><div align="center"><font size="2"><strong>Total</strong></font></div></td>
                          </tr>
                          <?php 

if (isset($itemsEnCesta))
{ 

$sub_total = 0;
$total = 0;
$seguro = 0;
$dto = 0;
$portes = 0;
$cajas = 0;
$volumen = 0;
$peso = 0;
$link=conectarse();  

      foreach($itemsEnCesta as $k => $v)
	  { 
	  	$strTmp=(string)$itemsEnCesta[$k];
		$str=(string)$k;
		if ($strTmp != "0" )
		{	
		  echo ("<tr><td><div align='center'>" . $str . "</div></td>");
		  
		  echo ("<td><div align='center'>" . $strTmp . "</div></td>");
		  
		  $result=mysql_query("Select * From prods where Ref = '" . $str . "'",$link);

		  $row = mysql_fetch_array($result);

		  $des = (string)$row["Des"];
		  
		  echo ("<td><div align='left'> <font size='2'>" . $des . "</font='2'></div></td>") ;
		  
		  $preu = (string)$row["precio_ibero"];
		  
		  echo ("<td><div align='center'>" . $preu . "</div></td>");
		  
		  $prod_total = $preu * $strTmp ;
		  
		  $sub_total = $prod_total + $sub_total ;
		  
		  echo ("<td><div align='center'>" . $prod_total . "</div></td></tr>");
		  
		  $seguro = $sub_total * 1 / 100 ;
		  
		  if ( $p_dto=="a")
		  {
		  		$dto = $sub_total * 10 / 100 ;
		  }
		  elseif ( $p_dto=="b")
		  {
		  		$dto = $sub_total * 5 / 100 ;
		  }
		  elseif ( $p_dto=="c")
		  {
		  		$dto = $sub_total * 5 / 100 ;
		  }
		  elseif ( $p_dto=="d")
		  {
		  		$dto = 0 ;
		  }
		  
		  
		  $peso_db = (string)$row["peso"];
		  $peso = $peso + ( $peso_db * $strTmp ) ;

		  $Und_Box_db = (string)$row["Und_Box"];
		  $cajas = $cajas + ( $strTmp / $Und_Box_db ) ;
		  
  
		  $Und_db = (string)$row["Und"];
		  $unds = $strTmp / $Und_db ;
	    	
			echo "<tr colspan='5'><td colspan='5'><div align='center'><font size='1'>";
    		  	echo $unds . " Cajas de " . $Und_db . " Unidades" ;
		    echo "</font></div><div align='center'></div></td></tr>";
		  
		}		
      }

	  $volumen = 0.12 * $cajas ; 
	  
	  $peso_ton = $peso / 1000 ;  // Passamos el peso a toneladas
}	  		  
	  /*
	  BAF - Msnipulacion Puerto = 6,5 USD
	  Flete - Maritimo es lo que cambia
	  Gastos FOB - alculo igual en todos
	  */
function calk ($vol, $flete)
{
	$res = $vol * 6.5 ; // El BAF que siempres es el mismo
	$res = $res + ($vol * $flete);
	return $res ;
}
function calk_peso ($peso, $flete)
{
	$res = $vol * 6.5 ; // El BAF que siempres es el mismo
	$res = $res + ($peso * $flete);
	return $res ;
}

$parte_1 = 0 ;
$parte_2 = 0 ;
$portes = 0 ;

if ( $volumen > 1 ) // Si es mas de un metro cubico 
{

	  if ($radioportes == "barco")
	  {
	  		// calculo segun funcion
	  		if ( $radiopais=="losangeles") $parte_1 = calk( $volumen , 70 ) ; 
			if ( $radiopais=="newyork") $parte_1 = calk( $volumen , 36 ) ; 
			if ( $radiopais=="miami") $parte_1 = calk( $volumen , 56 ) ; 
			if ( $radiopais=="sanjose") $parte_1 = calk( $volumen , 100 ) ; 
			if ( $radiopais=="veracruz") $parte_1 = calk( $volumen , 80 ) ; 
			if ( $radiopais=="mexico") $parte_1 = calk( $volumen , 135 ) ; 
			if ( $radiopais=="cartagena") $parte_1 = calk( $volumen , 85 ) ; 
			if ( $radiopais=="bogota") $parte_1 = calk( $volumen , 170 ) ; 
			if ( $radiopais=="chile") $parte_1 = calk( $volumen , 85 ) ; 
			if ( $radiopais=="asuncion") $parte_1 = calk( $volumen , 95 ) ; 
			if ( $radiopais=="callao") $parte_1 = calk( $volumen , 85 ) ; 
			if ( $radiopais=="montevideo") $parte_1 = calk( $volumen , 40 ) ; 
			if ( $radiopais=="guayra") $parte_1 = calk( $volumen , 85 ) ; 
	  		if ( $radiopais=="guayaquil" ) $parte_1 = calk( $volumen , 85 ) ; 
	  		if ( $radiopais=="quito" ) $parte_1 = calk( $volumen , 130 ) ;
	  		if ($radiopais == "cuenca" ) $parte_1 = calk( $volumen , 155 ) ;
	  		
			$parte_2 = 18 * $volumen ; // Manipulacion
			$parte_2 = $parte_2 + 40;  // Impresos
			$parte_2 = $parte_2 +( 3 * $peso_ton); // T-3
			$parte_2 = $parte_2 + 40; // Despacho Aduanas
			$parte_2 = $parte_2 + 21; // Comunicaciones

			if ($peso <= 20 ) $recogida = 20 ; // Recogida
			elseif ($peso > 20 && $peso < 51 ) $recogida = 25 ;
			elseif ($peso > 51 && $peso < 100 ) $recogida = 35 ;
			elseif ($peso > 100 && $peso < 200 ) $recogida = 43 ;
			elseif ($peso > 200 && $peso < 300 ) $recogida = 50 ;
			elseif ($peso > 300 && $peso < 500 ) $recogida = 61 ;
			elseif ($peso > 500 && $peso < 750 ) $recogida = 65 ;
			elseif ($peso > 750 && $peso < 1000 ) $recogida = 85 ;
			elseif ($peso > 100 && $peso < 1500 ) $recogida = 110 ;
			elseif ($peso > 1500) $recogida = 150 ;

			$parte_2 = $parte_2 + $recogida;

			if ($parte_2 < 139) $parte_2 = 139; // Gasto FOB minimo

			$portes = $parte_1 + $parte_2 ;
		}


		// Aqui faltan todos los fletes
		// Suponiendo que el baf y others sean el mismo
		// Todo va segun el peso


		if ($radioportes == "avion")
	    {
			//Uno de estos por pais
	  		if ( $radiopais=="losangeles"); 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="newyork") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="miami") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="sanjose") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="veracruz") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="mexico") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="cartagena") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="bogota") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="chile") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="asuncion") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="callao") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="montevideo") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="guayra") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
	  		if ( $radiopais=="guayaquil" ) ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
	  		if ( $radiopais=="quito" ) ;
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
	  		if ($radiopais == "cuenca" ) ;
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			// end 	
			$parte_2 = 18 * $volumen ; // Manipulacion
			$parte_2 = $parte_2 + 40;  // Impresos
			$parte_2 = $parte_2 +( 3 * $peso_ton); // T-3
			$parte_2 = $parte_2 + 40; // Despacho Aduanas
			$parte_2 = $parte_2 + 21; // Comunicaciones

			if ($peso <= 20 ) $recogida = 20 ; // Recogida
			elseif ($peso > 20 && $peso < 51 ) $recogida = 25 ;
			elseif ($peso > 51 && $peso < 100 ) $recogida = 35 ;
			elseif ($peso > 100 && $peso < 200 ) $recogida = 43 ;
			elseif ($peso > 200 && $peso < 300 ) $recogida = 50 ;
			elseif ($peso > 300 && $peso < 500 ) $recogida = 61 ;
			elseif ($peso > 500 && $peso < 750 ) $recogida = 65 ;
			elseif ($peso > 750 && $peso < 1000 ) $recogida = 85 ;
			elseif ($peso > 100 && $peso < 1500 ) $recogida = 110 ;
			elseif ($peso > 1500) $recogida = 150 ;

			// Tasas de seguridad, fuel y G-4
			$tasa = $peso * 0.32 ; // Utilizamos el peso para calcolos

			$parte_2 = $parte_2 + $recogida + $tasa; //esta es la diferencia con lo de arriba

			// Me falta saber el minimo
			//if ($parte_2 < 139) $parte_2 = 139; // Gasto FOB minimo

			$portes = $parte_1 + $parte_2 ;

		}

} 
else // si no llega al metro cubico
{
	  if ($radioportes == "barco")
	  {
	  		//minimoes establecidos
	  		if ( $radiopais == "losangeles") $portes = 235 ; 
			if ( $radiopais == "newyork") $portes = 180 ; 
			if ( $radiopais == "miami") $portes = 200 ; 
			if ( $radiopais == "sanjose") $portes = 310 ; 
			if ( $radiopais == "veracruz") $portes = 245 ; 
			if ( $radiopais == "mexico") $portes = 300 ; 
			if ( $radiopais == "cartagena") $portes = 250 ; 
			if ( $radiopais == "bogota") $portes = 350 ; 
			if ( $radiopais == "chile") $portes = 250 ; 
			if ( $radiopais == "asuncion" ) $portes = 260 ; 
			if ( $radiopais == "callao" ) $portes = 250 ; 
			if ( $radiopais == "montevideo" ) $portes = 185 ; 
			if ( $radiopais == "guayra" ) $portes = 250 ; 
			if ( $radiopais == "guayaquil" ) $portes = 250 ; 
	  		if ( $radiopais == "quito" ) $portes = 295 ; 
	  		if ( $radiopais == "cuenca" ) $portes = 320 ; 
	  		
			//$parte_1 = 139; // Gasto FOB minimo
			//$parte_2 = 139; // Gasto FOB minimo
	}
		
		if ($radioportes == "avion")
	    {
	  		//minimoes establecidos
			
			// O J O
			// Solo he duplicado los de arriba
			
	  		if ( $radiopais == "losangeles") $portes = 470 ; 
			if ( $radiopais == "newyork") $portes = 340 ; 
			if ( $radiopais == "miami") $portes = 400 ; 
			if ( $radiopais == "sanjose") $portes = 620 ; 
			if ( $radiopais == "veracruz") $portes = 490 ; 
			if ( $radiopais == "mexico") $portes = 600 ; 
			if ( $radiopais == "cartagena") $portes = 500 ; 
			if ( $radiopais == "bogota") $portes = 700 ; 
			if ( $radiopais == "chile") $portes = 500 ; 
			if ( $radiopais == "asuncion" ) $portes = 520 ; 
			if ( $radiopais == "callao" ) $portes = 500 ; 
			if ( $radiopais == "montevideo" ) $portes = 370 ; 
			if ( $radiopais == "guayra" ) $portes = 500 ; 
			if ( $radiopais == "guayaquil" ) $portes = 500 ; 
	  		if ( $radiopais == "quito" ) $portes = 590 ; 
	  		if ( $radiopais == "cuenca" ) $portes = 640 ; 

	    }

}	

$portessidto = $portes ;
	
$portes = $portes - ( $portes * 30 / 100 ) ; // Descuento en los portes del 30 %

$total = $sub_total - $dto + $portes + $seguro ;

$totalsintreinte = $sub_total - $dto + $portessidto + $seguro ;

//}

//$cajas = round ($cajas,+1);
//$volumen = round ($volumen,+2);
?>
                          <tr>
                            <td><div align="center"> <font size="2">
                                <input name="refi" type="text" id="refi" size="8" maxlength="4">
                            </font></div></td>
                            <td><div align="center"> <font size="2">
                                <input name='cantidad' type='text' size='8' maxlength='4'>
                            </font></div></td>
                            <td>
                              <div align="left"> <font size="2">
                                <input type="submit" name="Submit" value="Calcular referencia">
                                <input name="vaciar" type="hidden" id="vaciar" value="no">
                            </font></div></td>
                            <td><div align="center"></div></td>
                            <td><div align="center"></div></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                        </table>
                        <div align="center"> </div>
                      </form>
                      <p><b></b> </p>
                      <form action="" method="post" name="Formulario_2" id="Formulario_2">
                        <font size="2"> </font>
                        <div align="center"><font size="2"> </font> </div>
                        <table width="640" border="0" align="center">
                          <tr>
                            <td><div align="left"><font size="1">Escoja forma de pago</font></div></td>
                            <td><div align="right"><font size="2"><strong>SUBTOTAL U$</strong></font></div></td>
                            <td width="17%">
                              <div align="right"> <?php echo $sub_total; ?> </div></td>
                          </tr>
                          <tr>
                            <td height="34"><div align="left">
                                <p><font size="2"><strong>A:</strong> Pago anticipado, ingreso en cuenta<br>
                                </font><font size="2">10% Dto. del subtotal de factura</font></p>
                            </div></td>
                            <td><p>
                                <label> </label>
                                <input name="radiobutton" type="radio" value="a" <?php if ( $p_dto=="a")echo "checked"; ?>>
                                <br>
                            </p></td>
                            <td><div align="right">
                                <?php if ($p_dto == "a")echo $dto; ?>
                            </div></td>
                          </tr>
                          <tr>
                            <td><div align="left"><font size="2"><strong>B: </strong>Cr&eacute;dito documentario 90 d&iacute;as<br>
          5% Dto. del subtotal de factura</font></div></td>
                            <td><input type="radio" name="radiobutton" value="b" <?php if ( $p_dto=="b")echo "checked"; ?>></td>
                            <td><div align="right">
                                <?php if ($p_dto == "b")echo $dto; ?>
                            </div></td>
                          </tr>
                          <tr>
                            <td><div align="left"><font size="2"><strong>C:</strong> Pago mediante tarjeta de cr&eacute;dito anticipado<br>
          5% Dto. ( M&aacute;ximo 3.000 U$ por d&iacute;a y tarjeta )</font></div></td>
                            <td><input type="radio" name="radiobutton" value="c" <?php if ( $p_dto=="c")echo "checked"; ?>></td>
                            <td><div align="right">
                                <?php if ($p_dto == "c")echo $dto; ?>
                            </div></td>
                          </tr>
                          <tr>
                            <td><div align="left"><font size="2"><strong>D:</strong> Pagare 90 d&iacute;as, previa concesi&oacute;n de cr&eacute;dito. Tramitaci&oacute;n cr&eacute;dito; Valor de los tres &uacute;ltimos pedidos dividido entre 3 El resultado ser&aacute; el m&aacute;ximo riesgo autorizado<br>
                            </font></div></td>
                            <td><input type="radio" name="radiobutton" value="d" <?php if ( $p_dto=="d")echo "checked"; ?>></td>
                            <td><div align="right">
                                <?php if ($p_dto == "d")echo $dto; ?>
                            </div></td>
                          </tr>
                          <tr>
                            <td colspan="2"><div align="right"><font size="2">
                                <input type="radio" name="radiopais" value="losangeles" <?php if ( $radiopais=="losangeles")echo "checked"; ?>>
          Los Angeles
          <input type="radio" name="radiopais" value="newyork" <?php if ( $radiopais=="newyork")echo "checked"; ?>>
          New York
          <input type="radio" name="radiopais" value="miami" <?php if ( $radiopais=="miami")echo "checked"; ?>>
          Miami<strong> </strong><strong>( EEUU )<br>
          </strong>
          <input type="radio" name="radiopais" value="sanjose" <?php if ( $radiopais=="sanjose")echo "checked"; ?>>
          San Jose<strong> ( Costa Rica )</strong><br>
          <input type="radio" name="radiopais" value="veracruz" <?php if ( $radiopais=="veracruz")echo "checked"; ?>>
          Veracruz -
          <input type="radio" name="radiopais" value="mexico" <?php if ( $radiopais=="mexico")echo "checked"; ?>>
          Mexico D.F.<strong> </strong><strong>( Mexico )</strong><br>
          <input type="radio" name="radiopais" value="cartagena" <?php if ( $radiopais=="cartagena")echo "checked"; ?>>
          Cartagena -
          <input type="radio" name="radiopais" value="bogota" <?php if ( $radiopais=="bogota")echo "checked"; ?>>
          Bogot&aacute; <strong> ( Colombia )<br>
          </strong>
          <input type="radio" name="radiopais" value="chile" <?php if ( $radiopais=="chile")echo "checked"; ?>>
          San Antonio / Valparaiso <strong> ( Chile )</strong><br>
          <input type="radio" name="radiopais" value="asuncion" <?php if ( $radiopais=="asuncion")echo "checked"; ?>>
          Asunci&oacute;n <strong>( Paraguay )<br>
          </strong>
          <input type="radio" name="radiopais" value="callao" <?php if ( $radiopais=="callao")echo "checked"; ?>>
          Callao <strong>( Per&uacute; )</strong><br>
          <input type="radio" name="radiopais" value="montevideo" <?php if ( $radiopais=="guayra")echo "checked"; ?>>
          Montevideo<strong>( Uruguay )</strong><br>
          <input type="radio" name="radiopais" value="guayra" <?php if ( $radiopais=="guayra")echo "checked"; ?>>
          La Guayra <strong>( Venezuela )</strong><br>
          <input type="radio" name="radiopais" value="guayaquil" <?php if ( $radiopais=="guayaquil")echo "checked"; ?>>
          Guayaquil --
          <input type="radio" name="radiopais" value="quito" <?php if ( $radiopais=="quito")echo "checked"; ?>>
          Quito --
          <input type="radio" name="radiopais" value="cuenca" <?php if ( $radiopais=="cuenca")echo "checked"; ?>>
          Cuenca <strong>( Ecuador )</strong><br>
                            </font></div></td>
                            <td><div align="right"></div></td>
                          </tr>
                          <tr>
                            <td colspan="2" bgcolor="#FFFFCC"><div align="right"><font size="2">
                                <input type="radio" name="radioportes" value="avion" <?php if ( $radioportes=="avion")echo "checked"; ?>>
          Avion
          <input type="radio" name="radioportes" value="barco" <?php if ( $radioportes=="barco")echo "checked"; ?>>
          Barco - GASTOS TRANSPORTE (CPT)</font></div></td>
                            <td><div align="right"> <?php echo $portes ; ?> </div></td>
                          </tr>
                          <tr>
                            <td colspan="2"><div align="right"><font size="2">Seguro 1%</font></div></td>
                            <td><div align="right"> <?php echo $seguro; ?> </div></td>
                          </tr>
                          <tr>
                            <td width="60%"><div align="center">
                                <input type="submit" name="Submit42" value="calcular portes y descuentos">
                            </div></td>
                            <td width="23%"><div align="center"><font size="2"><strong>TOTAL FACTURA U$ </strong></font></div></td>
                            <td><div align="right"> <?php echo $total ; ?> </div></td>
                          </tr>
                          <tr>
                            <td colspan="2"><div align="left">
                                <div align="left"><font size="2">Formas de pago : Ingreso en cuenta o pagar&eacute; </font></div>
                                <p align="left"><font size="2">BANCO DE SABADELL:<br>
                                  </font><font size="2">C&oacute;digo BIC: BSABESBB<br>
            IBAN: ES36 0081 0149 9000 0101 9809<br>
            PAGO POR TRANSFERENCIA SWIFT EN U$ AMERICANOS</font></p>
                            </div></td>
                            <td><div align="right"></div></td>
                          </tr>
                          <tr>
                            <td colspan="2"><div align="center">
                                <p><font color="#FF0000" size="2"><strong>DATOS LOGISTICOS</strong> </font></p>
                                <p><font size="2"><?php echo $cajas; ?> CAJAS 40X50X60 CM <br>
            VOLUMEN <strong><?php echo $volumen; ?></strong> METROS CUBICOS <br>
            PESO<strong> <?php echo $peso; ?> </strong>KILOS</font></p>
                            </div></td>
                            <td><div align="right"></div></td>
                          </tr>
                        </table>
                        <div align="center"> </div>
                      </form>
                      <table width="600" border="0" align="center">
                        <tr>
                          <td colspan="2">
                            <p align="right"><a href="../index.php"><img src="../../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>                          </td>
                        </tr>
                      </table>
                      <?php 
//require_once("../../../../inc/funciones/Funciones_JavaScript.miki"); 
mysql_free_result($result);  
mysql_close($link);
?>
<p>&nbsp;</p>
                  </div>
                    <p align="center"><a href="../../index.php"><img src="../../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>                    
                    <p align="center">&nbsp;</p></td>
              </tr>
            </table>
        </div></td>
      </tr>
    </table>
  </div>
  <p align="center">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
  C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</p>
</div>
</body>
</html>
