<?php
    include("./php/connect.php");

    if(isset($_POST["registrar"])){
        if(strlen($_POST["nombre"]) >= 1 && strlen($_POST["apellido"]) >= 1 && strlen($_POST["email"]) >= 1){
            $nombre = trim($_POST["nombre"]);
            $apellido = trim($_POST["apellido"]);
            $email = $_POST["email"];
            $clave = $_POST["clave"];
            $consulta = "INSERT INTO usuario(nombre, apellido, email, clave) VALUES ('$nombre','$apellido','$email','$clave')";
            $resultado = mysqli_query($conexion, $consulta);

            if($resultado){
                echo "<h3>Se ha creado el usuario con exito.</h3>";
            }else{
                echo "<h3>Ocurrio un error. Favor intentar de nuevo.</h3>";
            }
        }else{
            echo "<h3>Campos obligatorios incompletos.</h3>";
        }
    }