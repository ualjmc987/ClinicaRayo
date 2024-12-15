<?php
// Este archivo no requiere una base de datos para su funcionamiento básico, pero puedes incluir encabezados, validaciones o más lógica PHP si es necesario
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Usuario</title>

    <link href="https://fonts.googleapis.com/css2?family=Alverta:wght@700&display=swap" rel="stylesheet">

    <style>
        /* Evitar que el desplazamiento horizontal ocurra */
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden; 
            background-color: #f4f4f4;
            font-family: 'Alverta', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Cambiar el centrado vertical a alineado al inicio */
            align-items: center; /* Centrado horizontal */
            min-height: 100vh; /* Asegura que la altura mínima es 100% de la ventana */
            padding-top: 30px; /* Espacio arriba */
            padding-bottom: 30px; /* Espacio abajo */
        }

        /* Estilo del contenedor del video */
        .contenedor-video {
            position: relative;
            width: 100%; /* El video ocupa el 100% del ancho disponible */
            height: 60vh; /* Aumenta el alto al 90% de la altura de la ventana */
            max-width: 1800px; /* Limita el tamaño máximo del video */
            border: 2px solid #111C4E; /* Recuadro fino */
            border-radius: 8px; /* Esquinas redondeadas */
            overflow: hidden; /* Para que no sobresalga contenido */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra suave */
        }

        /* Estilo del video */
        .contenedor-video video {
            width: 100%;
            height: 100%; /* El alto también se ajusta */
            object-fit: cover; /* Asegura que el video cubra el contenedor sin deformarse */
            display: block;
        }

        /* Estilo para el texto "Lista de Servicios" fuera del video */
        .titulo-servicios {
            font-size: 24px;
            font-weight: bold;
            color: #111C4E;
            margin-bottom: 10px;
            margin-top: 20px;
            text-align: left; /* Alineación a la izquierda */
            width: 100%; /* Para asegurarnos que ocupe todo el ancho */
            padding-left: 5%; /* Espacio a la izquierda */
        }

        /* Estilo del recuadro debajo del video */
        .contenedor-servicios {
            width: 100%; /* El recuadro ocupa el 100% del ancho disponible */
            max-width: 1800px; /* Limita el tamaño máximo al del video */
            height: 300px; /* Altura del recuadro */
            border: 2px solid #111C4E; /* Recuadro fino */
            border-radius: 8px; /* Esquinas redondeadas */
            margin-top: 20px; /* Espacio entre el video y el recuadro */
            background-color: #f0f0f0; /* Fondo del recuadro */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* Estilo para el texto encima del recuadro de servicios */
        .titulo-servicios-rec {
            font-size: 24px;
            font-weight: bold;
            color: #111C4E;
            margin-bottom: 10px;
            text-align: left; /* Alineación a la izquierda */
            width: 100%; /* Para que ocupe todo el ancho */
            padding-left: 85%; /* Espacio a la izquierda */
        }

        /* Estilo para las reseñas */
        .contenedor-reseñas {
            width: 100%;
            max-width: 1800px;
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        /* Estilo de cada recuadro de reseñas */
        .recuadro-reseña {
            width: 48%; /* Cada recuadro ocupa el 48% del ancho disponible */
            height: 250px; /* Altura del recuadro */
            border: 2px solid #111C4E; /* Recuadro fino */
            border-radius: 8px; /* Esquinas redondeadas */
            background-color: #f0f0f0; /* Fondo del recuadro */
            margin-top: 10px;
        }

        /* Estilo para los textos encima de los recuadros de reseñas */
        .titulo-reseña {
            font-size: 20px;
            font-weight: bold;
            color: #111C4E;
            margin-left: 5%; /* Alineado a la izquierda */
            margin-bottom: 10px; /* Espacio debajo del título */
        }

    </style>
</head>
<body>

    <!-- Contenedor para el video -->
    <div class="contenedor-video">
        <video autoplay loop muted>
            <source src="../controlador/images/ClinicaRayo.mp4" type="video/mp4">
            Tu navegador no soporta el formato de video.
        </video>
    </div>
    
    <!-- Texto "Lista de Servicios" fuera del recuadro del video -->
    <div class="titulo-servicios">Lista de Servicios</div>
    <!-- Contenedor para el recuadro de servicios -->
    <div class="contenedor-servicios">
        <div class="titulo-servicios-rec">Servicios Disponibles</div>
        <!-- Aquí se mostrará la imagen o los servicios en el futuro -->
    </div>

    <!-- Contenedor para las reseñas -->
    <div class="contenedor-reseñas">
        <!-- Título "Reseñas de Servicios" alineado a la izquierda encima del recuadro -->
        <div class="titulo-reseña">Reseñas de Servicios</div>
        <!-- Recuadro para las reseñas de servicios -->
        <div class="recuadro-reseña">
            <!-- Aquí se mostrarán las reseñas de servicios en el futuro -->
        </div>

        <!-- Título "Reseñas de Productos" alineado a la izquierda encima del recuadro -->
        <div class="titulo-reseña">Reseñas de Productos</div>
        <!-- Recuadro para las reseñas de productos -->
        <div class="recuadro-reseña">
            <!-- Aquí se mostrarán las reseñas de productos en el futuro -->
        </div>
    </div>

</body>
</html>
