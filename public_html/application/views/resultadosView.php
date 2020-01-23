<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Ver Usuarios</title>

  
</head>

<body>

      
      <div class="tab-content">

          
          <h1>Aqui se despliegan todos los usuarios registrados</h1>

          <a href="<?php echo base_url() ?>CrudController/">Volver</a>

          <table>
      <tr>
        <th>email de usuario</th>
        
        <br>
      </tr>
      <tbody>
        <?php
        $registrousuarios;

        foreach ($registrousuarios->result() as $row):?>
        <tr>
            
              <td><?php echo $row->email ?></td>
              
            </tr>
        <?php endforeach;
        ?>
      </tbody>
    </table>

        
      </div><!-- tab-content -->

</body>

</html>
