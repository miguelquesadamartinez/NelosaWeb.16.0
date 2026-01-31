<?php
/**
 * 
 * class uploader
 * 
 *	METODOS:
 *		uploader()	 		- 
 *		max_filesize() 		- 
 *		max_image_size() 	- 
 *		upload() 			- 
 *		save_file() 		- 
 *	
 *		cleanup_text_file()	- 
 *		get_error() 		- 
 * 
 *	Error code: 
				$error_message[0] = ".";
				$error_message[1] = ".";
				$error_message[2] = "Se excedieron las dimensiones de la imagen. La imagen no puede medir m&aacute;s de " . $this->max_image_width . " (w) x " . $this->max_image_height . " (h) pixeles.";
				$error_message[3] = "El tipo de archivo no es v&aacute;lido. S&oacute;lo los archivos " . str_replace("|", " o ", $this->acceptable_file_types) . " son permitidos.";
				$error_message[4] = "El archivo '" . $this->path . $this->file["name"] . "' ya existe.";
				$error_message[5] = "Permiso denegado. No es posible copiar el archivo a '" . $this->path . "'";
 *		[0] - "No se subio ningun archivo"
 *		[1] - "Tamaño en bytes excedido"
 *		[2] - "Tamaño en pixels excedido"
 *		[3] - "Tipo de archivo no valido"
 *		[4] - "El archivo ya existe" (save only)
 *		[5] - "Permiso denegado"
 *
 */
class uploader {

	var $file;
	var $path;
	var $language;
	var $acceptable_file_types;
	var $error;
	//var $errors;
	var $accepted;
	var $max_filesize;
	var $max_image_width;
	var $max_image_height;


	/**
	 * object uploader ([string language]);
	 * 
	 * Class constructor, establece el idioma de los errores
	  
	   @param language		(string) Predet. to Español
	   
	   @examples:	$f = new uploader(); 		// English error messages
	  				$f = new uploader('esp');	// French error messages
	  				$f = new uploader('cat');	// German error messages
	  				$f = new uploader('eng');	// Dutch error messages
	   
	 */
	function uploader ( $language = 'esp' ) {
		$this->language = strtolower($language);
		$this->error   = '';
	}
	
	/**
	 * void max_filesize ( int size );
	  
	   Establece el tamaño maximo de la imagen.
	  
	   @param size 			(int) file size in bytes
	  
	 */
	function max_filesize($size){
		$this->max_filesize = (int) $size;
	}

