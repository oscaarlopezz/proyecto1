<?php
include_once '../services/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
</head>


<body>

<select id="[id]"> 
<?php $sql="SELECT * FROM tbl_dept";
$result=mysqli_query($conexion,$sql);

foreach ($result as $linea){ ?>
    <option value="<?php echo $linea['id_dept']; ?>" ><?php echo $linea['nom_dept']; ?></option>
<?php } ?>
  



</body>
</html>