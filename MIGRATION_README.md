# 📊 NelosaWeb ERP - Database Migration Guide

## Archivo Generado

Se ha creado **`migration.sql`** - un script SQL completo con la estructura de todas las bases de datos del sistema NelosaWeb ERP, generado mediante análisis exhaustivo del código fuente.

## 🗄️ Estructura de Bases de Datos

### 1. **miki_nelosa** (Sistema Principal)

- `idiomas`, `idioma` - Sistema multiidioma

### 2. **nelosa_nelosa** (Datos de Negocio)

**Gestión de Clientes:**

- `Clientes` - Clientes particulares
- `Clientes_Tiendas` - Distribuidores/Tiendas
- `Datas` / `Datas_Tiendas` - Autenticación

**Catálogo de Productos:**

- `prods` - Productos
- `Descs_esp`, `Descs_cat`, `Descs_eng`, `Descs_fra`, `Descs_ned`, `Descs_por` - Descripciones multiidioma
- `tarifa1` a `tarifa5` - Tarifas de precios

**Pedidos:**

- `Cart_DB_Pedidos` - Pedidos
- `lasty_nelosa` - Control de números secuenciales

**Email Marketing:**

- `emails`, `emails_2`, `emails_nelosa`, `emails_nelosa_pral`, `emails_nelosa_ibero`
- `Unsuscribed` - Bajas
- `Send_Ins` - Historial de envíos

**Sistema de Foro:**

- `foro_index` - Temas
- `foro_resp` - Respuestas
- `foro_aviso` - Notificaciones

**CMS:**

- `indexPage`, `indexPageTmp`, `indexDir`

### 3. **nelosa_printers** (Base de Datos de Impresoras)

**Impresoras Inkjet:**

- `Brother`, `Canon`, `Compaq`, `Epson`, `HP`, `Lexmark`, `Olivetti`, `Xerox`

**Impresoras Laser:**

- `Brother_laser`, `Canon_laser`, etc. (mismas marcas)

**Instrucciones:**

- `Ins_Brand` - Contadores por marca
- `Proced` - Procedimientos de recarga
- `txt_esp`, `txt_cat`, `txt_eng`, `txt_fra`, `txt_ned`, `txt_por` - Instrucciones multiidioma

## 🚀 Cómo Aplicar la Migración

### Opción 1: Usando Docker (Recomendado)

```bash
# 1. Copiar el archivo al contenedor MySQL
docker cp migration.sql nelosa_mysql:/tmp/migration.sql

# 2. Ejecutar la migración
docker exec -i nelosa_mysql mysql -u root -proot < /tmp/migration.sql

# O ejecutar interactivamente
docker exec -it nelosa_mysql bash
mysql -u root -proot < /tmp/migration.sql
exit
```

### Opción 2: Usando phpMyAdmin

1. Accede a phpMyAdmin: http://localhost:8087
2. Usuario: `root` / Contraseña: `root`
3. Click en "Importar"
4. Selecciona el archivo `migration.sql`
5. Click en "Continuar"

### Opción 3: Desde PowerShell/Terminal Local

```powershell
# Si tienes MySQL instalado localmente
Get-Content migration.sql | docker exec -i nelosa_mysql mysql -u root -proot
```

## ✅ Verificación Post-Migración

### 1. Verificar Bases de Datos Creadas

```sql
SHOW DATABASES;
-- Deberías ver: miki_nelosa, nelosa_nelosa, nelosa_printers
```

### 2. Verificar Tablas

```sql
USE nelosa_nelosa;
SHOW TABLES;
-- Deberías ver: Clientes, prods, Cart_DB_Pedidos, etc.

USE nelosa_printers;
SHOW TABLES;
-- Deberías ver: Brother, Canon, HP, etc.
```

### 3. Verificar Usuarios de Prueba

```sql
USE nelosa_nelosa;
SELECT * FROM Clientes WHERE email LIKE '%nelosa.net';
SELECT * FROM Datas WHERE mail LIKE '%nelosa.net';
```

### 4. Probar la Aplicación

1. Accede a http://localhost:8086
2. Navega a "BackOffice (Administración)"
3. Usuario: `emiki@nelosa.net` o `miki@nelosa.net`
4. Contraseña: `admin123`

## 🔧 Configuración Posterior

### 1. Actualizar Credenciales de Base de Datos

El archivo `inc/config.php` ya debería estar configurado con:

```php
$db_hostname = "mysql";  // Docker service name
$db_username = "miki_nelosa";
$db_password = "mqm1804";
$db_name = "miki_nelosa";
```

### 2. Crear Usuarios Adicionales

Puedes crear más usuarios administrativos ejecutando:

