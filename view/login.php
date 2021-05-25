<!DOCTYPE html>
<html lang="es">
<?php 
session_start();
session_unset();
session_destroy();
?>
<head>
    <meta charset="UTF-8">
    <title>Gestion Escuela</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/840141709606256701/844882574925234196/login.png" />
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <!-- ********* -->
    <!-- Fuente -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
    <!-- ****** -->
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/script.js"></script>

</head>

<body>
    <div class="blur">
        <div class="blur2">
        <form class="login" METHOD='POST' ACTION='../services/comprobaruser.php' onsubmit="return validar()">
            <h1>LOGIN</h1>

            <?php 
            // error_reporting(0);
            ?>            
            <div class="escuela">
                <div class="input-escuela">
                    <i class="fas fa-user icon"></i>
                    <input type="text" name='user' required VALUE='' placeholder="Usuario">
                </div>  
                <div class="input-escuela">
                    <i class="fas fa-key icon"></i>
                    <input type="password" name='password' required VALUE='' placeholder="Contraseña">
                    <br>
                    <br>
                </div>
                <!-- <div class="alert alert-danger"></div> -->
                <input type="submit" value="Iniciar Sesión" name='login' class="button">
            </div>
        </form>
    </div>
    </div>
</body>

</html>