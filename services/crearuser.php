<!DOCTYPE html>
<html>
<title>Crear Usuarios</title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Creación de usuarios</title>
    <!-- Bootstrap -->
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
</head>

<body>
    <div class="container">
    <form action="recibirdatos.php" method="get">
    <div class="form-group">
    <br/>
    <div class="row">
        <p>
            <label for="text">DNI: </label>
            <input type="text" class="form-control" name="servidor" size="40">
        </p>
            <div class="col">
                <label for="usr">Nombre: </label>
                <input type="text" class="form-control" name="user" size="40">
            </div>
    </div>    
    <div class="row">
            <div class="col">
                <label for="pwd">1º Apellido: </label>
                <input type="text" class="form-control" name="passwd" size="40">
            </div>
        <p>
            <label for="text">2º Apellido: </label>
            <input type="text" class="form-control" name="bd" size="40"></p>
    </div>
    <div class="row">
            <div class="col">
                <label for="pwd">Correo: </label>
                <input type="text" class="form-control" name="passwd" size="40">
            </div>
        <p>
            <label for="text">Teléfono: </label>
            <input type="text" class="form-control" name="bd" size="40"></p>
        <p>
    </div>
    <p>
        <label for="text">Clase: </label>
        <input type="text" class="form-control" name="bd" size="40"></p>
    <p>
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" class="btn btn-warning" value="Enviar">
            <input type="reset" class="btn btn-danger" value="Borrar">
        </div>
        </p>
    </div>
    </form>
</div>

</body>
</body>