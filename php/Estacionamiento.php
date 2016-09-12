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

		$ahora = date("Y-m-d H-i-s");

		$renglon = $patente . "=>" . $ahora . "\n";

		fwrite($archivo, $renglon); //escribo el archivo

		fclose($archivo); //cierro el archivo

		echo "Esta guardado";
	}

	public static function Leer()
	{
		$listadoDeAutos = array(); //creamos un array

		//$listaDeAutosLeida[] = "Primer Elemento"; //manera de agregar un elemento

		$archivo = fopen("Estacionados.txt", "r");

		while (!feof($archivo)) { //hasta que no este en el ultimo renglon del archivo
			$renglon = fgets($archivo); //saco el renglon

			$listadoDeAutos[] = $renglon; //lo paso al string
		}

		fclose($archivo);

		return $listadoDeAutos;
	} 
}
?>
