<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="es" >

<head>
  <meta charset="UTF-8">
  <title>CRUD</title>
 
</head>

<body>

  <div class="form">
    <h1>Bienvenido al CRUD de ejemplo</h1>

    <p>Aquí puedes elegir una de las siguientes opciones:</p>

    <li>
      <a href="<?php echo base_url() ?>CrudController/insertarView">Insertar</a>
      <a href="<?php echo base_url() ?>CrudController/verView">Ver</a>
      <a href="<?php echo base_url() ?>CrudController/updateView">Actualizar</a>
      <a href="<?php echo base_url() ?>CrudController/eliminarView">Eliminar</a>
    </li>
    

  </div>

</body>

</html>
