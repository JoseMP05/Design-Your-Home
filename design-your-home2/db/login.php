<?php
    include("conexion.php");
    $usuario=$_POST['email'];
    $contraseña = $_POST['pasword'];
    session_start();
    $_SESSION['email'] = $usuario;

    // $conexion = mysqli_connect('localhost','root','','design');
    // include('db.php');

    $consulta = "SELECT * FROM usuario WHERE correo='$usuario' and contraseña='$contraseña'";
    $resultado = mysqli_query($conexion,$consulta);
    $filas=mysqli_fetch_array($resultado);

    if($filas['ID_rol']==1){    
        header("location:crud/usuarios.php");
    }else
    if($filas['ID_rol']==2){
        header('location:../index.html');
    }
    else{
        echo '<script> alert("No estas registrado")
            window.location ="../login.html";
        </script>';   
        }  
    
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?> 