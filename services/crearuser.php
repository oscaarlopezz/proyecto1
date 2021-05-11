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
        <div class="col-8">
            <label for="text">Nombre: </label>
            <input type="text" class="form-control" name="Nombre" size="40">
        </div>
        <div class="col-2">
                <label for="usr">DNI: </label>
                <input type="text" class="form-control" name="DNI" size="40">
        </div>
    </div>    
    <div class="row">
            <div class="col">
                <label for="pwd">1º Apellido: </label>
                <input type="text" class="form-control" name="1r_Apellido" size="40">
            </div>
        <div class="col">
            <label for="text">2º Apellido: </label>
            <input type="text" class="form-control" name="2o_Apellido" size="40">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="text">Correo: </label>
            <input type="text" class="form-control" name="Correo" size="40">
        </div>
        <div class="form-group col-md-4">
            <label for="text">Clase: </label>
            <input type="text" class="form-control" name="Clase" size="40"></p>
        </div>
        <div class="form-group col-md-2">
            <label for="text">Teléfono: </label>
            <input type="text" class="form-control" name="Telefono" size="40"></p>
        </div>
    </div>
    
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