<?php
require_once 'menuUsuarioNoRegistrado.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>

    <link href="https://fonts.googleapis.com/css2?family=Alverta:wght@600;700;900&display=swap" rel="stylesheet">

    <style>
   
   .columnac {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-left: 50px;
            margin-bottom: 150px;
            margin-top: 20px
        }

        /* Títulos principales */
        .columnac h3 {
            margin: 2;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 10px;

        }

        /* Texto secundario  */
        .columnac p,
        .columnac a {
            margin: 0.5px 0;
            color: black;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            line-height: 24px;
        }

        .columnac a:hover {
            text-decoration: underline;
        }




</style>
</head>
<body>

<div class="columnac">
                <br>
                <h3>Direcciones</h3>
                <p>Calle Pozodulce 43, Arahal, Sevilla</p>
                <p>Calle San Juan Bosco, 23 Local 3, Utrera, Sevilla</p>
                <br>
                <h3>Email</h3>
                <p>cliclicarayo@gmail.com</p>
                <h3>Horario</h3>
                <p>
                Depende de intervenciones, <br>
                contactar por teléfono para<br>
                más información de horarios.
               </p>          
                <br>
                <h3>Teléfono</h3>  
                <p>Tel: 954841159 (llamadas)</p>
                <p>Tel: 644248375 (whatsapp)</p>
                <br>
                <h3>Redes Sociales</h3> 
                <p>Instagram: clinicarayo</p>
                <br>

            </div>
</div>
</body>
</html>

<?php
require_once 'piePagina.php';