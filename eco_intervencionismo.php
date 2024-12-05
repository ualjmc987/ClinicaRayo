<?php
require_once 'menuUsuarioNoRegistrado.php'
?>
<?php
// Incluimos el archivo de conexión a la base de datos
include('conexion.php');

// Consulta para obtener los datos del servicio "Eco-Intervencionismo"
$query = $pdo->prepare("SELECT nombre, descripcion, imagen_url FROM servicio WHERE nombre = 'Eco-Intervencionismo'");
$query->execute();
$contenido = $query->fetch(PDO::FETCH_ASSOC);

if (!$contenido) {
    echo "Servicio no encontrado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Rayo - Eco-Intervencionismo</title>

        <!-- Importar Alverta -->
        <link href="https://fonts.googleapis.com/css2?family=Alverta:wght@600;700;900&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Alverta', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }
            /*contenido principal*/

                .contenido {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    margin: 40px auto;
                    max-width: 1200px;
                }


                /* Titulo, su tamaño, su fondo... (900 es el estilo (alverta black))*/
                .titulo {
                    font-size: 32px;
                    font-weight: 900;
                    color: #000;
                    position: relative;
                    text-align: center;
                    margin: 20px 0;
                    left: -230px;


                }
            </style>

</head>
<body>
    <main>
        <section class="eco-intervencionismo">
          <div class="titulo"><?php echo htmlspecialchars($contenido['nombre']); ?></div>
              <div class="titulo">Sobre Dr. Rafael Rayo - Podólogo Colegiado N.º 0021</div>
            <h2><?php echo htmlspecialchars($contenido['nombre']); ?></h2>
            <p class="descripcion"><?php echo nl2br(htmlspecialchars($contenido['descripcion'])); ?></p>
            <img class="imagen-servicio" src="<?php echo htmlspecialchars($contenido['imagen_url']); ?>" alt="Eco-Intervencionismo">

            <div class="info-adicional">
                <h3>Más Información sobre el Eco-Intervencionismo</h3>
                <div class="pregunta">
                    <h4>¿Cuáles son los beneficios del eco-intervencionismo?</h4>
                    <p>Esta técnica proporciona imágenes en tiempo real, lo que permite tomar decisiones precisas durante el tratamiento y reduce la necesidad de intervenciones más invasivas.</p>
                </div>
                <div class="pregunta">
                    <h4>¿Qué patologías se pueden tratar con eco-intervencionismo?</h4>
                    <p>Se pueden tratar diversas lesiones y enfermedades del pie.</p>
                </div>
                <div class="pregunta">
                    <h4>¿Cómo se realiza el procedimiento?</h4>
                    <p>El procedimiento se realiza bajo una guía precisa proporcionada por imágenes en tiempo real.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Clínica Rayo. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
