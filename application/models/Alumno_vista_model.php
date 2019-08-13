<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alumno_vista_model extends MY_Model
{
	public $table = 'alumno_completo';
	public $primary_key = 'matricula';
	
	public function __construct()
	{
		$this->return_as = 'object' | 'array';

		parent::__construct();
	}
}
