<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>

    <link href="https://fonts.googleapis.com/css2?family=Alverta:wght@700&display=swap" rel="stylesheet">

    <style>
        /* Estilo para el cuadro central */
        .contenidoCuadro {
            width: 492px;
            height: auto;
            background-color: #1A428A;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 100px auto;
        }

        /* Estilo para el formulario */
        .formulario {
            width: 100%;
            text-align: center;
            color: #ffffff;
            font-family: 'Alverta', sans-serif;
        }

        .formulario label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            font-weight: bold;
            text-align: left;
            width: 90%;
            margin: 0 auto;
        }

        .formulario input[type="email"],
        .formulario input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            font-family: 'Alverta', sans-serif;
        }

        .formulario a {
            color: #ffffff;
            text-decoration: none;
            font-size: 13px;
            font-family: 'Alverta', sans-serif;
            font-weight: bold;
        }

        .formulario a:hover {
            text-decoration: underline;
        }

        /* Botones */
        .botom {
            display: flex;
            justify-content: space-around;
            width: 100%;
            margin-top: 20px;
        }

        .botom button {
            background-color: #0F1D40;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 13px 23px;
            cursor: pointer;
            font-size: 16px;
            font-family: 'Alverta', sans-serif;
            font-weight: bold;
        }

        .botom button:hover {
            background-color: #0D1734;
        }

        /* Media Queries para pantallas pequeñas */
        @media screen and (max-width: 768px) {
            .contenidoCuadro {
                width: 90%;
                padding: 15px;
                margin: 50px auto;
            }

            .formulario label {
                font-size: 14px;
            }

            .formulario input[type="email"],
            .formulario input[type="password"] {
                font-size: 14px;
                padding: 8px;
            }

            .botom button {
                font-size: 14px;
                padding: 10px 15px;
            }
        }

        @media screen and (max-width: 480px) {
            .botom {
                flex-direction: column;
                gap: 10px;
            }

            .botom button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- CuadroCentral -->
    <div class="cuadroCentral">
        <div class="contenidoCuadro">
            <form class="formulario" method="POST" action="validarInicioSesion.php">
                <label for="correo">&nbsp;&nbsp;&nbsp;Correo electrónico:</label>
                <input type="email" id="correo" name="correo" placeholder="ejemplo@ejemplo.es" required>

                <label for="contrasena">&nbsp;&nbsp;&nbsp;Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" placeholder="********" required>

                <a href="#">¿No tienes cuenta? Regístrate aquí.</a>

                <div class="botom">
                    <button type="button">Cancelar</button>
                    <button type="submit">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
