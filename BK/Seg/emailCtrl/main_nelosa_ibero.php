<HTML><HEAD><TITLE>Menu de control de emails</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
</HEAD>
<BODY bgcolor="#FFFFFF" text="#0000FF" link="#0000FF" vlink="#0000FF" alink="#0000FF">
<table width="278" border="0" align="center">
  <tr>
  	<td width="286">
		<div align="center">
		  <p><strong>
		  <font color="#FF0000" face="Arial, Helvetica, sans-serif">Resultados rastreo emails en DB&acute;s</font></strong></p>
		  
        <p><font face="Arial, Helvetica, sans-serif">Insertados en <strong>emails_nelosa_ibero</strong> 
          DB </font></p>
		</div>
	</td>
  </tr>
  <tr>
  	<td>
<?php 
require_once("../../../inc/funciones/Funciones_PHP.php");
$link_2=conectarse();  $link_3=conectarse();
$cnt = -1 ;
$cnt = 0 ;

// Enviado desde email_manager
if (isset($nelosa_param))
{
			echo "VB Process con parametro: $nelosa_param <BR>";
			
			$result_2=mysql_query("Select * From emails_nelosa_ibero Where email = '" . $nelosa_param . "'" ,$link_2); 
			$row_2 = mysql_fetch_array($result_2);
			$vble_2 ="";
			
			$vble_2 = (string)$row_2["email"] ;

			// Si no esta el email del cliente se mete en la tabla de los emails
			if ($vble_2=="")
			{
				$result_3=mysql_query("Insert Into emails_nelosa_ibero (email) VALUES('" . $nelosa_param . "')" ,$link_3); 
				//echo $nelosa_param . " insertado";
				$cnt = -1 ;
			}
			else 
			{
				//echo "No<BR>" . $nelosa_param;
				$cnt = -1 ;
			}
}
if ($cnt==0) { echo "Ningun email insertado"; }
elseif ($cnt==-1) { echo""; }
else { echo $cnt . " emails insertados"; }
?>
</TD></TR></TABLE>
</BODY></HTML>