<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_m extends CI_Model {
	public function __construct() {
		parent::__construct();
		//Do your magic here
	}
	
	public function obtenerDatosDeUsuario($usuario, $contrasenia){
		$customQuery = "SELECT * FROM usuarios WHERE nom_usuario = ".$usuario." AND contrasenia = ".$contrasenia."  ;";
		$resultado = $this->db->query($customQuery);
		// $resultado = 1;
		if ($resultado) {
			return $resultado;
		} else {
			return "false";
		}
	}
}

/* End of file usuario_m.php */
/* Location: ./application/models/usuario_m.php */