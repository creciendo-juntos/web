<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!--                               CREACION DE LA BARRA DE NAVEGACION (NAVBAR)                              -->

    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded fixed-top" aria-label="Thirteenth navbar example">
            <div class="container-fluid ">
                <img src="<?php echo APP_URL; ?>/app/views/img/logo.jpeg" class="img-fluid rounded-circle px-4 " alt="Imagen"
                    style="max-height: 50px;">
                <a class="navbar-brand col-lg-2 me-0 fs-5" href="#">Creciendo Juntos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end text-bg-dark" style="width: 270px;" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">¡Bienvenidos!</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-lg-center flex-grow-1">
                            <li class="nav-item">
                                <a class="nav-link active fs-5 px-4" aria-current="page" href="#Inicio">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-5 px-4 text-white" href="#Servicios" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item fs-5" href="#Cuid_niños">Cuidado de Niños</a></li>
                                    <li><a class="dropdown-item fs-5" href="#Cuid_niños">Estimulacion Temprana</a>
                                    </li>
                                    <li><a class="dropdown-item fs-5" href="#Cuid_niños">Atencion Personalizada</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fs-5 px-4" aria-current="page" href="#Contactanos">Contactanos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fs-5 px-4" aria-current="page" href="#Nosotros">Nosotros</a>
                            </li>
                            <li>
                                <br>
                            </li>
                        </ul>
                        <div class="d-lg-flex col-lg-3 justify-content-lg-end text-center">
                            <button class="btn btn-secondary px-4 fs-5" data-bs-toggle="modal" data-bs-target="#loginModal">
                                Iniciar Sesión
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>

</header>



<!--                              CREACION DEL INICIO (HOME)                              -->


<section id="Inicio">
    <div class="pt-5">
        <div class="pt-5">
            <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="<?php echo APP_URL; ?>/app/views/img/inicio.jpeg" class="d-block mx-lg-auto img-fluid"
                            alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                    </div>
                    <div class="col-lg-6 text-center">
                        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 text-uppercase ">El mejor
                            cuidado para el
                            mejor comienzo
                        </h1>
                        <p class="lead">En "Creciendo Juntos", brindamos un entorno seguro y lleno de aprendizaje
                            donde
                            los
                            niños crecen felices, curiosos y seguros de sí mismos. Nuestros programas están
                            diseñados
                            para
                            estimular su desarrollo integral desde el primer día. </p>
                        <p class="lead">Ofrecemos apoyo tanto a padres trabajadores como a aquellos que buscan una
                            orientación especial para sus hijos. ¡Contáctanos para saber más sobre nuestros
                            programas y
                            cómo
                            podemos ser parte del desarrollo de tu pequeño!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2 class="p-1 border-bottom text-center fw-bold"></h2><!-- separador de secciones-->
</section>




<!--                CREACION DE SERVICIOS (SERVICES)                         -->


<section id="Servicios">
    <div class="container px-4 py-5" id="custom-cards">
        <div class="container">
            <div class="row justify-content-center text-center mb-3">
                <div class="col-lg-8 col-xl-7">
                    <h2 class="pb-3 display-4 fw-bold">Nuestros Servicios</h2>
                    <p class="lead" id="Cuid_niños">En "Creciendo Juntos", ofrecemos una variedad de servicios
                        diseñados para
                        satisfacer las necesidades de cada familia. Desde el cuidado infantil hasta estimulación
                        temprana, ademas de atencion personalizada para cada niño. Nestro objetivo es brindar un
                        ambiente seguro y enriquecedor para el desarrollo
                        integral de los niños.</p>
                </div>
            </div>
            <div class="row g-5 px-1 py-3 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <img src="<?php echo APP_URL; ?>/app/views/img/servicio1.jpg" alt="Cuidado de Niños"
                        class="rounded-3 img-fluid mb-4" style="width: 100%; height: auto; aspect-ratio: 1;">
                    <h3 class="fs-2 pb-3 text-center text-body-emphasis" id="Cuid_niños">Cuidado de Niños</h3>
                    <p class="text-center text-muted">En la guardería de Creciendo Juntos, proporcionamos un
                        ambiente seguro y
                        acogedor donde los niños
                        pueden socializar y desarrollar habilidades esenciales a través del juego. Nuestro equipo de
                        profesionales capacitados se enfoca en ofrecer actividades lúdicas y educativas que fomentan
                        la
                        creatividad, la comunicación y el aprendizaje colaborativo, asegurando que cada niño se
                        sienta
                        valorado y estimulado en su crecimiento.</p>
                    <div class="text-center">
                        <a href="#" class="icon-link">
                            Más información
                        </a>
                    </div>
                </div>
                <div class="feature col">
                    <img src="<?php echo APP_URL; ?>/app/views/img/servicio2.jpg" alt="Cuidado de Niños"
                        class="rounded-3 img-fluid mb-4" style="width: 100%; height: auto; aspect-ratio: 1;">
                    <h3 class="fs-2 pb-3 text-center text-body-emphasis" id="Est_temp">Estimulacion Temprana</h3>
                    <p class="text-center text-muted">En nuestro Centro de Estimulación Temprana, nos dedicamos a
                        potenciar el
                        desarrollo integral de los niños a través de programas cuidadosamente diseñados para
                        estimular
                        sus habilidades cognitivas, motoras y sociales. Utilizamos técnicas innovadoras y materiales
                        adaptados para fomentar la curiosidad, la creatividad y el aprendizaje en un ambiente
                        seguro,
                        permitiendo que los pequeños descubran su verdadero potencial desde una edad temprana.</p>
                    <div class="text-center">
                        <a href="#" class="icon-link">
                            Más información
                        </a>
                    </div>
                </div>
                <div class="feature col">
                    <img src="<?php echo APP_URL; ?>/app/views/img/servicio3.jpg" alt="Cuidado de Niños"
                        class="rounded-3 img-fluid mb-4" style="width: 100%; height: auto; aspect-ratio: 1;">
                    <h3 class="fs-2 pb-3 text-center text-body-emphasis" id="Ate_pers">Atencion Personalizada</h3>
                    <p class="text-center text-muted">Nuestra atención personalizada está diseñada para brindar un
                        apoyo
                        especializado a niños con necesidades especiales. Ofrecemos un enfoque
                        individualizado que considera las habilidades y retos únicos de cada niño. Nuestro equipo
                        trabaja en colaboración con las familias para crear planes de intervención
                        que promuevan el desarrollo emocional, social y educativo, garantizando que cada niño reciba
                        la
                        atención y el cuidado que merece.</p>
                    <div class="text-center">
                        <a href="#" class="icon-link">
                            Más información
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class=" border-bottom text-center fw-bold"></h2><!-- separador de secciones-->
</section>



