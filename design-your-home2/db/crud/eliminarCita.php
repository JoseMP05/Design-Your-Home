<?php
    include("../conexion.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $consulta = "DELETE FROM cita Where id = $id";
        $resultado = mysqli_query($conexion,$consulta);   

        if(!$resultado){
            echo '<script> alert("No se pudo eliminar")
            window.location ="citas.php";
            </script>';
        }else{            
            echo '<script> alert("Eliminado Correctamente")
            window.location ="citas.php";
            </script>';
        }
    }

?>