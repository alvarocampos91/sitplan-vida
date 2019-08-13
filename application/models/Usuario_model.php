<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends MY_Model
{
	public $table = 'usuario';
	public $primary_key = 'matricula';
	public $protected = ['matricula'];
	
	public function __construct()
	{
		$this->timestamps = FALSE;
		$this->return_as = 'object' | 'array';

		parent::__construct();
	}

	public function updt()
	{
		$query = $this->db->query("SELECT * FROM `usuario` WHERE `a_paterno` LIKE '% %' AND `matricula` NOT IN ('201308087','201309505','201563020')");
		$arr = [];

		foreach ($query->result_array() as $row)
		{
			$m = $row['matricula'];
			unset($row['matricula']);
			$ex = explode(" ", $row['a_paterno']);

			$row['nombre'] = $row['a_materno'].' '.$row['nombre'];
			$row['a_materno'] = '';

			foreach ($ex as $key => $value) {
				$value = ucfirst($value);
				if ($key == 0) 
				{
					$row['a_paterno'] = $value;
				}
				else
				{
					$row['a_materno'] = ($row['a_materno']=='')? $value: ($row['a_materno'].' '.$value);
				}
			}

			$arr[] = $row;
		    $this->update($row,$m);
		}

		return $arr;
	}
}
