@echo off
REM ============================================================================
REM NelosaWeb ERP - MySQL Permissions Fix
REM ============================================================================
REM Configura los permisos de MySQL para permitir conexiones remotas
REM (necesario para phpMyAdmin y conexiones desde otros contenedores)
REM ============================================================================

echo.
echo ========================================
echo  NelosaWeb ERP - MySQL Permissions
echo ========================================
echo.

REM Verificar que MySQL está corriendo
docker ps | findstr "nelosa_mysql" >nul
if %ERRORLEVEL% NEQ 0 (
    echo [ERROR] Contenedor nelosa_mysql no está corriendo
    echo Ejecuta: docker-compose up -d
    pause
    exit /b 1
)

echo [INFO] Configurando permisos de MySQL...
echo.

REM Crear usuario root con acceso remoto
echo [1/4] Creando usuario root con acceso remoto...
docker exec nelosa_mysql mysql -u root -e "CREATE USER IF NOT EXISTS 'root'@'%%' IDENTIFIED BY 'root';"

REM Otorgar privilegios a root
echo [2/4] Otorgando privilegios a root...
docker exec nelosa_mysql mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'root'@'%%' WITH GRANT OPTION;"

REM Crear usuario miki_nelosa con acceso remoto
echo [3/4] Configurando usuario miki_nelosa...
docker exec nelosa_mysql mysql -u root -e "CREATE USER IF NOT EXISTS 'miki_nelosa'@'%%' IDENTIFIED BY 'mqm1804';"
docker exec nelosa_mysql mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'miki_nelosa'@'%%' WITH GRANT OPTION;"

REM Aplicar cambios
echo [4/4] Aplicando cambios...
docker exec nelosa_mysql mysql -u root -e "FLUSH PRIVILEGES;"

echo.
echo [SUCCESS] Permisos configurados correctamente
echo.

REM Mostrar usuarios configurados
echo ========================================
echo  USUARIOS CONFIGURADOS
echo ========================================
docker exec nelosa_mysql mysql -u root -e "SELECT User, Host FROM mysql.user WHERE User IN ('root', 'miki_nelosa') ORDER BY User, Host;"
echo.

REM Reiniciar phpMyAdmin
echo [INFO] Reiniciando phpMyAdmin...
docker restart nelosa_phpmyadmin >nul
timeout /t 3 >nul
echo [SUCCESS] phpMyAdmin reiniciado
echo.

echo ========================================
echo  CREDENCIALES DE ACCESO
echo ========================================
echo.
echo phpMyAdmin: http://localhost:8087
echo   Usuario:  root
echo   Password: root
echo.
echo   O bien:
echo   Usuario:  miki_nelosa
echo   Password: mqm1804
echo.
echo Aplicación Web: http://localhost:8086
echo   Admin:    emiki@nelosa.net
echo   Password: admin123
echo.

pause
