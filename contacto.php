<!DOCTYPE html>
<html lang="en">
<?php include ('head.php'); ?>
<body>
  <?php include ('conexion.php'); ?>
  <?php include ('menu.php'); ?>
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
              <p>arkho.cba@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Teléfono</h3>
              <p> 351-23 33 551</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13621.02989833683!2d-64.205123!3d-31.4070315!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7ce3d23cd0390993!2sFundacion%20Arkho!5e0!3m2!1ses-419!2sar!4v1587602766957!5m2!1ses-419!2sar" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">

            <form id="form" class="form" action="forms/contact.php" method="POST">

              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre y apellido" required="" />
                  <small>Error message</small>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required=""/>
                </div>
                <small>Error message</small>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required="" />
                <small>Error message</small>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" id="message" rows="5" required="" ></textarea>
                <small>Error message</small>
              </div>
               <div class="text-center">
                <input id="submit_buttom" name="enviar" type="submit" value='Enviar'>
              </div>
              <div class="col-12" id="contentResult" >
                <p id="resultado" style="padding-top: 25px; padding-bottom: 25px; margin: 0; text-align: center;"></p>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <section id="clients" class="clients">
      <div class="container">
        <div class="row justify-content-center IM2020 ">
          <div class="col-md-2 col-3 mr-md-0 mr-5 mb-md-0 mb-3">
              <a href="https://www.facebook.com/fundacion.arkho" target="_blank"><i class="fab fa-facebook-f"></i></a>
          </div>

          <div class="col-md-2 col-3 mr-md-0 mr-5 mb-md-0 mb-3">
            <a href="https://www.youtube.com/channel/UC2UHuvShGVYOzp4Pct3yDww/?guided_help_flow=5" target="_blank"><i class="fab fa-youtube" target="_blank"></i></a>
          </div>

          <div class="col-md-2 col-3 mr-md-0 mr-5 mb-md-0 mb-3">
           <a href="https://api.whatsapp.com/send?phone=+54 3512333551" target="_blank"><i class="fab fa-whatsapp"></i></a>
          </div>

          <!--<div class="col-md-2 col-3 mr-md-0 mr-5 mb-md-0 mb-3">
            <a href="mailto:arkho.cba@gmail.com"><i class="far fa-envelope" target="_blank"></i></a>
          </div>-->

          <div class="col-md-2 col-3 mr-md-0 mr-5 mb-md-0 mb-3">
            <a href="https://www.instagram.com/fundacionarkho/" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
 
       </div>


      </div>
    </section><!-- End Clients Section -->

  </main><!-- End #main -->

  <?php include ('footer.php'); ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <?php include ('script.php'); ?>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#contacto').addClass('active');
    });
  </script>

  <?php include ('forms/contact.php'); ?>
</body>
</html>