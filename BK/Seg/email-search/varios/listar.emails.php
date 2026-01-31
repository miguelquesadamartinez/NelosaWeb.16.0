<?php session_register('arry'); session_register('arry_cnt'); ?>
<HTML>
<HEAD>
<TITLE>IP control</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style TYPE="text/css">
A:link {color:"#0000FF";  text-decoration: none;}
A:hover{color:"#00FF00";  text-decoration: none;}
A:visited {color: "#0000FF";  text-decoration: none;}
</style>

</HEAD>
<body bgcolor="#FFFFFF" text="#0000FF">
<table width="95%"  border="1" align="center">
  <tr>
    <td><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Email search </font></strong></div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><div align="center">
      <p>&nbsp;</p>
      <p><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">

	

          <?php
	$db_cnt = 0 ;
	$arry_cnt = 0 ;
	$dbname = 'nelosa_nelosa';

	mysql_connect("localhost","nelosa_nelosa","mqm1804");	
	$result = mysql_list_tables($dbname);
	
	while ($row = mysql_fetch_row($result)) {
	   if ( ( strncmp ( $row[0], "emails_", 7 ) == 0 ) && ( $row[0] != emails_2 ) )  {
			
			$rest = substr( $row[0] , 7, strlen ( $row[0] ) ); // Le quita emails_
				$link2=mysql_connect("localhost","nelosa_nelosa","mqm1804");
				mysql_select_db("nelosa_nelosa",$link2);
			
				for ($i = 0; $i <= $arry_cnt; $i++) 
				{
						echo '<table width="95%"  bgcolor="#FFFFCC" border="1"><tr><td><div align="center">' . $rest . '</div></td></tr></table>';
						
						echo '<table width="95%"  border="1"><tr>';

						$table_cnt = 0 ;
						$result2=mysql_query("Select * From emails_" . $rest ,$link2); 
						while($row = mysql_fetch_array($result2)) 
							{ 
								$mail=(string)$row["email"];
								echo '<td><div align="center">' . $mail  . '</div></td>';
								if ($table_cnt > 2)		
								{
									echo ('</tr>');
									$table_cnt = 0 ;
								}
								$table_cnt = $table_cnt + 1 ;
							}
						echo '</tr></table>';
				}
			
		}
	}
	//echo '</table>';
?>

</table>
<p align="center"><a href="../index.php"><img src="../../../../gueb/imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></p>
<p align="center">&nbsp;</p>
</BODY>
</HTML>
