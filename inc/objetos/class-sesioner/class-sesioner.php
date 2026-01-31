<?php
/**
  class sesioner
  
 	METODOS:
 		sesion ( $var, $value ) - Constructor
		vsf_add_mod($var,$value)
		vsf_masuno()
		vsf_menosuno()
		vsf_destruir()
 */

class sesioner {

   global $s_var;
   global $s_value;

	var $db_row; 

	/** Class constructor */
	function sesioner ( $var[, $value ]) {
		$this->s_var == $var;
		$this->s_value == $value;
		$this->vsf_add_mod($value);
	}

	function vsf_add_mod($value) {
	// Use=20 $HTTP_SESSION_VARS con PHP 4.0.6 o=20 inferior
		if (!isset($_SESSION[$s_var])) {
		   $_SESSION[$s_var]=$value;
		} 
	}
	function vsf_masuno() {
		$_SESSION[$s_var]++;
	}
	function vsf_menosuno() {
		$_SESSION[$s_var]--;
	}
	function vsf_destruir()
	{
	   unset($s_var);
	}
?>