	/**
	 * void max_image_size ( int width, int height );
	 
	   Establece el numero maximo del pixels
	   Se seleccionara sol si se sube una imagen
	   
	   @param width			(int) Ancho maximo en pixels
	   @param height		(int) maximum pixel height of image uploads
	  
	 */
	function max_image_size($width, $height){
		$this->max_image_width  = (int) $width;
		$this->max_image_height = (int) $height;
	}
	
	
	/**
	 * bool upload (string filename[, string accept_type[, string extension]]);
	 * 
	   Comprueba extension y tamaños y sube el archivo
	  
	   @param filename		(string) form field name of uploaded file
	   @param accept_type	(string) acceptable mime-types
	   @param extension		(string) default filename extenstion
	  
	 */
	function upload($filename='', $accept_type='', $extention='') {
		
		$this->acceptable_file_types = trim($accept_type); // usado para mensajes de error
		
		if (!isset($_FILES) || !is_array($_FILES[$filename]) || !$_FILES[$filename]['name']) {
			$this->error = $this->get_error(0);
			$this->accepted  = FALSE;
			return FALSE;
		}
				
		// Copia variables globales de PHP's global $_FILES array a un array local
		$this->file = $_FILES[$filename];
		$this->file['file'] = $filename;
		
		// Initialize empty array elements
		if (!isset($this->file['extention'])) $this->file['extention'] = "";
		if (!isset($this->file['type']))      $this->file['type']      = "";
		if (!isset($this->file['size']))      $this->file['size']      = "";
		if (!isset($this->file['width']))     $this->file['width']     = "";
		if (!isset($this->file['height']))    $this->file['height']    = "";
		if (!isset($this->file['tmp_name']))  $this->file['tmp_name']  = "";
		if (!isset($this->file['raw_name']))  $this->file['raw_name']  = "";
				
		// Comprueba tamaño maximo EN BYTES
		if($this->max_filesize && ($this->file["size"] > $this->max_filesize)) {
			$this->error = $this->get_error(1);
			$this->accepted  = FALSE;
			return FALSE;
		}
		
		if(stristr($this->file["type"], "image")) {
			
			/* IMAGENES */
			$image = getimagesize($this->file["tmp_name"]);
			$this->file["width"]  = $image[0];
			$this->file["height"] = $image[1];
			
			// Comprueba tamaño maximo EN PIXELS
			if(($this->max_image_width || $this->max_image_height) && (($this->file["width"] > $this->max_image_width) || ($this->file["height"] > $this->max_image_height))) {
				$this->error = $this->get_error(2);
				$this->accepted  = FALSE;
				return FALSE;
			}
			// Tipo de imagen devuelto por getimagesize() function
			switch($image[2]) {
				case 1:
					$this->file["extention"] = ".gif"; break;
				case 2:
					$this->file["extention"] = ".jpg"; break;
				case 3:
					$this->file["extention"] = ".png"; break;
				case 4:
					$this->file["extention"] = ".swf"; break;
				case 5:
					$this->file["extention"] = ".psd"; break;
				case 6:
					$this->file["extention"] = ".bmp"; break;
				case 7:
					$this->file["extention"] = ".tif"; break;
				case 8:
					$this->file["extention"] = ".tif"; break;
				default:
					$this->file["extention"] = $extention; break;
			}
		} elseif(!ereg("(\.)([a-z0-9]{3,5})$", $this->file["name"]) && !$extention) {
			// Intento de averiguar automaticamente el tipo
			// Para mas mime-types: http://httpd.apache.org/docs/mod/mod_mime_magic.html
			switch($this->file["type"]) {
				case "text/plain":
					$this->file["extention"] = ".txt"; break;
				case "text/richtext":
					$this->file["extention"] = ".txt"; break;
				default:
					break;
			}
		} else {
			$this->file["extention"] = $extention;
		}
		
		// Comprobar para ver si el archivo está entre especificado 
		if($this->acceptable_file_types) {
			if(trim($this->file["type"]) && (stristr($this->acceptable_file_types, $this->file["type"]) || stristr($this->file["type"], $this->acceptable_file_types)) ) {
				$this->accepted = TRUE;
			} else { 
				$this->accepted = FALSE;
				$this->error = $this->get_error(3);
			}
		} else { 
			$this->accepted = TRUE;
		}
		
		return (bool) $this->accepted;
	}

