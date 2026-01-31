<HTML>
<HEAD>
<TITLE>IP control</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>

</HEAD>

<body bgcolor="#FFFFFF">
<table width="186" border="0" align="center">
  <tr>
    <td width="189"><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">IP
    Control - Ins</font></strong></div></td>
    <td width="101" height="21"><div align="center">
	<?php 
require_once("../../../gueb/eMiKi/eMiKi/Funciones_PHP.php");
$link=conectarse(); 

$result=mysql_query("Select * From zControl_Ins Order By " . $select ,$link); 

$count = 0 ;
		  
while($row = mysql_fetch_array($result)) 
	{ 
		$count = $count + 1 ;
	}
	echo $count ;
?></div></td>
  </tr>
</table>

<table width="200" border="1" align="center">
  
  <?php 

$link=conectarse(); 

$result=mysql_query("Select * From zControl_Ins Order By " . $select ,$link); 
		  
while($row = mysql_fetch_array($result)) 
	{ 
		$Vemail=(string)$row["email"];	
		$vIP=(string)$row["IP"];
		$vcount=(string)$row["Count"];
		echo "<tr><td>".$Vemail."</td>";
		echo "<td>".$vIP."</td>";
	    echo "<td>".$vcount."</td>";
	}
?>
</table>

<?php require_once("../../../gueb/eMiKi/eMiKi/Codes/Funciones_JavaScript.miki"); 
mysql_free_result($result);  
mysql_close($link);?>

</BODY>
</HTML>