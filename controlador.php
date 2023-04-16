<?php
    session_start();
    if(!empty($_POST['btnIngresar'])){
        if(empty($_POST["correo"]) and empty($_POST["contrasena"])){
                echo '<div class="alert alert-danger" style="
                margin-bottom: 70px; z-index: 2; margin-top: -60px; text-align: center;
                ">LOS CAMPOS ESTAN VACIOS</div>';
            }
            else{
                if(isset($_POST['correo']) && isset($_POST['contrasena'])){
                    $conex = new mysqli("localhost", "root", "", "proyecto");

                    $correo = $_POST['correo'];
                    $contra = $_POST['contrasena'];
                $sql=$conex->query(" select * from usuarios where user = '$correo' and pass='$contra' ");
                if ($datos=$sql->fetch_object()){
                    $_SESSION["idUsuario"]=$datos->idUsuario;
                    $_SESSION["nombre"]=$datos->nombre;
                    $_SESSION["apellido"]=$datos->apellido;
                    $_SESSION["usuario"]=$datos->user;
                    $_SESSION["password"]=$datos->pass;
                    header("location:index.php");
                }
                else{
                    echo '<div class="alert alert-danger" style="
                    margin-bottom: 70px; z-index: 2; margin-top: -60px; text-align: center;
                    ">ACCESO DENEGADO</div>';
                }
                }
        }
    }
?>

