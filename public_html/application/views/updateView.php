<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  <title>Insertar</title>
 
</head>

<body>

  <div class="form">
      
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Rellene los campos para insertar en la base de datos.</h1>
          
          <form action="<?php echo base_url() ?>CrudController/insertarDatos" method="post">

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name="userEmail" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              contraseña<span class="req">*</span>
            </label>
            <input type="password" name="userPass" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Continuar</button>
          
          </form>

        </div>
               
      </div><!-- tab-content -->
      
</div> <!-- /form -->

</body>

</html>
