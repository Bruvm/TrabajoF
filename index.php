<!DOCTYPE html>
<html lang="en">
<?php include ('head.php'); ?>

<body>
<?php include ('conexion.php'); ?>
<?php include ('menu.php'); ?>
  
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide-1.jpg) no-repeat center fixed; background-size: cover;">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown"><span>¡BIENVENIDOS!</span></h2>
                <p class="animated fadeInUp"> 
                  <b>Los invitamos a conocernos.</b> <br>
                  Nuestra apuesta: construir un mundo más real, empático  e inclusivo.</p>
                <a href="nosotros.php" class="btn-get-started animated fadeInUp">Leer más</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide-2.jpg) no-repeat center fixed; background-size: cover;">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown"><span>NOTICIAS DESTACADAS</span></h2>
                <p class="animated fadeInUp">
                  En nuestra web podrás encontrar noticias actualizadas de nuestro día a día. 
                  </p>
                <a href="ndestacadas.php" class="btn-get-started animated fadeInUp">Leer más</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide-3.jpg) no-repeat center fixed; background-size: cover;">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown"><span>INTEGRACIÓN EDUCATIVA</span></h2>
                <p class="animated fadeInUp">
                  Conocé más sobre la integración escolar, sus objetivos y beneficios.</p>
                <a href="integracion.php" class="btn-get-started animated fadeInUp">Leer más</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Antes</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>

      </div>
    </div>
  </section>
  <!-- End Hero -->
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h2 style="color: #D68831"><b>¿Quienes somos?</b></h2>
            <p class="font-italic" style="text-align: justify; font-size: 15px;">
              Nuestra Fundación nace en un inicio con la inquietud de acompañar de manera colaborativa a las personas en situación de discapacidad en el trayecto de su vida. Si bien en un primer momento nos ocupaba la escolaridad, nunca dejamos de considerar y ver a las personas en todos los aspectos del ciclo vital. Por ello, así como la escolaridad es una preocupación nuestra y de las familias, hemos aprendido que los niños se convierten en jóvenes y los jóvenes en adultos, y que los aprendizajes formales son fundamentales como así también lo es la inclusión en todos los aspectos de la sociedad.  
              <br>Trabajar para conseguir la autonomía es un desafío familiar, institucional y social. Defender el respeto de  los derechos a una vida digna, integral, con ciudadanos partícipes en las decisiones de la comunidad es otro tema que nos convoca e interesa. Emprendemos una labor conjunta entre familias, instituciones, sociedad y <b>Fundación ARK HO</b>, para que los estereotipos y  preconceptos dejen de ser negativos, donde las barreras  sean cada vez menores para de esta manera construir una sociedad más inclusiva y respetuosa de las diferencias. 
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="about">
        <div class="container">
          <div class="row">      
            <div class="col-lg-6 pt-4 pt-lg-0 content order-2 order-lg-1">
              <h2 style="color: #D68831"><b>¿Qué es la discapacidad?</b></h2>
              <p class="font-italic" style="text-align: justify; font-size: 15px;">
                Según la OMS (Organización Mundial de la Salud), la Discapacidad es un término general que abarca las deficiencias, las limitaciones de la actividad y las restricciones de la participación. Las deficiencias son problemas que afectan a una estructura o función corporal; las limitaciones de la actividad son dificultades para ejecutar acciones o tareas, y las restricciones de la participación son problemas para participar en situaciones vitales. Por consiguiente, la discapacidad es un fenómeno complejo que refleja una interacción entre las características del organismo humano y las características de la sociedad en la que vive. 
                <br>Las personas con altas capacidades presentan un nivel de rendimiento intelectual superior en una amplia gama de aptitudes y capacidades aprendiendo con facilidad cualquier área o materia.
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
              <img src="assets/img/about1.jpg" class="img-fluid" alt="">
            </div>
          </div>
        </div>
    </section>
    <!-- End About -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services" style="background: #FFF7F7;">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>ESPECIALIDADES</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <h4><a href="nosotros.php">Psicopedagogía</a></h4>
              <p>Realiza acciones que posibilitan la detección de perturbaciones y/o anomalías en el proceso de aprendizaje.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <h4><a href="nosotros.php">Psicología</a></h4>
              <p>Asesoramiento y tratamiento a familias de personas en situación de Discapacidad.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch ">
            <div class="icon-box">
              <h4><a href="nosotros.php">Trabajo Social</a></h4>
              <p>Asistencia, orientación y asesoramiento a los distintos sistemas (familia-escuela-instituciones)  que participan del proceso de Inclusión Escolar. </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <h4><a href="nosotros.php">Gestión de la educación especial</a></h4>
              <p>Encargada de la supervisión, conducción y coordinación de los servicios que conciernen a los procesos de Inclusión Escolar.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <h4><a href="nosotros.php">Fisiatría</a></h4>
              <p>Profesional a cargo de un proceso de  valoración preliminar e integral del paciente. </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <h4><a href="nosotros.php">Neuropsicología</a></h4>
              <p>Profesional que diagnostica implementando batería de test neuropsicológicos, a los fines efectuar una descripción profunda de las funciones cerebrales superiores de las personas.</p>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <h4><a href="nosotros.php">Fonoaudiología</a></h4>
              <p>Realiza la valoración, diagnóstico clínico fonoaudiológico, pronóstico y terapéutica en los procesos que perturben el desarrollo de la organización lingüística y su deterioro.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <h4><a href="nosotros.php">Kinesiología y Fisioterapia</a></h4>
              <p>Ejecuta las prestaciones asistenciales, para la evaluación, prevención, conservación, tratamiento y recuperación de la capacidad física de las personas a través de la Kinefilaxia, Kinesiterapia y la Fisioterapia.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <h4><a href="nosotros.php">Psicomotricidad</a></h4>
              <p style="font-family: sans-serif;">Participa en la elaboración, ejecución, evaluación de planes, programas y acciones pertinentes al área de la psicomotricidad, en el ámbito de la educación de nivel y especial.</p></p>
            </div>
          </div>


        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2 style="">Contacto</h2>
        </div>

        <div class="row justify-content-center IM2020">
          <div class="col-lg-10 col-md-10 col-sm-11 col-11 align-self-center">
            <div class="row justify-content-between m-0">
              <div class="text-center float-left">
              <a href="https://www.facebook.com/fundacion.arkho" target="_blank"><i class="fab fa-facebook-f"></i></a>
              </div>

              <div class="text-center float-left">
                <a href="https://www.youtube.com/channel/UC2UHuvShGVYOzp4Pct3yDww/?guided_help_flow=5" target="_blank"><i class="fab fa-youtube" target="_blank"></i></a>
              </div>

              <div class="text-center float-left">
                <a href="https://api.whatsapp.com/send?phone=+54 3512333551" target="_blank"><i class="fab fa-whatsapp"></i></a>
              </div>

              <div class=" text-center float-left">
                <a href="mailto:arkho.cba@gmail.com"><i class="far fa-envelope" target="_blank"></i></a>
              </div>

              <div class="text-center float-left">
                <a href="https://www.instagram.com/fundacionarkho/" target="_blank"><i class="fab fa-instagram"></i></a>
              </div>

            </div>
            
          </div>
            
          
       </div>


      </div>
    </section><!-- End Clients Section -->

  </main><!-- End #main -->


  <!-- FORMULARIO DOPPLER -->
  <script src="https://cdn.fromdoppler.com/formgenerator/latest/vendor.js?74952563"></script>
  <link rel="stylesheet" href="https://cdn.fromdoppler.com/formgenerator/latest/styles.css?74952563">
  <script id="formRender" type="text/javascript">$jqf().ready(function () { renderForm("4GvMSL2KByc04kSMvxcNJQ%3D%3D", "637274038832668815") });</script>

  <!-- ======= Footer ======= -->
  <?php include ('footer.php'); ?>
  
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <?php include ('script.php'); ?>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#home').addClass('active');
    });
    
  </script>
</body>
</html>