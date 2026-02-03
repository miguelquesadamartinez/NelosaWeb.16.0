@echo off
REM ============================================================================
REM NelosaWeb ERP - Database Verification Script
REM ============================================================================
REM Verifica el estado de las bases de datos y muestra información útil
REM ============================================================================

echo.
echo ========================================
echo  NelosaWeb ERP - Database Check
echo ========================================
echo.

REM Verificar conexión
docker exec nelosa_mysql mysql -u root -e "SELECT 1;" >nul 2>&1
if %ERRORLEVEL% NEQ 0 (
    echo [ERROR] No se puede conectar a MySQL
    echo Verifica que el contenedor nelosa_mysql está corriendo
    pause
    exit /b 1
)

echo [INFO] Conexión a MySQL: OK
echo.

echo ========================================
echo  BASES DE DATOS DISPONIBLES
echo ========================================
docker exec nelosa_mysql mysql -u root -e "SHOW DATABASES;"
echo.

echo ========================================
echo  TABLAS EN: nelosa_nelosa
echo ========================================
docker exec nelosa_mysql mysql -u root -e "USE nelosa_nelosa; SHOW TABLES;"
echo.

echo ========================================
echo  TABLAS EN: nelosa_printers
echo ========================================
docker exec nelosa_mysql mysql -u root -e "USE nelosa_printers; SHOW TABLES;"
echo.

echo ========================================
echo  ESTADÍSTICAS
echo ========================================
echo.

echo [Clientes]
docker exec nelosa_mysql mysql -u root -e "USE nelosa_nelosa; SELECT COUNT(*) as Total FROM Clientes;"
echo.

echo [Distribuidores]
docker exec nelosa_mysql mysql -u root -e "USE nelosa_nelosa; SELECT COUNT(*) as Total FROM Clientes_Tiendas;"
echo.

echo [Productos]
docker exec nelosa_mysql mysql -u root -e "USE nelosa_nelosa; SELECT COUNT(*) as Total FROM prods;"
echo.

echo [Pedidos]
docker exec nelosa_mysql mysql -u root -e "USE nelosa_nelosa; SELECT COUNT(*) as Total FROM Cart_DB_Pedidos;"
echo.

echo ========================================
echo  USUARIOS ADMINISTRATIVOS
echo ========================================
docker exec nelosa_mysql mysql -u root -e "USE nelosa_nelosa; SELECT email, Nombre, Apellido1, Empresa FROM Clientes WHERE email LIKE '%%nelosa.net';"
echo.

echo ========================================
echo  IMPRESORAS (Muestra por marca)
echo ========================================
FOR %%B IN (HP Canon Epson Brother Lexmark) DO (
    echo.
    echo [%%B Inkjet]
    docker exec nelosa_mysql mysql -u root -e "USE nelosa_printers; SELECT COUNT(*) as Total FROM %%B;" 2>nul
    echo [%%B Laser]
    docker exec nelosa_mysql mysql -u root -e "USE nelosa_printers; SELECT COUNT(*) as Total FROM %%B_laser;" 2>nul
)
echo.

echo ========================================
echo  INFORMACIÓN DE ACCESO
echo ========================================
echo.
echo Aplicación Web:  http://localhost:8086
echo phpMyAdmin:      http://localhost:8087
echo.
echo MySQL Container: nelosa_mysql
echo   Usuario Root:  root / root
echo   Usuario App:   miki_nelosa / mqm1804
echo.
echo phpMyAdmin Login:
echo   Usuario:       root
echo   Password:      root
echo.
echo Admin Access (Aplicación):
echo   Email:         emiki@nelosa.net
echo   Password:      admin123
echo.

pause
