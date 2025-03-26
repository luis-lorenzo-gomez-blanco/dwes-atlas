<?php

/* Plantilla de Controlador */

class Controlador {
	
	public static function hazAlgo() {
		$error=Modelo::conectarBD();
		if(!$error) {
			$resultado=Modelo::hazAlgo();
			// Si se produce un error en la operación SQL, el tipo de dato
			// devuelto será un objeto (PDOException); en caso contrario,
			// el tipo devuelto será un array o un texto.
			if (gettype($resultado) == "object") {
				$error = true;
			}
		}
		if ($error) {
			$_SESSION["mensaje"] = 'Se ha producido un error ('.$error.'): '.$error->getCode();
			// La operación ha finalizado con error y podemos realizar alguna acción
		}
		else {
			// La operación se ha efectuado con éxito y podemos realizar alguna acción
			return ($resultado);
		}
		Modelo::desconectarBD();
	}
}
		
?>