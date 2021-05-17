<?php
require_once '../conexion.php';
$sql = "select * from tbl_dept";
$query = $conexion->query($sql);
if($query){
	while($r  = $query->fetch_object()){
		echo $r->id_dept.",";
		echo $r->codi_dept.",";
		echo $r->nom_dept."\n";
	}
}


header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename=departamentos.csv;');