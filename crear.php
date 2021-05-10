<!DOCTYPE html>
<html>
<title>Crear Usuarios</title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulario de entrada del dato</title>
</head>

<body>
    <br>
    <form action="recibircrear.php" method="POST">
        <p>Nombre: <input type="text" name="nombre" size="40"></p>
        <p>Apellido: <input type="text" name="apellido" size="40"></p>
        <p>Curso: <input type="text" name="curso" size="40"></p>
        <p>Grupo: <input type="text" name="grupo" size="40"></p>
        <p>Edad: <input type="text" name="edad" size="40"></p>
            <p>
                <input type="submit" value="Enviar">
                <input type="reset" value="Borrar">
            </p>
        </p>
    </form>
</body>
</body>