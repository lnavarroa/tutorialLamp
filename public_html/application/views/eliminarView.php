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
          <h1>Ingrese el email que desea eliminar.</h1>
          
          <form action="<?php echo base_url() ?>CrudController/eliminarDatos" method="post">

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name="userEmail" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Continuar</button>
          
          </form>

        </div>
               
      </div><!-- tab-content -->
      
</div> <!-- /form -->

</body>

</html>
