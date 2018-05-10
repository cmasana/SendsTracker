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

    <!-- Formulario de altas de pedidos -->
    <?php
    $conexion=mysqli_connect("localhost","root","alumne","users_ampost") or
        die("Problemas con la conexión");

    mysqli_query($conexion,"insert into pedidos(fecha_pedidos,destin_pedidos,telefono_pedidos,direccion_pedidos,estado_pedidos) values
                           ('$_REQUEST[fecha_pedidos]','$_REQUEST[destin_pedidos]',$_REQUEST[telefono_pedidos],'$_REQUEST[direccion_pedidos]','$_REQUEST[estado_pedidos]')")
      or die("Problemas en el select".mysqli_error($conexion));

    mysqli_close($conexion);

    echo "El pedido fue dado de alta";
    ?>

  </body>

</html>
