<?php

include 'conexion.php';

$id=$_GET['id'];
echo "Tu id es $id";

//$conexion = mysqli_connect("localhost","root","","bd_escuela");

$delete = mysqli_query($conexion,"DELETE FROM tbl_dept Where id_dept=$id");
header("Location:datos.php");