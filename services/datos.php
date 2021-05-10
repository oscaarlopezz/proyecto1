<?php
if (isset($_GET['login'])){
    session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Gestion Escuela</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../css/stylesdatos.css">

</head>
<body>
    <div class="two-columns">
    <input type="submit" value="Crear" name='craeruser' class="button" href="crearuser.php">
<?php
    if(!empty($_SESSION['nom_admin'])){
        $conexion = mysqli_connect("localhost","root","","????");
    
        $result = mysqli_query($conexion,"SELECT * FROM ????");
        echo "<a href='crearusers.php'>crear</a>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
        echo "<th>Curso</th>";
        echo "<th>Grupo</th>";
        echo "<th>Edad</th>";
        echo "<th>Actualizar</th>";
        echo "<th>Eliminar</th>";
        echo "</th>";
    
        foreach ($result as $registro){
            echo "<tr>";
            echo "<td>{$registro['id_alumno']}</td>";
            echo "<td>{$registro['nombre_alu']}</td>";
            echo "<td>{$registro['apellidos_alu']}</td>";
            echo "<td>{$registro['curso_alu']}</td>";
            echo "<td>{$registro['grupo_alu']}</td>";
            echo "<td>{$registro['edad_alu']}</td>";
            echo "<form method='GET' action='actualizar.php'>";
            echo "<input type='hidden' name='id' value='$registro[id_alumno]'>";
            echo "<td><input type='submit' value='Enviar' onclick=\"return confirm('Quieres ir a actualizar?')\" >";
            echo "</td></form>";
            echo "<td><button><a href='eliminar.php?id=$registro[id_alumno]'>Eliminar</a></button></td>";
            echo "</tr>";
        }
        echo "</table>";
        }
    
    else{
        header("Location:login.php");
    }   
}else {
    header("location:../index.php");
}
?>
</body>
</html>
