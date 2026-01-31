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
<table width="95%"  border="1" align="center">
  <tr>
    <td><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Email search </font></strong></div></td>
  </tr>
</table>
<table width="95%"  border="0" align="center">
  <tr>
    <td><div align="right"><a href="varios/some.info.php" target="_blank"><strong>Algo de informacion</strong></a></div></td>
  </tr>
</table>
<table width="95%"  border="1" align="center">
  <tr>
    <td width="50%" bgcolor="#FFFFCC"><form action="search.en.texto.www.php" method="post" name="form3" target="_blank" id="form3">
      <div align="center">
        <blockquote>
          <blockquote>
            <p><font color="#0000FF"><strong><font face="Arial, Helvetica, sans-serif">Texto Paginas Amarillas</font></strong></font></p>
            <p><font color="#0000FF"><font face="Arial, Helvetica, sans-serif">Copiar el texto de las paginas que muestras<br>
          Seleccionar la base de datos, si no petara<br>
          Pinchar en enviar texto <br>
          Se habre una pagina, comprobar que las paginas web esten bien y pulsar enviar, en cada uno para guardarlo</font> </font> </p>
            <p>
              <?php

obtener_tablas ();

?>
              <br>
              <textarea name="texto" cols="30" rows="10" id="textarea2">
                  </textarea>              
              <br>
              <input type="submit" name="Submit422" value="Enviar Texto">
            </p>
          </blockquote>
        </blockquote>
      </div>
    </form></td>
    <td width="50%" bgcolor="#CCFFCC"><div align="center">
      <form action="search.en.texto.php" method="post" name="form3" target="_blank" id="form3">
        <div align="center">
          <p><font color="#0000FF"><strong><font face="Arial, Helvetica, sans-serif">Texto</font></strong></font></p>
          <p>&nbsp;</p>
          <p>Para textos que contengan emails o paginas web </p>
          <p><font color="#0000FF"><strong><font face="Arial, Helvetica, sans-serif"><br>
                                                </font></strong></font>
              <?php

obtener_tablas ();

?>
              <br>
              <textarea name="texto" cols="30" rows="10" id="textarea">
                  </textarea>
              <br>
              <input type="submit" name="Submit4" value="Enviar Texto">
                                        </p>
        </div>
      </form>
    <strong></strong></div></td>
  </tr>
</table>
<table width="95%"  border="0" align="center">
  <tr>
    <td><div align="center"><strong></strong></div></td>
  </tr>
</table>
<table width="95%"  border="1" align="center">
  <tr>
    <td bgcolor="#CCFFFF"><form action="mostrar.webs.php" method="post" name="form1" target="_blank">
      <div align="center">
        <p><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"><br>
      Busqueda total</font></strong></p>
        <p>Muestra las webs guardas de la db seleccionada, al enviarla muestra los emails para pinchar y guardar, o mas paginas de la web <br>
          Dos secciones emails y links, pinchar en cada enviar que corresponda para guardar el email o le link <br>
  Los links que se guarden desede aqui, se deben volver a buscar desde aqui </p>
        <p><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif">
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
            <input type="submit" name="Submit5" value="Enviar">
                </font></strong>  </p>
      </div>
    </form>      <div align="left"></div></td>
  </tr>
</table>
<table width="95%"  border="0" align="center">
  <tr>
    <td><div align="center"><strong></strong></div></td>
  </tr>
</table>
<table width="95%"  border="1" align="center">
  <tr>
    <td bgcolor="#FFCCFF"><div align="center">
      <form action="create.db.php" method="post" name="form3" target="_blank">
        <p align="center"> <strong><font face="Arial, Helvetica, sans-serif">DB Create
                <input name="db" type="text" id="db22">
                <input type="submit" name="Submit32" value="Crear Base de Datos">
                <br>
          </font></strong><font size="1"><strong><font face="Arial, Helvetica, sans-serif">Poner solo nombre (Abogados, Copisterias, etc . . . ) Creara la base de datos para emails y web&acute;s<br>
        </font></strong></font><strong><font face="Arial, Helvetica, sans-serif"> </font> </strong></p>
      </form>
      </div></td>
  </tr>
</table>
<table width="95%"  border="0" align="center">
  <tr>
    <td><div align="center"><strong></strong></div></td>
  </tr>
</table>
<table width="95%"  border="1" align="center">
  <tr>
    <td><form action="add.link.php" method="post" name="form5" target="_blank" id="form5" >
        <p align="center"><font face="Arial, Helvetica, sans-serif">A&ntilde;adir link <br>
              <strong><font color="#0000FF">
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
              <strong><font face="Arial, Helvetica, sans-serif"><strong><font color="#0000FF">
              <input name="web_paramy" type="text" id="web_paramy32">
              </font></strong></font><font color="#0000FF"> <br>
              <input type="submit" name="Submit43" value="Enviar">
            </font></strong></font></p>
    </form></td>
    <td><div align="center">
        <form name="form4" method="post" action="add.php" target="_blank" >
          <p><font face="Arial, Helvetica, sans-serif">A&ntilde;adir email <br>
                <strong><font color="#0000FF">
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
                <br>
                </font><font face="Arial, Helvetica, sans-serif"><strong><font color="#0000FF">
                <input name="web_paramy" type="text" id="web_paramy">
                </font></strong></font><font color="#0000FF"> <br>
                <input type="submit" name="Submit22" value="Enviar">
              </font></strong> </font></p>
        </form>
        <strong></strong></div></td>
  </tr>
</table>
<table width="95%"  border="0" align="center">
  <tr>
    <td><div align="center"><strong></strong></div></td>
  </tr>
</table>
<table width="95%"  border="1" align="center">
  <tr>
    <td bgcolor="#FFFF00"><div align="center"><strong><a href="varios/contadores.de.bases.de.datos.2.php"><font face="Arial, Helvetica, sans-serif"><br>
      Contadores de Bases de Datos<br> 
      </font></a></strong></div></td>
  </tr>
</table>
<table width="95%"  border="0" align="center">
  <tr>
    <td><div align="center"><strong></strong></div></td>
  </tr>
</table>
<table width="95%"  border="1" align="center">
  <tr>
    <td bgcolor="#CCCCCC"><div align="center">
        <form action="add.link.amarillas.php" method="post" name="form5" target="_blank" id="form5" >
          <p><font face="Arial, Helvetica, sans-serif">A&ntilde;adir web Paginas Amarillas<br>
            esto, teoricamente, le escribes parte del link y el genera todas las paginas de resultados 
          </font></p>
          <p><font face="Arial, Helvetica, sans-serif">                <strong><font color="#0000FF">
            <input name="web_paramy" type="text" id="web_paramy25" size="100">
                <br>
                <input type="submit" name="Submit432" value="Enviar">
              </font></strong></font></p>
        </form>
    <strong></strong></div></td>
  </tr>
</table>
<table width="95%"  border="0" align="center">
  <tr>
    <td><div align="center"><strong></strong></div></td>
  </tr>
</table>
<table width="95%"  border="1" align="center">
  <tr>
    <td bgcolor="#CCCCCC"><div align="center"><a href="mostrar.webs.amarillas.php" target="_blank"><strong><font face="Arial, Helvetica, sans-serif">Mostrar Webs Amarillas</font></strong></a> - not working fine </div></td>
  </tr>
</table>
<table width="95%"  border="0" align="center">
  <tr>
    <td><div align="left"></div></td>
  </tr>
</table>
<p align="center"><a href="../../ControlMenu.php"><img src="../../../gueb/imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></p>
</body>

</BODY>
</HTML>
