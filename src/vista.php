<?php

class Vista {
	public static function usuarioLogin() {
		$contenido = 'login.html';
		include './frm/main.html';
	}
	public static function mostrarPrincipal() {
		include './frm/main.html';
	}
	public static function usuarioRegistro() {
		$contenido = 'blank.html';
		include './frm/main.html';
	}
	public static function usuarioAlta() {
		$contenido = 'blank.html';
		include './frm/main.html';
	}
	public static function atlasAnadir() {
		$contenido = 'frm_alta.html';
		include './frm/main.html';
	}
	public static function atlasModificar() {
		$contenido = 'frm_modificar.html';
		include './frm/main.html';
	}
	public static function atlasMostrar() {
		$contenido = 'frm_mostrar.html';
		include './frm/main.html';
	}
	public static function atlasEliminar() {
		$contenido = 'frm_eliminar.html';
		include './frm/main.html';
	}
	public static function atlasBuscar() {
		$contenido = 'frm_buscar.html';
		include './frm/main.html';
	}
}
?>