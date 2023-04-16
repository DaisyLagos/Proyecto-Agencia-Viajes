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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <!-- FONT-FAMILY
    font-family: 'Changa', sans-serif; -- Esta es para títulos --
    font-family: 'Ubuntu Condensed', sans-serif; -- Esta es para texto normal -- -->
    <title>Pago | Love Travel</title>
    <script src="https://www.paypal.com/sdk/js?client-id=AQ9oBH_JGHQrQg7_EEaz-B5B6PfbBVL094u6w3z75kPB7uBdcPIcNqNnAY1ChjRQWB0I1a0wSFfD4eWC&currency=USD"></script>
    <link rel="stylesheet" href="css/styles.css">
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
    <h1>En hora buena... Termine la compra de su próximo destino</h1>
        <div class="pagoInfo">

        <!-- TRABAJAR EN EL PASO DE LOS DATOS -->
        <!-- ************************************************************************************************* -->

        <?php
            $tipo = $_GET['tipo'];         
            $con = mysqli_connect("localhost", "root", "", "proyecto");
            $id = $_GET['variable'];
            
            if($tipo == "1"){
              $sql = "SELECT * FROM promo where idPromo = $id";
              $res = mysqli_query($con, $sql);
            }
            
            if($tipo == "2"){
              $sql = "SELECT * FROM paquetes where idPaquete = $id";
              $res = mysqli_query($con, $sql);
            }
            
            $row = mysqli_fetch_array($res, MYSQLI_NUM);
            $money = $row[3];
        ?>
            <h2 id="pagoTitulo"> <?php echo $row[1] ?> </h2>
            <p class="descripPaquete"><?php echo $row[2] ?></p>
            <h3 class="pago-etiqueta">Precio:</h3><p id="precioPaquete" class="precioPaquete"> $ <?php echo $row[3] ?> </p>
        </div>    

        <?php mysqli_close($con); ?>

<div id="smart-button-container">
  <div style="text-align: center;">
    <div id="paypal-button-container"></div>
  </div>
</div>

<script>
  var money = JSON.parse('<?php echo json_encode($money);?>');
function initPayPalButton() {
  paypal.Buttons({
    style: {
      shape: 'pill',
      color: 'gold',
      layout: 'vertical',
      label: 'pay',
    },
    
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: money,
          }
        }]
      });
    },

    onApprove: function(data, action){
      action.order.capture().then(function (detalles){
        console.log(detalles);
      })
    },

    onCancel: function(data){
      alert("Pago Cancelado");
      console.log(data);
    }

  }).render('#paypal-button-container');
}
initPayPalButton();
</script>

    <!-- TERMINAR EL CONTENIDO DE LA PÁGIANA AQUI -->
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

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