	/**
	 * bool save_file ( string path[, int overwrite_mode] );
	 * 
	 * Cleans up the filename, copies the file from PHP's temp location to $path, 
	 * and checks the overwrite_mode
	 * 
	 * @param path				(string) File path to your upload directory
	 * @param overwrite_mode	(int) 	1 = overwrite existing file
	 * 									2 = rename if filename already exists (file.txt becomes file_copy0.txt)
	 * 									3 = do nothing if a file exists
	 * 
	 */
	function save_file($path, $overwrite_mode="3"){
		if ($this->error) {
			return false;
		}
		
		if (strlen($path)>0) {
			if ($path[strlen($path)-1] != "/") {
				$path = $path . "/";
			}
		}
		$this->path = $path;	
		$copy       = "";	
		$n          = 1;	
		$success    = false;	
				
		if($this->accepted) {
			// Clean up file name (only lowercase letters, numbers and underscores)
			$this->file["name"] = ereg_replace("[^a-z0-9._]", "", str_replace(" ", "_", str_replace("%20", "_", strtolower($this->file["name"]))));
			
			// Clean up text file breaks
			if(stristr($this->file["type"], "text")) {
				$this->cleanup_text_file($this->file["tmp_name"]);
			}
			
			// get the raw name of the file (without its extenstion)
			if(ereg("(\.)([a-z0-9]{2,5})$", $this->file["name"])) {
				$pos = strrpos($this->file["name"], ".");
				if(!$this->file["extention"]) { 
					$this->file["extention"] = substr($this->file["name"], $pos, strlen($this->file["name"]));
				}
				$this->file['raw_name'] = substr($this->file["name"], 0, $pos);
			} else {
				$this->file['raw_name'] = $this->file["name"];
				if ($this->file["extention"]) {
					$this->file["name"] = $this->file["name"] . $this->file["extention"];
				}
			}
			
			switch((int) $overwrite_mode) {
				case 1: // overwrite mode
					if (@copy($this->file["tmp_name"], $this->path . $this->file["name"])) {
						$success = true;
					} else {
						$success     = false;
						$this->error = $this->get_error(5);
					}
					break;
				case 2: // create new with incremental extention
					while(file_exists($this->path . $this->file['raw_name'] . $copy . $this->file["extention"])) {
						$copy = "_copy" . $n;
						$n++;
					}
					$this->file["name"]  = $this->file['raw_name'] . $copy . $this->file["extention"];
					if (@copy($this->file["tmp_name"], $this->path . $this->file["name"])) {
						$success = true;
					} else {
						$success     = false;
						$this->error = $this->get_error(5);
					}
					break;
				default: // do nothing if exists, highest protection
					if(file_exists($this->path . $this->file["name"])){
						$this->error = $this->get_error(4);
						$success     = false;
					} else {
						if (@copy($this->file["tmp_name"], $this->path . $this->file["name"])) {
							$success = true;
						} else {
							$success     = false;
							$this->error = $this->get_error(5);
						}
					}
					break;
			}
			
			if(!$success) { unset($this->file['tmp_name']); }
			return (bool) $success;
		} else {
			$this->error = $this->get_error(3);
			return FALSE;
		}
	}
	
	
	/**
	 * string get_error(int error_code);
	  
	   Obtiene el error segun el idioma establecido en constructor
	  
	   @param error_code		(int) error code
	  
	 */
	function get_error($error_code='') {
		$error_message = array();
		$error_code    = (int) $error_code;
		
		switch ( $this->language ) {
			// French (fra)
			case 'cat':
				$error_message[0] = "Aucun fichier n'a &eacute;t&eacute; envoy&eacute;";
				$error_message[1] = "Taille maximale autoris&eacute;e d&eacute;pass&eacute;e. Le fichier ne doit pas &ecirc;tre plus gros que " . $this->max_filesize/1000 . " Ko (" . $this->max_filesize . " octets).";
				$error_message[2] = "Taille de l'image incorrecte. L'image ne doit pas d&eacute;passer " . $this->max_image_width . " pixels de large sur " . $this->max_image_height . " de haut.";
				$error_message[3] = "Type de fichier incorrect. Seulement les fichiers de type " . str_replace("|", " or ", $this->acceptable_file_types) . " sont autoris&eacute;s.";
				$error_message[4] = "Fichier '" . $this->path . $this->file["name"] . "' d&eacute;j&aacute; existant, &eacute;crasement interdit.";
				$error_message[5] = "La permission a ni&eacute;. Incapable pour copier le fichier &aacute; '" . $this->path . "'";
			break;
 			// Spanish
			case 'esp':
				$error_message[0] = "No se subi&oacute; ning&uacute;n archivo.";
				$error_message[1] = "Se excedi&oacute; el tama&ntilde;o m&aacute;ximo del archivo. El archivo no puede ser mayor a " . $this->max_filesize/1000 . " KB (" . $this->max_filesize . " bytes).";
				$error_message[2] = "Se excedieron las dimensiones de la imagen. La imagen no puede medir m&aacute;s de " . $this->max_image_width . " (w) x " . $this->max_image_height . " (h) pixeles.";
				$error_message[3] = "El tipo de archivo no es v&aacute;lido. S&oacute;lo los archivos " . str_replace("|", " o ", $this->acceptable_file_types) . " son permitidos.";
				$error_message[4] = "El archivo '" . $this->path . $this->file["name"] . "' ya existe.";
				$error_message[5] = "Permiso denegado. No es posible copiar el archivo a '" . $this->path . "'";
			break;		
			// English
			default:
				$error_message[0] = "No file was uploaded";
				$error_message[1] = "Maximum file size exceeded. File may be no larger than " . $this->max_filesize/1000 . " KB (" . $this->max_filesize . " bytes).";
				$error_message[2] = "Maximum image size exceeded. Image may be no more than " . $this->max_image_width . " x " . $this->max_image_height . " pixels.";
				$error_message[3] = "Only " . str_replace("|", " or ", $this->acceptable_file_types) . " files may be uploaded.";
				$error_message[4] = "File '" . $this->path . $this->file["name"] . "' already exists.";
				$error_message[5] = "Permission denied. Unable to copy file to '" . $this->path . "'";
			break;
		}
		
		// for backward compatability:
		$this->errors[$error_code] = $error_message[$error_code];
		
		return $error_message[$error_code];
	}


