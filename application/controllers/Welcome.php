<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		return $this->load->view('login');
	}

	public function upd_nom() 
    {
        $this->load->model('usuario_model','usr');
        $this->load->helper('nombre_split_helper');
        $usuarios = $this->usr->get_all();

        foreach ($usuarios as $key => $u) {
            $nombre = nombreSplit($u['nombre'],TRUE);

            $u['nombre'] = $nombre['Nombres'];
            $u['a_paterno'] = $nombre['Paterno'];
            $u['a_materno'] = $nombre['Materno'];

            $m = $u['matricula'];
            unset($u['matricula']);

            $this->usr->update($u,$m);
        }
        
        var_dump($usuarios);
    }

	public function upd_nom2() 
    {
        $this->load->model('usuario_model','usr');
        $usuarios = $this->usr->updt();
        
        var_dump($usuarios);
    }
}
