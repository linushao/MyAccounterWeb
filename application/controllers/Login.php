<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index($name='', $password='')
	{
		// echo json_encode(['asdf'=>123]);

		if ($name && $password) {
			// $data = $this->input->post();
			// echo json_encode($data);
			echo json_encode([$name, $password]);
			return;
		} else {
			echo json_encode(['asdf'=>123]);
		}
	}


	public function view($value='', $value2='')
	{
		// echo 'value: '.$value.'<br>';
		// echo 'value2: '.$value2;

		echo json_encode([$value, $value2]);


		// echo json_encode(array(1234,1234,1234));
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */