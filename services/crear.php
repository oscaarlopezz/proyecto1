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
        <p>DNI: <input type="text" name="DNI" size="40"></p>
        <p>Nombre: <input type="text" name="Nombre" size="40"></p>
        <p>1r Apellido: <input type="text" name="1r_Apellido" size="40"></p>
        <p>2o Apellido: <input type="text" name="2o_Apellido" size="40"></p>
        <p>Telefono: <input type="text" name="Telefono" size="40"></p>
        <p>Correo: <input type="text" name="Correo" size="40"></p>
        <p>Clase: <input type="text" name="Clase" size="40"></p>
            <p>
                <input type="submit" value="Enviar">
                <input type="reset" value="Borrar">
            </p>
        </p>
    </form>
</body>
</body>