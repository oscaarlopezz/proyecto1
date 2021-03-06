<!DOCTYPE html>
<html lang="es">

<?php

// include_once '../services/comp.php';
include_once '../services/conexion.php';
session_start();
if (isset($_SESSION['nom_admin'])){
  

?>
    <head>
        <meta charset="UTF-8">
        <title>Gestion Escuela</title>
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
        <link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/840141709606256701/844880983950098447/bd.png" />
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
        <link rel="stylesheet" href="../css/stylesD.css">
        <!-- <link rel="stylesheet" href="../css/loginmail.css"> -->
        <script src="../js/menu.js"></script>
    </head>
    <body>
    <nav>
  <ul class="menu">
    <li class="item button secondary"><a href="../services/crear.php">Crear</a></li>
    <li class="item"><a href="datosPr.php">Profesores</a></li>
    <li class="item"><a href="datosCl.php">Clases</a></li>
    <li class="item"><a href="datosDe.php">Departamentos</a></li>
    <li class="item button"><a href="../services/logout.php">Log Out</a></li>
    <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
  </ul>
</nav>
<h1>Alumnos</h1>
    <div class="filtro">
    <b><u>Filtro</u></b>
        <form action="datosAl.php" method="POST">
            <input class="input1_t" type="text" value="" placeholder="Inserta datos para filtrar" name="fil">
            <input class="buscar" type="submit" value="Filtrar" name="filtro">
        </form>
    </div>
    <div class="csv">
    <a href="../services/CSV/csvAl.php" class="btn btn-primary" role="button" aria-pressed="true">Descargar CSV</a>
</div>
    <?php
    error_reporting(0);
    $fil = $_POST['fil'];
    if ((isset($_POST['fil']) && $fil != '')) {
      $result = mysqli_query($conexion,"SELECT * from tbl_alumne inner join tbl_classe on tbl_alumne.classe=tbl_classe.id_classe where tbl_alumne.id_alumne like '%$fil%' or tbl_alumne.dni_alu like '%$fil%' or tbl_alumne.nom_alu like '%$fil%' or tbl_alumne.cognom1_alu like '%$fil%' or tbl_alumne.cognom2_alu like '%$fil%' or tbl_alumne.telf_alu like '%$fil%' or tbl_alumne.email_alu like '%$fil%' or tbl_classe.nom_classe like '%$fil%'");
      $sql = "SELECT * from tbl_alumne inner join tbl_classe on tbl_alumne.classe=tbl_classe.id_classe where tbl_alumne.dni_alu like '%$fil%' or tbl_alumne.nom_alu like '%$fil%' or tbl_alumne.cognom1_alu like '%$fil%' or tbl_alumne.cognom2_alu like '%$fil%' or tbl_alumne.telf_alu like '%$fil%' or tbl_alumne.email_alu like '%$fil%' or tbl_classe.nom_classe like '%$fil%'";
          $count = mysqli_query($conexion,$sql);
          $num = mysqli_num_rows($count);
  }else {
          $result = mysqli_query($conexion,"SELECT * from tbl_alumne inner join tbl_classe on tbl_alumne.classe=tbl_classe.id_classe");
          $sql = "SELECT * from tbl_alumne inner join tbl_classe on tbl_alumne.classe=tbl_classe.id_classe";
          $count = mysqli_query($conexion,$sql);
          $num = mysqli_num_rows($count);
  }

      //  Check connection
  //      if (!$conexion) {
  //          die("Connection failed: ".mysqli_connect_error());
  //      }
  //     $sql="SELECT tbl_alumne.id_alumne,tbl_alumne.dni_alu,tbl_alumne.nom_alu,tbl_alumne.cognom1_alu,tbl_alumne.cognom2_alu,tbl_alumne.telf_alu,tbl_alumne.email_alu,tbl_classe.nom_classe FROM tbl_alumne INNER JOIN tbl_classe on tbl_alumne.classe=tbl_classe.id_classe";
  //     $result=mysqli_query($conexion,$sql);
      // ----------------------------------------------
?>
<h6>Se ha encontrado <?php echo "$num"; ?> dato/s que coinciden con la b??squeda</h6>

    <div class="table">
    <table class="table table-striped">
            <thead class="table-dark">
                <th>Id Alumno</th>
                <th>DNI</th>
                <th>Nombre</th>
                <th>1r Apellido</th>
                <th>2o Apellido</th>
                <th>Tel??fono</th>
                <th>Correo</th>
                <th>Clase</th>
                <th>???</th>
                <th>???</th>
            </thead>
            <?php
                foreach ($result as $registro){
            ?>
                <tr>
                    <td><?php echo "{$registro['id_alumne']}";?></td>
                    <td><?php echo "{$registro['dni_alu']}";?></td>
                    <td><?php echo "{$registro['nom_alu']}";?></td>
                    <td><?php echo "{$registro['cognom1_alu']}";?></td>
                    <td><?php echo "{$registro['cognom2_alu']}";?></td>
                    <td><?php echo "{$registro['telf_alu']}"?></td>
                    <td><?php echo "{$registro['email_alu']}"?></td>
                    <td><?php echo "{$registro['nom_classe']}"?></td>
                    <td><?php echo "<a href='../services/actualizarAl.php?id_alumne=".$registro['id_alumne']."' class='btn btn-warning' role='button' aria-pressed='true'>Actualizar</a>"?></td>
                    <td><?php echo "<a href='../services/eliminaralu.php?id_alumne=".$registro['id_alumne']."' class='btn btn-danger' role='button' aria-pressed='true'>Eliminar</a>"?></td>
                </tr>
            <?php } ?>
    </table>
    </div>

<!-- Enviar Mail-->
<!-- <div class="center">
  <button id="show-login">Enviar Correo</button>
</div>
<div class="popup">
  <div class="close-btn">&times;</div>
  <form class="" method="post" action="../services/crear.php">
  <div class="form">
    <h2>Debes tener cuenta de administrador para poder enviar correos</h2>
    <div class="form-element">
      <label for="email">Email</label>
      <input type="text" id="user" placeholder="introduce tu email">
    </div>
    <div class="form-element">
      <label for="password">Password</label>
      <input type="password" id="password" placeholder="Introduce tu contrase??a">
    </div>
    <div class="form-element">
      <button type="sumbit">Enviar</button>
    </div>
    </form>
    </div>
  </div>
</div> -->

<?php 
    
// echo "HOLA $user";
}else {
  header("location: sinacceso.php");
}
mysqli_close($conexion);
?>
</div>
</body>
</html>