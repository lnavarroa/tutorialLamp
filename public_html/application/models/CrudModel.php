<?php
class CrudModel extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }

   public function insertar($id=null, $userEmail, $userPass){ //Create

   	$data = array(
   		'id' 		=> $id,	
   		'email' 	=> $userEmail,
   		'pass' 	=> $userPass
		);
		$this->db->insert('registrousuarios', $data);
	}

   public function ver(){                           //Read
      return $resultado = $this->db->get('registrousuarios'); // Produces: SELECT * FROM mytable
   }

   public function actualizar($id=null, $userEmail, $userPass){ //Update

      $data = array(
         'id'     => $id,  
         'email'  => $userEmail,
         'pass'   => $userPass
      );
      $this->db->where('email', $userEmail);
      $this->db->update('registrousuarios', $data);
   }

   public function eliminar($userEmail){                   //Delete
      $this->db->where('email', $userEmail);
      $this->db->delete('registrousuarios');
   }

}   

   

   
/*
	public function prueba(){
		$id = null;
   		$data = array(
   		'userId' 		=> $id,	
   		'userName' 		=> 'usuarioTest',
   		'userLastName' => 'userapellidoTest',
   		'userEmail' 	=> 'userEmailTest',
   		'userPass' 		=> 'userPassTest'
		);
		$this->db->insert('users', $data);
	}
} */