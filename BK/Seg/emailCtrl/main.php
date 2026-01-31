<HTML><HEAD><TITLE>Menu de control de emails</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
</HEAD>
<BODY bgcolor="#FFFFFF" text="#0000FF" link="#0000FF" vlink="#0000FF" alink="#0000FF">
<table width="278" border="0" align="center">
  <tr>
  	<td width="286">
		<div align="center"><strong>
			<font color="#FF0000" face="Arial, Helvetica, sans-serif">Resultados rastreo emails en DB&acute;s</font></strong>
		</div>
	</td>
  </tr>
  <tr>
  	<td>
<?php 
require_once("../../../inc/funciones/Funciones_PHP.php");
require_once("../../../gueb/eMiKi/libmail.php");
function emi ($address)
{
	if( ereg( ".*<(.+)>", $address, $regs ) ) {

		$address = $regs[1];
	}
 	if(ereg( "^[^@  ]+@([a-zA-Z0-9\-]+\.)+([a-zA-Z0-9\-]{2}|net|com|gov|mil|org|edu|int|biz)\$",$address) ) 
 		return true;
 	else
 		return false;
}

$link=conectarse();  $link_2=conectarse();  $link_3=conectarse();  $link_4=conectarse();  $link_5=conectarse(); 
$cnt = -1 ;
$cnt = 0 ;

// Emails clientes
$result=mysql_query("Select * From Clientes" ,$link); 
while($row = mysql_fetch_array($result)) 
	{ 
		// Guardamos email de la tabla Clientes
			$vble=(string)$row["email"];

					$result_2=mysql_query("Select * From emails Where email = '" . $vble . "'" ,$link_2); 
					$row_2 = mysql_fetch_array($result_2);
					$vble_2 ="";
					$vble_2 = (string)$row_2["email"] ;
				
			// Si no esta el email del cliente se mete en la tabla de los emails
			if ($vble_2=="")
			{
				// Esto es porque de problemas
				if ($vble<>"")
				{
					$m = new Mail(); // create the mail
					
					if ( emi( $vble ) )
					{
						$m->To( $vble ) ;
						$cnt = $cnt + 1 ;
						$result_3=mysql_query("Insert Into emails (email) VALUES('" . $vble . "')" ,$link_3); 
						echo "<BR> Proceso 1 DB Clientes<BR>";
					}
					else
					{
						$result_5=mysql_query("Select * From emails_2 Where email = '" . $vble . "'" ,$link_5); 
						$row_5 = mysql_fetch_array($result_5);
						$vble_5 ="";
						$vble_5 = (string)$row_5["email"] ;
				
						// Si no esta el email del cliente se mete en la tabla de los emails
						if ($vble_5=="")
						{
							// Si no es valido lo guardamos para arreglar
							$result_4=mysql_query("Insert Into emails_2 (email) VALUES('" . $vble . "')" ,$link_4);
							echo $vble . " - No valido insertado en DB emails_2 <BR>" ;
						}
					}
					
				}
			}
	}
// Emails de las instrucciones
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa_control",$link) ;
$link_2=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link_2) ;
$link_3=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link_3) ;

$result=mysql_query("Select * From zControl_Ins" ,$link); 
while($row = mysql_fetch_array($result)) 
	{ 
		// Guardamos email de la tabla zControl_Ins
		$vble=(string)$row["email"];
			$result_2=mysql_query("Select * From emails Where email = '" . $vble . "'" ,$link_2); 
			$row_2 = mysql_fetch_array($result_2);
			$vble_2 ="";
			$vble_2 = (string)$row_2["email"] ;

			// Si no esta el email del cliente se mete en la tabla de los emails
			if ($vble_2=="")
			{
				// Esto es porque de problemas
				if ($vble<>"")
				{
					$m = new Mail(); // create the mail
					
					if ( emi( $vble ) )
					{	
						$m->To( $vble ) ;		
						$cnt = $cnt + 1 ;
						$result_3=mysql_query("Insert Into emails (email) VALUES('" . $vble . "')" ,$link_3);  
						echo "<BR>Proceso 2 DB Sended Ins <BR>";
					}
					else
					{
						$result_5=mysql_query("Select * From emails_2 Where email = '" . $vble . "'" ,$link_5); 
						$row_5 = mysql_fetch_array($result_5);
						$vble_5 ="";
						$vble_5 = (string)$row_5["email"] ;
				
						// Si no esta el email del cliente se mete en la tabla de los emails
						if ($vble_5=="")
						{
							// Si no es valido lo guardamos para arreglar
							$result_4=mysql_query("Insert Into emails_2 (email) VALUES('" . $vble . "')" ,$link_4);
							echo $vble . " - No valido insertado en DB emails_2 <BR>" ;
						}
					}
				}
			}
	}
if ($cnt==0) { echo "Ningun email insertado"; }
elseif ($cnt==-1) { echo""; }
else { echo $cnt . " emails insertados"; }
?>
	
	</TD>
</TR>
</TABLE>


<p>&nbsp;</p>
</HTML>
