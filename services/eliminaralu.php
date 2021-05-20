<?php

include 'conexion.php';

$id=$_GET['id_alumne'];
echo "Tu id es $id";

//$conexion = mysqli_connect("localhost","root","","bd_escuela");

$update = mysqli_($conexion, "")

$delete = mysqli_query($conexion,"DELETE FROM tbl_alumne Where id_alumne=$id");
header("Location:../view/datos.php");