	/**
	 * void cleanup_text_file (string file);
	 * 
	 * Convierte Mac &&/|| PC saltos de linea a UNIX abriendo y reescribiendo el archivo en el servidor
	 * 
	 * @param file			(string) Path and name of text file
	 * 
	 */
	function cleanup_text_file($file){
		// chr(13)  = CR (carridge return) = Macintosh
		// chr(10)  = LF (line feed)       = Unix
		// Win line break = CRLF
		$new_file  = '';
		$old_file  = '';
		$fcontents = file($file);
		while (list ($line_num, $line) = each($fcontents)) {
			$old_file .= $line;
			$new_file .= str_replace(chr(13), chr(10), $line);
		}
		if ($old_file != $new_file) {
			// Open the uploaded file, and re-write it with the new changes
			$fp = fopen($file, "w");
			fwrite($fp, $new_file);
			fclose($fp);
		}
	}

}


/*
<readme>

	Klasse para subir archivos de cualquier tipo a un web server usando un web browser. 
	
	El nombre del archivo uploaded se comprueba y los caracteres especiales serán suprimidos 
	y los espacios consiguen substituidos por underscores, y movidos a especificadas directorio (en tu servidor). 
	
	Sepuede seleccionar el tipo del archivo (texto, GIF, JPEG, etc). 
	
	SETUP:
		Asegures que el directorio a los que afectara la funcion tiene los permisos correctos, usualmente, WorldRead
			- cd /your/web/dir
			- chmod 777 <fileupload_dir>
		
	HTML FORM:
		<form method="post" action="upload.php" enctype="multipart/form-data">
			<input type="file" name="userfile"> 
			<input type="submit" value="Submit">
		</form>

	USO:
		// Creacion de instancia de la Klasse
		$my_uploader = new uploader;
		
		// OPCIONAL: Establece el max filesize en bytes
		$my_uploader->max_filesize(90000);

		// OPCIONAL: Establece las dimensiones maximas en pixels
		$my_uploader->max_image_size(150, 300); // max_image_size($width, $height)
		
		// UPLOAD el archivo
		$my_uploader->upload("userfile", "", ".jpg");

		// MUOVE EL AARCHIVO a destino
		//	$mode = 1 ::	Borra archivo exixtente
		//	$mode = 2 ::	Renombra existente a: file.txt -> file_copy0.txt
		//	$mode = 3 ::	No hace nada si ya existe el archivo
		$my_uploader->save_file("/web/dir", int $mode);
		
		// Comprueba que todo funciono
		if ($my_uploader->error) {
			echo $my_uploader->error . "<br>";
		
		} else {
			// Carga de archivo Correcta
			$file_name = $my_uploader->file['name'];
			print($file_name . " se cargo correctamente");
		
		}
		
</readme>
*/
?>