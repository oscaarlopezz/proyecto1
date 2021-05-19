<?php 
session_start();
if (isset($_SESSION['nom_admin'])){


include 'conexion.php';

$id=$_GET['id_professor'];
echo "Tu id es $id";


$delete = mysqli_query($conexion,"DELETE FROM tbl_professor Where id_professor=$id");
header("Location:../view/datosPr.php");
}else {
    header("location: ../view/sinacceso.php");
}
