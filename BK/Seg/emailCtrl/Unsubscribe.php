<HTML><HEAD>
<TITLE>Mailing Nelosa</title>
<meta name="title" content=""/>
<meta http-equiv="title" content=""/>
<meta name="DC.Title" content=""/>

<meta name="description" content="">
<meta http-equiv="description" content="">
<meta http-equiv="DC.Description" content="">

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta name="keywords" content=""/>
<meta http-equiv="keywords" content=""/>

</HEAD>
<BODY>
<?php
require_once("../../../inc/funciones/Funciones_PHP.php");

$link=conectarse();

$result=mysql_query("Insert Into Unsuscribed (email) VALUES('" . $vb_param . "')" ,$link);   
		
?>
<div align="center"></div>
<p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>
  Direccion de correo electronico <?php echo $email ; ?><br>
</strong></font><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>ha sido elimidada de nuestra base 
  de datos</strong></font></p>
<?php
//mysql_free_result($result);  
mysql_close($link);
?>

</BODY>
</HTML>