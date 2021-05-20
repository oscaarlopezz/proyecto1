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
    <link rel="stylesheet" href="../css/stylescrear.css">
</head>

<?php
include_once '../services/conexion.php';
?>


<?php $sql="SELECT * FROM tbl_dept";
$result=mysqli_query($conexion,$sql);
?>

<body>
    <h1>Registrar Profesor</h1>
    <div class="container">
        <div class="fondo">
            <div class="fondo2">
                <form action="recibircrearPr.php" method="POST">
                <div class="form-group">
                <br/>
                <div class="form-row">
                    <div class="col-4">
                        <label for="text">Nombre: </label>
                        <input type="text" class="form-control" name="nom_pr" size="40">
                    </div>
                    <div class="col">
                            <label for="usr">Correo: </label>
                            <input type="email" class="form-control" name="email_pr" placeholder="user@ejemplo.com" size="40">
                    </div>
                </div>    
                <div class="row">
                        <div class="col">
                            <label for="pwd">1º Apellido: </label>
                            <input type="text" class="form-control" name="cognom1_pr" size="40">
                        </div>
                    <div class="col">
                        <label for="text">2º Apellido: </label>
                        <input type="text" class="form-control" name="cognom2_pr" size="40">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-5">
                        <label for="text">Teléfono: </label>
                        <input type="text" class="form-control" name="telf_pr" size="40">
                    </div>
                    <div class="col">
                        <label for="inputState">Departamento</label>
                        <select class="form-control" name="dept" id="[id]"> 
                        <?php foreach ($result as $linea){ ?>
                            <option value="<?php echo $linea['id_dept']; ?>" ><?php echo $linea['nom_dept']; ?></option>
                        <?php } ?>
                        </select>
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
</body>
</html>
<?php
}else {
    header("location: ../view/sinacceso.php");
}