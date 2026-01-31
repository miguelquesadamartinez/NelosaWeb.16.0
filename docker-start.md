# 🐳 Guía de Inicio con Docker - NelosaWeb

## 📋 Requisitos Previos

- Docker Desktop instalado y ejecutándose
- Docker Compose (incluido en Docker Desktop)

## 🚀 Iniciar el Entorno

### 1. Construir y levantar los contenedores

```bash
docker-compose up -d --build
```

### 2. Verificar que los contenedores están corriendo

```bash
docker-compose ps
```

## 🌐 Acceso a los Servicios

- **Aplicación Web**: http://localhost:8080
- **phpMyAdmin**: http://localhost:8081
- **MySQL**: `localhost:3306`

## 🔐 Credenciales de la Base de Datos

### Conexión desde phpMyAdmin:

- **Servidor**: mysql
- **Usuario**: root
- **Contraseña**: root

### Base de datos de la aplicación:

- **Base de datos**: miki_nelosa
- **Usuario**: miki_nelosa
- **Contraseña**: mqm1804

## 📝 Comandos Útiles

### Detener los contenedores

```bash
docker-compose down
```

### Reiniciar los servicios

```bash
docker-compose restart
```

### Ver logs de un servicio específico

```bash
docker-compose logs php
docker-compose logs mysql
docker-compose logs phpmyadmin
```

### Ver logs en tiempo real

```bash
docker-compose logs -f
```

### Acceder al contenedor PHP (bash)

```bash
docker exec -it nelosa_php bash
```

### Acceder al contenedor MySQL

```bash
docker exec -it nelosa_mysql mysql -u root -p
# Contraseña: root
```

### Limpiar todo (contenedores, volúmenes, imágenes)

```bash
docker-compose down -v
docker system prune -a
```

## 🔧 Configuración

### Actualizar configuración de base de datos

Si necesitas cambiar las credenciales, edita el archivo `inc/config.php`:

```php
$db_hostname = "mysql"; // Usar "mysql" como hostname en Docker
$db_name = "miki_nelosa";
$db_username = "miki_nelosa";
$db_password = "mqm1804";
```

## 📦 Estructura de Servicios

- **php**: PHP 5.6 + Apache con extensiones mysql/mysqli
- **mysql**: MySQL 5.7
- **phpmyadmin**: Interfaz web para gestión de base de datos

## ⚠️ Notas Importantes

1. Esta configuración usa PHP 5.6 con la extensión `mysql` legacy (deprecated)
2. Los datos de MySQL se persisten en un volumen Docker llamado `mysql_data`
3. El código fuente está montado como volumen, los cambios se reflejan inmediatamente
4. El puerto 8080 debe estar libre en tu máquina

## 🔄 Importar Base de Datos

1. Accede a phpMyAdmin en http://localhost:8081
2. Usa usuario `root` y contraseña `root`
3. Selecciona la base de datos `miki_nelosa`
4. Ve a la pestaña "Importar"
5. Selecciona tu archivo SQL y ejecuta

O desde línea de comandos:

```bash
docker exec -i nelosa_mysql mysql -u miki_nelosa -pmqm1804 miki_nelosa < tu_archivo.sql
```

## 🐛 Solución de Problemas

### Error de puerto en uso

Si el puerto 8080 o 3306 ya está en uso, edita `docker-compose.yml` y cambia los puertos:

```yaml
ports:
  - "8090:80" # Cambiar 8080 por otro puerto
```

### Reconstruir las imágenes

```bash
docker-compose down
docker-compose build --no-cache
docker-compose up -d
```
