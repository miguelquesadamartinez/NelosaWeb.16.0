@echo off
REM ============================================================================
REM NelosaWeb ERP - Quick Database Migration Script
REM ============================================================================
REM Este script ejecuta la migración de base de datos automáticamente
REM ============================================================================

echo.
echo ========================================
echo  NelosaWeb ERP - Database Migration
echo ========================================
echo.

REM Verificar que Docker está corriendo
docker ps >nul 2>&1
if %ERRORLEVEL% NEQ 0 (
    echo [ERROR] Docker no está en ejecución
    echo Por favor inicia Docker Desktop primero
    pause
    exit /b 1
)

REM Verificar que el contenedor MySQL existe
docker ps -a | findstr "nelosa_mysql" >nul
if %ERRORLEVEL% NEQ 0 (
    echo [ERROR] Contenedor nelosa_mysql no encontrado
    echo Ejecuta: docker-compose up -d
    pause
    exit /b 1
)

REM Verificar que el contenedor está corriendo
docker ps | findstr "nelosa_mysql" >nul
if %ERRORLEVEL% NEQ 0 (
    echo [INFO] Iniciando contenedor MySQL...
    docker start nelosa_mysql
    timeout /t 5 >nul
)

echo [INFO] Ejecutando migración de base de datos...
echo.

REM Ejecutar migración
type migration.sql | docker exec -i nelosa_mysql mysql -u root

if %ERRORLEVEL% EQU 0 (
    echo.
    echo [SUCCESS] Migración completada exitosamente!
    echo.
    
    REM Configurar permisos MySQL para acceso remoto
    echo [INFO] Configurando permisos de MySQL...
    docker exec nelosa_mysql mysql -u root -e "CREATE USER IF NOT EXISTS 'root'@'%%' IDENTIFIED BY 'root'; GRANT ALL PRIVILEGES ON *.* TO 'root'@'%%' WITH GRANT OPTION; FLUSH PRIVILEGES;" >nul 2>&1
    docker exec nelosa_mysql mysql -u root -e "CREATE USER IF NOT EXISTS 'miki_nelosa'@'%%' IDENTIFIED BY 'mqm1804'; GRANT ALL PRIVILEGES ON *.* TO 'miki_nelosa'@'%%' WITH GRANT OPTION; FLUSH PRIVILEGES;" >nul 2>&1
    echo [SUCCESS] Permisos configurados
    echo.
    
    REM Reiniciar phpMyAdmin
    echo [INFO] Reiniciando phpMyAdmin...
    docker restart nelosa_phpmyadmin >nul
    timeout /t 3 >nul
    
    echo.
    echo Bases de datos creadas:
    echo   - miki_nelosa      (Sistema principal^)
    echo   - nelosa_nelosa    (Clientes, productos, pedidos^)
    echo   - nelosa_printers  (Base de datos de impresoras^)
    echo.
    echo Usuarios administrativos creados:
    echo   - emiki@nelosa.net  /  Password: admin123
    echo   - miki@nelosa.net   /  Password: admin123
    echo   - info@nelosa.net   /  Password: admin123
    echo.
    echo Accede a la aplicación en: http://localhost:8086
    echo Accede a phpMyAdmin en:    http://localhost:8087
    echo   Usuario phpMyAdmin:      root / root
    echo.
) else (
    echo.
    echo [ERROR] La migración falló
    echo Revisa los mensajes de error anteriores
    echo.
)

pause
