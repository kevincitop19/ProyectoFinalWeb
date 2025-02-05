<!DOCTYPE html>
<html lang="es">

<?php
    if(!isset($_SESSION)){
        session_start();
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Veterinaria</title>
</head>

<body>
    <header>
        <div class="header-logo">
            <img src="/assets/img/Logo.png" alt="Logo">
        </div>
        
        <nav class="header-navbar">
            <ul>
                <li><a href="index.php?c=navegacion&f=RedireccionarInicio">Inicio</a></li>
                <li><a href="index.php?c=navegacion&f=RedireccionarPaginaNosotros">Nosotros</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Galeria</a></li>
                <li><a href="#">Contactenos</a></li>
                <div class="perfil_usuario">
                    <li><a href="#"><a href="#"><?php echo $_SESSION['user']?></a></li>
                    <li><a href="index.php?c=navegacion&f=salir">Cerrar sesión</a></li>
                </div>
                
            </ul>
        </nav>
    </header>

    <main>
        <div class="portada">
            <figure class="portada-image">
                <img src="/assets/img/portada.jpeg" alt="portada">
            </figure>
            <p class="welcome">Bienvenidos a centro veterinario 24h</p>
        </div>
        
        <div class="info-service">
            <div class="info-service__text">
                <h1 style="padding-left:50px ; padding-right:50px ; padding-top:10px;">Ofrecemos Servicios de alta calidad</h1>
                <h3 style="padding-left:50px ; padding-right:50px ; padding-top:10px;">Conozca todos los servicios que ofrecemos</h3>
                <p style="padding-left:50px ; padding-right:50px ; padding-top:10px;"> Somos un equipo de Médicos Veterinarios 
                    y personal capacitado para la atención integral de las mascotas, con el fin de restablecer, 
                    mejorar y resguardar la salud, así como prevenir y evitar las enfermedades que puedan adquirir.
                </p>

                <div class="registro">
                    <p><a href="#"> Registrese</a></p>
                </div>


            </div>
            <img class="image-info" src="/assets/img/perro.jpg" alt="perro">
        </div>

        <div class="all_services">
            <div class="all_services__services">

                <div class="servicebox" id="service1">
                    <img src="/assets/img/consulta.jpg" alt="Consultas">
                    <h3>Consultas</h3>
                    <div class="parrafo">
                        <p>Es una de las principales herramientas terapéuticas dentro de la sanidad veterinaria. 
                            Nuestro equipo de especialistas destaca por su capacidad profesional así también como 
                            de su formación continua los que nos permite situarnos en la vanguardia de la cirugía veterinaria </p>
                    </div>
                </div>

                <div class="servicebox" id="service2">
                    <img src="/assets/img/cirugia.jpg" alt="Cirugias">
                    <h3>Cirugias</h3>
                    <div class="parrafo">
                        <p>Es una de las principales herramientas terapéuticas dentro de la sanidad veterinaria. 
                            Nuestro equipo de especialistas destaca por su capacidad profesional así también como de su formación 
                            continua los que nos permite situarnos en la vanguardia de la cirugía veterinaria	
                        </p>
                    </div>
                </div>

                <div class="servicebox" id="service3">
                    <img src="/assets/img/vacuna.jpg" alt="Vacunación"/>
                    <h3>Vacunación</h3>
                    <div class="parrafo">
                        <p>Para consultar nuestros servicios, puede hacerlo solicitándolos vía email: 
                            info@veterinariaguayaquil.com Rabia: Se aplica a partir de las 12 semanas de edad. 
                            Revacunación Anual de Séxtuple y Rabia. </p>
                    </div>
                </div>
            </div>
        </div>

       <div class="info-nosotros">
        <img src="/assets/img/image-nosotros.jpg" alt="info-nosotros">
        
        <div class="info-nosotros__text">
            <h1 style="padding-left:50px ; padding-right:50px ; padding-top:10px;"> Sus mascotas merecen los mejor</h1>
            <p style="padding-left:50px ; padding-right:50px ; padding-top:10px;">
                Clínica Veterinaria Guayaquil en 1968. Sergio Bravo, Egresando de medicina veterinaria pudo cristalizar 
                su sueño poniendo lo que es hoy en día clínica veterinaria Guayaquil, desde ahí dedicado a las mascotas en el transcurso 
                se le presentó cristalizar otro de sus sueños poder enseñar en nuestra universidad en la cual tuvo la posibilidad 
                de dictar la cátedra de parasitologia, el cual idealizo sus sueños dedicarse a las mascotas.
            </p>
        </div>
       </div>

       <div class="team">
            <div class="info-team">
                <div class="box-team">
                    <img  src="/assets/img/dra-2.png" alt="">
                    <h5>Dra. Patricia Ycaza <br> Cirugia </h5>
                    <p class="parrafo">Es una apasionada de la veterinaria desde el primer momento que se acercó a ella, 
                        se esfuerza día a día para que la clínica siga siendo un lugar seguro y eficaz para los animales de la ciudad.</p>
                </div>
                <div class="box-team">
                    <img src="/assets/img/dra-1.png" alt="">
                    <h5>Dra. Priscila Bravo Icaza <br> Laboratorista </h5>
                    <p class="parrafo">Se convirtió en la primera mujer laboratorista. Se graduó como veterinaria y quedó 
                        fascinada con los exámenes de laboratorio y cómo ayudar a las mascotas desde ese ángulo.</p>
                </div>
                <div class="box-team">
                    <img src="/assets/img/dra-3.png" alt="">
                    <h5>Dr. Javier Bravo <br> Doctor </h5>
                    <p class="parrafo">El Dr. Javier Bravo se ha dedicado por completo al rol de cuidador de mascotas. 
                        Para él la calidez, la entrega, la energía y la pasión por lo que hace es muy importante para seguir innovando.</p>
                </div>
            </div>
       </div>
    </main>

    <footer>
        <div class="footer-logo">
            <img src="/assets/img/Logo.png" alt="Logo">
        </div>

        <div class="about-us">
            <h3>Nosotros</h3>
            <p>Equipo medico con la mision de mejorar la salud de sus mascotas</p>
        </div>
        <div class="contact-us">
            <h3>Contáctenos</h3>
            <ul>
                <li><span><img src="#" alt=""></span>(04) 2123456</li>
                <li><span><img src="#" alt=""></span>Veterinaria@gmail.com</li>
                <li><span><img src="#" alt=""></span>9 de octubre Calle 2</li>
            </ul>
        </div>
        <div class="working-hours">
            <h3>Horario de atención</h3>
            <p>00:09 AM - 16:00 PM</p>
        </div>
    </footer>

    <script type="text/"></script>
</body>
</html>