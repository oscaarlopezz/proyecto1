<?php
session_start();
if (isset($_SESSION['nom_admin'])){

	require_once '../conexion.php';
	$sql = "select * from tbl_dept";
	$query = $conexion->query($sql);
	header('Content-Encoding: UTF-8');
	header('Content-Type: application/csv;charset=UTF-8');
	header('Content-Disposition: attachment;filename=departamentos.csv;');
	echo "\xEF\xBB\xBF";
	if($query){
		echo "id_dept".";";
		echo "codi_dept".";";
		echo "nom_dept"."\n";

		while($r  = $query->fetch_object()){
			echo $r->id_dept.";";
			echo $r->codi_dept.";";
			echo $r->nom_dept."\n";
		}
	}

}else {
    header("location: ../../view/sinacceso.php");
}