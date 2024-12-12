<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>

    <link href="https://fonts.googleapis.com/css2?family=Alverta:wght@700&display=swap" rel="stylesheet">

    <style>
        /* Evitar desplazamiento horizontal y aplicar fuente */
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden; 
            overflow-y: auto;
            background-color: #f4f4f4;
            font-family: 'Alverta', sans-serif; 
        }

        /* Cabecera */
        .cabecera {
            display: flex;
            flex-wrap: wrap; /* Permite que los elementos se ajusten en pantallas pequeñas */
            align-items: center;
            justify-content: space-between;
            width: 100%;
            background-color: #1A428A; 
            color: white; 
            padding: 10px 20px;
        }

        /* Logo */
        .logo {
            height: 60px;
        }

        /* Botones de inicio de sesión y registro */
        .botones {
            display: flex;
            gap: 10px;
        }

        .boton {
            width: 119px;  
            height: 40px;  
            border: none;  
            font-size: 16px;  
            font-weight: bold;
            cursor: pointer;
            text-transform: none; 
            color: white; 
            background-color: #111C4E; 
            border-radius: 10px; 
            transition: background-color 0.3s, transform 0.2s;
        }

        .boton:hover {
            background-color: #0D1637; 
            transform: translateY(-3px); 
        }

        /* Menú principal */
        .menu-principal {
            display: flex;
            gap: 20px;
            flex-wrap: wrap; /* Permite que el menú se ajuste en pantallas pequeñas */
        }

        .menu-principal ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 15px;
        }

        .menu-principal li {
            position: relative; 
        }

        .menu-principal a {
            color: white; 
            text-decoration: none; 
            font-size: 16px; 
            font-weight: bold; 
            padding: 8px 15px; 
            display: block; 
        }

        .menu-principal a:hover {
            color: #ddd; 
        }

        /* Menú desplegable */
        .menu-desplegable {
            list-style: none; 
            margin: 0;
            padding: 0;
            display: none; /* Oculto inicialmente */
            position: absolute; 
            background-color: #1A428A; 
            border: 1px solid #fff; 
            top: 100%; 
            left: 0;
            min-width: 200px; 
            z-index: 1000; 
        }

        .menu-desplegable li {
            padding: 10px; 
            border-bottom: 1px solid white; 
        }

        .menu-desplegable li:last-child {
            border-bottom: none;
        }

        .menu-desplegable a {
            display: block; 
        }

        .menu-desplegable a:hover {
            background-color: #133b7f; 
        }

        /* Mostrar menú al pasar el ratón */
        .menu-principal li:hover .menu-desplegable {
            display: block; 
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 768px) {
            .cabecera {
                flex-direction: column;
                align-items: flex-start;
            }

            .menu-principal {
                flex-direction: column;
                gap: 10px;
                width: 100%;
            }

            .menu-principal ul {
                flex-direction: column;
                width: 100%;
            }

            .menu-desplegable {
                position: static;
                border: none;
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .boton {
                font-size: 14px;
                width: 100px;
                height: 35px;
            }

            .menu-principal a {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <!-- Cabecera -->
    <div class="cabecera">
        <!-- Logo -->
        <a href="inicioUsuarioNoRegistrado.php">
            <img src="../controlador/images/LogoBlanco.png" alt="Logo de la Clínica" class="logo">
        </a>

        <!-- Botones -->
        <div class="botones">
            <a href="iniciarSesion.php">
                <button class="boton">Inicio Sesión</button>
            </a>
            <a href="registrarse.php">
                <button class="boton">Registrarse</button>
            </a>
        </div>

        <!-- Menú principal -->
        <nav class="menu-principal">
            <ul>
                <li><a href="sobreNosotros.php">Sobre nosotros</a></li>
                <li>
                    <a href="#">Servicios <span class="flecha">&#9662;</span></a>
                    <ul class="menu-desplegable">
                        <li><a href="podologiaGeneral.php">Podología General</a></li>
                        <li><a href="podologiaAvanzada.php">Podología Avanzada</a></li>
                        <li><a href="podologiaInfantil.php">Podología Infantil</a></li>
                        <li><a href="eco-intervencionismo.php">Eco-intervencionismo</a></li>
                        <li><a href="tratamientosFisicos.php">Tratamientos Físicos</a></li>
                        <li><a href="cirugiaAbierta.php">Cirugía Abierta</a></li>
                        <li><a href="cirugiaCerrada.php">Cirugía Cerrada</a></li>
                    </ul>
                </li>
                <li><a href="tienda.php">Tienda</a></li>
                <li><a href="reservarCita.php">Reservar cita</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contactanos.php">Contáctanos</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>
