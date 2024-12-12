<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros - Clínica Rayo</title>

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

    
        .detalle {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            gap: 50px; 
            width: 100%; 
        }

   /*Para invertir las imagenes y el texto */

        .detalle-invertido {
            flex-direction: row-reverse; 
        }

 /* Para Centrar imagenes*/

        .detalle img {
            width: 300px; 
            height: auto; 
            object-fit: cover; 
            margin: 0; 
            align-self: flex-start; 
            position: relative;
            left: -90px;
            top: 40px;

        }

  /*Centrar el texto*/
  
        .texto {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            position: relative;
            line-height: 1.8;
            text-align: justify;
            flex: 1; 
            top: 15px;
            left: -75px;
        }

      
        /*Para alinear los titulos, ya que al tener los de antes Dr, salian movidos*/

        .alineado {
    left: -300px; 
}

   /* Para mover y poder alinear el penultimo titulo, ya que salia un poco movido*/

.titulo-general {
    white-space: none; 
    font-size: 32px; 
    font-weight: 900;
    text-align: center;
    position: relative;
    width: 100%; 
    overflow: hidden; 
    left: -180px; 
}

/*Para alinear el texto ultimo con los demas, ya que salia un poco movido tambien*/

.contenido .tituloultimo {
    text-align: left;
    font-size: 32px;
    font-weight: 900;
    margin-bottom: 20px;
    color: #000;
    width: 100%; 
    position: relative;
    left: -90px;
}

/* Para subir un poco hacia arriba la ultima imagen de que el texto quede en la mitad de ella */

.contenido .ultimaimagen {
    width: 300px;
    height: auto;
    object-fit: cover;
    position: relative;
    top: -50px; 
}

    </style>

</head>
<body>

    <!-- Contenido del primer trabajador -->
    <div class="contenido">
        <div class="titulo">Sobre Dr. Rafael Rayo - Podólogo Colegiado N.º 0021</div>
        <div class="detalle">
            <img src="../controlador/images/DrRafaelRayo.png" alt="Dr. Rafael Rayo">
            <div class="texto">
            <p>
        El Dr. Rafael Rayo, fundador y director de nuestra clínica, cuenta con más de 30 años de experiencia en podología, 
        como un referente en el cuidado avanzado de la salud del pie. Su especialización en cirugía del pie, 
        desarrollada a lo largo de más de 20 años, se apoya en una sólida formación académica y práctica que lo distingue en el 
        ámbito nacional e internacional. 
    </p>
    <p>
        Además de su doctorado y máster en salud por la Universidad de Sevilla, el Dr. Rayo completó una estancia formativa en
         Estados Unidos, donde obtuvo el prestigioso título de American Board of Podiatric Medicine, una certificación que respalda
         sus altos conocimientos y habilidades en medicina podológica. Su formación incluye una gran cantidad de cursos en cirugía
         avanzada del pie, lo que le permite ofrecer tratamientos innovadores y altamente especializados a sus pacientes.
         </p>
         <p>
        Su experiencia y constante actualización lo han llevado a ser miembro activo de la Asociación Española de Cirugía
        Podológica. Siendo además formador de técnicas quirúrgicas y ecografía en asociaciones de prestigio, participando
        activamente en el desarrollo de la profesión.
        Su labor profesional también ha trascendido fronteras, participando en misiones
        humanitarias en África, donde ha brindado cirugías y cuidados podológicos esenciales a comunidades en necesidad.
    </p>
    <p>
        Como profesor del grado de podología en la Universidad de Sevilla y en la Universidad de Xilotxingo, y en el master de cirugía
        podológica en la Universidad Católica de Murcia. Además de ser formador en técnicas quirúrgicas y ecografía, el Dr. Rayo
        contribuye a la educación y perfeccionamiento de nuevos especialistas. Por otro lado, es autor de diversos artículos científicos
        y un ponente habitual en congresos nacionales e internacionales.
</p>
    <p>
        Con su experiencia y compromiso, el Dr. Rafael Rayo ofrece a sus pacientes una atención integral, segura y especializada,
        fundamentada en años de práctica, formación avanzada y una dedicación profunda al bienestar de quienes confían en su
         experiencia.
