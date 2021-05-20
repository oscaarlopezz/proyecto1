<?php 
session_start();
if (isset($_SESSION['nom_admin'])){


include 'conexion.php';

$id=$_GET['id_classe'];
echo "Tu id es $id";


$update="UPDATE tbl_classe SET tutor=NULL WHERE tutor=$id";
$updprofe= mysqli_query($conexion,$update);

$delete = mysqli_query($conexion,"DELETE FROM tbl_classe Where id_classe=$id");
header("Location:../view/datosCl.php");
}else {
    header("location: ../view/sinacceso.php");
}
