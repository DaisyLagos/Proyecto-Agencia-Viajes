<?php 
  session_start();
   if(empty($_SESSION["idUsuario"]))
    {
      header("location: login.php");
   }
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- FavIcon -->
  <link rel="icon" type="imagen /x-icon" href="img/001-avion.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200&family=Ubuntu+Condensed&display=swap"
    rel="stylesheet">
  <!-- FONT-FAMILY
    font-family: 'Changa', sans-serif; -- Esta es para títulos --
    font-family: 'Ubuntu Condensed', sans-serif; -- Esta es para texto normal -- -->

  <link rel="stylesheet" href="css/styles.css">
  <title>Actividades | Love Travel</title>
</head>
<!-- al navbar, está dentro de un container-fluid (Cuidado al colocar CSS) -->

<body>
  <!-- INICIO NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"> <img src="img/logo.png" alt="Logotipo" height="50rem"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <div class="nav-link">
              <?php echo $_SESSION['nombre'] ." ". $_SESSION['apellido'] ?>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="paquetes.php">PAQUETES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="promociones.php">PROMOCIONES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="actividades.php">ACTIVIDADES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="servicios.php">SERVICIOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="registro.php">REGISTRAR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="login.php">INGRESAR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="controlador_cerrar_session.php">SALIR</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- FIN NAVBAR -->
  <div class="contenedor-contenido">
    <!-- EMPEZAR EL CONTENIDO DE LA PÁGIANA AQUI -->
    <h1 class="titulo-Actividad">Actividades Disponibles</h1>
    <!--Actividad de Tirolina y visita a santuario de perezosos- Roatan-->
    <section class="contenedor-actividad1">
      <h3 class="nom-actividad">Tirolina y visita al santuario de perezosos</h3>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
          <div class="imagenActividad">
            <img src="./img/imgAct6.jpg" class="img-fluid" alt="Tirolina">
            <a class="btn btn-outline-light" href="roatan.php" role="button">Ver Paquete Roatan</a>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-6 col-lg-6">
          <div class="contenidoAct">
            <p class="parrafoAct">Siente la emoción mientras te deslizas en tirolina, planeas y realizas diferentes volteretas
              mientras admiras vistas panorámicas de 360 grados del dosel del bosque. El recorrido de la
              tirolina se compone de 16 líneas, 24 plataformas y 3 puentes colgantes.<br>
              A continuación, visita Daniel Johnson's Monkey and Sloth Hangout, un pequeño santuario de
              animales de gestión familiar que proporciona un entorno seguro y cariñoso a muchos animales.
              Aprende todo sobre los perezosos, los monos capuchinos, los guacamayos rojos y los loros, con
              una visita
              guiada por el parque</p>
          </div>
        </div>
      </div>
    </section>
    <br><br>
    <!--Actividad de visita a Ruinas de Copan-->
    <section class="contenedor-actividad2">
      <h3 class="nom-actividad">Visita guiada por Copán</h3>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-6 col-lg-6">
          <div class="contenidoAct">
            <p class="parrafoAct">Disfrute de dos de los lugares declarados Patrimonio de la Humanidad por la UNESCO más
              espectaculares de la civilización maya, Copán y Joya de Cerén, durante este recorrido de 2 días
              y 1 noche. Explore la "Pompeya de América", Joya de Cerén, uno de los pueblos mayas mejor
              conservados de la antigüedad por una erupción volcánica.<br>A continuación, descubra las exclusivas
              estelas (vertical tallas en piedra) y los magníficos edificios de Copán, una vasto centro maya
              con varios miles de estructuras. Su excursión con temática maya incluye un guía, alojamiento,
              entradas, aperitivos y transporte de ida y vuelta al hotel.</p>
          </div>
        </div>
        <div class="imgBoton col-md-12 col-sm-12 col-lg-6 col-xl-6">
          <div class="imagenActividad">
            <img src="./img/imgAct2.jpg" class="img-fluid" alt="Ruinas de Copan">
            <a class="btn btn-outline-light" href="copan.php" role="button">Ver Paquete Copán</a>
          </div>
        </div>
      </div>
    </section>
    <br><br>
    <!--Actividad  Escursion al Lago de Yojoa-->
    <section class="contendor-actividad3">
      <h3 class="nom-actividad">Escursion al Lago de Yojoa</h3>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-6 col-lg-6">
          <div class="contenidoAct">
            <p class="parrafoAct">Aquí se recibe una charla de la historia y mitos sobre este lago que colinda con varios departamentos del
              centro del país. Por la parte de atrás se encuentra el sitio arqueológico Los Naranjos y La Mina del
              Mochito, que son muy interesantes como historia del país. <br> Despues navega por los canales y lago
              utilizando
              un kayak. Si el agua no es su preferencia, puede hacer una caminata por los alrededores ya que en esta
              zona del país
              puede observar cerca de 500 especies de aves.
            </p>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
          <div class="imagenActividad">
            <img src="./img/imgAct3.jpg" class="img-fluid" alt="Lago de Yojoa">
            <a class="btn btn-outline-light" href="lagoYojoa.php" role="button">Ver Paquete Lago de Yojoa</a>
          </div>
        </div>
      </div>
    </section>
    <br><br>
    <!--Actividad Recorrido por Cayos Cochinos-->
    <section class="contendor-actividad4">
      <h3 class="nom-actividad">Recorrido por Cayos Cochinos</h3>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
          <div class="imagenActividad">
            <img src="./img/imgAct4.jpg" class="img-fluid" alt="Cayos Cochinos">
            <a class="btn btn-outline-light" href="cayosCochinos.php" role="button">Ver Paquete Cayos Cochinos</a>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-6 col-lg-6">
          <div class="contenidoAct">
            <p class="parrafoAct">Recorrido en lancha hacia el archipiélago para navegar entre los 16 cayos y paradas en algunos cayos para
              bañar en aguas cristalinas, Charla informativa Caminata en los senderos en busca de la boa rosada, Tour de
              snorkel, Visita e interacción con la comunidad garífuna de Chachahuate.
            </p>
          </div>
        </div>
      </div>
    </section>
    <br><br>
    <!--Actividad Cataratas de Pulhapanzak-->
    <section class="contendor-actividad5">
      <h3 class="nom-actividad">Visita a las Cataratas de Pulhapanzak</h3>
      <div class="row ">
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
          <div class="imagenActividad">
            <img src="./img/imgAct5.jpg" class="img-fluid" alt="Cataratas Pulhapanzak">
            <a class="btn btn-outline-light" href="cataratas.php" role="button">Ver Paquete Pulhapanzak</a>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-6 col-lg-6">
          <div class="contenidoAct">
            <p class="parrafoAct">Descubre el espíritu salvaje de Honduras en una escapada de un día completo a las cataratas de
              Pulhapanzak partiendo de San Pedro Sula. Mientras explora la vegetación tropical de la selva, quedará
              maravillado ante las imponentes cataratas de Pulhapanzak la cual posee la cascada mas famosa y grande de
              Honduras es también un sitio de gran importancia cultural y arqueológica ya que en sus alrededores se han
              encontrado vestigios de asentamientos humanos prehispánicos. Tambien podra admirar las antiguas
              formaciones rocosas en el interior de la cueva de Taulabe.
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>

  
  <!-- TERMINAR EL CONTENIDO DE LA PÁGIANA AQUI -->
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
  crossorigin="anonymous"></script>
</body>

<!-- INICIO FOOTER -->
<footer>
  <div class="footer-img">
    <div class="socialN">
      <a href="https://es-la.facebook.com/" target="_blank"><i class="fa-brands fa-facebook" target="_blank"></i></a>
      <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
      <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
      <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
    </div>
    <div class="copyright">
      <p>LoveTravel 2023</p>
      <i class="fa-regular fa-copyright"></i>
    </div>
  </div>
</footer>
<!-- FIN FOOTER -->

</html>

