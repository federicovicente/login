<?php
    session_start();

    require('../database/database.php');

    $sql = 'INSERT INTO usuarios (nombre, apellido, email, contrasenia, administrador, activo) VALUES (:nombre, :apellido, :email, :contrasenia, :administrador, :activo)';

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['name']);
    $stmt->bindParam(':apellido', $_POST['surname']);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':contrasenia', $password);
    $noAdmin = 0;
    $stmt->bindParam(':administrador', $noAdmin);
    $usuarioActivo = 1;
    $stmt->bindParam(':activo', $usuarioActivo);

    if($stmt->execute()){
        $message = "Usuario registrado";
        // Creo una variable de sesión
        $_SESSION['registro'] = $message;
        header("Location: ../index.php");
    }else{
        $message = "No ha sido posible egistar al usuario";
        // Creo una variable de sesión
        $_SESSION['registro'] = $message;
        header("Location: ../index.php");
    }
?>