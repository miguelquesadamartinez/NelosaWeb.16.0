<?php 
session_name('nelosa');

require_once ( "../../../../../inc/headers/vbles_sesion.php" );
?>
<HTML><HEAD>
<TITLE>Validacion y creacion de usuarios</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></HEAD>
<body bgcolor="#000099">
<div align="center">
  <table width="745" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13" bgcolor="#FFFFFF"><div align="center">
          <table width="100%"  border="0">
            <tr>
              <td height="95" valign="top"><div align="center">
                  <p>&nbsp;</p>
                  <form action="send.php" name="Formulario_3" id="Formulario_3" >
                    <div align="center">
                      <p><font face="Arial, Helvetica, sans-serif"> email
                            <input name="emilio" type="text" id="emilio" size="40">
</font></p>
                      <table border="0">
                        <tr>
                          <td width="115" bgcolor="#FFFFCC">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>e-mail</b> / Usuario: </font></div></td>
                          <td width="214"><b><font face="Arial, Helvetica, sans-serif">
                            <input type="text" name="hd_usr" id="hd_usr" size="35">
                          </font></b></td>
                          <td bordercolor="#FFFFFF" bgcolor="#FFFFCC" width="95">
                            <div align="right"><strong><font face="Arial, Helvetica, sans-serif"><font size="2">Clave :</font> </font></strong></div></td>
                          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF" width="246">
                            <div align="left"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif">
                              <input name="hd_pwd" type="password" id="hd_pwd" size="35">
                          </font></b></font></div></td>
                        </tr>
                        <tr>
                          <td width="115" bgcolor="#FFFFCC">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif">Nombre : </font></div></td>
                          <td width="214"><b><font face="Arial, Helvetica, sans-serif">
                            <input type="text" name="hd_nom" id="hd_nombre2" size="35">
                          </font></b></td>
                          <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                            <div align="right"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2">Apellido 1 : </font></b></font></div></td>
                          <td width="246"><b><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                            <input name="hd_ape1" type="text" id="hd_ape12" size="35">
                          </font></b></font></font></b></font></font><font face="Arial, Helvetica, sans-serif"> </font></b></td>
                        </tr>
                        <tr>
                          <td width="115" bgcolor="#FFFFCC" height="29">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>Telefono :</b></font></div></td>
                          <td width="214" height="29"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                            <input type="text" name="hd_tel" id="hd_nombre3" size="35">
                          </font></b> </font></font></td>
                          <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b> Apelido 2 : </b></font></div></td>
                          <td width="246" height="29"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><b><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                            <input name="hd_ape2" type="text" id="hd_ape22" size="35">
                          </font></b></font></font></b></font></b> </font></b></font></td>
                        </tr>
                        <tr>
                          <td width="115" bgcolor="#FFFFCC" height="29">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif">N&ordm; Ident. Fiscal </font></div></td>
                          <td width="214" height="29"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                            <input type="text" name="hd_doc" id="hd_nombre4" size="35">
                          </font></b> </font></font></td>
                          <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                            <div align="right"><font face="Arial, Helvetica, sans-serif" size="2">Empresa : </font></div></td>
                          <td width="246" height="29"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"> </font><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"> </font></b></font></font></b></font></font><font face="Arial, Helvetica, sans-serif">
                            <input type="text" name="hd_empresa" id="hd_nombre5" size="35">
                          </font></b> </font></font></td>
                        </tr>
                        <tr>
                          <td rowspan="2" bgcolor="#FFFFCC" width="115">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b>Direcci&oacute;n :</b></font></div></td>
                          <td rowspan="2" width="214"><font color="#000066" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font color="#000066" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif">
                            <textarea name="hd_adr" cols="30" rows="2" id="hd_adr"></textarea>
                          </font></b></font><font face="Arial, Helvetica, sans-serif"> </font></b></font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"> </font></b> </font></td>
                          <td bgcolor="#FFFFCC" width="95">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><font size="2" face="Arial, Helvetica, sans-serif"><b>C. P. : </b></font></font></div></td>
                          <td width="246"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                            <input name="hd_cp" type="text" id="hd_cp2" size="35">
                          </font></b></font></font></b></font></b></font></b> </font></b> </font></td>
                        </tr>
                        <tr>
                          <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="32">
                            <div align="right"> <font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b>Poblacion</b></font> : </b></font></div></td>
                          <td width="246" height="32"><font color="#000066" size="2">&nbsp;</font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2">&nbsp; </font><font color="#000066" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"> </font></b></font><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif">
                            <input type="text" name="hd_pob" id="hd_nombre6" size="35">
                          </font></b></font></td>
                        </tr>
                        <tr>
                          <td width="115" bgcolor="#FFFFCC">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif">Pais : </font></div></td>
                          <td width="214"><font color="#000066" size="2"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                            <input name="hd_pais" type="text" id="hd_pais2" size="35">
                            </font></b></font></b></font></b></font></font></font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2">&nbsp; </font>
                          <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                            <div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><font size="2" face="Arial, Helvetica, sans-serif"><b>Provincia</b></font> : </font></div>
                          <td width="246"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font color="#000066" size="2"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font color="#000066" size="2"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                            <input name="hd_prov" type="text" id="hd_prov2" size="35">
                          </font></b></font></b></font></b></font></font></font></b></font></font></font><font face="Arial, Helvetica, sans-serif"> </font></b></font></font>                       
                        </tr>
                      </table>
                      <p><font face="Arial, Helvetica, sans-serif">
                        <input name="send" type="submit" id="send" value="Enviar Mail" ="20">
                      </font></p>
                    </div>
                  </form>
                  </div></td>
            </tr>
          </table>
      </div></td>
    </tr>
  </table>
</div>
</body>