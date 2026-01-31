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
      <td width="525"> <div align="center"><font color="#0000FF"><strong><font face="Arial, Helvetica, sans-serif">Mailing 
          consejos y novedades recarga de cartuchos Ink-Jet</font></strong></font></div>
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

// Conexiones a bases de datos
$unlink = conectarse () ;

echo ("DB: " . $db . "<BR>");

if ($db == "emails") { // Si es la tabla emails debe ir a buscar a la db nelosa_nelosa
	$emails_link = conectarse () ;
	echo ("nelosa_nelosa<BR>");
}
else { // Si no a la DB nelosa_nelosa_emails
	$emails_link = conectarse_param("nelosa_nelosa_emails") ;
	echo ("nelosa_nelosa_emails<BR>");
}
$email_cnt = 0 ; // Contador de emails

$email_result=mysql_query("Select * From " . $db ,$emails_link);   

echo "Select * From " . $db . "<BR>";

while($row = mysql_fetch_array($email_result)) 
	{ 
		$emilio=(string)$row["email"];	
				if ( $cnt >= $de && $cnt <= $hasta )
				{
					// if (!($resultado=mysql_query("Select * From Unsuscribed where email = '" . $emilio . "'" ,$unlink)))   
					$resultado=mysql_query("Select * From Unsuscribed where email = '" . $emilio . "'" ,$unlink) ;
					if (!(mysql_fetch_array( $resultado ) ) ) 
					{
						$m = new Mail(); // create the mail
						
						$file = "Doks/" . $doc ;
						
						$resto = substr ($file, 0, (strlen($doc) -4 ));
		//echo $emilio . "<BR>" ;
						
						$email_cnt = $email_cnt + 1 ;
						echo ( $email_cnt . " - " . $emilio . "<BR>" ) ;
						//$m->Attach( $file, "text/html", "inline" );
						$m->Attach( $file, "text/html" );
						$m->From( "mailing@nelosa.net" ) ; 
						$m->To( $emilio ) ;
						$m->Subject( $asunto ) ;
						
						$m->Send(); // send the mail */
						
					}
				}
	    $cnt=$cnt+1;
		$var="";
	}
	
$fecha = Date("Y-m-d");

$de_I=(int)$de;
$hasta_I=(int)$hasta;

if ($db != "email_prueba")
{
$link=conectarse();
	//mysql_query("Insert Into Send_Ins Values ('" . $doc . "','" . $fecha . "'," . $de_I . "," . $hasta_I . ",'" . $db . "')" ,$link);
	//echo ("Insert Into Send_Ins Values ('" . $doc . "','" . $fecha . "'," . $de_I . "," . $hasta_I . ")");
}
	echo "<BR><BR>FIN Proceso";
//mysql_free_result($result);  
//mysql_close($link);?>
  </font></strong></font> 
  
</p>
<p align="center"><a href="index.php"><img src="../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a> </p>
</BODY>
</HTML>