```sql
USE nelosa_nelosa;

-- Insertar autenticación
INSERT INTO Datas (mail, otro) VALUES ('tu_email@ejemplo.com', 'tu_password');

-- Insertar datos de cliente
INSERT INTO Clientes (email, Nombre, Apellido1, Empresa, Pais)
VALUES ('tu_email@ejemplo.com', 'Tu Nombre', 'Tu Apellido', 'Tu Empresa', 'España');
```

### 3. Agregar Productos

```sql
USE nelosa_nelosa;

INSERT INTO prods (Ref, Des, precio_eshop, precio_nelosa, Grupo, activo)
VALUES ('PROD001', 'Descripción del producto', 19.99, 15.99, 'Categoría', 'si');

-- Agregar descripción en español
INSERT INTO Descs_esp (Ref, texto, denom)
VALUES ('PROD001', 'Descripción detallada...', 'Nombre Producto');
```

### 4. Configurar Impresoras

```sql
USE nelosa_printers;

-- Agregar impresora HP inkjet
INSERT INTO HP (Printer, Ins, proced)
VALUES ('HP DeskJet 3630', 'INS_HP_001', 'PROC_001');

-- Agregar procedimiento
INSERT INTO Proced (Num, Texto)
VALUES ('PROC_001', 'Instrucciones detalladas de recarga...');
```

## 📝 Notas Importantes

### Características del Sistema Legacy

- **Motor de BD**: MyISAM (no transaccional)
- **Charset**: latin1 (ISO-8859-1) - para compatibilidad con caracteres españoles
- **Passwords**: Almacenados en texto plano (legacy - considerar migrar a hash)
- **SQL Injection**: Sistema vulnerable - se recomienda sanitización adicional

### Datos de Ejemplo Incluidos

El script incluye:

- ✅ 3 usuarios administrativos (`emiki@nelosa.net`, `miki@nelosa.net`, `info@nelosa.net`)
- ✅ 3 productos de ejemplo (kits de recarga)
- ✅ Idiomas del sistema (esp, cat, eng, fra, ned, por)
- ✅ Inicialización de contadores secuenciales

### Limitaciones Conocidas

1. **Tipos de datos inferidos**: Los tipos fueron deducidos del código fuente. Si encuentras errores de datos, ajusta los tipos en `migration.sql`

2. **Sin Foreign Keys**: El sistema legacy usa MyISAM sin restricciones de integridad referencial

3. **Tablas dinámicas**: El sistema crea tablas como `emails_[campaign]` y `webs_[campaign]` dinámicamente - no están en este script

4. **Datos históricos**: Este script solo crea la estructura, no incluye datos históricos de clientes/pedidos

## 🐛 Solución de Problemas

### Error: "Table already exists"

```sql
-- Eliminar bases de datos existentes (¡CUIDADO! Perderás todos los datos)
DROP DATABASE IF EXISTS miki_nelosa;
DROP DATABASE IF EXISTS nelosa_nelosa;
DROP DATABASE IF EXISTS nelosa_printers;

-- Luego vuelve a ejecutar migration.sql
```

### Error: "Access denied for user"

```bash
# Verificar credenciales del contenedor MySQL
docker exec -it nelosa_mysql mysql -u root -p
# Contraseña: root
```

### Campos Faltantes o Tipos Incorrectos

Si la aplicación genera errores SQL indicando campos faltantes:

1. Busca la consulta SQL en el código fuente
2. Identifica el campo faltante
3. Agrega el campo manualmente:

```sql
ALTER TABLE nombre_tabla ADD COLUMN nuevo_campo VARCHAR(255);
```

### Tablas Dinámicas No Creadas

Algunas tablas se crean dinámicamente. Ejemplo:

```sql
USE nelosa_nelosa;
CREATE TABLE emails_campana1 (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(100) NOT NULL UNIQUE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
```

## 📞 Soporte

Si encuentras problemas:

1. Revisa los logs de Docker: `docker-compose logs -f php mysql`
2. Verifica errores PHP en la aplicación
3. Consulta el README.md principal del proyecto
4. Revisa el código fuente en busca de consultas SQL específicas

## 🔄 Actualizaciones Futuras

Para mantener el esquema actualizado:

1. Documenta cualquier cambio manual en la estructura
2. Ejecuta `mysqldump` periódicamente para backups
3. Considera migrar a un sistema de migrations más robusto

```bash
# Backup completo
docker exec nelosa_mysql mysqldump -u root -proot --all-databases > backup_$(date +%Y%m%d).sql
```

---

**Última actualización**: 3 de febrero de 2026  
**Generado a partir de**: Análisis de código fuente NelosaWeb v16.0  
**Total de tablas**: 36+ estructuras principales
