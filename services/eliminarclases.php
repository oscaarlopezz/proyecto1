<?php 
session_start();
if (isset($_SESSION['nom_admin'])){


include 'conexion.php';

$id=$_GET['id_classe'];
echo "Tu id es $id";


$delete = mysqli_query($conexion,"DELETE FROM tbl_classe Where id_classe=$id");
header("Location:../view/datosCl.php");
}else {
    header("location: ../view/sinacceso.php");
}
