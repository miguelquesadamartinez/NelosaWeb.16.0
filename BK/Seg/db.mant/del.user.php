<div align="center">
  <p>Mantenimiento de bases de datos </p>
  <table width="95%"  border="0">
    <tr>
      <td><div align="center">
        <p>
<?php        
require_once("../../../inc/funciones/Funciones_PHP.php");
require_once "../../libmail2.php";

$link=conectarse(); 

$result=mysql_query("Delete From Clientes where email = '". $usr ."'" ,$link); 
$result=mysql_query("Delete From Datas where mail = '". $usr ."'" ,$link); 

echo ("Delete From Clientes where email = '". $usr ."'<BR>"); 
echo ("Delete From Datas where mail = '". $usr ."'<BR><BR>"); 

echo ("Eliminado usuario ". $usr );

?>
		
		
		</p>
      </div></td>
    </tr>
  </table>
</div>

