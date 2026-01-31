<?php session_register('prox'); session_register('items'); session_register('lastpaz'); ?>
<HTML><HEAD><TITLE>prods DB Update</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
</HEAD>
<BODY bgcolor="#FFFFFF">
  <?php 
echo "<BR>Init pageIndex<BR>" ;
//<form name="form1" method="post" action="eMiKi/Seg/page-index/prods-update.php">
require_once("../../../gueb/eMiKi/eMiKi/Funciones_PHP.php");
require_once("../../../gueb/eMiKi/eMiKi/libmail.php");

require_once("../../../gueb/eMiKi/eMiKi/Flistar.php");
$link=conectarse();  

//$items[0]="m";
//$paz = "../../" ;
listar("/home/nelosa/nelosa-www/eMiKi",$items,1);
//listar("/home/nelosa/nelosa-www/eMiKi",$items,1);
//listar("/home/nelosa/nelosa-www/_pagesnelosa",$items,1);
//listar("/home/nelosa/nelosa-www/_pages",$items,1);
//listar("/home/nelosa/nelosa-www/refill",$items,1);

		$result=mysql_query("Select * From indexPage" ,$link); 
		while($row = mysql_fetch_array($result)) 
			{ 
				echo $nom=(string)$row["nom"] . " - ";
				echo $idioma=(string)$row["idioma"] . " - ";
				echo $bk=(string)$row["bk"] . " - ";
				echo $br=(string)$row["br"] . " - ";
				echo $enlaces=(string)$row["enlaces"] . " - ";
				echo $texto=(string)$row["texto"] . " - ";
				echo $imagenes=(string)$row["imagenes"] . " - ";
				echo $coment=(string)$row["coment"] . "<BR>";
			}
echo "<BR>Done ! !<BR>";			
mysql_free_result($result);  
mysql_close($link);
//</form>
echo "<BR>Fin pageIndex<BR>" ;
?>

</HTML>