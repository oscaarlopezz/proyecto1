<?php
session_start();
if (isset($_SESSION['nom_admin'])){

	require_once '../conexion.php';
	$sql = "select * from tbl_classe";
	$query = $conexion->query($sql);
	header('Content-Encoding: UTF-8');
	header('Content-Type: application/csv;charset=UTF-8');
	header('Content-Disposition: attachment;filename=clases.csv;');
	echo "\xEF\xBB\xBF";
	if($query){
		echo "id_classe".";";
		echo "codi_classe".";";
		echo "nom_classe".";";
		echo "tutor"."\n";
		while($r  = $query->fetch_object()){
			echo $r->id_classe.";";
			echo $r->codi_classe.";";
			echo $r->nom_classe.";";
			echo $r->tutor."\n";
		}
	}

}else {
    header("location: ../../view/sinacceso.php");
}