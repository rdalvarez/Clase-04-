<?php 
include_once ("php/Estacionamiento.php");

var_dump($_POST);
echo "<br><br>";	

if (isset($_POST['Ingresar'])) {

	$aux=$_POST['txtIngreso'];
	Estacionamiento::Guardar($aux);	
}else
{
	Estacionamiento::Sacar($_POST['txtIngreso']);
}

//$milistado = Estacionamiento::Leer();
//var_dump($milistado);
	
echo '<p><a href="index.php">Volver</a></p>';
?>