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
    <!-- Fuente -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
    <!-- ****** -->
    <link rel="stylesheet" href="../css/styles.css">

</head>

<body>
    <div class="blur">
        <div class="blur2">
        <form class="login" METHOD='POST' ACTION='../services/comprobaruser.php'>

            <h1>LOGIN</h1>
            <p>Fallo al iniciar sesión, porfavor, inténtelo de nuevo</p>
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
                <input type="submit" value="Iniciar Sesión" name='login' class="button">
            </div>
        </form>
    </div>
    </div>
    <script>alert('Credenciales incorrectas, porfavor intentelo de nuevo')</script>
</body>

</html>