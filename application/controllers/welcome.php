<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model(array('tramites_m'));
    }

	/**
	 * Index Controlador que se carga por default, el primero en toda la aplicacion web
	 * segun la arquitectura de CodeIgniter. Se envian a la vista principal las etiquetas correspondientes,
	 * la vista que primero se carga es para dar acceso al usuario con sus credenciales.
	 * 
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()	{
		$datos['tramites']=$this->tramites_m->traerEstatusTramites();
		$this->load->view('index',$datos);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */