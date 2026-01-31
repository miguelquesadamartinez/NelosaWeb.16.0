<?php 
session_name('nelosa');
session_start(); 
require_once ( "../inc/headers/vbles_sesion.php" );

require_once ( "../inc/config.php" );

require_once ( "../inc/funciones.php" );

require_once ( "../inc/objetos/class-db/class-db.php" );
require_once ( "../inc/objetos/class-languages/class-languages.php" );

$jost = "localhost" ;

// also at ControlMenu.php, instrucciones/index.php, en el segunbdo index de la pagina

?>
<HTML>
<HEAD>
<TITLE>Universal Refill Kit  -  -  Nelosa Accesrios  -  -  </TITLE>

<?php require_once ( '../inc/headers/headers.php' ); ?>

<LINK REL="stylesheet" HREF="../inc/css/styles.css" TYPE="text/css">

</HEAD>

<BODY>

<table width="95%" border="0" align="center">
  <tr> 
    <td><div align="center">
        <p>&nbsp;</p>
        <p><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Menu 
          de control<br>
          <br>
          </font></strong></p>
      </div></td>
  </tr>
</table>
<table width="95%" border="0" align="center">
  <tr> 
    <td width="25%"> <p align="center"><a class="AZUL" href="Seg/Clientes/clientes.php"><strong>Clientes</strong></a></p>
      <p align="center"><strong><font face="Arial, Helvetica, sans-serif"><a class="AZUL" href="http://www.nelosa.net/gueb/paginas/distris/validationpages/emiki/index.php">@ 
        alta distribuidor</a></font></strong></p>
      <p align="center"><strong><font face="Arial, Helvetica, sans-serif"><a class="AZUL" href="Seg/distri/distris.php">Listar 
        Distribuidores</a> </font></strong></p>
      <p align="center"><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong><a class="AZUL" href="http://www.recargas-y-consumibles.net/Control/control.php"><font color="#0000FF" face="Arial, Helvetica, sans-serif">Pagina 
        control eShop</font></a></strong></font></strong></p>
      <p align="center"><a class="AZUL" href="Seg/traductor/traductor.php"><strong>Traductor</strong></a></p>
      <p align="center"><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"><a class="AZUL" href="Seg/IPControl/Main.php">IP 
        Control</a></font></strong></p></td>
    <td width="25%"><div align="center"><strong><a class="AZUL" href="http://www.recargas-y-consumibles.net/_Control/control.php"></a></strong> 
      </div>
      <form name="form1" method="post" action="http://www.nelosa.net/gueb/eMiKi/Seg/db.mant/del.user.php">
        <p align="center"><strong>Delete User </strong></p>
        <p align="center"><strong> 
          <input name="usr" type="text" id="usr">
          </strong></p>
      </form>
      <form name="form1" method="post" action="http://www.nelosa.net/gueb/eMiKi/Seg/db.mant/del.user.distri.php">
        <p align="center"><strong>Delete Distribuidor</strong></p>
        <p align="center"><strong> 
          <input name="distri" type="text" id="emiliousr22">
          </strong></p>
      </form>
      <form name="form1" method="post" action="Seg/db.mant/show.distri.php">
        <p align="center"><strong>Find Distri </strong></p>
        <p align="center"><strong> 
          <input name="user" type="text" id="user">
          </strong></p>
      </form>
      <form name="form1" method="post" action="Seg/db.mant/show.php">
        <p align="center"><strong>Find User </strong></p>
        <p align="center"><strong> 
          <input name="user" type="text" id="user">
          </strong></p>
      </form></td>
    <td width="25%"> <p align="center"><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong><a class="AZUL" href="Seg/prodsdb/prods-update.php"><font face="Arial, Helvetica, sans-serif">Prods 
        DB Update </font></a></strong></font><font face="Arial, Helvetica, sans-serif"></font></strong></font></strong></p>
      <p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong><font face="Arial, Helvetica, sans-serif"><a class="AZUL" href="Seg/printer-db-mant/Main.php">Mantenimiento 
        DB&acute;s impresoras</a></font></strong></font></p>
      <p align="center"><strong><font face="Arial, Helvetica, sans-serif"><a class="AZUL" href="Brand-Ins.php">Brand 
        Ins</a></font></strong></p>
      <p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><a class="AZUL" href="Seg/emailCtrl/main2.php"><strong>emails</strong></a></font></p>
      <p align="center"><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong><a class="AZUL" href="Seg/email-search/index.php"><strong>email 
        search</strong></a></strong></font></strong></p>
      <p align="center"><a class="AZUL" href="Seg/ins.mant/index.php"><strong>Ins Mant </strong></a></p>
      <p align="center"><a class="AZUL" href="Seg/ret.dbs/index.php"><strong>Ret 
        DB&acute;s</strong></a></p>
      <p align="center"><a class="AZUL" href="Seg/Utils/check.db.php"><strong>Check DB </strong></a></p>
      <p align="center"><a class="AZUL" href="Seg/mysql.backup/index.php"><strong>MySql BackUp</strong></a> 
      </p></td>
  </tr>
  <tr> 
    <td colspan="3"><p align="center">&nbsp;</p></td>
  </tr>
  <tr> 
    <td colspan="3"><div align="center"></div>
      <div align="center"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"><a class="AZUL" href="http://www.nelosa.org/gueb/eMiKi/emiki.php">nelosa.org</a></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td width="25%"><div align="center"></div>
      <div align="center"><strong><a class="AZUL" href="http://www.nelosa.org/rehost/emiki.php">Control 
        Rehost</a></strong></div></td>
    <td width="25%">&nbsp;</td>
    <td width="25%"><div align="center"><strong><font color="#FF0000"><a class="AZUL" href="http://www.nelosa.net/agenda/emiki.php">Agenda</a></font></strong></div></td>
  </tr>
  <tr> 
    <td colspan="3"><div align="center"><strong></strong></div></td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p align="center"><a class="AZUL" href="../gueb/index.php"><img src="../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
</BODY>
</HTML>
