<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container justify-content-center mt-5" style="width:100%">
       
        <!-- Formulario de registro -->
        <div class="card shadow-lg mt-5" style=" max-width: 700px" id="form-registro">
            <div class="card-body">
                <h5 class="mt-3 mb-5 text-center">Registrarse<span id="acceder"> o Iniciar sesión</span></h5>
                <form action="./controllers/signup.php" method="POST">
                    <input class="form-control mb-3" type="text" name="name" placeholder="Nombre" required>
                    <input class="form-control mb-3" type="text" name="surname" placeholder="Apellido" required>
                    <input class="form-control mb-3" type="email" name="email" placeholder="Email" required>
                    <input class="form-control mb-3" type="password" name="password" placeholder="Contraseña" required>
                    <button class="btn btn-primary mb-3" type="submit">Crear usuario</button>
                </form>
            </div>
        </div>
         <!-- Formulario iniciar sesión -->
         <div class="card shadow-lg mt-5" style=" max-width: 700px" id="form-acceso">
            <div class="card-body">
                <h5 class="mt-3 mb-5 text-center">Iniciar sesión<span id="registro"> o Registrarse</span></h5>
                <!-- pregunto si la variable de sesión está disponible -->
                <?php if(isset($_SESSION['registro'])){?>
                    <div class="alert alert-success" role="alert">
                        <?= $_SESSION['registro'] ?>
                    </div>
                <?php } 
                    unset($_SESSION['registro']);
                ?>
                <?php if(isset($_SESSION['login'])){?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['login'] ?>
                    </div>
                <?php } 
                    unset($_SESSION['login']);
                ?>
                <form action="./controllers/signin.php" method="POST">
                    <input class="form-control mb-3" type="email" name="email" placeholder="Email" required>
                    <input class="form-control mb-3" type="password" name="password" placeholder="Contraseña" required>
                    <button class="btn btn-primary mb-3" type="submit">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
    
</body>
</html>