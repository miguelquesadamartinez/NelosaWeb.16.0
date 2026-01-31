<?php
/**
  
  class Languages
  
 	METODOS:
 		Languages (  ) - Constructor
 */

class Languages {

	/**
	 * Class constructor
	 */
	function Languages ( $file ) {
		$this->load_lang( $file );
	}

	function load_lang($file) {
		global $php_ext;
		// The following variables are loaded from country files. Make these global scope
		global $lang;
		global $country;
		
		$fullpath = 'language/' . $file . '.php';
		//echo $fullpath = 'language/' . $file . '.php';
		
		// This function takes the value returned by the 'language' column in global or user options table,
		// and checks to make sure that the file exists in the /language directory. If it exists, it loads
		// the language into memory. If it does not exist, it attempts to loads 'english' (the default language).
		//if (file_exists($fullpath)) {
		//	echo ("incluyendo seleccionado<BR>");
			require_once( $fullpath );
		//	return $file;
		/*} else {
			echo ("incluyendo defecto<BR>");
			require_once('language/esp.php');
			$this->message = $lang['OPT_LANGUAGE_MISSING'];
			return 'esp';
		} */
	}

 /*- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 	 

                 METODOS PARA LA CREACION Y MANIPULACION DE TABLAS

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */	 
/* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
	 function createTABLEidiomas () {
		// Creacion de la tabla de los idiomas disponibles en la web
		$this->SQL = "CREATE TABLE `idiomas` (
		`idIdioma` int(15) AUTO_INCREMENT ,
		`lang` varchar(3) character set latin1 NOT NULL default '' ,
		`texto` TEXT NOT NULL ,
		KEY `idIdioma` (`idIdioma`) ) ENGINE=MyISAM" ;
	 	$this->consulta($this->SQL);
		// Creacion de los Categoria principales
		//$var = "INSERT INTO `idiomas` ( `lang` , `texto` ) VALUES ('esp','Español'),('cat','Catalan'),('eng','English')" ;
	 }
/* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */

/* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
	 function createTABLEidioma () {
		// Creacion de 1 tabla para todos los textos del cada idioma
		$this->SQL = "CREATE TABLE `idioma` (
		`idTxts` int(15) AUTO_INCREMENT ,
		`idTxt` int(15) ,
		`lang` varchar(3) character set latin1 NOT NULL default '' ,
		`texto` TEXT NOT NULL ,
		KEY `idTxts` (`idTxts`) ) ENGINE=MyISAM" ;
	 	$this->consulta($this->SQL);
	 }
	 function InsertInto_idioma ($fp_num, $fp_lang, $fp_txt) {
		$this->SQL = "INSERT INTO `idioma` ( `idTxt` , `lang` , `texto` ) VALUES ('".$fp_num."', '".$fp_lang."', '".$fp_txt."')";
	 	$this->consulta($this->SQL);
	 }

}
?>
