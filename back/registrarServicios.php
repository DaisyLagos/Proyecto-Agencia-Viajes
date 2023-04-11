<?php
    include("conexion.php");

        if(isset($_POST['registrar'])){
        
            if(strlen($_POST['correo']) >= 1){
                $correo =  trim($_POST['correo']);
            
                $consulta = "INSERT INTO contacto(correo) VALUES ('$correo')";
                $resultado = mysqli_query($conex, $consulta);
    
                if($resultado){
                    ?>
                    <h2>Se han añadido correctamente los datos</h2> 
    
                    <?php
                }
                else{
                    ?>
                    <h2>Error al ingresar datos</h2> 
    
                    <?php
    
                }
            }
        }
    

    
    
?>