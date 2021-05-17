<?php
require_once '../conexion.php';
$sql = "select * from tbl_professor";
$query = $conexion->query($sql);
if($query){
	while($r  = $query->fetch_object()){
		echo $r->id_professor.";";
		echo $r->nom_prof.";";
		echo $r->cognom1_prof.";";
		echo $r->cognom2_prof.";";
		echo $r->email_prof.";";
		echo $r->telf.";";
		echo $r->dept."\n";
	}
}


header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename=animal.csv;');