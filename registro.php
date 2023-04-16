
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- FavIcon -->
    <link rel="icon" type="imagen /x-icon" href="img/001-avion.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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

  <div class="registro-body">
    <div class="colorFondo">

    <div class="formulario-registro">
              <div class="cuerpoFormulario-registro">
              <i class="logo bi bi-door-open-fill"></i>
              <?php 
                include "entrar.php";
              ?>
                  <form class="form-registro" id="formulario" action="" method="POST">
                      <h1>Se parte de la familia, ¡REGISTRATE!</h1>    
                      <label for="nom">Ingrese un nombre:</label>
                      <div class="usuario" id="nom">
                          <input class="casillas" name="nombre" id="nombre" type="text">
                          <p class="formulario__input-error" id="aviso-usuaro">Solo utilizar letras.</p>
                      </div>    
                      <label for="apellido">Ingrese un apellido:</label>
                      <div class="usuario" id="apelli" >
                          <input class="casillas" name="apellido" id="apellido" type="text">
                          <p class="formulario__input-error" id="aviso-usuaro">Solo utilizar letras.</p>
                      </div>    
                      <label for="usuario">Ingrese un correo electrónico: </label>
                      <div class="usuario" id="usuario" >
                          <input class="casillas" name="correo" id="correo" type="email" placeholder="ejemplo@correo.com">
                          <p class="formulario__input-error" id="aviso-usuaro">Favor de escribir bien el correo electrónico.</p>
                      </div>
                      <label for="contra">Ingrese una contraseña:</label>
                      <div class="usuario" id="contra">
                          <input class="casillas" name="contrasena" id="contrasena" type="password">
                          <p class="formulario__input-error" id="aviso-usuaro">La contraseña no debe ser menor de 4 ni mayor de 15 caracteres.</p>
                      </div>
                      <label for="conf-contrasena" >Confirme su contraseña:</label>
                      <div class="usuario" id="otra-contra">
                          <input class="casillas" name="conf-contrasena" id="conf-contrasena" type="password">
                          <p class="formulario__input-error" id="aviso-usuaro">La contraseña no coincide.</p>
                      </div>
                      
                      <a class="link-reset" href="login.php"><p  class="reset">¿Ya tienes una cuenta?</p></a> 
                      
                      <input name="btnRegistrar" class="button" type="submit" value="Registrarse">
                  </form>
              </div>
          </div>
          </div>
  </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/formulario.js"></script>
</body>
</html>