<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IntroController extends CI_Controller {

	public function index()
	{
		$this->load->view('introView');
	}

}
