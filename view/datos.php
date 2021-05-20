<?php
session_start();
if (isset($_SESSION['nom_admin'])){
?>
<!DOCTYPE html>
<html>
<!-- <title>Crear Usuarios</title> -->
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
    <title>Tablas</title>
</head>

<body>
    <div class="cr">
        <br>
    </div>
    <div class="cr">
        <a href="datosAl.php" class="btn btn-dark" role="button" aria-pressed="true">Tabla Alumnos</a>
        <br>        <br>
        <a href="datosPr.php" class="btn btn-dark" role="button" aria-pressed="true">Tabla Profesores</a>
        <br>        <br>
        <a href="datosDe.php" class="btn btn-dark" role="button" aria-pressed="true">Tabla Departamentos</a>
        <br>        <br>
        <a href="datosCl.php" class="btn btn-dark" role="button" aria-pressed="true">Tabla Clases</a>
    </div>
</body>
</html>
<?php
}else {
    header("location: sinacceso.php");
}