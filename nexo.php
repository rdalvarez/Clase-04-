<?php 
include_once ("php/Estacionamiento.php");

	var_dump($_POST);
	echo "<br>";	

	if (isset($_POST['Ingresar'])) {

		$aux=$_POST['txtIngreso'];
		Estacionamiento::Guardar($aux);	
	}
	
 ?>