<?php 
session_name('nelosa');

?>
<HTML><HEAD>
<TITLE>Send Mailing Nelosa</title>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<meta http-equiv=refresh content=0;url=index.php>
</HEAD>
<BODY>
<p align="center"><font color="#0000FF" size="1"><strong><font face="Arial, Helvetica, sans-serif"> 
</font><font color="#0000FF" size="1"><strong><font face="Arial, Helvetica, sans-serif">eMiKi Server</font></strong></font></strong></font></p>
<p align="center"><font color="#0000FF" size="1"><strong><font face="Arial, Helvetica, sans-serif"><?php
require_once("../../../../../inc/funciones/Funciones_PHP.php");
require_once "../../../../eMiKi/libmail.php";

		$m = new Mail(); // create the mail
		
		$file = "mail.html" ;
		
		$m->Attach( $file, "text/html" );
		$m->From( "Nelosa - Recargas Universales Para Ink-Jet y LASER <info@nelosa.net>" ) ; 
		$m->To( $emilio ) ;
		$m->Cc( 'info@nelosa.net' ) ;
		$m->Subject( "Formulario de Alta en la Zona para Distribuidores de la WEB de Nelosa" ) ;
		//$m->Body( include ("mail.html"));

			$m->Send(); // send the mail 
			
			echo ("Enviado el mail a " . $emilio . " <BR>");
?>
</font></strong></font> </p>
</BODY>
</HTML>