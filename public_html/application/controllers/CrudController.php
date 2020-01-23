<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller {


	public function index()
	{
		$this->load->view('crudView');
	}


/*************************** Insertar *****************************/
	public function insertarView()
	{
		$this->load->view('insertarView');
	}

	public function insertarDatos()
	{
		//Obtiene los datos del formulario
		$id 			= null;
		$userEmail 		= $this->input->post('userEmail');
		$userPass 		= $this->input->post('userPass');

		$this->load->model('CrudModel');
		$this->CrudModel->insertar($id,$userEmail,$userPass);

		$this->load->view('crudView');
	}
/*************************** /Insertar *****************************/

/*************************** Ver *****************************/
	public function verView()
	{
		$this->load->view('verView');
	}

	public function verDatos()
	{
		//Obtiene los datos del formulario
		$this->load->model('CrudModel');
      	$datos['registrousuarios'] = $this->CrudModel->ver();
      	$this->load->view('resultadosView',$datos);
	}
/*************************** /Ver *****************************/

/*************************** Update *****************************/
	public function updateView()
	{
		$this->load->view('updateView');
	}

	public function updateDatos()
	{
		//Obtiene los datos del formulario
		$id 			= null;
		$userEmail 		= $this->input->post('userEmail');
		$userPass 		= $this->input->post('userPass');

		$this->load->model('CrudModel');
		$this->CrudModel->updateDatos($id,$userEmail,$userPass);

		$this->load->view('crudView');
	}
/*************************** /Update *****************************/

/*************************** Eliminar *****************************/


	public function eliminarView()
	{
		$this->load->view('eliminarView');
	}

	public function eliminarDatos()
	{
		//Obtiene los datos del formulario
		$userEmail 		= $this->input->post('userEmail');

		$this->load->model('CrudModel');
		$this->CrudModel->eliminar($userEmail);

		$this->load->view('crudView');
	}

/*************************** /Eliminar *****************************/

	

}
