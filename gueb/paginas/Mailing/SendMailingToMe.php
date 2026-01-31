<HTML><HEAD>
<TITLE>Send Mailing Nelosa</title>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<LINK REL="stylesheet" HREF="../../../css/styles.css" TYPE="text/css">
</HEAD>
<BODY>
<div align="center">
  <table width="700" border="0" align="center">
    <tr> 
      <td width="165"><font color="#0000FF" size="1"><strong><font face="Arial, Helvetica, sans-serif"><img src="../../../img/diseno.paginas/comunes/Nelosas/Nelosa_2.gif" width="165" height="64"></font></strong></font></td>
      <td width="525"> <div align="center">
        <p><font color="#0000FF"><strong><font face="Arial, Helvetica, sans-serif">Mailing 
            consejos y novedades recarga de cartuchos Ink-Jet</font></strong></font></p>
        <p><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">TO ME </font></strong></p>
      </div>
        <div align="center"></div></td>
    </tr>
  </table>
</div>
<p align="center"><font color="#0000FF" size="1"><strong><font face="Arial, Helvetica, sans-serif"> 
  <?php
require_once("../../../inc/funciones/Funciones_PHP.php");
require_once "../../../inc/funciones/libmail.html.php";

echo "Comienza Proceso<BR>";
$cnt=0;

$link=conectarse();

$result=mysql_query("Select * From email_prueba",$link);   
while($row = mysql_fetch_array($result)) 
	{ 
		$emilio=(string)$row["email"];
		
		if ($handle = opendir("Doks")) 
		{
		while (false !== ($file = readdir($handle))) 
		{ 
				if ( $file != "." && $file != ".." )
				{
					$m = new Mail(); // create the mail
					
					$archivo = "Doks/" . $file ;
										
					$resto = substr ($file, 0, (strlen($file) -4 ));

					echo ( $emilio . " - - " . $archivo . "<BR>" ) ;
					//$m->Attach( $file, "text/html", "inline" );
					$m->Attach( $archivo, "text/html" );
					$m->From( "mailing@nelosa.net" ) ; 
					$m->To( $emilio ) ;
					$m->Subject( "Mailing Consejos recarga $resto" ) ;
					$m->Send(); // send the mail */
				}
		}
		closedir($handle); 
		}
	}

	echo "<BR><BR>FIN Proceso";
?>
  </font></strong></font> 
  
  <?php require_once("../../../inc/funciones/Funciones_JavaScript.miki"); 
mysql_free_result($result);  
mysql_close($link);
?>
</p>
<p align="center"><a href="index.php"><img src="../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a> </p>
</BODY>
</HTML>