<?php 
session_start();
if (isset($_SESSION['nom_admin'])){

$id=$_POST['id'];
$Nombre=$_POST['Nombre'];
$Codigo=$_POST['Codigo'];
$Tutor=$_POST['Tutor'];


require_once 'conexion.php';

$sql="UPDATE tbl_classe SET  codi_classe= '$Codigo', nom_classe= '$Nombre', tutor= '$Tutor'
WHERE id_classe=$id;";
mysqli_query($conexion,$sql);






header("Location:../view/datosCl.php");
echo $sql;

// else {
//     header("Location:../services/actualizarAl.php");
// }
}else {
    header("location: ../view/sinacceso.php");
}