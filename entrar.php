<?php
    // include("conexion.php");
    $conex = mysqli_connect("localhost", "root", "", "proyecto");

    if (!empty($_POST['btnRegistrar'])) {
        if(strlen($_POST['nombre'])>=1 && strlen($_POST['apellido'])>=1 && strlen($_POST['correo'] >= 1 && strlen($_POST['contrasena'])>=1 && strlen($_POST['conf-contrasena'])>=1)
        ){
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $email = trim($_POST['correo']);
            $contrasena = trim($_POST['contrasena']);
            
            $consulta = "INSERT INTO usuarios(nombre, apellido, user, pass) VALUES ('$nombre','$apellido','$email', '$contrasena')";
            $res = mysqli_query($conex, $consulta);
            if ($res) {
                echo '<div class="alert bg-success" style="
                margin-bottom: 70px; z-index: 2; margin-top: -60px; text-align: center; color: white;
                ">REGISTRO REALIZADO</div>';
            }
            else {
                echo '<div class="alert alert-danger" style="
                margin-bottom: 70px; z-index: 2; margin-top: -60px; text-align: center;
                ">OCURRIO UN ERROR</div>';
            }
        }
        else{
            echo '<div class="alert alert-danger" style="
                margin-bottom: 70px; z-index: 2; margin-top: -60px; text-align: center;
                ">LLENA TODOS LOS CAMPOS</div>';
        }
    }



?>