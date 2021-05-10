<!DOCTYPE html>
<html lang="es">

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
    <form class="login">

        <h1>LOGIN</h1>
        <div class="escuela">
            <div class="input-escuela">
                <i class="fas fa-user icon"></i>
                <input type="text" name='usuario' required VALUE='' placeholder="Usuario">
            </div>  
            <div class="input-escuela">
                <i class="fas fa-key icon"></i>
                <input type="password" name='password' required VALUE='' placeholder="Contraseña">
                <br>
                <br>
            </div>
            <input type="submit" value="Iniciar Sesión" name='login' class="button" href="datos.php">
        </div>
    </form>

</body>

</html>