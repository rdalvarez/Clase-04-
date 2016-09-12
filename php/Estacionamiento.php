<?php
/*
clase estacionamiento
metodo estatico guardar
recibe por parametro $patente
* 
*/
class Estacionamiento
{
	static function Guardar($patente)
	{
		$archivo = fopen("Estacionados.txt", "a"); //creo el archivo

		fwrite($archivo, $patente); //escribo el archivo

		fclose($archivo); //cierro el archivo

		echo "Esta guardado";
	}
}
?>
