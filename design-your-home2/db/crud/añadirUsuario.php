
<?php 
    include("../conexion.php");
    $rol = $_POST['rol'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dirrecion = $_POST['dirrecion'];
    $celular = $_POST['celular'];
    $cedula = $_POST['cc'];
    $email = $_POST['email'];
    $pasword = $_POST['pasword'];

    $consulta = "INSERT INTO `usuario`( `ID_rol`, `nombre`, `apellidos`, `cedula`,`telefono`, `dirrecion`, `correo`, `contraseña`) VALUES ('$rol','$nombre','$apellido','$cedula','$celular','$dirrecion','$email','$pasword')";

    $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuario WHERE correo = '$email'");
    $ejecutar = mysqli_query($conexion,$consulta);
    
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '<script> alert("Este correo ya esta registrado")
            window.location ="../registro.html";
        </script>';
        exit();
    }

    if($ejecutar > 0 ){
        echo '<script> alert("Te registraste correctamente")
            window.location ="usuarios.php";
        </script>';
    }else{
        echo '<script> alert("Ocurrio un fallo")
            window.location ="../registro.html";
        </script>';
    }

    // mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    
    
?>

