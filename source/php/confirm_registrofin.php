<?php
    if(isset($_POST["bandname"]))
    { //REGISTRO BANDA
        session_start();
        // if(!(alreadyExists($_POST["register_bandname"],"bands"))) { COMPROBACIÓN SI NOMBRE BANDA EXISTE EN BASE "bands", IMPLEMENTAR CON BASE DE DATOS
        $_SESSION["bandname"] = $_POST["register_bandname"];
        $_SESSION["style"] = $_POST["register_style"];
        $_SESSION["city"] = $_POST["register_city"];
        header('Location: ../html/registro_exito.html');
        /* else
        {
            $message = "El nombre de la banda ya existe";
            echo "<script type='text/javascript'>
            alert('$message');
            window.location = '../html/registro_banda.html';
            </script>";
        } */
    }
    else 
    { //REGISTRO GARITO 
        if(strlen($_POST["register_phone"])==9)
        { //COMPROBACIÓN TELÉFONO VÁLIDA
            session_start();
            $_SESSION["localname"] = $_POST["register_localname"];
            $_SESSION["address"] = $_POST["register_address"];
            $_SESSION["capacity"] = $_POST["register_capacity"];
            $_SESSION["style"] = $_POST["register_style"];
            $_SESSION["phone"] = $_POST["register_phone"];
            header('Location: ../html/registro_exito.html');
        }
        else
        {
            $message = "Introduce un teléfono válido";
            echo "<script type='text/javascript'>
            alert('$message');
            window.location = '../html/registro_garito.html';
            </script>";
        }
    }
?>