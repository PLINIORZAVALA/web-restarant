<?php
	date_default_timezone_set('America/Lima');
	include_once 'conexion.php';
	$sql = "SELECT *FROM empresa LIMIT 1";
	$query = $conector->query($sql);
	$company = array();
	while($row = $query->fetch_array()){
		$company = $row;
	}
	//Prueba de datos
	//echo $company['celEmp'];
	$template = array(
		'active_page' => basename($_SERVER['PHP_SELF']),
		'clave_publica' => "EAPIIS",
		'version' => "1.0",
		'author' => "Max Plinior Zavala Ayvar",
		'name' => "TIO DIES LUCAS"
	);
	
	
	
?>