<?php

include 'conexion.php';

$id=$_GET['id_alumne'];
echo "Tu id es $id";

//$conexion = mysqli_connect("localhost","root","","bd_escuela");

$delete = mysqli_query($conexion,"DELETE FROM tbl_alumne Where id_alumne=$id");
header("Location:../view/datosAl.php");