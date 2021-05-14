<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="../../css/stylesD.css">
</head>
<body>
<?php

include_once '../conexion.php';

$sql1="SELECT * FROM tbl_classe";
$result1=mysqli_query($conexion,$sql1);
?>
<div class="container">
        <div class="fondo">
            <div class="fondo2">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                <br/>
                <div class="form-row">
                    <div class="col-7">
                        <label for="text">Nombre: </label>
                        <input type="text" class="form-control" name="Nombre" size="40">
                    </div>
                    <div class="col">
                            <label for="usr">DNI: </label>
                            <input type="text" class="form-control" name="DNI" size="40">
                    </div>
                </div>    
                <div class="row">
                        <div class="col">
                            <label for="pwd">1º Apellido: </label>
                            <input type="text" class="form-control" name="Ape" size="40">
                        </div>
                    <div class="col">
                        <label for="text">2º Apellido: </label>
                        <input type="text" class="form-control" name="Ape2" size="40">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="text">Correo: </label>
                        <input type="email" class="form-control" name="Correo" placeholder="user@ejemplo.com" size="40">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Clase: </label>
                        <select class="form-control" name="Classe" id="[id]">
                        <option active> Elije una opcion</option>
                        <?php foreach ($result as $linea){ ?>
                            <option value="<?php echo $linea['id_classe']; ?>" ><?php echo $linea['nom_classe']; ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="text">Teléfono: </label>
                        <input type="text" class="form-control" name="Telefono" size="40">
                    </div>
                </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-success" value="Enviar">
                        <input type="reset" class="btn btn-danger" value="Borrar">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php
$DNI = ['DNI'];
$Nombre = $_POST['Nombre'];
$Ape = $_POST['Ape'];
$Ape2 = $_POST['Ape2'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Classe = $_POST['Classe'];


$sql = "SELECT * FROM tbl_alumno WHERE dni_alu like '%$DNI%' or nom_alu like '%$Nombre%' or cognom1_alu like '%$Ape%' or cognom2_alu like '%$Ape2%' or telf_alu like '%$Telefono%' or email_alu like '%$Correo%' or classe like '%$Classe%'";
$result = mysqli_query($conexion,$sql);
?>
<div class="container">
<table class="table table-striped">
<tr>
<th>DNI</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Apellido 2</th>
<th>Telefono</th>
<th>Correo</th>
<th>Clase</th>
</tr>
<?php
foreach ($result as $datos){
    echo "<tr>";
    echo "<td>{$datos['dni_alu']}</td>";
    echo "<td>{$datos['nom_alu']}</td>";
    echo "<td>{$datos['cognom1_alu']}</td>";
    echo "<td>{$datos['cognom2_alu']}</td>";
    echo "<td>{$datos['telf_alu']}</td>";
    echo "<td>{$datos['email_alu']}</td>";
    echo "<td>{$datos['classe']}</td>";
    echo "</tr>";
}
?>
</table>
</div>
</body>
</html>