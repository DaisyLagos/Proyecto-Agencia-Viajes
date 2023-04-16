<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- FavIcon -->
    <link rel="icon" type="imagen /x-icon" href="img/001-avion.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles_login.css">
</head>
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
        </ul>
      </div>
    </div>
  </nav>
  <!-- FIN NAVBAR -->
    <div class="row">
        <div class="fondo col-sm-12 col-md-6 col-lg-7">
            <div class="colorFondo"></div>
        </div>
        <div class="formulario col-sm-12 col-md-6 col-lg-5">
            <div class="cuerpoFormulario">
                <i class="logo bi bi-person-circle"></i>
                    <?php 
                      include "conexion.php";
                      include "controlador.php";
                    ?>
                <form id="formulario" action="" method="POST">
                    <h1>¡BIENVENIDO!</h1> 
                    <label for="usuario">Usuario</label>
                    <div class="usuario" id="usuario">
                      <div class="input-icon">
                        <i class="bi bi-person-fill"></i>            
                        <input class="casillas" name="correo" id="correo" type="email" placeholder="ejemplo@correo.com">
                      </div>
                      <p class="formulario__input-error" id="aviso-usuaro">Favor de escribir bien el correo electrónico.</p>
                    </div>
                    <label for="contrasena">Contraseña</label>
                    <div class="usuario" id="contra">
                      <div class="input-icon">
                        <i class="bi bi-lock-fill"></i>
                        <input class="casillas" name="contrasena" id="contrasena" type="password">
                      </div> 
                        <p class="formulario__input-error" id="aviso-usuaro">La contraseña no debe ser menor de 4 ni mayor de 15 caracteres.</p>
                    </div> 
                    
                    <input name="btnIngresar" class="button" type="submit"  value="Ingresar">
                </form>
            </div>
        </div>
    </div>
    </div>

    <script>

    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/formulario.js"></script>
    <script src="js/script.js"></script>
</body>
</html>