<!--                   CREACION DE CONTÁCTANOS (CONTACT US)                   -->


<section id="Contactanos">
    <div class="container px-4 py-4" id="custom-cards">
        <div class="row justify-content-center text-center mb-3">
            <div class="col-lg-8 col-xl-7">
                <h2 class="pb-3 pt-5 display-4 fw-bold">Contactanos</h2>
                <p class="lead">En esta sección, podrás comunicarte con nosotros para obtener más detalles sobre el
                    Centro de Estimulación Temprana y Cuidado de Niños "Creciendo Juntos". Si necesitas información
                    sobre nuestros servicios o deseas conocer el proceso de matrícula, estaremos encantados de
                    ayudarte.</p>
            </div>
        </div>
        <div class="container-fluid p-lg-0 ">
            <div class="row g-4 py-3 align-items-center">
                <div class="col-lg-6">
                    <div class="col-lg-8 mx-auto">
                        <span class="fs-4 text-muted">¡Llámanos!</span>
                        <h2 class="pb-2 display-5 fw-bold">Nos encantaría escucharte</h2>
                        <p class="lead">No dudes en llamarnos al +51 999 999 999. Si en algún momento no
                            podemos
                            atender tu llamada, por favor déjanos tus datos y te contactaremos lo más
                            pronto
                            posible. Estamos aquí para ayudarte y brindarte la atención que mereces.
                        </p>
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="form-floating mb-3">
                                            <input class="form-control rounded-3 bg-light" id="floatingInput" placeholder="Juan Perez"
                                                type="text">
                                            <label class="text-secondary" for="floatingInput">Nombres
                                                Completos</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control rounded-3" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label class="text-secondary" for="floatingInput">Correo electronico</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control rounded-3" id="floatingInput" placeholder="+51 999999999">
                                        <label class="text-secondary" for="floatingInput">Telefono</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <textarea class="form-control bg-light" placeholder="Escribe lo que deseas comunicarnos!"
                                            rows="5"></textarea>
                                    </div>
                                </div>


                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit">Enviar mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="me-md-2 me-lg-5">
                        <div class="ratio ratio-1x1">
                            <!-- Proporción 1:1 para mantener el mapa cuadrado -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.175567872432!2d-76.13050112413269!3d-13.401453186954813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91101659bc949b09%3A0xb9334328526ecce8!2sJiron%20Ca%C3%B1ete%20424%2C%20Ica%2011701!5e0!3m2!1ses!2spe!4v1728518835159!5m2!1ses!2spe"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <p class="lead pt-3 fs-3 text-muted text-center fw-semibold"> Ubicanos en:
                        <p class="lead fs-3 text-muted text-center fw-bold"> Jiron Cañete 424, Pueblo
                            Nuevo</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="border-bottom text-center fw-bold"></h2><!-- separador de secciones-->
</section>




<!--                   CREACION DE SOBRE NOSOTROS (ABOUT US)                   -->


