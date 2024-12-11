<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <title id="titulo_app"></title>
    <style>
        /* Modo Oscuro */
        body {
            background-color: #121212; /* Fondo negro oscuro */
            color: #ffffff; /* Texto blanco */
            font-family: Arial, sans-serif;
        }

        .hero-text {
            color: #e0e0e0; /* Gris claro para mejor contraste */
        }

        #content h2 {
            color: #f5f5f5; /* Color claro para los títulos */
        }

        .logo {
            filter: brightness(0.8) contrast(1.2); /* Ajusta el logo para que se vea bien en fondo oscuro */
        }

        /* Footer estilo negro */
        .footer-bar-6 {
            background-color: #000000 !important; /* Fondo completamente negro */
            border-top: 1px solid #333333;
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
        }

        .footer-bar-6 a {
            color: #ffffff !important; /* Texto blanco */
            text-decoration: none;
            font-size: 14px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer-bar-6 a i {
            color: #21ff00 !important; /* Iconos en verde brillante */
            font-size: 20px;
            margin-bottom: 5px;
        }

        .footer-bar-6 a:hover {
            color: #b3ffb3 !important; /* Texto ligeramente más claro al hacer hover */
        }

        .footer-bar-6 a:hover i {
            color: #21ff00 !important; /* Iconos permanecen verde brillante al hacer hover */
        }
    </style>
</head>

<body>
    <main id="content">
        <h2 id="mensaje_bienvenida"></h2>
        <img class="logo" src="" alt="LogoEmpresa" />
        <p class="hero-text" style="text-align: justify;">
            En un mundo globalizado, donde las transacciones internacionales y el intercambio de monedas son una constante, DiviSOS surge como una solución innovadora y confiable para facilitar la conversión de cualquier tipo de divisa.

            DiviSOS es una aplicación intuitiva y fácil de usar, diseñada para brindar a los usuarios la capacidad de transformar monedas de manera instantánea y precisa. Ya sea para viajes, negocios, comercio electrónico o inversión, la aplicación ofrece un acceso rápido a las tasas de cambio más actualizadas, garantizando que cada conversión sea transparente y eficiente.
        </p>

        
    </main>

    <!-- Footer -->
    <div id="footer-bar" class="footer-bar-6">
        <a href="index.php" data-script="js/app.js">
            <i class="fas fa-home"></i>
            <span id="home">Inicio</span>
        </a>
        <a href="TipoCambio.php" data-script="js/TipoCambio.js">
            <i class="fas fa-exchange-alt"></i>
            <span id="tpcambio">Tipo de Cambio</span>
        </a>
        <a href="Operaciones.php" data-script="js/Operaciones.js">
            <i class="fas fa-calculator"></i>
            <span id="operaciones">Operaciones</span>
        </a>
        <a href="Cuenta.php" data-script="js/Configuracion.js">
            <i class="fas fa-user-cog"></i>
            <span id="configu">Configuración</span>
        </a>
    </div>

    <script src="js/app.js"></script>
</body>

</html>
