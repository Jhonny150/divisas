<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <title id="titulo_app"></title>
    <style>
        /* Modo Oscuro */
        body {
            background-color: #121212; /* Fondo oscuro para la página */
            color: #ffffff; /* Texto blanco */
            font-family: Arial, sans-serif;
        }

        .card {
            background-color: #1f1f1f; /* Fondo oscuro para la tarjeta */
            color: #ffffff; /* Texto blanco */
            border: 1px solid #333333; /* Borde gris para la tarjeta */
        }

        h1 {
            color: #f5f5f5; /* Título en blanco */
        }

        .btn-primary {
            background-color: #4caf50; /* Botones en verde */
            border: none;
        }

        .btn-primary:hover {
            background-color: #00e676; /* Botón verde brillante al hacer hover */
        }

        .btn-danger {
            background-color: #d32f2f; /* Botón rojo */
            border: none;
        }

        .btn-danger:hover {
            background-color: #f44336; /* Botón rojo brillante al hacer hover */
        }

        .form-label {
            color: #000000 !important; /* Etiquetas de formulario en negro */
        }

        .form-control {
            background-color: #3a3a3a; /* Fondo gris oscuro para los campos */
            color: #ffffff; /* Texto en los campos en blanco */
            border: 1px solid #555555; /* Borde gris oscuro en los campos */
        }

        .form-control:focus {
            background-color: #4a4a4a; /* Fondo gris más oscuro cuando el campo esté en foco */
            border-color: #21ff00; /* Borde verde brillante cuando el campo esté en foco */
            color: #ffffff; /* Mantener el texto en blanco cuando el campo esté en foco */
        }

        /* Cambiar el color de las letras en el contenedor de los tipos de cambio */
        #divisas-container {
            background-color: #808080; /* Fondo gris */
            color: #ffffff; /* Texto blanco */
            padding: 15px;
            border-radius: 8px;
        }

        .footer-bar-6 {
            background-color: #000000; /* Fondo negro */
            border-top: 1px solid #333333;
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
        }

        .footer-bar-6 a {
            color: #ffffff; /* Texto blanco en los enlaces */
            text-decoration: none;
            font-size: 14px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer-bar-6 a i {
            color: #21ff00; /* Iconos en verde */
            font-size: 20px;
            margin-bottom: 5px;
        }

        .footer-bar-6 a:hover {
            color: #b3ffb3; /* Texto ligeramente más claro al hacer hover */
        }

        .footer-bar-6 a:hover i {
            color: #00e676; /* Verde brillante al pasar el mouse sobre el icono */
        }
    </style>
</head>

<body>
    <main class="d-flex justify-content-center align-items-center">
        <div class="card p-4">
            <h1>Alta Tipo de Cambio</h1>
            <br>

            <button class="btn btn-primary" id="agregarDivisaBtn" data-bs-toggle="modal" data-bs-target="#agregarDivisaModal">
                Agregar Tipo de Cambio
            </button>

            <div id="divisas-container" class="mt-3">
                <!-- Aquí deberían aparecer los tipos de cambio con fondo gris y texto blanco -->
            </div>
            
        </div>
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

    <!-- Modal -->
    <div class="modal fade" id="agregarDivisaModal" tabindex="-1" aria-labelledby="agregarDivisaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="agregarDivisaModalLabel">Agregar Tipo de Cambio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="divisaForm">
                        <div class="mb-3">
                            <label for="codigoDivisa" class="form-label">Código</label>
                            <input type="text" class="form-control" id="codigoDivisa" maxlength="5" required>
                        </div>
                        <div class="mb-3">
                            <label for="nombreDivisa" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombreDivisa" required>
                        </div>
                        <div class="mb-3">
                            <label for="valorDivisa" class="form-label">Valor (USD)</label>
                            <input type="number" class="form-control" id="valorDivisa" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="guardarDivisaBtn">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/TipoCambio.js"></script>
</body>

</html>
