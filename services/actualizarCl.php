<!DOCTYPE html>
<html>
<title>Actualizar Alumno</title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Actualiza la clase</title>
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

?>

<?php $sql="SELECT * FROM tbl_professor";
$result=mysqli_query($conexion,$sql);

$id=$_REQUEST['id_classe'];

$result = mysqli_query($conexion,"SELECT * FROM `tbl_classe` where `id_classe`=$id");
$alumno=mysqli_fetch_array($result);
$result2=mysqli_query($conexion,$sql);
?>




<body>
    <h1>Actualizar Clase</h1>
    <div class="container">
        <div class="fondo">
            <div class="fondo2">
                <form action="recibiractualizarCl.php" method="POST">
                <div class="form-group">
                <br/>
                <div class="form-row">
                    <div class="col-7">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>" size="40">
                        <label for="text">Código Clase: </label>
                        <input type="text" class="form-control" name="Codigo" value="<?php echo $alumno['codi_classe'];?>" size="40">
                    </div>
                    <div class="col">
                            <label for="text">Classe: </label>
                            <input type="text" class="form-control" name="Nombre" size="40" value="<?php echo $alumno['nom_classe'];?>" >
                    </div>
                </div>    
                    <div class="form-group col-md-6">
                        <label for="inputState">Tutor: </label>
                        <select class="form-control" name="Tutor" id="[id]"> 
                        <?php foreach ($result2 as $linea){ ?>
                            <option value=<?php echo $linea['id_professor']; ?>><?php echo $linea['nom_prof']; ?></option>
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