</p>
            </div>
        </div>
    </div>

    <!-- Contenido del segundo trabajador -->
    <div class="contenido">
        <div class="titulo">Dra. Ana María Rayo - Podóloga Colegiada N.º 1937</div>
        <div class="detalle detalle-invertido">
            <img src="../controlador/images/AnaMariaRayo.png" alt="Dra. Ana María Rayo">
            <div class="texto">
            <p>
                Es una profesional altamente cualificada, comprometida con el cuidado y la salud integral del pie. Con un máster en Cirugía
                Podológica por la Universidad Católica de Murcia y un doctorado otorgado por la Universidad de Sevilla, la Dra. Rayo se ha 
                especializado en áreas avanzadas de la podología que incluyen cirugía, podología deportiva, pediátrica y el tratamiento del 
                pie de riesgo.
                
                </p>
                <p>
                Como miembro de la Asociación Española de Cirugía Podológica, la Dra. Rayo participa activamente en la actualización y el 
                avance de las técnicas quirúrgicas en podología. Su formación se complementa con numerosos cursos especializados, lo que 
                le permite brindar un enfoque multidisciplinario y personalizado a cada uno de sus pacientes.
                </p>
                <p>
                Además de su práctica clínica, la Dra. Rayo contribuye al conocimiento científico en el campo de la podología como autora de 
                diversos artículos y como ponente en congresos nacionales e internacionales, donde comparte sus investigaciones y 
                experiencias en el tratamiento avanzado de patologías del pie.

                </p>
                <p>
                La Dra. Ana María Rayo combina una formación rigurosa con una dedicación absoluta a la salud de sus pacientes, ofreciendo 
                tratamientos especializados que se ajustan a las necesidades de cada persona y buscando siempre el máximo bienestar y 
                confianza de quienes visitan nuestra clínica.

                </p>
            </div>
        </div>
    </div>

    <!-- Contenido del tercer trabajador -->
    <div class="contenido">
        <div class="titulo alineado">Alberto Rayo - Podólogo Colegiado N.º 2279</div>
        <div class="detalle">
            <img src="../controlador/images/AlbertoRayo.png" alt="Alberto Rayo">
            <div class="texto">
            <p>
    Es un podólogo especializado en cirugía de antepié, con formación en la Universidad de Málaga, y es miembro activo tanto de la 
    Asociación Española de Cirugía Podológica como de la Asociación Española de Cirugía Mínima Incision del Pie. Su enfoque 
    abarca áreas avanzadas de la podología, incluyendo procesos quirúrgicos, ecografía intervencionista y biomecanica, lo que le 
    permite ofrecer a sus pacientes un tratamiento integral y personalizado.
    </p>

    <p>
    A lo largo de su carrera, Alberto ha complementado su especialización con una amplia formación en cirugía podológica, ecografía 
    intervencionista, podología pediátrica y deportiva. Su dedicación a la constante actualización de sus conocimientos lo convierte 
    en un profesional capacitado para abordar casos complejos y adaptar las técnicas más innovadoras en el cuidado del pie.
    Además de su práctica clínica, Alberto Rayo es autor de artículos científicos y participa como ponente en congresos nacionales e 
    internacionales, compartiendo sus investigaciones y conocimientos con otros profesionales de la salud.
    </p>

    <p>
    Alberto Rayo se distingue por su compromiso con el bienestar de sus pacientes, brindando tratamientos basados en los últimos 
    avances de la podología y adaptados a las necesidades específicas de cada persona.
    </p>
            </div>
        </div>
    </div>

    <!-- Contenido del cuarto trabajador -->
    <div class="contenido">
        <div class="titulo alineado">&nbsp;&nbsp;&nbsp;&nbsp;Rafael Rayo Jr. - Podólogo Colegiado N.º 2442</div>
        <div class="detalle detalle-invertido">
            <img src="../controlador/images/RafaelRayo.png" alt="Rafael Rayo Jr.">
            <div class="texto">
            <p>
                Es un podólogo altamente capacitado, con un máster en Nuevas Tendencias Asistenciales y de Investigación en Ciencias 
                de la Salud por la Universidad de Sevilla, lo que le ha proporcionado una sólida base académica en el cuidado integral 
                del pie. Especializado en cirugía podológica y ecografía, Rafael utiliza un enfoque preciso y avanzado para tratar 
                diversas patologías del pie, ofreciendo a sus pacientes soluciones efectivas y personalizadas.
            </p>
            <p>
                A lo largo de su carrera, ha realizado importantes contribuciones al conocimiento científico en podología, siendo autor 
                de varios artículos especializados y ponente en congresos nacionales e internacionales. Estos espacios le han permitido 
                compartir su experiencia con otros profesionales del sector y mantenerse siempre a la vanguardia de los avances en cirugía 
                podológica y diagnóstico por ecografía.
            </p>
            <p>
                Rafael Rayo Jr. se dedica a ofrecer un tratamiento seguro y especializado, con un enfoque integral en la salud podológica, 
                buscando siempre el máximo bienestar y recuperación de sus pacientes.
            </p>
            </div>
        </div>
    </div>
   
     <!-- Contenido del quinto trabajador -->
     <div class="contenido">
        <div class="titulo-general">Rocío Benjumea Rayo – Coordinadora Administrativa y de 
            Esterilización</div>
        <br>
        <div class="detalle">
            <img src="../controlador/images/RocioRayo.png" alt="Rocio Rayo.">
            <div class="texto">
            <p>
            Es una pieza fundamental de nuestro equipo, encargándose de coordinar la agenda de citas con los profesionales y de 
            organizar eficientemente el trabajo diario en la clínica. Su formación como celadora le ha brindado los conocimientos 
            necesarios para gestionar la esterilización de material médico, garantizando los más altos estándares de higiene y 
            seguridad.  
            </p>

            <p>
              Además de su rol en la esterilización, Rocío con su trato cercano, profesional y amable crea un ambiente acogedor 
              para los pacientes desde el primer contacto, facilitando su experiencia en la clínica.
            </p>

            <p>
            Rocío es esencial en la organización de nuestro centro, ofreciendo un servicio bien estructurado, seguro y de alta 
            calidad, siempre con el objetivo de que cada visita sea lo más cómoda y eficiente posible para nuestros pacientes.  
            </p>

            </div>
        </div>
    </div>
<br>
         <!-- Sobre nuestra clinica -->
         <div class="contenido">
        <div class="tituloultimo">Sobre nuestra clínica:</div>
        <div class="detalle detalle-invertido">
            <img src="../controlador/images/Rayo.png" alt="Rayo" class="ultimaimagen">
            <div class="texto">
            <p>
            Clínica rayo es un centro integral especializado exclusivamente en la Prevención, Diagnóstico y 
            Tratamiento de las afecciones y deformidades de los pies. Con más de 26 años de experiencia, gracias a 
            la constante formación de sus profesionales y la incorporación de las técnicas más vanguardistas 
            ofrecemos siempre la máxima calidad a nuestros pacientes. Nos caractarizamos por la personalización 
            de los tratamientos, así como por una atención cercana a nuestros pacientes. 
            </p>

            </div>
        </div>
    </div>
</body>
</html>
<?php
require_once 'piePagina.php';