<section id="Nosotros">
    <div class="container px-4 py-5" id="custom-cards">
        <div class="row justify-content-center text-center mb-3">
            <div class="col-lg-8 col-xl-7">
                <h2 class="pb-3 display-4 fw-bold">Acerca de Nosotros</h2>
            </div>
        </div>
        <div class="container g-4 py-5">
            <div class="row gx-4 align-items-center">
                <div class="col-md-6">
                    <div class="me-md-2 me-lg-5"><img class="img-fluid rounded-3"
                            src="<?php echo APP_URL; ?>/app/views/img/inicio.jpeg"></div>
                </div>
                <div class="col-md-6">
                    <div class="ms-md-2 ms-lg-5 text-center">
                        <h2 class="py-3  fw-bold">Quiénes Somos</h2>
                        <p class="lead fs-5">En el Centro de Estimulación Temprana y Cuidado de Niños
                            "Creciendo
                            Juntos",
                            nos dedicamos a ofrecer un entorno seguro, afectuoso y enriquecedor para que los más
                            pequeños puedan desarrollarse y aprender desde sus primeros años. Nuestro objetivo es
                            apoyar a los padres que buscan lo mejor para sus hijos, brindando programas
                            personalizados que fomentan la curiosidad, la creatividad y el crecimiento integral de
                            cada niño.</p>
                        <p class="lead fs-5 pb-5">Contamos con un equipo especializado y comprometido en ofrecer la
                            mejor
                            atención, adaptándonos a las necesidades de cada familia, ya sean padres que trabajan a
                            tiempo completo, primerizos en busca de orientación o aquellos con niños que requieren
                            cuidados especiales. Nos enorgullece ser un pilar de confianza en la comunidad de Pueblo
                            Nuevo, ofreciendo un lugar donde los niños son valorados, y sus familias, apoyadas.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!--             CREACION DEL INICIO DE SESION (MODAL SING IN)             -->


<section id="modal-Sing_In">
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-4 pb-5">
                <!-- Botón "X" para cerrar el modal -->
                <button type="button" class="btn-close ms-auto p-3" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Columna izquierda: Imagen y texto -->
                            <div class="col-md-6 d-flex align-items-center rounded-4"
                                style="background-color: #dcdcdc; color: #333; padding: 35px;">
                                <div class="text-center">
                                    <img src="<?php echo APP_URL; ?>/app/views/img/logo.jpeg" class="img-fluid rounded-4" alt="Imagen"
                                        style="max-height: 160px;">
                                    <h3 class="mt-5">¿No tienes una cuenta para iniciar sesión?</h3>
                                    <p class=" p-3">Para poder
                                        iniciar sesión, es necesario que tu niño se encuentre matriculado en nuestro
                                        centro. Si aún no lo has hecho, te invitamos a contactarnos para más
                                        información
                                        sobre el proceso de matricula
                                        y poder asi asegurar el bienestar y desarrollo de tu pequeño con nuestros
                                        servicios.</p>

                                    <div class="d-grid">
                                        <button type="button" class="btn btn-primary rounded-4" onclick="cerrarModalYRedirigir()">
                                            Contactar
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Columna derecha: Formulario de inicio de sesión -->

                            <div class="col-md-6 py-5 ">

                                <h3 class="text-center py-5">Iniciar Sesión</h3>
                                <form action="<?= APP_URL . "app/ajax/loginAjax.php" ?>" id="loginForm" method="post">

                                    <div class="mb-3">
                                        <label for="usuario" class="form-label">Usuario</label>
                                        <input type="text" name="login_usuario" class="form-control rounded-5" id="usuario"
                                            placeholder="Ingresa tu usuario">
                                    </div>

                                    <div class="mb-3 ">
                                        <label for="password" class="form-label ">Contraseña</label>
                                        <input type="password" name="login_clave" class="form-control rounded-5" id="password"
                                            placeholder="Ingresa tu contraseña">
                                    </div>

                                    <!-- Enlace de "Olvidaste tu contraseña?" -->
                                    <div class="mb-3 text-center ">
                                        <a href="" class="text-decoration-none">
                                            ¿Olvidaste tu contraseña?
                                        </a>
                                    </div>

                                    <div class="d-grid py-3">
                                        <button type="submit" class="btn btn-primary rounded-4">Ingresar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>























<!--             CRACION DEL PIE DE PAGINA (FOOTER)           -->


<section id="Footer">
    <div class="container pt-5">
        <footer class="py-0 my-0">
            <ul class="nav justify-content-center border-bottom pb-2 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-3 text-body-secondary fs-5">Inicio</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-3 text-body-secondary fs-5">Servicios</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-3 text-body-secondary fs-5">Contactanos</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-3 text-body-secondary fs-5">Nosotros</a></li>
            </ul>
            <p class="text-center text-body-secondary fs-5">&copy; 2024 Company, Inc</p>
        </footer>
    </div>
</section>






<!--          CIERRE DE CREACION DEL CUERPO DE LA PAGINA         -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>