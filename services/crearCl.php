<!DOCTYPE html>
<html>
<title>Crear Clases</title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Creación de clases</title>
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
    <link rel="stylesheet" href="../css/stylescrear.css">
</head>

<body>
    <h1>Registrar Clase</h1>
    <div class="container">
        <div class="fondo">
            <div class="fondo2">
                <form action="recibircrearClases.php" method="get">
                <div class="form-group">
                <br/>
                <div class="form-row">
                    <div class="col-6">
                        <label for="text">Codigo clase: </label>
                        <input type="text" class="form-control" name="codi_clase" size="40">
                    </div>
                    <div class="col">
                            <label for="usr">Nombre clase : </label>
                            <input type="text" class="form-control" name="nom_clase" size="40">
                    </div>
                </div>    
                <div class="row">
                        <div class="col">
                            <label for="pwd">Tutor: </label>
                            <input type="text" class="form-control" name="tutor" size="40">
                        </div>
                </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-success" value="Enviar">
                        <input type="reset" class="btn btn-danger" value="Borrar">
                    </div>
                    </p>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>