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

$result=mysql_query("Delete From Clientes_Tiendas where email = '". $distri ."'" ,$link); 
$result=mysql_query("Delete From Datas_Tiendas where mail = '". $distri ."'" ,$link); 

echo ("Delete From Clientes_Tiendas where email = '". $distri ."'<BR>" ); 
echo ("Delete From Datas_Tiendas where mail = '". $distri ."'<BR><BR>" ); 

echo ("Eliminado Distribuidor ". $distri );

?>
		
		
		</p>
      </div></td>
    </tr>
  </table>
</div>

