<?php 
session_start();
if (isset($_SESSION['nom_admin'])){
?>

<!DOCTYPE html>
<html>
<title>Actualizar Alumno</title>
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
require_once 'conexion.php';

$id=$_REQUEST['id_alumne'];

$result = mysqli_query($conexion,"SELECT * FROM `tbl_alumne` where `id_alumne`=$id");
$alumno=mysqli_fetch_array($result);

$sql="SELECT * FROM tbl_classe";
$result=mysqli_query($conexion,$sql);

?>

<body>
    <h1>Actualizar Alumno</h1>
    <div class="container">
        <div class="fondo">
            <div class="fondo2">
                <form action="recibiractualizarAl.php" method="POST">
                <div class="form-group">
                <br/>
                <div class="form-row">
                    <div class="col-9">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>" size="40">
                        <label for="text">Nombre: </label>
                        <input type="text" class="form-control" name="Nombre" value="<?php echo $alumno['nom_alu'];?>" size="40">
                    </div>
                    <div class="col">
                            <label for="usr">DNI: </label>
                            <input type="text" class="form-control" name="DNI" size="40" value="<?php echo $alumno['dni_alu'];?>" >
                    </div>
                </div>    
                <div class="row">
                        <div class="col">
                            <label for="pwd">1º Apellido: </label>
                            <input type="text" class="form-control" name="1r_Apellido" size="40" value="<?php echo $alumno['cognom1_alu'];?>" >
                        </div>
                    <div class="col">
                        <label for="text">2º Apellido: </label>
                        <input type="text" class="form-control" name="2o_Apellido" size="40" value="<?php echo $alumno['cognom2_alu'];?>">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="text">Correo: </label>
                        <input type="email" class="form-control" name="Correo" placeholder="user@ejemplo.com" size="40" value="<?php echo $alumno['email_alu'];?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Clase: </label>
                        <select class="form-control" name="Classe" id="[id]"> 
                        <?php foreach ($result as $linea){ ?>
                            <option value="<?php echo $linea['id_classe']; ?>" ><?php echo $linea['nom_classe']; ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="text">Teléfono: </label>
                        <input type="text" class="form-control" name="Telefono" size="40" value="<?php echo $alumno['telf_alu'];?>">
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
