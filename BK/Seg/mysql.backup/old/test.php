<?php        
$link=mysql_connect ("localhost", "nelosa", "mqm1804"); 
	
$db_list = mysql_list_dbs($link);

while ($row = mysql_fetch_object($db_list)) {

	$dbname = $row->Database;

    echo "----------<BR>" . $row->Database . "\n<BR>----------<BR>";

	$result2 = mysql_list_tables($dbname); // Tablas DB parl

	while ($row2 = mysql_fetch_row($result2)) {

		echo ("Tabla: " . $row2 [0] . "<br><BR>"); // 
			 
	}
}
	

?>