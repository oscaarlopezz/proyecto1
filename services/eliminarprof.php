<?php

include 'conexion.php';

$id=$_GET['id'];
echo "Tu id es $id";

//$conexion = mysqli_connect("localhost","root","","bd_escuela");

$delete = mysqli_query($conexion,"DELETE FROM tbl_professor Where id_professor=$id");
header("Location:datos.php");