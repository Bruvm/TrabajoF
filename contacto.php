<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contacto | </title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!--link de los social media en la parte de abajo de la pagina-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <?php include ('conexion.php'); ?>
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <a href="index.php"><img src="assets/img/menu/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="nosotros.php">Nosotros</a></li>
          <li><a href="inclusion.php">Inclusión escolar</a></li>
          <li><a href="preguntas.php">Preguntas frecuentes</a></li>
          <li><a href="ndestacadas.php">Información destacada</a></li>
          <li class="active"><a href="#">Contacto</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">ARK HO</a></li>
          <li>Contacto</li>
        </ol>
        <h2>Contacto</h2>

      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Dirección</h3>
              <p>Av. Colón 1642, X5003 DCN, Córdoba</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Teléfono</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13621.02989833683!2d-64.205123!3d-31.4070315!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7ce3d23cd0390993!2sFundacion%20Arkho!5e0!3m2!1ses-419!2sar!4v1587602766957!5m2!1ses-419!2sar" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/formulario.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre y apellido" data-rule="minlen:4" data-msg="Por favor, ingrese al menos 4 caracteres" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Por favor, introduzca una dirección de correo electrónico válida" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor, ingrese al menos 8 caracteres de asunto" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor, escribe algo." placeholder="Mensaje"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Enviando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <section id="clients" class="clients">
      <div class="container">
        <div class="row justify-content-center IM2020 ">
          <div class="col-2">
              <a href="https://www.facebook.com/fundacion.arkho" target="_blank"><i class="fab fa-facebook-f"></i></a>
          </div>

          <div class="col-2">
            <a href="https://www.youtube.com/channel/UC2UHuvShGVYOzp4Pct3yDww/?guided_help_flow=5" target="_blank"><i class="fab fa-youtube" target="_blank"></i></a>
          </div>

          <div class="col-2">
            <a href="https://api.whatsapp.com/send?phone=+54 385 471 3407" target="_blank"><i class="fab fa-whatsapp"></i></a>
          </div>

          <div class="col-2">
            <a href="mailto:arkhocba@gmail.com"><i class="far fa-envelope" target="_blank"></i></a>
          </div>

          <div class="col-2">
            <a href="https://www.instagram.com/fundacionarkho/" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
 
       </div>


      </div>
    </section><!-- End Clients Section -->

  </main><!-- End #main -->

  <?php include ('footer.php'); ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>