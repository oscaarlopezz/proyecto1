<?php 
session_start();
if (isset($_SESSION['nom_admin'])){
?>
<!DOCTYPE html>
<html>
<title>Crear Usuarios</title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- ********* -->
    <!-- Fuente -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
    <!-- ****** -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../css/stylescrear.css">
    <title>Formulario de entrada del dato</title>
</head>

<body>
    <div class="cr">
        <br>
    </div>
    <div class="cr">
        <a href="../services/crearAl.php" class="btn btn-info" role="button" aria-pressed="true">Crear Alumno</a>
        <br>        <br>
        <a href="../services/crearPr.php" class="btn btn-info" role="button" aria-pressed="true">Crear Profesor</a>
        <br>        <br>
        <a href="../services/crearDe.php" class="btn btn-info" role="button" aria-pressed="true">Crear Departamento</a>
        <br>        <br>
        <a href="../services/crearCl.php" class="btn btn-info" role="button" aria-pressed="true">Crear Clase</a>
    </div>
</body>
</html>
<?php
}else {
    header("location: ../view/sinacceso.php");
}