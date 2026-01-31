<?php
	/**
	 * object $db_link BaseDeDatos ($db_hostname, $db_username, $db_password, $db_name);
	 * 
	 */

class Funciones {

	/**
	 * Class constructor
	 */
	function Funciones (  ) {

	}

	// Si NO se AutoPasa parametro para idioma de la pagina
	//$dbLang = new BaseDeDatos($db_hostname,$db_username,$db_password,$db_name);
	
	function setLanguage($p_lang, $db)
	{
		if ( $p_lang == "" ) {
			if ( $_SESSION['vs_lang'] == "" ) { // Si la variable de sesion esta vacia
				$db->openDatabase ();
				$db->consulta("Select * From opciones");	
				$db->retriveData ();
			
				$_SESSION['vs_lang'] = $db->db_row["lang"];
				}
			$Languages = new Languages($_SESSION['vs_lang']) ;
		
		} else { // Si receive el parametro indica que hay cambio de idioma
			$Languages = new Languages($p_lang) ;
			$_SESSION['vs_lang'] = $p_lang ;
		}
	} // End setLanguage
	
	function conectarse() 
	{
		if (!($_SESSION[db_link]=mysql_connect ("localhost", "barnacat", "barnacat")))    { 
		  echo "Error conectando a la base de datos."; 
		  exit(); 
		} 
		// Seleccion de la base de datos.
		echo ("Barnacat");
		if (!mysql_select_db("barnacat", $_SESSION[db_link]))    { 
		  echo "Error seleccionando la base de datos."; 
		  exit(); 
		} 
		
		return $_SESSION[db_link] ;
	}

}
?>