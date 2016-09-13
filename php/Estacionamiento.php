<?php
/*
clase estacionamiento
metodo estatico guardar
recibe por parametro $patente
* 
*/
class Estacionamiento
{
	public static function Guardar($patente)
	{
		$archivo = fopen("Estacionados.txt", "a"); //creo el archivo

		$ahora = date("Y-m-d H:i:s");

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

			$auto = explode("=>", $renglon);//devuelve un array

			$listadoDeAutos[] = $auto; //lo paso al string
		}

		fclose($archivo);

		return $listadoDeAutos;
	}

	public static function Sacar($patente)
	{
		$miListadoEstacionado = Estacionamiento::Leer();

		foreach ($miListadoEstacionado as $auto) {
			if ($patente == $auto[0]) {
				$ahora = date("Y-m-d H:i:s"); //La hora tiene que ser con ":" sino no sirve el strotime
				$inicio=$auto[1];
				$diferencia = strtotime($ahora) - strtotime($inicio); //saco la diferencia de tiempo
				//var_dump( $diferencia);
				//echo "<br> ($ahora) ";
				//var_dump($ahora);
				//echo "<br>". strtotime($inicio);
				echo "Tiempo transcurrido: ". $diferencia;
			}
		}
	}
}
?>
