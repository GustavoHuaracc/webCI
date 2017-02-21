<?php
/**
* 
*/
class MLogin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->driver('session');	
	}
	
	public function ingresar($usu,$pass)
	{
		$this->db->select('p.idPersona,u.idusuario,p.nombre,p.apepaterno,p.apematerno');
		$this->db->from('tutorialci.usuario u');
		$this->db->join('tutorialci.persona p ','p.idpersona=u.idPersona');
		$this->db->where('u.nomUsuario',$usu);
		$this->db->where('u.clave',$pass);

		$resultado=$this->db->get();
		if ($resultado->num_rows()==1) {
			$r=$resultado->row();// tomo solo el registro

			$s_usuario = array(
					's_idPersona'=>$r->idPersona,
					's_idusuario'=>$r->idusuario,
					's_usuario'=>$r->nombre.", ".$r->apepaterno." ".$r->apematerno

				);
			$this->session->set_userdata($s_usuario);//guardar la sesion en la variable session dura 2 horas 
			return 1;
		}else{
			return 0;
		}

	}

}