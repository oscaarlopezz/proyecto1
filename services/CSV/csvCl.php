<?php
require_once '../conexion.php';
$sql = "select * from tbl_classe";
$query = $conexion->query($sql);
if($query){
	while($r  = $query->fetch_object()){
		echo $r->id_classe.",";
		echo $r->codi_classe.",";
		echo $r->nom_classe.",";
		echo $r->tutor."\n";
	}
}


header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename=classes.csv;');