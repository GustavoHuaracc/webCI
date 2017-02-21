<?php
/**
* 
*/
class MPersona extends CI_Model
{
	
	function __construct()
	{
		$this->load->driver('session');	
	}
	public function guardar($param){
		$campos = array(
				'DNI'=>$param['DNI'],
				'nombre'=>$param['nombre'],
				'apepaterno'=>$param['apepaterno'],
				'apematerno'=>$param['apematerno'],
				'email'=>$param['email'],
				'fechanac'=>$param['fechanac'],
				//'nomUsuario'=>$param['nomUsuario'],
				//'clave'=>$param['clave']
			);
		//insersion BD
		$this->db->insert('persona',$campos);
		return $this->db->insert_id();

	}
	public function actualizarDatos($param){
		$campos = array(
				'nombre'=>$param['nombre'],
				'apepaterno'=>$param['apepaterno'],
				'apematerno'=>$param['apematerno'],
				'email'=>$param['email'],
			);
		//insersion BD
		$this->db->update('persona',$campos);
		$this->db->where('idPersona',$this->session->userdata('s_idPersona'));
		return 1;
	}
	public function eliminarPersona($idP){
			$campos=array(
				'idPersona'=>$idP
			);
			$this->db->delete('persona',$campos);
			//$this->db->where('idPersona',$idP);
			//$this->db->delete('usuario');
	}		
}