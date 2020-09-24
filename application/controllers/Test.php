<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {


	public function index()
	{
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode(['col1' => 'val1']));
	}
}
