<?php
       include("../conexion.php");
       
       //    if(isset($_POST['enviar'])){  
        $idd = $_GET['id'];
        echo $idd;
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $consulta_ID = " SELECT * FROM usuario WHERE ID = $idd";
        $ejecutar = mysqli_query($conexion,$consulta_ID);
        //    while($row = mysqli_fetch_assoc($ejecutar)){
        while($row = mysqli_fetch_array($ejecutar)){
            if(isset($_POST['enviar'])){
                global $id;
                $id = $row['ID'];
                if($id){
                // echo $idd;
                    $consulta = "INSERT INTO `cita`( `ID_usuario`, `hora`, `fecha`) VALUES ('$idd','$hora','$fecha')";
                    $ejecutar = mysqli_query($conexion,$consulta);  
                        if($ejecutar > 0 ){
                            echo '<script> alert("Te registraste correctamente")
                            window.location ="usuarios.php";
                            </script>';
                        }else{
                            echo '<script> alert("Ocurrio un fallo")
                                window.location ="usuarios.php";
                                </script>';
                        }   
                }else{
                    echo "fallo";
                }
            }
        }
   mysqli_close($conexion); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Document</title>
    <!--<style>
        body{
            background-color: #000000;
        }
        
        form{
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            position: absolute;
            left: calc(50% - 150px);
            top: calc(50% - 150px);
            width: 300px;
            height: 300px;
            box-shadow: 2px 2px 15px rgba(151, 151, 151, 0.316);
        }
    </style> -->
</head>
<body>
    <form action="añadirCita.php" method="post">
        <div>
            <h2 class="title is-2">Agendar Cita</h2>
        </div>
        <div class="fecha field">
            <label class="label" for="">Escoge una fecha</label>
            <div class="control">
                <input type="date" name="fecha" id="">
            </div>
        </div>
        <div class="hora field">
            <label class="label" for="">Escoge la hora</label>
            <div class="control">
                <input type="time" name="hora" id="">
            </div>
            <div class="container-button">
                <button name="enviar">Enviar</button>
            </div>
        </div>
    </form>
</body>
</html>
    