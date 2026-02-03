<?php
/**
 * NelosaWeb v16.0 - Root Entry Point
 * Redirects to the appropriate section based on request
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NelosaWeb ERP - Sistema de Gestión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #003366;
            margin-bottom: 30px;
        }
        .links {
            margin-top: 30px;
        }
        .link-button {
            display: inline-block;
            padding: 15px 30px;
            margin: 10px;
            background-color: #003366;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .link-button:hover {
            background-color: #005599;
        }
        .description {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .info {
            background-color: #e8f4f8;
            padding: 15px;
            border-left: 4px solid #0066cc;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🖨️ NelosaWeb v16.0</h1>
        
        <p class="description">
            Sistema ERP para gestión de cartuchos de impresora y e-commerce.
            Seleccione la sección a la que desea acceder:
        </p>
        
        <div class="links">
            <a href="gueb/index.php" class="link-button">
                🌐 Tienda Online (Frontend)
            </a>
            
            <a href="BK/ControlMenu.php" class="link-button">
                🔧 BackOffice (Administración)
            </a>
        </div>
        
        <div class="info">
            <strong>Información del Sistema:</strong><br>
            - <strong>Frontend:</strong> Catálogo de productos, instrucciones de recarga, club de usuarios<br>
            - <strong>BackOffice:</strong> Gestión de clientes, distribuidores, base de datos de impresoras, email marketing
        </div>
    </div>
</body>
</html>
