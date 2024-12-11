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
        /* Tema Oscuro */
        body {
            background-color: #121212; /* Fondo oscuro para toda la página */
            color: #ffffff; /* Texto blanco */
            font-family: Arial, sans-serif;
        }

        .card {
            background-color: #1f1f1f; /* Fondo oscuro para la tarjeta */
            color: #ffffff; /* Texto blanco */
            border: 1px solid #333333; /* Borde gris oscuro */
            padding: 20px;
            border-radius: 10px;
        }

        h1 {
            color: #f5f5f5; /* Título en blanco */
        }

        .input-container label,
        .select-container label,
        .result-container label {
            color: #ffffff; /* Etiquetas en blanco */
        }

        .input-container input,
        .select-container select {
            background-color: #3a3a3a; /* Fondo gris oscuro para campos de entrada */
            color: #ffffff; /* Texto en blanco */
            border: 1px solid #555555; /* Borde gris oscuro */
            padding: 8px;
            border-radius: 5px;
            width: 100%;
        }

        .input-container input:focus,
        .select-container select:focus {
            background-color: #4a4a4a; /* Fondo más oscuro al hacer foco */
            border-color: #21ff00; /* Borde verde brillante al hacer foco */
            color: #ffffff; /* Mantener el texto blanco cuando está en foco */
        }

        .result-container div {
            margin: 10px 0;
        }

        .button-container {
            margin-top: 20px;
            text-align: center;
        }

        .btn {
            background-color: #4caf50; /* Botones en verde */
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #00e676; /* Botones verdes brillantes al hacer hover */
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 100;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: #1f1f1f; /* Fondo oscuro para el modal */
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            color: #ffffff; /* Texto blanco dentro del modal */
        }

        .modal-buttons {
            margin-top: 15px;
            display: flex;
            justify-content: space-around;
        }

        .modal-buttons button {
            background-color: #d32f2f; /* Botón rojo para confirmar y cancelar */
            border: none;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .modal-buttons button:hover {
            background-color: #f44336; /* Rojo brillante al hacer hover */
        }

        /* Footer */
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
    <main>
        <div class="card">
            <h1>Operación Compra - Venta</h1>
            <br>
            <div class="input-container">
                <label for="amount">Cantidad:</label>
                <input type="number" id="amount" placeholder="Ingresa la cantidad" />
            </div>
            <br>
            <div class="select-container">
                <label for="currency-from">De:</label>
                <select id="currency-from"></select>
                <br><br>
                <label for="currency-to">A:</label>
                <select id="currency-to"></select>
            </div>
            <br>
            <div class="result-container">
                <div>
                    <label for="result-compra">Resultado de Compra:</label>
                    <span id="result-compra"></span> 
                </div>
                <div>
                    <label for="result-venta">Resultado de Venta:</label>
                    <span id="result-venta"></span> 
                </div>
            </div>

            <div class="button-container">
                <button class="btn" id="buy-btn">Compra</button>
                <button class="btn" id="sell-btn">Venta</button>
            </div>
        </div>
    </main>

    <!-- Modal para Confirmación de Compra -->
    <div class="modal" id="confirm-modal">
        <div class="modal-content">
            <p>¿Deseas confirmar la compra?</p>
            <div class="modal-buttons">
                <button id="confirm-btn">Confirmar</button>
                <button id="cancel-btn">Cancelar</button>
            </div>
        </div>
    </div>

    <!-- Modal para Confirmación de Venta -->
    <div class="modal" id="confirm-modal1">
        <div class="modal-content">
            <p>¿Deseas confirmar la Venta?</p>
            <div class="modal-buttons">
                <button id="confirm-btn1">Confirmar</button>
                <button id="cancel-btn1">Cancelar</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div id="footer-bar" class="footer-bar-6">
        <a href="index.php"><i id="homeIcon"></i><span id="home">Inicio</span></a>
        <a href="TipoCambio.php"><i id="tpcambioIcon"></i><span id="tpcambio">Tipo de Cambio</span></a>
        <a href="Operaciones.php"><i id="operacionesIcon"></i><span id="operaciones">Operaciones</span></a>
        <a href="Cuenta.php"><i id="configuIcon"></i><span id="configu">Configuración</span></a>
    </div>

    <script src="js/Operaciones.js"></script>

</body>

</html>
