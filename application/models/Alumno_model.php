<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alumno_model extends MY_Model
{
	public $table = 'alumno';
	public $primary_key = 'matricula';
	public $fillable = ['seccion','f_egreso'];
	public $protected = ['matricula'];
	
	public function __construct()
	{
		$this->timestamps = FALSE;
		$this->return_as = 'object' | 'array';

		parent::__construct();
	}
}
