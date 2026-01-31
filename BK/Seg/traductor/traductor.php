<HTML><HEAD><TITLE>Traductor</TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
</HEAD><BODY>
<?php /* 
                  pattern /  replace
$texto = ereg_replace ("'", "%B4", $texto); -> Esta es la que se usa para guardar

$texto = ereg_replace ("%B4", "'", $texto); -> Esta es la que se usa para leer el texto

 */?>
<table width="600" border="0" align="center">
  <tr> 
    <td><div align="center"><font face="Arial, Helvetica, sans-serif"><strong><font color="#FF0000">Traductor<br>
        <br>
        </font></strong></font></div></td>
  </tr>
  <tr> 
    <td><div align="center"> 
        <p>&nbsp;</p>
        <p>&nbsp; </p>
      </div></td>
  </tr>
</table>
<table width="670" border="0" align="center">
  <tr> 
    <td width="50%"><div align="center"><font face="Arial, Helvetica, sans-serif"><strong><a class="AZUL" href="refill.php">Textos 
        recarga</a></strong></font></div></td>
    <td width="50%"><div align="center"><font face="Arial, Helvetica, sans-serif"><strong><a class="AZUL" href="productos.php">Textos 
        productos</a></strong></font></div></td>
  </tr>
  <tr> 
    <td><form name="form1" method="post" action="refill.php">
        <div align="center"> 
          <table width="100%" border="0">
            <tr> 
              <td colspan="2"><div align="center">
                <p><font color="#0000FF" face="Arial, Helvetica, sans-serif">De 
                    <input name="de" type="text" id="de" size="10">
                    hasta 
                    <input name="hasta" type="text" id="hasta" size="10">
                    <br>
                    <br>
                    Tama&ntilde;o text
                    <input name="lineas" type="text" id="lineas" size="6">
</font></p>
                <p><font color="#0000FF" face="Arial, Helvetica, sans-serif"><?php /*Just Missing 
                   <input name="JustMiss" type="checkbox" id="JustMiss" value="si"> */?>
                  <br>
                </font><font color="#0000FF" face="Arial, Helvetica, sans-serif"><br>
                  </font></p>
                </div></td>
            </tr>
            <tr> 
              <td width="40%"><font face="Arial, Helvetica, sans-serif">
                <input name="printable" type="checkbox" id="printable" value="si">
                <font color="#0000FF">Printable</font></font></td>
              <td width="60%"><font color="#0000FF" face="Arial, Helvetica, sans-serif"> 
                <input name="chkCat" type="checkbox" id="chkCat" value="si">
                Catalan<br>
                <input name="chkEsp" type="checkbox" id="chkEsp" value="si" checked>
                Espa&ntilde;ol<br>
                <input name="chkEng" type="checkbox" id="chkEng" value="si">
                English <br>
                <input name="chkFra" type="checkbox" id="chkFra" value="si">
                French<br>
                <input name="chkNed" type="checkbox" id="chkNed3" value="si">                
                Dutch <br>
                <input name="chkPor" type="checkbox" id="chkPor" value="si">
                Portugues <br>
                </font></td>
            </tr>
            <tr> 
              <td colspan="2"><div align="center"> 
                  <font face="Arial, Helvetica, sans-serif">
                  <input type="submit" name="Submit" value="Submit">
                  </font></div></td>
            </tr>
          </table>
          
        <p>&nbsp;</p></div>
      </form></td>
    <td><form name="form1" method="post" action="productos.php">
        <div align="center"> 
          <table width="100%" border="0">
            <tr> 
              <td colspan="2"><div align="center">
                <p>&nbsp;</p>
                <p><font color="#0000FF" face="Arial, Helvetica, sans-serif">                  De 
                    <input name="de2" type="text" id="de2" size="10">
                    hasta 
                    <input name="hasta2" type="text" id="hasta2" size="10">
                </font><font color="#0000FF" face="Arial, Helvetica, sans-serif"><br>
                <br>
                  </font></p>
                </div></td>
            </tr>
            <tr> 
              <td width="40%"><font face="Arial, Helvetica, sans-serif">
                <input name="printable2" type="checkbox" id="printable2" value="si"> 
                <font color="#0000FF">Printable</font></font></td>
              <td width="60%"><font color="#0000FF" face="Arial, Helvetica, sans-serif"> 
                <input name="chkCat2" type="checkbox" id="chkCat2" value="si">
                Catalan<br>
                <input name="chkEsp2" type="checkbox" id="chkEsp2" value="si" checked>
                Espa&ntilde;ol<br>
                <input name="chkEng2" type="checkbox" id="chkEng2" value="si">
                English <br>
                <input name="chkFra2" type="checkbox" id="chkFra2" value="si">
                French<br>
                <input name="chkNed2" type="checkbox" id="chkNed2" value="si">
                Dutch <br>
                <input name="chkPor2" type="checkbox" id="chkPor2" value="si">
                Portugues <br>
                </font></td>
            </tr>
            <tr> 
              <td colspan="2"><div align="center"> 
                  <font face="Arial, Helvetica, sans-serif">
                  <input type="submit" name="Submit2" value="Submit">
                  </font></div></td>
            </tr>
          </table>
          
        <p>&nbsp;</p></div>
      </form></td>
  </tr>
</table>
</BODY>
</HTML>
