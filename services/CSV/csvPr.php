<?php
session_start();
if (isset($_SESSION['nom_admin'])){

	require_once '../conexion.php';
	$sql = "select * from tbl_professor";
	$query = $conexion->query($sql);
	header('Content-Encoding: UTF-8');
	header('Content-Type: application/csv;charset=UTF-8');
	header('Content-Disposition: attachment;filename=profesores.csv;');
	echo "\xEF\xBB\xBF";
	
	if($query){
		echo "id_professor".";";
		echo "nom_prof".";";
		echo "cognom1_prof".";";
		echo "cognom2_prof".";";
		echo "email_prof".";";
		echo "telf".";";
		echo "dept"."\n";

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

}else {
    header("location: ../../view/sinacceso.php");
}