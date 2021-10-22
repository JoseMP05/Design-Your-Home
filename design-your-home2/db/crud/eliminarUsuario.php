<?php
    include("../conexion.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $consulta = "DELETE FROM usuario Where id = $id";

        $resultado = mysqli_query($conexion,$consulta);   

        if(!$resultado){
            echo '<script> alert("No se pudo eliminar")
            window.location ="usuarios.php";
            </script>';
        }else{            
            echo '<script> alert("Eliminado Correctamente")
            window.location ="usuarios.php";
            </script>';
        }
    }

?>