<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CapituloDosController extends CI_Controller {

	public function index()
	{
		$this->load->view('capituloDosView');
	}

}
