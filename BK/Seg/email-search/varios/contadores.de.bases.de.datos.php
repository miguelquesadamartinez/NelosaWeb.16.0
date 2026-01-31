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

	<table width="95%"  border="1"><tr>
	<td width="25%" bgcolor="#FFFFCC"><div align="center"></div></td>
	<td width="25%"><div align="center">Webs_New_</div></td>
	<td width="25%"><div align="center">Webs_</div></td>
	<td width="25%"><div align="center"><a class="AZUL" href="listar.emails.php">email_</a></div></td></tr>

          <?php
	$db_cnt = 0 ;
	$arry_cnt = 0 ;

	//echo '<table width="95%"  border="1"><tr>';
	//echo '<td width="25%" bgcolor="#CCCCCC"><div align="center"></div></td>';
	//echo '<td width="25%"><div align="center">Webs_New_</div></td>';
	//echo '<td width="25%"><div align="center">Webs_</div></td>';
	//echo '<td width="25%"><div align="center">email_</div></td></tr>';
	
	$dbname = 'nelosa_nelosa_emails';
	mysql_connect("nelosa.net","nelosa","mqm1804");	
	$result = mysql_list_tables($dbname);

	$link2=mysql_connect("nelosa.net","nelosa","mqm1804");
	mysql_select_db("nelosa_nelosa_emails",$link2);

	$linkW=mysql_connect("nelosa.net","nelosa","mqm1804");
	mysql_select_db("nelosa_nelosa_webs",$linkW);

	$linkNW=mysql_connect("nelosa.net","nelosa","mqm1804");
	mysql_select_db("nelosa_nelosa_newebs",$linkNW);

	$cnt_tot = 0 ;



	while ($row = mysql_fetch_row($result)) {
	   if ( ( strncmp ( $row[0], "emails_", 7 ) == 0 ) && ( $row[0] != emails_2 ) )  {
			
			$rest = substr( $row[0] , 7, strlen ( $row[0] ) ); // Le quita emails_
			
				for ($i = 0; $i <= $arry_cnt; $i++) 
				{
						echo '<tr><td><div align="center">' . $rest . '</div></td>';
						
						$cnt = 0 ;
						/*$resultNW=mysql_query("Select * From webs_new_" . $rest ,$linkNW); 
						while($rowNW = mysql_fetch_array($resultNW)) 
							{ 
								$cnt = $cnt + 1 ;
								$cnt_tot = $cnt_tot + 1 ;
							}*/
						echo '<td><div align="center">' . $cnt  . '</div></td>';
						$cnt = 0 ;
						//echo ("Select * From webs_" . $rest . "<BR>");
						$resultW=mysql_query("Select * From webs_" . $rest ,$linkW); 
						/*while($rowW = mysql_fetch_array($resultW)) 
							{ 
								$cnt = $cnt + 1 ;
								$cnt_tot = $cnt_tot + 1 ;
							}*/
						echo '<td><div align="center">' . $cnt  . '</div></td>';
						$cnt = 0 ;
						echo ("Select * From emails_" . $rest . "<BR>");
						$result2=mysql_query("Select * From emails_" . $rest ,$link2); 
						while($row = mysql_fetch_array($result2)) 
							{ 
								$cnt = $cnt + 1 ;
								$cnt_tot = $cnt_tot + 1 ;
							}
						echo '<td><div align="center">' . $cnt  . '</div></td>';
						echo '<td></td><td></td><td><div align="center">' . $cnt_tot  . '</div></td></tr>';
				}
		}
	}
	//echo '</table>';
?>

</table>

</font></strong></p>
      <p>&nbsp;</p>
    </div></td>
  </tr>
</table>
<p align="center"><a href="../index.php"><img src="../../../../gueb/imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></p>
</BODY>
</HTML>