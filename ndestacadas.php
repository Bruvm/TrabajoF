<!DOCTYPE html>
<html lang="en">
<?php include ('head.php'); ?>

<body>
<?php include ('conexion.php'); ?>
<?php include ('menu.php'); ?>

  <main id="main">

  </header><!-- End Header -->
      <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">ARK HO</a></li>
          <li>Información destacada</li>
        </ol>
        <h2>Información destacada</h2>
      </div>
    </section>


    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog ">
      <div class="container">
        <div class="section-title">
          <h2 style="text-transform: uppercase;">Noticia destacada</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img" style="margin: 0px;">
                <img src="assets/img/ndestacadas/ndd.png"  alt="" class="img-fluid" style="min-width: 100%;">
              </div>

              <h2 class="entry-title mt-3">
                <a>¡Pasamos la auditoria!</a>
              </h2>


              <div class="entry-content">
                <p><b>Cuánto esfuerzo ¡Gracias por todo el esfuerzo a los profesionales!</b></p>
                <p>
                  Estamos orgullosos y felices en contarles que hemos pasado la nueva auditoría por parte de la super intendencia de salud. Las cual nos destaca como un "Centro ...
                </p>
                <div class="read-more">
                  <a href="noticias/auditoria.php">Leer más</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

    <section id="about" class="about" style="background: #FFF7F7;">
        <div class="container">
            <div class="section-title">
              <h2 style="text-transform: uppercase;">Últimas Noticias</h2>
            </div>


        <div class="row pt-3 pb-3" style="background: #fff; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1)">
          <div class="col-lg-6">
            <img src="assets/img/ndestacadas/nd1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">

            <h3>Instituciones unidas</h3>
            <p class="font-italic">
              El pasado 16 de septiembre nos reunimos, junto a otras 30 organizaciones, con el Municipio de la Ciudad de Córdoba, para hacer conocer y respetar los derechos de las personas en situación de Discapacidad.  
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Martín Llaryora escuchó nuestras inquietudes y necesidades en este contexto de pandemia que estamos viviendo.</li>
              <li><i class="icofont-check-circled"></i> Trabajo en equipo</li>
              <li><i class="icofont-check-circled"></i> Córdoba más accesible para los vecinos. </li>
            </ul>
            <p>
             Celebramos gratamente el encuentro con otros compañeros de trabajo territorial, y estamos inmensamente agradecidos a la Municipalidad de Córdoba, a Martín Llaryora, a Raúl La Cava, a Leonardo Lewylle y a Pablo Giesenow por la oportunidad de dejarnos ...
            </p>
            <div class="read-more">
                  <a href="noticias/muniCba.php">Leer más</a>
                </div>
          </div>
        </div>     <br><br> 


        <div class="row pt-3 pb-3" style="background: #fff; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1)">     
            <div class="col-lg-6 pt-4 pt-lg-0 content order-2 order-lg-1">
              <h3>Igualdad de derechos</h3>
              <p class="font-italic">
                Fundación ARK HO fue recibida por el subsecretario de Políticas Sociales de la Municipalidad de Córdoba, Leonardo Lewylle, y el director de Protección de Derechos, Participación e Inclusión de las Personas con Discapacidad, Pablo Giesenow.
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> La realidad de las personas en situación de discapacidad</li>
                <li><i class="icofont-check-circled"></i> Unir realidades para cubrir</li>
                
              <p>
               Juntos pudimos dialogar sobre la realidad de las personas en situación de discapacidad, sus familias, aspectos actuales de la Inclusión Escolar en la pandemia y la importancia ...
              </p>
              <div class="read-more">
                  <a href="noticias/arkhoMunicipio.php">Leer más</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
              <img src="assets/img/ndestacadas/nd2.jpg" class="img-fluid" alt="">
            </div>
          </div>

        </div>
      </section>
<!--<section class="blog">
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li class="active"><a href="#">1</a></li>
                <li ><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <liclass="disabled"><a href="#"><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div>

  </section>

    -->



  </main><!-- End #main -->

  <?php include ('footer.php'); ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <?php include ('script.php'); ?>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#destacadas').addClass('active');
    });
    
  </script>
</body>

</body>

</html>