<?php
//Include la conexion
include 'conexion.php';
$user = $_POST['user'];
$password = $_POST['password'];
/*$usernada = mysqli_real_escape_string($conexion,$user);*/
$sql = "SELECT * FROM tbl_admin where email_admin='{$user}' and pass_admin='{$password}'";
$result = mysqli_query($conexion,$sql);
$num = mysqli_num_rows($result);
echo $num;
mysqli_free_result($result);

if ($num == 1){
    session_start();
    $_SESSION['nom_admin']=$user;
    header("Location:../view/datos.php");
}
else{
header("Location:mens.php")
}