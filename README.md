# NelosaWeb ERP - Sistema de Gestión Empresarial

![Version](https://img.shields.io/badge/version-16.0-blue)
![PHP](https://img.shields.io/badge/PHP-Legacy-orange)
![MySQL](https://img.shields.io/badge/MySQL-Database-green)

## 📋 Índice

- [Descripción General](#-descripción-general)
- [Características Principales](#-características-principales)
- [Arquitectura del Sistema](#-arquitectura-del-sistema)
- [Módulos del Sistema](#-módulos-del-sistema)
- [Requisitos del Sistema](#-requisitos-del-sistema)
- [Configuración](#️-configuración)
- [Estructura de Directorios](#-estructura-de-directorios)
- [Base de Datos](#-base-de-datos)
- [Seguridad](#-seguridad)
- [API y Clases](#-api-y-clases)
- [Guía de Uso](#-guía-de-uso)
- [Mantenimiento](#-mantenimiento)
- [Licencia](#-licencia)

---

## 🎯 Descripción General

**NelosaWeb ERP v16.0** es un sistema integral de gestión empresarial desarrollado específicamente para el negocio de accesorios de impresoras, recarga de cartuchos y consumibles. El sistema está construido en PHP y utiliza MySQL como sistema de gestión de base de datos.

### Propósito del Sistema

- Gestión completa de tienda online de productos de recarga de cartuchos
- Administración de clientes, distribuidores y pedidos
- Sistema de soporte técnico y documentación
- Gestión de base de datos de impresoras y compatibilidades
- Sistema de mailing y comunicación con clientes
- Panel de control administrativo (BackOffice)

---

## ✨ Características Principales

### 🛒 E-commerce

- Catálogo de productos para recarga inkjet y láser
- Sistema de pedidos y carrito de compra
- Gestión de precios para eShop
- Accesorios para CD/DVD, Audio y Video
- Productos Deluxe Cards y etiquetas

### 👥 Gestión de Clientes

- Base de datos de clientes individuales
- Gestión de distribuidores y tiendas
- Sistema de registro y login
- Club de usuarios con área privada
- Gestión de perfiles de distribuidor

### 📧 Sistema de Mailing

- Alta/Baja de mailing para consejos y novedades
- Envío masivo de emails
- Gestión de listas de correo
- Sistema de newsletters
- Control de emails enviados

### 🔧 Base de Datos de Impresoras

- Información detallada de impresoras por marca (Brother, Canon, Compaq, Epson, HP, Lexmark, Olivetti, Xerox)
- Instrucciones de recarga específicas por modelo
- Compatibilidades de cartuchos
- Procedimientos de reseteo y mantenimiento

### 📚 Sistema de Documentación

- Instrucciones detalladas de recarga
- Procedimientos anti-recarga
- FAQ (Preguntas frecuentes)
- Rincón técnico
- Guías de software para printables

### 🎫 Soporte Técnico

- Sistema de tickets de soporte
- Formularios de contacto
- Servicio Técnico Paralelo (STP)
- Sistema de respuestas automatizadas

### 💼 Panel de Administración (BackOffice)

- Control completo del sistema
- Gestión de usuarios y permisos
- Mantenimiento de base de datos
- Sistema de backup y restauración
- Estadísticas y reportes

### 🐳 Entorno Docker

El sistema incluye una configuración completa de Docker para facilitar el despliegue y desarrollo. El entorno está optimizado para ejecutar aplicaciones PHP legacy con las extensiones mysql necesarias.

**Contenedores incluidos:**

- **PHP 5.6 + Apache**: Servidor web con soporte para extensión mysql legacy y mysqli
- **MySQL 5.7**: Base de datos preconfigurada con la estructura del sistema
- **phpMyAdmin**: Interfaz web para administración de base de datos

**Iniciar el entorno:**

```bash
# Construir y levantar los contenedores
docker-compose up -d --build

# Verificar estado de los contenedores
docker-compose ps
```

**Acceso a servicios:**

- Aplicación web: http://localhost:8080
- phpMyAdmin: http://localhost:8081
- MySQL: localhost:3306

**Comandos útiles:**

```bash
# Detener servicios
docker-compose down

# Ver logs en tiempo real
docker-compose logs -f

# Acceder al contenedor PHP
docker exec -it nelosa_php bash

# Reiniciar servicios
docker-compose restart
```

**Credenciales de base de datos:**

- Usuario MySQL: `miki_nelosa`
- Contraseña: `mqm1804`
- Base de datos: `miki_nelosa`
- Usuario root: `root` / `root`

Para más información detallada sobre Docker, consulta [docker-start.md](docker-start.md).

---

## 🏗️ Arquitectura del Sistema

### Stack Tecnológico

- **Backend**: Versión 4.x/5.x (versión legacy)
- **Base de Datos**: MySQL
- **Frontend**: HTML, CSS, JavaScript
- **Animaciones**: Adobe Flash (SWF)
- **Email**: PHPMailer integrado

### Patrón de Diseño

El sistema utiliza un enfoque de **Programación Orientada a Objetos** con clases personalizadas:

- Arquitectura MVC parcial
- Sistema de sesiones personalizado
- Clases wrapper para operaciones comunes

---

## 📦 Módulos del Sistema

### 1. **Módulo de Frontend (`gueb/`)**

#### Páginas Principales

- **Index**: Página principal con banner animado
- **Club**: Sistema de registro y área de miembros
- **Productos**: Catálogo completo de productos
  - Recarga inkjet
  - Recarga láser color
  - Recarga láser monocromático
  - Accesorios de recarga
  - Productos multimedia
- **Instrucciones**: Guías de recarga por modelo de impresora
- **Mailing**: Sistema de suscripción/desuscripción
- **FAQ**: Preguntas frecuentes
- **Foro**: Sistema de discusión (implementación básica)
- **Soporte**: Sistema de tickets de soporte
- **Distribuidores**: Área de acceso para tiendas
- **STP**: Servicio Técnico Paralelo
- **Rincón Técnico**: Artículos y tips técnicos
- **Varias**: Páginas auxiliares (Quiénes somos, Dónde estamos, Software)

### 2. **Módulo de BackOffice (`BK/`)**

#### Control Principal (`ControlMenu.php`)

Panel de control administrativo con acceso a:

- Gestión de clientes
- Gestión de distribuidores
- Control de eShop
- Traductor de contenidos
- Control de IPs
- Eliminación de usuarios

#### Submódulos de Seguridad (`BK/Seg/`)

##### **Clientes (`Clientes/`)**

- `clientes.php`: Listado y gestión de clientes
- `PedidosCliente.php`: Gestión de pedidos por cliente

##### **Gestión de Base de Datos (`db.manager/`)**

- `get_email_nelosa.php`: Obtención de emails de clientes
- `get_ref_price_eshop.php`: Consulta de precios para eShop
- `mod_email_nelosa.php`: Modificación de emails
- `mod_eshop.php`: Modificación de datos eShop
- `refllenar.indices.php`: Reindexación de bases de datos

##### **Mantenimiento de DB (`db.mant/`)**

- `del.user.php`: Eliminación de usuarios
- `del.user.distri.php`: Eliminación de distribuidores
- `insert.file.php`: Inserción masiva de datos
- `mod.emails.php`: Modificación de emails
- `rellenar.ind.emails.php`: Reindexación de emails
- `show.php`: Visualización de registros
- `show.distri.php`: Visualización de distribuidores

##### **Distribuidores (`distri/`)**

- `distris.php`: Gestión completa de distribuidores y tiendas

##### **Búsqueda de Emails (`email-search/`)**

- `search.php`: Motor de búsqueda de emails
- `add.php`: Añadir emails a listas
- `add.link.php`: Añadir enlaces de contacto
- `mostrar.webs.php`: Mostrar páginas web indexadas
- `codes.php`: Gestión de códigos
- `create.db.php`: Creación de bases de datos auxiliares

##### **Control de Emails (`emailCtrl/`)**

Módulo para gestión avanzada de correos electrónicos

##### **Mantenimiento de Instrucciones (`ins.mant/`)**

Gestión del contenido de instrucciones de recarga

##### **Control de IPs (`IPControl/`)**

Sistema de seguimiento y control de IPs de visitantes

##### **Backup MySQL (`mysql.backup/`)**

- `backup.php`: Sistema completo de backup
- `backup.inc`: Configuración de backups
- `ret.db.tables.php`: Recuperación de tablas
- `ret.db.tables.struct.php`: Recuperación de estructura
- `ret.db.tables.data.php`: Recuperación de datos
- `emiki.php`: Utilidades especiales de backup

##### **Gestión de Índice de Páginas (`page-index/`)**

Indexación de contenido para búsquedas

##### **Mantenimiento de Impresoras (`printer-db-mant/`)**

- `Main.php`: Menú principal
- `New.php`: Alta de nuevas impresoras inkjet
- `New.laser.php`: Alta de impresoras láser
- `Mod.php`: Modificación de impresoras inkjet
- `Mod.laser.php`: Modificación de impresoras láser
- `Del.php`: Eliminación de impresoras inkjet
- `Del.laser.php`: Eliminación de impresoras láser
- `Mantenimiento.php`: Mantenimiento de registros inkjet
- `Mantenimiento.laser.php`: Mantenimiento de registros láser
- `VB.Update.php`: Actualización desde Visual Basic
- `truncate.php`: Limpieza de tablas

##### **Base de Datos de Productos (`prodsdb/`)**

- `prods-update.php`: Actualización de productos

##### **Bases de Datos de Retención (`ret.dbs/`)**

Almacenamiento de respaldos

##### **Traductor (`traductor/`)**

- `traductor.php`: Sistema de traducción de contenidos
- Traducción de textos de recarga
- Traducción de descripciones de productos

##### **Utilidades (`Utils/`)**

Herramientas auxiliares del sistema

##### **Visual Basic Mailing (`vb.mailing/`)**

- `Doks/`: Documentación de integración con VB

### 3. **Sistema de Archivos Estáticos (`img/`)**

#### Imágenes Organizadas por Categoría

- **Inkjet** (`a.inkjet/`):
  - Chips
  - Cartuchos Epson individuales
  - Instrucciones visuales
  - Limpiadores
  - Tipos de cartuchos
- **Láser** (`a.laser/`):
  - Recarga
  - Reset
- **Diseño** (`diseno.paginas/`):
  - Base
  - Botones
  - Comunes
  - Index
  - Lateral
  - Middle
- **Animaciones**: Banner Flash animado
- **Impresoras recomendadas**
- **Mailing**: Imágenes para newsletters
- **Printables**: Materiales imprimibles
- **Productos**: Imágenes de catálogo
- **Recarga**: Tutoriales visuales
- **Mapas**: Ubicación de la empresa

### 4. **Sistema de Includes (`inc/`)**

#### Configuración

- **`config.php`**: Configuración principal
  - Host de base de datos
  - Credenciales
  - Idioma del sistema

#### Funciones

- **`funciones.php`**: Funciones globales del sistema
- **`Funciones_PHP.php`**: Biblioteca extendida de funciones PHP

#### CSS

- **`styles.css`**: Estilos principal
- **`styles2.css`**: Estilos alternativos
- **`styles14.css`**: Estilos versión 14

#### Headers

- **`headers.php`**: Headers HTML comunes
- **`vbles_sesion.php`**: Gestión de variables de sesión

#### Menú Árbol

- **`MenuArbol/`**: Sistema de menú desplegable
  - `Desplegable.php`: Lógica del menú
  - `fayuda.js`: JavaScript auxiliar

#### Clases POO (`objetos/`)

##### **BaseDeDatos (`class-db/`)**

Clase para manejo de conexiones y consultas MySQL:

```php
$db = new BaseDeDatos($host, $user, $pass, $dbname);
$db->openDatabase();
$db->consulta($sql);
$db->retriveData();
```

##### **FileUpload (`class-fileupload/`)**

Gestión de carga de archivos

##### **Funciones (`class-funciones/`)**

Biblioteca de funciones orientada a objetos

##### **Languages (`class-languages/`)**

Sistema de internacionalización:

- Gestión de idiomas
- Traducciones
- Contenido multiidioma

##### **Options (`class-options/`)**

Gestión de opciones y configuración

##### **PHPMailer (`class-phpmailer/`)**

Sistema de envío de correos:

- `class.phpmailer.php`: Clase principal
- `class.smtp.php`: Protocolo SMTP
- Soporte para HTML y texto plano
- Archivos adjuntos

##### **Sesioner (`class-sesioner/`)**

Gestión avanzada de sesiones de usuario

### 5. **Partes de Página (`page.parts/`)**

Componentes reutilizables de diseño:

- **`up.menu.php`**: Menú superior
- **`med.menu.php`**: Menú medio
- **`down.php`**: Pie de página
- **`p/p/`**: Variaciones de componentes

---

## 💻 Requisitos del Sistema

### Requisitos del Servidor

#### Mínimos

- **Servidor Web**: Apache 2.x o superior
- **PHP**: 5.x o superior (código legacy)
- **MySQL**: 5.x o superior
- **Espacio en Disco**: 500 MB mínimo
- **Memoria RAM**: 256 MB mínimo

#### Recomendados

- **Servidor Web**: Apache 2.4+ con mod_rewrite
- **PHP**: 7.4+ (requiere actualización de código)
- **MySQL**: 5.7+ o MariaDB 10.x
- **Espacio en Disco**: 2 GB
- **Memoria RAM**: 1 GB
- **SSL**: Certificado válido para conexiones seguras

### Extensiones PHP Requeridas

- `mysql` o `mysqli` (extensión de base de datos)
- `session` (gestión de sesiones)
- `gd` (procesamiento de imágenes)
- `mbstring` (soporte multibyte)
- `curl` (conexiones externas)
- `mail` (envío de correos)

### Configuración PHP Recomendada

```ini
upload_max_filesize = 20M
post_max_size = 25M
memory_limit = 128M
max_execution_time = 300
session.gc_maxlifetime = 1440
```

---

## ⚙️ Configuración

### 1. Configuración de Base de Datos

Edita el archivo `/inc/config.php`:

```php
<?php
$db_hostname = "localhost";        // Host de MySQL
$db_name = "miki_nelosa";          // Nombre de la base de datos
$db_username = "miki_nelosa";      // Usuario de MySQL
$db_password = "tu_password";      // Contraseña (¡CAMBIAR!)
$jost = "localhost";               // Host auxiliar
$idioma = "esp";                   // Idioma por defecto
$_SESSION['vs_lang'] = 'esp';      // Idioma de sesión
?>
```

⚠️ **IMPORTANTE**: Cambiar la contraseña de base de datos en producción.

### 2. Creación de Base de Datos

Ejecutar desde el panel de administración:

```
/BK/create.database.php
```

O crear manualmente las bases de datos necesarias:

- `nelosa_nelosa` - Base de datos principal
- `nelosa_printers` - Base de datos de impresoras
- `miki_nelosa` - Base de datos de usuarios

### 3. Configuración de Sesiones

El sistema utiliza una sesión nombrada:

```php
session_name('nelosa');
```

### 4. Configuración de Permisos

Establecer permisos correctos en el servidor:

```bash
# Directorios ejecutables
chmod 755 gueb/ BK/ inc/

# Archivos PHP
chmod 644 *.php

# Directorio de uploads (si aplica)
chmod 777 uploads/

# Directorio de backups
chmod 755 BK/Seg/mysql.backup/
```

### 5. Configuración de Apache

Ejemplo de `.htaccess` básico:

```apache
# Proteger archivos de configuración
<Files "config.php">
    Order allow,deny
    Deny from all
</Files>

# Redirecciones
Options +FollowSymLinks
RewriteEngine On

# Bloquear acceso a directorios sensibles
RedirectMatch 403 /\.git
RedirectMatch 403 /\.htaccess
```

---

## 📁 Estructura de Directorios

```
NelosaWeb.16.0/
│
├── BK/                          # BackOffice - Panel de Administración
│   ├── Brand-Ins.php           # Gestión de marcas de impresoras
│   ├── ControlMenu.php         # Menú principal de control
│   ├── create.database.php     # Creación de bases de datos
│   ├── listar_impresoras.php   # Listado de impresoras
│   └── Seg/                     # Módulos de seguridad/administración
│       ├── Clientes/           # Gestión de clientes
│       ├── db.manager/         # Gestión de base de datos
│       ├── db.mant/            # Mantenimiento de DB
│       ├── distri/             # Gestión de distribuidores
│       ├── email-search/       # Búsqueda de emails
│       ├── emailCtrl/          # Control de emails
│       ├── ins.mant/           # Mantenimiento de instrucciones
│       ├── IPControl/          # Control de IPs
│       ├── mysql.backup/       # Sistema de backup
│       ├── page-index/         # Indexación de páginas
│       ├── printer-db-mant/    # Mantenimiento de impresoras
│       ├── prodsdb/            # Base de datos de productos
│       ├── ret.dbs/            # Bases de datos de retención
│       ├── traductor/          # Sistema de traducción
│       ├── Utils/              # Utilidades
│       └── vb.mailing/         # Integración con VB
│
├── gueb/                        # Frontend - Sitio Web Público
│   ├── index.php               # Página principal
│   └── paginas/                # Páginas del sitio
│       ├── club/               # Club de usuarios
│       ├── distris/            # Área de distribuidores
│       ├── faq/                # Preguntas frecuentes
│       ├── foro/               # Sistema de foro
│       ├── instrucciones/      # Instrucciones de recarga
│       ├── Mailing/            # Sistema de mailing
│       ├── productos/          # Catálogo de productos
│       ├── recarga/            # Información de recarga
│       ├── rincon/             # Rincón técnico
│       ├── soporte/            # Soporte técnico
│       ├── stp/                # Servicio Técnico Paralelo
│       └── varias/             # Páginas diversas
│
├── img/                         # Recursos de Imágenes
│   ├── a.inkjet/               # Imágenes inkjet
│   ├── a.laser/                # Imágenes láser
│   ├── animaciones/            # Animaciones Flash
│   ├── diseno.paginas/         # Elementos de diseño
│   ├── impresoras.recomendadas/ # Imágenes de impresoras
│   ├── mailing/                # Imágenes para emails
│   ├── printables/             # Materiales imprimibles
│   ├── prods/                  # Imágenes de productos
│   ├── recarga/                # Tutoriales visuales
│   └── varias/                 # Imágenes diversas
│
├── inc/                         # Archivos de Inclusión
│   ├── config.php              # Configuración principal ⚙️
│   ├── funciones.php           # Funciones globales
│   ├── Codes/                  # Códigos auxiliares
│   ├── css/                    # Hojas de estilo
│   ├── funciones/              # Biblioteca de funciones
│   ├── headers/                # Headers HTML
│   ├── MenuArbol/              # Sistema de menú
│   └── objetos/                # Clases POO
│       ├── class-db/           # Clase de base de datos
│       ├── class-fileupload/   # Carga de archivos
│       ├── class-funciones/    # Funciones OOP
│       ├── class-languages/    # Internacionalización
│       ├── class-options/      # Gestión de opciones
│       ├── class-phpmailer/    # Envío de emails
│       └── class-sesioner/     # Gestión de sesiones
│
└── page.parts/                  # Componentes de Página
    ├── up.menu.php             # Menú superior
    ├── med.menu.php            # Menú medio
    ├── down.php                # Pie de página
    └── p/p/                    # Variaciones de componentes
```

---

## 🗄️ Base de Datos

### Bases de Datos Principales

#### 1. `nelosa_nelosa` (Principal)

Tablas principales:

- **`Clientes`**: Información de clientes
  - email, Nombre, Apellido1, Apellido2
  - Direccion, CP, Poblacion, Provincia, Pais
  - Telefono, Empresa
- **`Clientes_Tiendas`**: Distribuidores y tiendas
  - Misma estructura que Clientes
  - Campos adicionales para datos comerciales

- **`Cart_DB_Pedidos`**: Pedidos realizados
  - ID_Pedido, email, Fecha
  - Productos, Cantidades, Precios
  - Estado del pedido

- **`prods`**: Productos
  - Ref (Referencia)
  - precio_eshop
  - Descripción, Stock
  - Categoría

#### 2. `nelosa_printers` (Impresoras)

Tablas:

- **`Ins_Brand`**: Marcas de impresoras
  - Brother, Canon, Compaq, Epson
  - HP, Lexmark, Olivetti, Xerox
- **`Printers_Inkjet`**: Impresoras inkjet
  - Modelo, Marca
  - Instrucciones de recarga
  - Compatibilidades

- **`Printers_Laser`**: Impresoras láser
  - Similar a inkjet
  - Información específica de láser

#### 3. `miki_nelosa` (Usuarios y Sesiones)

Tablas:

- **`users`**: Usuarios del sistema
  - usr, password, email
  - rol, permisos
- **`sessions`**: Sesiones activas

### Esquema de Relaciones

```
Clientes (1) ---> (N) Cart_DB_Pedidos
Clientes (1) ---> (N) Mailing_List
Printers (1) ---> (N) Instrucciones
Productos (1) ---> (N) Pedido_Items
```

### Operaciones de Base de Datos

#### Backup

Acceso: `/BK/Seg/mysql.backup/backup.php`

- Backup completo de base de datos
- Backup de tablas específicas
- Backup de estructura y datos por separado

#### Restore

- Restauración desde archivo de backup
- Validación de integridad
- Rollback de operaciones

---

## 🔒 Seguridad

### Sistema de Autenticación

#### Niveles de Acceso

1. **Visitante**: Acceso público
2. **Usuario Registrado**: Miembro del club
3. **Distribuidor**: Acceso a área de distribuidores
4. **Administrador**: Acceso completo al BackOffice

#### Control de Acceso

```php
// Verificación de usuario admin
if ($usr <> "emiki@nelosa.net" AND
    $usr <> "miki@nelosa.net" AND
    $usr <> "info@nelosa.net") {
    // Redirigir a página restringida
}
```

### Gestión de Sesiones

#### Sesión Nombrada

```php
session_name('nelosa');
session_start();
```

#### Cookies

- `nelosa`: Usuario regular
- `nelosadistri`: Usuario distribuidor

### Protección de Archivos Sensibles

#### Archivos a Proteger

- `/inc/config.php` - Credenciales de DB
- `/BK/*` - Panel de administración
- `*.sql` - Backups de base de datos

### Recomendaciones de Seguridad

⚠️ **CRÍTICO - Implementar antes de producción:**

1. **Cambiar todas las contraseñas** en `config.php`
2. **Actualizar PHP** a versión 7.4+ o 8.x
3. **Migrar de `mysql_*`** a `mysqli_*` o PDO
4. **Implementar HTTPS** con certificado SSL
5. **Sanitizar todas las entradas** de usuario
6. **Usar prepared statements** para prevenir SQL injection
7. **Implementar CSRF tokens** en formularios
8. **Validar y escapar salidas** para prevenir XSS
9. **Limitar intentos de login**
10. **Implementar logs de auditoría**

### Vulnerabilidades Conocidas

⚠️ **El código actual presenta vulnerabilidades legacy:**

- SQL injection (uso directo de variables en queries)
- XSS (falta de escape de salida)
- Contraseñas hardcoded
- Uso de extensión mysql deprecated
- Falta de validación de entrada

**Se recomienda refactorización completa de seguridad antes de uso en producción.**

---

## 🔧 API y Clases

### Clase BaseDeDatos

Ubicación: `/inc/objetos/class-db/class-db.php`

#### Constructor

```php
$db = new BaseDeDatos($hostname, $username, $password, $dbname);
```

#### Métodos Principales

```php
// Abrir conexión
$db->openDatabase();

// Ejecutar consulta
$db->consulta("SELECT * FROM tabla");

// Obtener datos
while($db->retriveData()) {
    echo $db->db_row["campo"];
}

// Listar bases de datos
$db->listarDBs();
```

### Clase Languages

Ubicación: `/inc/objetos/class-languages/class-languages.php`

```php
$lang = new Languages('esp');
// Gestión de traducciones e idiomas
```

### Clase PHPMailer

Ubicación: `/inc/objetos/class-phpmailer/`

```php
require_once('class.phpmailer.php');

$mail = new PHPMailer();
$mail->From = "info@nelosa.net";
$mail->FromName = "Nelosa";
$mail->AddAddress($destinatario);
$mail->Subject = "Asunto";
$mail->Body = "Mensaje HTML";
$mail->Send();
```

### Funciones Globales

Archivo: `/inc/funciones.php`

#### Funciones de Conexión

```php
// Conectar a base de datos específica
conectarse_param($db_name);

// Conectar a base de datos por defecto
conectarse();
```

---

## 📖 Guía de Uso

### Para Administradores

#### Acceso al Panel de Administración

1. Navegar a `/BK/ControlMenu.php`
2. Login con credenciales de administrador
3. Acceso al menú de control completo

#### Gestión de Clientes

1. Click en "Clientes" en el menú principal
2. Ver listado completo de clientes
3. Ver pedidos por cliente
4. Exportar datos

#### Gestión de Distribuidores

1. Acceder a "Listar Distribuidores"
2. Ver información de tiendas
3. Alta de nuevo distribuidor
4. Gestión de accesos

#### Mantenimiento de Impresoras

1. Navegar a `/BK/Seg/printer-db-mant/Main.php`
2. **Alta de impresora**:
   - Seleccionar tipo (Inkjet/Laser)
   - Completar formulario
   - Guardar información
3. **Modificación**:
   - Buscar impresora
   - Editar campos
   - Actualizar
4. **Eliminación**:
   - Seleccionar impresora
   - Confirmar eliminación

#### Gestión de Productos

1. Acceder a módulo de productos
2. Actualizar precios de eShop
3. Modificar descripciones
4. Gestión de stock

#### Sistema de Backup

1. Navegar a `/BK/Seg/mysql.backup/backup.php`
2. Seleccionar base de datos
3. Elegir tablas (o todas)
4. Ejecutar backup
5. Descargar archivo SQL

### Para Distribuidores

#### Registro

1. Visitar página de registro de distribuidores
2. Completar formulario con datos de la tienda
3. Esperar validación de administrador
4. Recibir credenciales de acceso

#### Área de Distribuidores

1. Login con credenciales
2. Acceso a:
   - Catálogo de productos
   - Precios especiales
   - Lista de pedidos
   - Material descargable
   - Soporte preferente

### Para Usuarios Finales

#### Registro en el Club

1. Navegar a `/gueb/paginas/club/`
2. Click en "Únete al club"
3. Completar formulario
4. Confirmar email
5. Acceso a contenido exclusivo

#### Buscar Instrucciones

1. Ir a sección "Instrucciones"
2. Seleccionar marca de impresora
3. Seleccionar modelo
4. Visualizar instrucciones detalladas
5. Descargar PDF (si disponible)

#### Realizar Pedido

1. Navegar por catálogo de productos
2. Seleccionar productos
3. Añadir al carrito
4. Proceder al checkout
5. Completar datos de envío
6. Confirmar pedido

#### Suscripción a Mailing

1. Visitar `/gueb/paginas/Mailing/`
2. Introducir email
3. Confirmar suscripción
4. Recibir consejos y novedades

#### Soporte Técnico

1. Acceder a sección "Soporte"
2. Rellenar formulario de contacto
3. Describir problema
4. Enviar ticket
5. Recibir respuesta por email

---

## 🔧 Mantenimiento

### Tareas Diarias

#### Monitoreo

- Revisar logs de errores PHP
- Verificar espacio en disco
- Comprobar backups automáticos

#### Base de Datos

- Verificar conexiones activas
- Optimizar tablas si es necesario

```sql
OPTIMIZE TABLE nombre_tabla;
```

### Tareas Semanales

#### Backups

- Realizar backup completo de base de datos
- Backup de archivos del sistema
- Verificar integridad de backups
- Almacenar en ubicación externa

#### Limpieza

- Limpiar sesiones antiguas
- Eliminar logs antiguos
- Limpiar caché si existe

### Tareas Mensuales

#### Actualización de Contenido

- Revisar y actualizar instrucciones de recarga
- Añadir nuevos modelos de impresoras
- Actualizar precios de productos

#### Análisis

- Generar reportes de ventas
- Analizar estadísticas de visitas
- Revisar tickets de soporte

#### Seguridad

- Revisar logs de acceso
- Actualizar contraseñas
- Verificar permisos de archivos

### Tareas Trimestrales

#### Optimización

- Optimizar base de datos completa
- Limpiar registros antiguos
- Actualizar índices

#### Auditoría

- Revisar usuarios inactivos
- Auditar permisos
- Verificar configuraciones

---

### Logs y Debugging

#### Activar Modo Debug

Añadir al inicio de archivos PHP:

```php
error_reporting(E_ALL);
ini_set('display_errors', 1);
```

#### Ver Logs de Apache

```bash
# Linux
tail -f /var/log/apache2/error.log

# Windows
# Ver en C:\Apache\logs\error.log
```

#### Ver Logs de MySQL

```bash
# Habilitar query log
SET GLOBAL general_log = 'ON';
SET GLOBAL general_log_file = '/var/log/mysql/query.log';
```

---

## 📊 Estadísticas y Reportes

### Reportes Disponibles

#### Ventas

- Total de pedidos por período
- Productos más vendidos
- Clientes top
- Análisis de tendencias

#### Clientes

- Nuevos registros
- Tasa de retención
- Distribución geográfica

#### Soporte

- Tickets abiertos/cerrados
- Tiempo de respuesta promedio
- Problemas más comunes

---

**Versión del README**: 1.0  
**Última actualización**: Enero 2026  
**Versión del Sistema**: 16.0
