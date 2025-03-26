<?php
session_start();
$_SESSION['msg_info'] = "";
require_once './src/modelo.php';
require_once './src/vista.php';
require_once './src/controlador.php';

// Inicializamos la variable de acción para evitar errores si no existe
if (!isset($_POST['accion'])) $opcion[0] = ''; else $opcion = array_keys($_POST['accion']);

// En $opcion[0] está almacenada la acción elegida por el usuario

switch ($opcion[0]) {
	// Registro de usuario en registro.html
	case "registro_registrarse":
		Controlador::usuarioRegistro();
		break;
	// Alta de usuario en registro.html
	case "registro_alta_de_usuario":
		Controlador::usuarioAlta();
		break;
	default:
		Controlador::iniciar();
}

?>