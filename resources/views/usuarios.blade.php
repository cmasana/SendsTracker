<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>am-POST - Servei de Missatgeria</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">am-POST</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#pedidos">Comandes</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#entrada">Entrada</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->

      <div class="container">
        <br>
      </div>

    <!-- Listado de pedidos -->
    <section class="pedidos" id="pedidos">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Comandes</h2>
        <br>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <?php
            $conexion=mysqli_connect("localhost","root","alumne","users_ampost") or
                die("Problemas con la conexión");

            $registros=mysqli_query($conexion,"select id_pedidos, fecha_pedidos, destin_pedidos, direccion_pedidos, telefono_pedidos, estado_pedidos
                                    from pedidos") or
              die("Problemas en el select:".mysqli_error($conexion));

            while ($reg=mysqli_fetch_array($registros))
            {
              echo "ID:".$reg['id_pedidos']."<br>";
              echo "Fecha:".$reg['fecha_pedidos']."<br>";
              echo "Destinatario:".$reg['destin_pedidos']."<br>";
              echo "Dirección:".$reg['direccion_pedidos']."<br>";
              echo "Teléfono:".$reg['telefono_pedidos']."<br>";
              switch ($reg['estado_pedidos']) {
                case 1:echo "PHP";
                       break;
                case 2:echo "ASP";
                       break;
                case 3:echo "JSP";
                       break;
              }
              echo "<br>";
              echo "<hr>";
            }

            mysqli_close($conexion);
            ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Entrada de pedidos -->
    <section class="bg-primary text-white mb-0" id="entrada">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Entrada de comandes</h2>
        <br>
        <div class="row">

        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">On estem</h4>
            <p class="lead mb-0">Carrer Madrid, 35 - 49
              <br>43870, Amposta</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Segueix-nos</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">Partners</h4>
            <a href="http://www.correos.es">
              <img class="partners" src="img/correos-logo.png" width="200px" height="50px">
            </a>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; am-POST 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
