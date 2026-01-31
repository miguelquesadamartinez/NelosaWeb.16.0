<?php session_register('arry'); session_register('arry_cnt'); ?>
<HTML>
<HEAD>
<TITLE>IP control</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</HEAD>
<?php
function obtener_tablas ()
{
	$dbname = 'nelosa_nelosa';
	
	if (!mysql_connect("localhost","nelosa_nelosa","mqm1804")) {	   echo 'Could not connect to mysql';	   exit;	}
	$result = mysql_list_tables($dbname);
	
	if (!$result) {	   echo "DB Error, could not list tables\n";	   echo 'MySQL Error: ' . mysql_error();	   exit;	}
	
	$arry_cnt = 0 ;
	
	echo ('<select name="basededatos" id="basededatos">');
	echo "<option></option>";
	while ($row = mysql_fetch_row($result)) {
	   if ( ( strncmp ( $row[0], "emails_", 7 ) == 0 ) && ( $row[0] != emails_2 ) )  {
			
			$rest = substr( $row[0] , 7, strlen ( $row[0] ) ); // Le quita emails_
			
			echo "<option>$rest</option>";
			
			//$arry[$arry_cnt] = $rest ;
			//$arry_cnt = $arry_cnt + 1 ;
		}
	}
	echo ('</select>');
	
	mysql_free_result($result);
}
?> 
<body bgcolor="#FFFFFF" text="#0000FF">
<table width="95%"  border="1">
  <tr>
    <td><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Email search </font></strong></div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#CCFFFF"><div align="center">
      <form action="mostrar.webs.php" method="post" name="form1" target="_blank">
        <div align="center">
          <p><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"><br>
      Busqueda total <br>
            </font></strong><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">
            <?php
	$dbname = 'nelosa_nelosa';
	
	mysql_connect("localhost","nelosa_nelosa","mqm1804");
	$result = mysql_list_tables($dbname);
	echo ('<select name="basededatos" id="basededatos">');
	echo "<option></option>";
	while ($row = mysql_fetch_row($result)) {
	   if ( ( strncmp ( $row[0], "webs_new_", 9 ) == 0 ) && ( $row[0] != emails_2 ) )  {
			
			$rest = substr( $row[0] , 9, strlen ( $row[0] ) ); // Le quita webs_new_

			echo "<option>$rest</option>";
			
		}
	}
	echo ('</select>');
	
	mysql_free_result($result);
?>
            <br>
            </font></strong><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">Niveles
            <input name="niveles" type="text" id="niveles" value="1" size="4">
            <br>
            <input type="submit" name="Submit" value="Enviar">
          </font></strong><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"> </font> </strong></p>
        </div>
      </form>
      </div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC"><div align="center">
      <form action="search.one.page.php" method="post" name="form2" target="_blank">
        <div align="center">
          <p><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">One Page Search<br>
      Niveles
            <input name="niveles" type="text" id="niveles3" value="1" size="4">
            </font></strong><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"> </font> <br>
            </strong>
            <input name="paginasola" type="text" id="paginasola2" value="http://www.nelosa.net/aa.php" size="130">
            <?php //value="http://www.abog.net/abogados/abog_colegios_cgae.asp"?>
            <br>
            <?php

obtener_tablas ();

?>
            <br>
            <input type="submit" name="Submit2" value="Enviar">
          </p>
        </div>
      </form>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#CCFFFF"><div align="center">
      <form action="search.en.texto.php" method="post" name="form3" target="_blank" id="form3">
        <div align="center">
          <p><font color="#0000FF"><strong><font face="Arial, Helvetica, sans-serif">Texto<br>
            </font></strong></font>
              <?php

obtener_tablas ();

?>
              <br>
              <textarea name="texto" cols="125" rows="10" id="textarea3">
            </textarea>
              <br>
              <input type="submit" name="Submit4" value="Enviar Texto">
          </p>
        </div>
      </form>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC"><form action="search.en.texto.www.php" method="post" name="form3" target="_blank" id="form3">
      <div align="center">
        <blockquote>
          <blockquote>
            <p><font color="#0000FF"><strong><font face="Arial, Helvetica, sans-serif">Texto Paginas Amarillas <br>
              </font></strong></font>
                <?php

obtener_tablas ();

?>
                <br>
                <textarea name="texto" cols="125" rows="10" id="textarea5">
                  </textarea>
                <br>
                <input type="submit" name="Submit42" value="Enviar Texto">
            </p>
          </blockquote>
        </blockquote>
      </div>
    </form></td>
  </tr>
  <tr>
    <td><div align="center">
    </div></td>
  </tr>
  <tr>
    <td bordercolor="#FFCCFF"><form action="create.db.php" method="post" name="form3" target="_blank">
      <p align="center"> <strong><font face="Arial, Helvetica, sans-serif">DB Create
              <input name="db" type="text" id="db2">
              <input type="submit" name="Submit3" value="Crear Base de Datos">
              <br>
        </font></strong><font size="1"><strong><font face="Arial, Helvetica, sans-serif">Poner solo nombre (Abogados, Copisterias, etc . . . ) Creara la base de datos para emails y web&acute;s<br>
      </font></strong></font><strong><font face="Arial, Helvetica, sans-serif"> </font> </strong></p>
    </form></td>
  </tr>
  <tr>
    <td><div align="center"><strong><a href="varios/contadores.de.bases.de.datos.php"><font face="Arial, Helvetica, sans-serif">Contadores de Bases de Datos </font></a></strong></div></td>
  </tr>
  <tr>
    <td><div align="center">
      <form name="form4" method="post" action="add.php" target="_blank" >
        <p>A&ntilde;adir email <br>
          <strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"><?php
	$dbname = 'nelosa_nelosa';
	
	mysql_connect("localhost","nelosa_nelosa","mqm1804");
	$result = mysql_list_tables($dbname);
	echo ('<select name="db_paramy" id="db_paramy">');
	echo "<option></option>";
	while ($row = mysql_fetch_row($result)) {
	   if ( ( strncmp ( $row[0], "webs_new_", 9 ) == 0 ) && ( $row[0] != emails_2 ) )  {
			
			$rest = substr( $row[0] , 9, strlen ( $row[0] ) ); // Le quita webs_new_

			echo "<option>$rest</option>";
			
		}
	}
	echo ('</select>');
	
	mysql_free_result($result);
?>
          <br>
          <input name="web_paramy" type="text" id="web_paramy">
</font></strong> </p>
        </form>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">
      <form action="add.link.php" method="post" name="form5" target="_blank" id="form5" >
        <p>A&ntilde;adir link <br>
          <strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">
          <?php
	$dbname = 'nelosa_nelosa';
	
	mysql_connect("localhost","nelosa_nelosa","mqm1804");
	$result = mysql_list_tables($dbname);
	echo ('<select name="db_paramy" id="db_paramy">');
	echo "<option></option>";
	while ($row = mysql_fetch_row($result)) {
	   if ( ( strncmp ( $row[0], "webs_new_", 9 ) == 0 ) && ( $row[0] != emails_2 ) )  {
			
			$rest = substr( $row[0] , 9, strlen ( $row[0] ) ); // Le quita webs_new_

			echo "<option>$rest</option>";
			
		}
	}
	echo ('</select>');
	
	mysql_free_result($result);
?>
          </font></strong><br>
          <strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">
          <input name="web_paramy" type="text" id="web_paramy">
          </font></strong></p>
        </form>
    </div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
</table>
<p align="center"><a href="../../ControlMenu.php"><img src="../../../gueb/imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></p>
</body>

</BODY>
</HTML>
