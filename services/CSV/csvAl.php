<?php
session_start();
if (isset($_SESSION['nom_admin'])){
	require_once '../conexion.php';
	$sql = "select * from tbl_alumne";
	$query = $conexion->query($sql);
	if($query){
		echo "id_alumne".";";
		echo "dni_alu".";";
		echo "nom_alu".";";
		echo "cognom1_alu".";";
		echo "cognom2_alu".";";
		echo "telf_alu".";";
		echo "email_alu".";";
		echo "classe"."\n";

		while($r  = $query->fetch_object()){
			echo $r->id_alumne.";";
			echo $r->dni_alu.";";
			echo $r->nom_alu.";";
			echo $r->cognom1_alu.";";
			echo $r->cognom2_alu.";";
			echo $r->telf_alu.";";
			echo $r->email_alu.";";
			echo $r->classe."\n";
		}
	}


	header('Content-Type: application/csv');
	header('Content-Disposition: attachment; filename=alumnes.csv;');
}else {
    header("location: ../../view/sinacceso.php");
}
