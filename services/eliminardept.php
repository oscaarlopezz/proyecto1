<?php 
session_start();
if (isset($_SESSION['nom_admin'])){


include 'conexion.php';

$id=$_GET['id_dept'];
echo "Tu id es $id";


$delete = mysqli_query($conexion,"DELETE FROM tbl_dept Where id_dept=$id");
header("Location:../view/datosDe.php");
}else {
    header("location: ../view/sinacceso.php");
}