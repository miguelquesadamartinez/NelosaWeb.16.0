<html>
<head>
<style TYPE="text/css">	<!--

	BODY{font-size:9pt;font-family:Arial;margin-left:1px;margin-right:1px}
	A:link {
		color: Teal;
	}
	A:visited {
		color: Teal;
	}
	A:hover {
		color: Green;
	}
	A:active {
		color: Green;
	}
	A:link IMG { border: #0000FF }
	Table{font-size : 9pt;font-family : Arial;}
	//
	-->
</style>
<script src="fayuda.js"></script>
<title>Admin - Índice</title>
</head>

<body bgcolor="#DCDCE8" text="Black" link="Teal" vlink="Teal" alink="Teal">

<table width="100%">
  <tr><td>&nbsp;</td></tr>
  <tr>
    <td width="1">
		<script>
			foldersTree = gFld("OPCIONES", "")
			aux1 = insFld(foldersTree, gFld("Carga",""))
		 	insDoc(aux1,gLnk("../carga/carga.cfm","Gestión de cargas"))      
		 	insDoc(aux1,gLnk("FECHA_Search.cfm","FECHA"))   
	   		insDoc(aux1,gLnkExt("http://10.15.193.46:8065/","Spazio Intranet"))
	   		insDoc(aux1,gLnkExt("http://08dlsna.ddir.tesa/hod/hodcached_es.html","Hod-3270"))
	             
			aux1 = insFld(foldersTree, gFld("T.Deuda",""))
		 	insDoc(aux1,gLnk("DEUDA_V_Search.cfm","DEUDA")) 

			aux1 = insFld(foldersTree, gFld("T.Clientes",""))
	 		insDoc(aux1,gLnk("CLIENTE_CL_Search.cfm","CLIENTE")) 
	 		insDoc(aux1,gLnk("JEFES_DE_VENTAS_Search.cfm","JEFES DE VENTAS"))
	 		insDoc(aux1,gLnk("VENDEDORES_Search.cfm","VENDEDORES"))
	 		insDoc(aux1,gLnk("SEGMENTOS_Search.cfm","SEGMENTOS"))      
   
			aux1 = insFld(foldersTree, gFld("T.Gestion",""))
	 		insDoc(aux1,gLnk("AGENDA_Search.cfm","AGENDA"))
	 		insDoc(aux1,gLnk("DETALLE_Search.cfm","DETALLE"))   
	 		insDoc(aux1,gLnk("GESTION_Search.cfm","GESTION"))
	 		insDoc(aux1,gLnk("GESTIONCO_Search.cfm","GESTIONCO"))   
	 		insDoc(aux1,gLnk("NIFSCOABORRAR_Search.cfm","NIFSCOABORRAR"))
	 		insDoc(aux1,gLnk("RESPCIAL_Search.cfm","RESPCIAL"))   
	 		insDoc(aux1,gLnk("RESPONSABLES_Search.cfm","RESPONSABLES"))   
	 		insDoc(aux1,gLnk("SERVICIOS_Search.cfm","SERVICIOS"))         
	 		insDoc(aux1,gLnk("WTABSITU_Search.cfm","WTABSITU"))   

			aux1 = insFld(foldersTree, gFld("T.ForoCob",""))
	 		insDoc(aux1,gLnk("CLAVES_Search.cfm","CLAVES"))
	 		insDoc(aux1,gLnk("TEMAS_Search.cfm","TEMAS"))
	 		insDoc(aux1,gLnk("MENSAJES_Search.cfm","MENSAJES"))

			aux1 = insFld(foldersTree, gFld("T.Usuarios",""))
   			insDoc(aux1,gLnk("https://edomus.tesa/MENU","LDAP"))
	 		insDoc(aux1,gLnk("CATEGORIAS_Search.cfm","CATEGORIAS"))   
	 		insDoc(aux1,gLnk("GRUPOS_Search.cfm","GRUPOS"))
	 		insDoc(aux1,gLnk("LOCEDIF_Search.cfm","LOCEDIF"))   
	 		insDoc(aux1,gLnk("MANDOS_Search.cfm","MANDOS"))   
	 		insDoc(aux1,gLnk("MANTENIM_Search.cfm","MANTENIM"))   
	 		insDoc(aux1,gLnk("OFICINAS_Search.cfm","OFICINAS"))   
	 		insDoc(aux1,gLnk("PASSWORD_Search.cfm","PASSWORD"))
	 		insDoc(aux1,gLnk("PROVINCIAS_U_Search.cfm","PROVINCIAS_U"))      
	 		insDoc(aux1,gLnk("SEGMENTO_Search.cfm","SEGMENTO"))   
	 		insDoc(aux1,gLnk("TERRIGERCOBROS_Search.cfm","TERRIGERCOBROS"))      
	 		insDoc(aux1,gLnk("TERRITORIOS_Search.cfm","TERRITORIOS"))         
	 		insDoc(aux1,gLnk("TPERS1_Search.cfm","TPERS1"))   
	 		insDoc(aux1,gLnk("USUARIOS_Search.cfm","USUARIOS"))

			aux1 = insFld(foldersTree, gFld("T.Supervisión",""))
	 		insDoc(aux1,gLnk("CONSULTAS_Search.cfm","CONSULTAS"))

 			aux1 = insFld(foldersTree, gFld("T.Varios",""))
   			insDoc(aux1,gLnk("NOVEDADES_Search.cfm","NOVEDADES"))   
	 		insDoc(aux1,gLnk("PARAMETRO_Search.cfm","PARAMETRO"))      

			initializeDocument()
</script>
	 </td>
  </tr>
</table>


</body>
</html>
