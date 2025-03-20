<?php

/* Plantilla de Modelo */

class Modelo {
	private static $bd;
	
	// Conexión con la base de datos
	public static function conectarBD() {
		// Configuración de los parámetros de conexión (podrían estar en un fichero externo de configuración)
		$dsn = "mysql:dbname=dwes;host=127.0.0.1";
		$usuario = "root";
		$password = "";
		try {
			// Creamos la conexión a la base de datos
			self::$bd = new PDO($dsn,$usuario,$password);
			return(false);
		}
		catch (PDOException $e) {
			// 	Establecemos el mensaje de error según el código y descripción
			$_SESSION["error"] = "Error [".$e->getCode()."] al abrir la base de datos: ".$e->getMessage();
			return($e);
		}
	}
	
	// Desconexión de la base de datos
	public static function desconectarBD() {
		self::$bd = null;
	}
}

?>