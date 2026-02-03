-- ============================================================================
-- NELOSAWEB ERP v16.0 - DATABASE MIGRATION SCRIPT
-- ============================================================================
-- Generated from source code analysis on February 3, 2026
-- 
-- This script creates the complete database structure for NelosaWeb ERP
-- A legacy PHP system for printer cartridge refill business
--
-- DATABASES:
--   - miki_nelosa      : Main system database (sessions, users, configuration)
--   - nelosa_nelosa    : Business data (customers, distributors, products, orders)
--   - nelosa_printers  : Printer database (models, brands, refill instructions)
--
-- WARNING: This structure was inferred from code analysis. Some field types
-- may need adjustment based on actual data requirements.
-- ============================================================================

-- ============================================================================
-- DATABASE 1: miki_nelosa (Main System Database)
-- ============================================================================

CREATE DATABASE IF NOT EXISTS `miki_nelosa` 
  DEFAULT CHARACTER SET latin1 
  DEFAULT COLLATE latin1_spanish_ci;

USE `miki_nelosa`;

-- Language tables
CREATE TABLE IF NOT EXISTS `idiomas` (
  `idIdioma` INT AUTO_INCREMENT PRIMARY KEY,
  `lang` VARCHAR(3) NOT NULL UNIQUE,
  `texto` VARCHAR(50) NOT NULL,
  INDEX idx_lang (lang)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Available system languages';

INSERT INTO `idiomas` (`lang`, `texto`) VALUES 
  ('esp', 'Español'),
  ('cat', 'Català'),
  ('eng', 'English'),
  ('fra', 'Français'),
  ('ned', 'Nederlands'),
  ('por', 'Português')
ON DUPLICATE KEY UPDATE texto=VALUES(texto);

CREATE TABLE IF NOT EXISTS `idioma` (
  `idTxts` INT AUTO_INCREMENT PRIMARY KEY,
  `idTxt` INT NOT NULL,
  `lang` VARCHAR(3) NOT NULL,
  `texto` TEXT,
  INDEX idx_idTxt_lang (idTxt, lang)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Multilanguage system texts';


-- ============================================================================
-- DATABASE 2: nelosa_nelosa (Main Business Database)
-- ============================================================================

CREATE DATABASE IF NOT EXISTS `nelosa_nelosa` 
  DEFAULT CHARACTER SET latin1 
  DEFAULT COLLATE latin1_spanish_ci;

USE `nelosa_nelosa`;

-- ----------------------------------------------------------------------------
-- CUSTOMER & DISTRIBUTOR MANAGEMENT
-- ----------------------------------------------------------------------------

-- Regular customers
CREATE TABLE IF NOT EXISTS `Clientes` (
  `idUser` INT AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `Nombre` VARCHAR(100),
  `Apellido1` VARCHAR(100),
  `Apellido2` VARCHAR(100),
  `Telefono` VARCHAR(20),
  `Doc` VARCHAR(20) COMMENT 'ID Document (DNI, NIF, etc)',
  `Empresa` VARCHAR(150),
  `Direccion` VARCHAR(255),
  `Poblacion` VARCHAR(100),
  `Provincia` VARCHAR(100),
  `Pais` VARCHAR(50),
  `Cp` VARCHAR(10) COMMENT 'Postal code',
  `L_Promos` VARCHAR(10) DEFAULT '' COMMENT 'Subscribed to promotions',
  `L_Recarga` VARCHAR(10) DEFAULT '' COMMENT 'Subscribed to refill info',
  `FechaAlta` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX idx_email (email),
  INDEX idx_empresa (Empresa)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Regular customers';

-- Customer authentication data
CREATE TABLE IF NOT EXISTS `Datas` (
  `idData` INT AUTO_INCREMENT PRIMARY KEY,
  `mail` VARCHAR(100) NOT NULL UNIQUE,
  `otro` VARCHAR(100) NOT NULL COMMENT 'Password (plain text - legacy)',
  INDEX idx_mail (mail)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Customer authentication';

-- Distributors/Stores
CREATE TABLE IF NOT EXISTS `Clientes_Tiendas` (
  `idUser` INT AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `Nombre` VARCHAR(100),
  `Apellido1` VARCHAR(100),
  `Apellido2` VARCHAR(100),
  `Telefono` VARCHAR(20),
  `Doc` VARCHAR(20),
  `Empresa` VARCHAR(150),
  `Direccion` VARCHAR(255),
  `Poblacion` VARCHAR(100),
  `Provincia` VARCHAR(100),
  `Pais` VARCHAR(50),
  `Cp` VARCHAR(10),
  `L_Promos` VARCHAR(10) DEFAULT '',
  `L_Recarga` VARCHAR(10) DEFAULT '',
  `FechaAlta` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX idx_email (email),
  INDEX idx_empresa (Empresa)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Distributor accounts';

-- Distributor authentication
CREATE TABLE IF NOT EXISTS `Datas_Tiendas` (
  `idData` INT AUTO_INCREMENT PRIMARY KEY,
  `mail` VARCHAR(100) NOT NULL UNIQUE,
  `otro` VARCHAR(100) NOT NULL COMMENT 'Password',
  INDEX idx_mail (mail)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Distributor authentication';

-- ----------------------------------------------------------------------------
-- PRODUCT CATALOG
-- ----------------------------------------------------------------------------

-- Main product table
CREATE TABLE IF NOT EXISTS `prods` (
  `idProd` INT AUTO_INCREMENT PRIMARY KEY,
  `Ref` VARCHAR(20) NOT NULL UNIQUE COMMENT 'Product reference code',
  `Code` VARCHAR(20),
  `Des` TEXT COMMENT 'Short description',
  `Und` INT DEFAULT 1 COMMENT 'Units',
  `Und_Box` INT DEFAULT 1 COMMENT 'Units per box',
  `peso` DECIMAL(10,2) DEFAULT 0.00 COMMENT 'Weight in kg',
  `precio_eshop` DECIMAL(10,2) DEFAULT 0.00 COMMENT 'E-shop price',
  `precio_nelosa` DECIMAL(10,2) DEFAULT 0.00 COMMENT 'Nelosa price',
  `precio_ibero` DECIMAL(10,2) DEFAULT 0.00 COMMENT 'Iberoamerica price',
  `precio_europa` DECIMAL(10,2) DEFAULT 0.00 COMMENT 'Europe price',
  `Grupo` VARCHAR(50) COMMENT 'Product category/group',
  `comentario` TEXT,
  `activo` ENUM('si','no') DEFAULT 'si',
  INDEX idx_ref (Ref),
  INDEX idx_grupo (Grupo)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Product catalog';

-- Product descriptions in multiple languages
CREATE TABLE IF NOT EXISTS `Descs_esp` (
  `idDesc` INT AUTO_INCREMENT PRIMARY KEY,
  `Ref` VARCHAR(20) NOT NULL,
  `texto` TEXT,
  `denom` VARCHAR(255),
  INDEX idx_ref (Ref)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Product descriptions - Spanish';

CREATE TABLE IF NOT EXISTS `Descs_cat` (
  `idDesc` INT AUTO_INCREMENT PRIMARY KEY,
  `Ref` VARCHAR(20) NOT NULL,
  `texto` TEXT,
  `denom` VARCHAR(255),
  INDEX idx_ref (Ref)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Product descriptions - Catalan';

CREATE TABLE IF NOT EXISTS `Descs_eng` (
  `idDesc` INT AUTO_INCREMENT PRIMARY KEY,
  `Ref` VARCHAR(20) NOT NULL,
  `texto` TEXT,
  `denom` VARCHAR(255),
  INDEX idx_ref (Ref)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Product descriptions - English';

CREATE TABLE IF NOT EXISTS `Descs_fra` (
  `idDesc` INT AUTO_INCREMENT PRIMARY KEY,
  `Ref` VARCHAR(20) NOT NULL,
  `texto` TEXT,
  `denom` VARCHAR(255),
  INDEX idx_ref (Ref)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Product descriptions - French';

CREATE TABLE IF NOT EXISTS `Descs_ned` (
  `idDesc` INT AUTO_INCREMENT PRIMARY KEY,
  `Ref` VARCHAR(20) NOT NULL,
  `texto` TEXT,
  `denom` VARCHAR(255),
  INDEX idx_ref (Ref)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Product descriptions - Dutch';

CREATE TABLE IF NOT EXISTS `Descs_por` (
  `idDesc` INT AUTO_INCREMENT PRIMARY KEY,
  `Ref` VARCHAR(20) NOT NULL,
  `texto` TEXT,
  `denom` VARCHAR(255),
  INDEX idx_ref (Ref)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Product descriptions - Portuguese';

-- Price tariffs
CREATE TABLE IF NOT EXISTS `tarifa1` (
  `code` VARCHAR(20) PRIMARY KEY,
  `preu` DECIMAL(10,2) DEFAULT 0.00
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tarifa2` (
  `code` VARCHAR(20) PRIMARY KEY,
  `preu` DECIMAL(10,2) DEFAULT 0.00
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tarifa3` (
  `code` VARCHAR(20) PRIMARY KEY,
  `preu` DECIMAL(10,2) DEFAULT 0.00
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tarifa4` (
  `code` VARCHAR(20) PRIMARY KEY,
  `preu` DECIMAL(10,2) DEFAULT 0.00
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tarifa5` (
  `code` VARCHAR(20) PRIMARY KEY,
  `preu` DECIMAL(10,2) DEFAULT 0.00,
  `min` INT DEFAULT 0,
  `fecha` DATE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------------------------------------------------------
-- ORDER MANAGEMENT
-- ----------------------------------------------------------------------------

-- Orders database
CREATE TABLE IF NOT EXISTS `Cart_DB_Pedidos` (
  `idPedido` INT AUTO_INCREMENT PRIMARY KEY,
  `NumPedido` VARCHAR(20) UNIQUE,
  `email` VARCHAR(100) NOT NULL,
  `Fecha` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `Estado` VARCHAR(50) DEFAULT 'pendiente',
  `Total` DECIMAL(10,2) DEFAULT 0.00,
  `Observaciones` TEXT,
  INDEX idx_email (email),
  INDEX idx_fecha (Fecha),
  INDEX idx_numpedido (NumPedido)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Customer orders';

-- Sequential number control
CREATE TABLE IF NOT EXISTS `lasty_nelosa` (
  `last` INT NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Last sequential number';

-- Initialize sequential counter
INSERT INTO `lasty_nelosa` (`last`) VALUES (1000);

-- ----------------------------------------------------------------------------
-- EMAIL MARKETING & MAILING LISTS
-- ----------------------------------------------------------------------------

-- Main mailing lists
CREATE TABLE IF NOT EXISTS `emails` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `ind` INT,
  `FechaAlta` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX idx_email (email)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Main email list';

CREATE TABLE IF NOT EXISTS `emails_2` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `FechaAlta` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX idx_email (email)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Secondary email list';

CREATE TABLE IF NOT EXISTS `emails_nelosa` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `FechaAlta` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX idx_email (email)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `emails_nelosa_pral` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `FechaAlta` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX idx_email (email)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `emails_nelosa_ibero` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `FechaAlta` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX idx_email (email)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Unsubscribed emails
CREATE TABLE IF NOT EXISTS `Unsuscribed` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `FechaBaja` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX idx_email (email)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Unsubscribed emails';

-- Mailing send log
CREATE TABLE IF NOT EXISTS `Send_Ins` (
  `idSend` INT AUTO_INCREMENT PRIMARY KEY,
  `doc` VARCHAR(100) COMMENT 'Document/campaign name',
  `fecha` DATE,
  `de_I` INT COMMENT 'From index',
  `hasta_I` INT COMMENT 'To index',
  `db` VARCHAR(50) COMMENT 'Database used',
  INDEX idx_fecha (fecha)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Mailing send history';

-- Web scraping tables
CREATE TABLE IF NOT EXISTS `web_paginas_amarillas` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `parte1` VARCHAR(255),
  `parte2` VARCHAR(255),
  `parte3` VARCHAR(255),
  `parte4` VARCHAR(255),
  `url` VARCHAR(500)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------------------------------------------------------
-- FORUM SYSTEM
-- ----------------------------------------------------------------------------

-- Forum topics
CREATE TABLE IF NOT EXISTS `foro_index` (
  `indise` INT AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(100) NOT NULL,
  `asunto` VARCHAR(255) NOT NULL,
  `text` TEXT,
  `fecha` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX idx_email (email),
  INDEX idx_fecha (fecha)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Forum topic index';

-- Forum responses
CREATE TABLE IF NOT EXISTS `foro_resp` (
  `idResp` INT AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(100) NOT NULL,
  `indise` INT NOT NULL,
  `texto` TEXT,
  `fecha` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX idx_indise (indise),
  INDEX idx_email (email)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Forum responses';

-- Forum notifications
CREATE TABLE IF NOT EXISTS `foro_aviso` (
  `idAviso` INT AUTO_INCREMENT PRIMARY KEY,
  `indise` INT NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  INDEX idx_indise (indise),
  INDEX idx_email (email)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Forum notifications';

-- ----------------------------------------------------------------------------
-- CMS / PAGE INDEXING
-- ----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `indexPage` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nom` VARCHAR(255) NOT NULL UNIQUE COMMENT 'Page name',
  `path` VARCHAR(500),
  `titulo` VARCHAR(255),
  `descripcion` TEXT,
  `keywords` TEXT,
  `coment` TEXT,
  `activo` ENUM('si','no') DEFAULT 'si',
  INDEX idx_nom (nom)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Page index';

CREATE TABLE IF NOT EXISTS `indexPageTmp` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nom` VARCHAR(255) NOT NULL,
  `path` VARCHAR(500),
  INDEX idx_nom (nom)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Temporary page index';

CREATE TABLE IF NOT EXISTS `indexDir` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dir` VARCHAR(255) NOT NULL UNIQUE,
  `indexar` ENUM('si','no') DEFAULT 'si',
  INDEX idx_dir (dir)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Directory index control';


-- ============================================================================
-- DATABASE 3: nelosa_printers (Printer Database)
-- ============================================================================

CREATE DATABASE IF NOT EXISTS `nelosa_printers` 
  DEFAULT CHARACTER SET latin1 
  DEFAULT COLLATE latin1_spanish_ci;

USE `nelosa_printers`;

-- ----------------------------------------------------------------------------
-- INKJET PRINTERS BY BRAND
-- ----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `Brother` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Printer` VARCHAR(100) NOT NULL,
  `Ins` VARCHAR(50) COMMENT 'Instruction code',
  `proced` VARCHAR(50) COMMENT 'Procedure code',
  INDEX idx_printer (Printer),
  INDEX idx_ins (Ins)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Brother inkjet printers';

CREATE TABLE IF NOT EXISTS `Canon` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Printer` VARCHAR(100) NOT NULL,
  `Ins` VARCHAR(50),
  `proced` VARCHAR(50),
  INDEX idx_printer (Printer)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Canon inkjet printers';

CREATE TABLE IF NOT EXISTS `Compaq` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Printer` VARCHAR(100) NOT NULL,
  `Ins` VARCHAR(50),
  `proced` VARCHAR(50),
  INDEX idx_printer (Printer)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Compaq inkjet printers';

CREATE TABLE IF NOT EXISTS `Epson` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Printer` VARCHAR(100) NOT NULL,
  `Ins` VARCHAR(50),
  `proced` VARCHAR(50),
  INDEX idx_printer (Printer)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Epson inkjet printers';

CREATE TABLE IF NOT EXISTS `HP` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Printer` VARCHAR(100) NOT NULL,
  `Ins` VARCHAR(50),
  `proced` VARCHAR(50),
  INDEX idx_printer (Printer)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='HP inkjet printers';

CREATE TABLE IF NOT EXISTS `Lexmark` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Printer` VARCHAR(100) NOT NULL,
  `Ins` VARCHAR(50),
  `proced` VARCHAR(50),
  INDEX idx_printer (Printer)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Lexmark inkjet printers';

CREATE TABLE IF NOT EXISTS `Olivetti` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Printer` VARCHAR(100) NOT NULL,
  `Ins` VARCHAR(50),
  `proced` VARCHAR(50),
  INDEX idx_printer (Printer)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Olivetti inkjet printers';

CREATE TABLE IF NOT EXISTS `Xerox` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Printer` VARCHAR(100) NOT NULL,
  `Ins` VARCHAR(50),
  `proced` VARCHAR(50),
  INDEX idx_printer (Printer)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Xerox inkjet printers';

-- ----------------------------------------------------------------------------
-- LASER PRINTERS BY BRAND
-- ----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `Brother_laser` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Printer` VARCHAR(100) NOT NULL,
  `Ins` VARCHAR(50),
  `proced` VARCHAR(50),
  `carga` VARCHAR(50) COMMENT 'Load type',
  INDEX idx_printer (Printer)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Brother laser printers';

CREATE TABLE IF NOT EXISTS `Canon_laser` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Printer` VARCHAR(100) NOT NULL,
  `Ins` VARCHAR(50),
  `proced` VARCHAR(50),
  `carga` VARCHAR(50),
  INDEX idx_printer (Printer)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Canon laser printers';

CREATE TABLE IF NOT EXISTS `Compaq_laser` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Printer` VARCHAR(100) NOT NULL,
  `Ins` VARCHAR(50),
  `proced` VARCHAR(50),
  `carga` VARCHAR(50),
  INDEX idx_printer (Printer)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Compaq laser printers';

CREATE TABLE IF NOT EXISTS `Epson_laser` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Printer` VARCHAR(100) NOT NULL,
  `Ins` VARCHAR(50),
  `proced` VARCHAR(50),
  `carga` VARCHAR(50),
  INDEX idx_printer (Printer)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Epson laser printers';

CREATE TABLE IF NOT EXISTS `HP_laser` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Printer` VARCHAR(100) NOT NULL,
  `Ins` VARCHAR(50),
  `proced` VARCHAR(50),
  `carga` VARCHAR(50),
  INDEX idx_printer (Printer)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='HP laser printers';

CREATE TABLE IF NOT EXISTS `Lexmark_laser` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Printer` VARCHAR(100) NOT NULL,
  `Ins` VARCHAR(50),
  `proced` VARCHAR(50),
  `carga` VARCHAR(50),
  INDEX idx_printer (Printer)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Lexmark laser printers';

CREATE TABLE IF NOT EXISTS `Olivetti_laser` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Printer` VARCHAR(100) NOT NULL,
  `Ins` VARCHAR(50),
  `proced` VARCHAR(50),
  `carga` VARCHAR(50),
  INDEX idx_printer (Printer)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Olivetti laser printers';

CREATE TABLE IF NOT EXISTS `Xerox_laser` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Printer` VARCHAR(100) NOT NULL,
  `Ins` VARCHAR(50),
  `proced` VARCHAR(50),
  `carga` VARCHAR(50),
  INDEX idx_printer (Printer)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Xerox laser printers';

-- ----------------------------------------------------------------------------
-- REFILL INSTRUCTIONS & PROCEDURES
-- ----------------------------------------------------------------------------

-- Brand instruction counters
CREATE TABLE IF NOT EXISTS `Ins_Brand` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Brother` INT DEFAULT 0,
  `Canon` INT DEFAULT 0,
  `Compaq` INT DEFAULT 0,
  `Epson` INT DEFAULT 0,
  `HP` INT DEFAULT 0,
  `Lexmark` INT DEFAULT 0,
  `Olivetti` INT DEFAULT 0,
  `Xerox` INT DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Instruction counters by brand';

-- Initialize counters
INSERT INTO `Ins_Brand` 
  (`Brother`, `Canon`, `Compaq`, `Epson`, `HP`, `Lexmark`, `Olivetti`, `Xerox`) 
VALUES 
  (0, 0, 0, 0, 0, 0, 0, 0);

-- Refill procedures
CREATE TABLE IF NOT EXISTS `Proced` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Num` VARCHAR(20) NOT NULL UNIQUE,
  `Texto` TEXT,
  INDEX idx_num (Num)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Refill procedures';

-- Instruction texts in multiple languages
CREATE TABLE IF NOT EXISTS `txt_esp` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `codigo` VARCHAR(50) NOT NULL UNIQUE,
  `texto` TEXT,
  INDEX idx_codigo (codigo)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Instructions - Spanish';

CREATE TABLE IF NOT EXISTS `txt_cat` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `codigo` VARCHAR(50) NOT NULL UNIQUE,
  `texto` TEXT,
  INDEX idx_codigo (codigo)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Instructions - Catalan';

CREATE TABLE IF NOT EXISTS `txt_eng` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `codigo` VARCHAR(50) NOT NULL UNIQUE,
  `texto` TEXT,
  INDEX idx_codigo (codigo)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Instructions - English';

CREATE TABLE IF NOT EXISTS `txt_fra` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `codigo` VARCHAR(50) NOT NULL UNIQUE,
  `texto` TEXT,
  INDEX idx_codigo (codigo)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Instructions - French';

CREATE TABLE IF NOT EXISTS `txt_ned` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `codigo` VARCHAR(50) NOT NULL UNIQUE,
  `texto` TEXT,
  INDEX idx_codigo (codigo)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Instructions - Dutch';

CREATE TABLE IF NOT EXISTS `txt_por` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `codigo` VARCHAR(50) NOT NULL UNIQUE,
  `texto` TEXT,
  INDEX idx_codigo (codigo)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Instructions - Portuguese';


-- ============================================================================
-- SAMPLE DATA INSERTS
-- ============================================================================

USE `nelosa_nelosa`;

-- Sample admin user (password: admin123)
INSERT INTO `Datas` (`mail`, `otro`) VALUES 
  ('emiki@nelosa.net', 'admin123'),
  ('miki@nelosa.net', 'admin123'),
  ('info@nelosa.net', 'admin123')
ON DUPLICATE KEY UPDATE otro=VALUES(otro);

INSERT INTO `Clientes` (`email`, `Nombre`, `Apellido1`, `Empresa`, `Pais`) VALUES
  ('emiki@nelosa.net', 'Admin', 'Sistema', 'Nelosa', 'España'),
  ('miki@nelosa.net', 'Admin', 'Miki', 'Nelosa', 'España'),
  ('info@nelosa.net', 'Info', 'General', 'Nelosa', 'España')
ON DUPLICATE KEY UPDATE Nombre=VALUES(Nombre);

-- Sample products
INSERT INTO `prods` (`Ref`, `Des`, `precio_eshop`, `precio_nelosa`, `Grupo`, `activo`) VALUES
  ('3197', 'Universal Refill Kit - Black', 12.50, 10.00, 'Refill Kits', 'si'),
  ('3198', 'Universal Refill Kit - Color', 15.00, 12.50, 'Refill Kits', 'si'),
  ('3199', 'Cleaning Kit', 8.50, 7.00, 'Accessories', 'si')
ON DUPLICATE KEY UPDATE Des=VALUES(Des);

-- Sample product descriptions
INSERT INTO `Descs_esp` (`Ref`, `texto`, `denom`) VALUES
  ('3197', 'Kit de recarga universal para cartuchos de tinta negra', 'Kit Recarga Negro'),
  ('3198', 'Kit de recarga universal para cartuchos de tinta color', 'Kit Recarga Color'),
  ('3199', 'Kit de limpieza para cartuchos e impresoras', 'Kit Limpieza')
ON DUPLICATE KEY UPDATE texto=VALUES(texto);


-- ============================================================================
-- MIGRATION COMPLETE
-- ============================================================================
-- 
-- Next steps:
-- 1. Review field types and adjust as needed
-- 2. Add foreign key constraints if using InnoDB
-- 3. Import actual data if available
-- 4. Update inc/config.php with correct database credentials
-- 5. Test all application modules
--
-- To execute this migration:
--   mysql -u root -p < migration.sql
--   or import via phpMyAdmin at http://localhost:8087
--
-- ============================================================================
