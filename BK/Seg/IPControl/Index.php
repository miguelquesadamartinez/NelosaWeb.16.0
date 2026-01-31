<HTML>
<HEAD>
<TITLE>IP control</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>

</HEAD>
<body bgcolor="#FFFFFF">
<table width="215" border="0" align="center">
  <tr>
    <td width="165"><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">IP
    Control - Index</font></strong></div></td>
    <td width="40" height="21"><div align="center">
      <?php 
require_once("../../../gueb/eMiKi/eMiKi/Funciones_PHP.php");
$link=conectarse(); 

$result=mysql_query("Select * From zControl_Index Order By Count",$link); 

$count = 0 ;
		  
while($row = mysql_fetch_array($result)) 
	{ 
		$count = $count + 1 ;
	}
	echo $count ;
?>
    </div></td>
  </tr>
</table>
<table width="200" border="1" align="center">
  
  <?php 
$link=conectarse(); 

$result=mysql_query("Select * From zControl_Index Order By Count",$link); 
		  
while($row = mysql_fetch_array($result)) 
	{ 
		$Vcount=(string)$row["Count"];	
		$vIP=(string)$row["IP"];
		echo "<tr><td>".$vIP."</td>";
	    echo "<td>".$Vcount."</td>";
	}
?>
</table>

<?php require_once("../../../gueb/eMiKi/eMiKi/Codes/Funciones_JavaScript.miki"); 
mysql_free_result($result);  
mysql_close($link);?>

</BODY>
</HTML>
