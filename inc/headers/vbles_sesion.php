<?php 
// Initialize session variables using modern $_SESSION array syntax
// session_register() was removed in PHP 5.4.0

if (!isset($_SESSION['usr'])) $_SESSION['usr'] = '';
if (!isset($_SESSION['miki'])) $_SESSION['miki'] = '';
if (!isset($_SESSION['vs_email'])) $_SESSION['vs_email'] = '';
if (!isset($_SESSION['vs_nom'])) $_SESSION['vs_nom'] = '';
if (!isset($_SESSION['vs_ape1'])) $_SESSION['vs_ape1'] = '';
if (!isset($_SESSION['vs_ape2'])) $_SESSION['vs_ape2'] = '';
if (!isset($_SESSION['vs_cp'])) $_SESSION['vs_cp'] = '';
if (!isset($_SESSION['vs_prov'])) $_SESSION['vs_prov'] = '';
if (!isset($_SESSION['vs_pob'])) $_SESSION['vs_pob'] = '';
if (!isset($_SESSION['vs_pais'])) $_SESSION['vs_pais'] = '';
if (!isset($_SESSION['vs_tel'])) $_SESSION['vs_tel'] = '';
if (!isset($_SESSION['vs_doc'])) $_SESSION['vs_doc'] = '';
if (!isset($_SESSION['vs_empresa'])) $_SESSION['vs_empresa'] = '';
if (!isset($_SESSION['vs_adr'])) $_SESSION['vs_adr'] = '';

if (!isset($_SESSION['distri'])) $_SESSION['distri'] = ''; // Para saber si es tienda o distribuidor

if (!isset($_SESSION['brandy'])) $_SESSION['brandy'] = '';
if (!isset($_SESSION['tipo'])) $_SESSION['tipo'] = '';

if (!isset($_SESSION['fine_code'])) $_SESSION['fine_code'] = ''; // Para saber si ha comprado producto

if (!isset($_SESSION['idioma'])) $_SESSION['idioma'] = ''; // idioma de la web
if (!isset($_SESSION['vs_lang'])) $_SESSION['vs_lang'] = ''; // Language variable

if (!isset($_SESSION['jost'])) $_SESSION['jost'] = ''; // nelosa.net o localhost, 
//se inicializa en el primer index

// Create global variable references for backward compatibility with legacy code
$usr = &$_SESSION['usr'];
$miki = &$_SESSION['miki'];
$vs_email = &$_SESSION['vs_email'];
$vs_nom = &$_SESSION['vs_nom'];
$vs_ape1 = &$_SESSION['vs_ape1'];
$vs_ape2 = &$_SESSION['vs_ape2'];
$vs_cp = &$_SESSION['vs_cp'];
$vs_prov = &$_SESSION['vs_prov'];
$vs_pob = &$_SESSION['vs_pob'];
$vs_pais = &$_SESSION['vs_pais'];
$vs_tel = &$_SESSION['vs_tel'];
$vs_doc = &$_SESSION['vs_doc'];
$vs_empresa = &$_SESSION['vs_empresa'];
$vs_adr = &$_SESSION['vs_adr'];
$distri = &$_SESSION['distri'];
$brandy = &$_SESSION['brandy'];
$tipo = &$_SESSION['tipo'];
$fine_code = &$_SESSION['fine_code'];
$idioma = &$_SESSION['idioma'];
$jost = &$_SESSION['jost'];

?>