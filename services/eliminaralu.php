<?php 
session_start();
if (isset($_SESSION['nom_admin'])){


include 'conexion.php';

$id=$_GET['id_alumne'];
echo "Tu id es $id";


$update = mysqli_($conexion, "")

$delete = mysqli_query($conexion,"DELETE FROM tbl_alumne Where id_alumne=$id");
header("Location:../view/datosAl.php");

}else {
    header("location: ../view/sinacceso.php");
}