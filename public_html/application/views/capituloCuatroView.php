<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="tutorial codeigniter">
    <meta name="YLIT" content="ylit soluciones tecnologicas">

    <title>CodeIgniter Tutorial</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url() ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>css/clean-blog.min.css" rel="stylesheet">

    <style>
      a { color: #FF0000; } /* CSS link color */
    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url() ?>">Inicio</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>">Home</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>">Contactanos</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo base_url() ?>img/images.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>CodeIgniter 3 Tutorial</h1>
              <span class="subheading">Desarrollado por <a href="https://ylit.cl/">YLIT</a></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
          <!-- Intro descripcion -->
          <div class="post-preview">
            
              <h1 class="post-title">
                Capítulo 4:
              </h1>
              <h1 class="post-title">
                CRUD simplificado.
              </h1>


              <p>
                Ahora ya tenemos los conocimientos necesarios para comenzar a crear un CRUD. Esto será un acceso 
                de la forma más simple a una base de datos, para aprender como insertar, modificar, leer y borrar datos 
                de una base de datos.
              </p>

              <p>
                Para el caso de este tutorial, se trabajará con una base de datos llamada "clientes" la cual solo tendrá 
                una tabla llamada "registrousuarios", que la vez solo tendrá 3 campos "id, email, pass" (aquí 
                el campo pass correspondiente a la password de algún usuario no se encuentra encriptado, lo cual 
                será profundizado en un capítulo futuro.)
              </p>

              <h3 class="post-subtitle">
                La base de datos.
              </h3>

              <p>
                En phpMyAdmin crearemos una base de datos llamada "clientes", la cual tendrá una tabla llamada "registrousuarios",
                A continuación se muestra el código de la creación de la tabla:
<code>
CREATE TABLE `clientes`.`registroUsuarios` <br>
( `id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(45) <br>
CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL , `pass` VARCHAR(45) <br>
CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; <br>
</code>
              </p>

              <h3 class="post-subtitle">
                El modelo.
              </h3>

              <p>
                Crearemos un modelo con nombre CrudModel.php, el cual tendra el siguiente código: <br>
                <code>
&lt;?php
class CrudModel extends CI_Model { <br>
   public function __construct() {  <br>
      parent::__construct();        <br>
   }                                <br>

   public function insertar($id=null, $userEmail, $userPass){ //Create <br>

    $data = array(      <br>
      'id'    => $id,   <br>
      'email'   => $userEmail,  <br>
      'pass'  => $userPass      <br>
    );                          <br>
    $this->db->insert('registrousuarios', $data);   <br>
  }       <br>

   public function ver(){                           <br>
      return $resultado = $this->db->get('registrousuarios'); // Produces: SELECT * FROM mytable  <br>
   }  <br>

   public function actualizar($id=null, $userEmail, $userPass){ //update<br>

      $data = array(<br>
         'id'     => $id,  <br>
         'email'  => $userEmail,  <br>
         'pass'   => $userPass    <br>
      );    <br>
      $this->db->update('registrousuarios', $data); <br>
   }    <br>

   public function eliminar($userEmail){                   //delete<br>
      $this->db->where('email', $userEmail);    <br>
      $this->db->delete('registrousuarios');  <br>
   }  <br>

}     <br>

                </code>
              </p>

              <p>
                No olvidar que el nombre de la clase <b>CrudModel</b> debe comenzar por mayúscula y tener el mismo nombre
                que el archivo .php. Este archivo contiene los cuatro métodos para construir un CRUD de usuarios o clientes
                o cualquier tipo de acceso a base de datos. No olvidar que se pueden tener los modelos que se deseen, con 
                los distintos tipos de métodos que se deseen.
              </p>

              <p>
                La función <b>insertar</b> recibe los parámetros que le envía el controlador, luego dentro de la función, los datos que recibe
                esta, son almacenados en el arreglo $data, para luego insertarlos en la tabla que se desea, que en este caso 
                dicha tabla se llama <b>registrousuarios</b>.
              </p>

              <p>
                La funcion <b>ver</b> no recibe datos ya que en este caso para hacer una consulta lo más simple posible, 
                se muestran todos los registros que tenga la tabla. La idea en este tutorial es ver como esta función devuelve 
                los datos para luego poder verlos en la página que se muestra al usuario de nuestra página.
              </p> 

              <p>
                La funcion <b>actualizar</b>, por lo general es muy similar a la función <b>insertar</b>, salvo que en vez de <b>insert</b>
                lleva un <b>update</b>.
              </p> 

              <p>
                Y por último la función <b>eliminar</b>, borra los registros de la base de datos.
              </p>

              <p>
                Por el momento se deja el modelo así, de la forma más simple posible. Más adelante se le agregarán las validaciones 
                correspondientes
              </p>


              <h3 class="post-subtitle">
                Las vistas.
              </h3>

              <p>
                Crearemos un archivo .php llamado <b>crudView.php</b>, en el cual pondremos links hacia las vistas correspondientes
                a insertar, actualizar, ver y eliminar datos. La página se muestra en este 
                <a href="<?php echo base_url() ?>CrudController/">link</a>
                 El código de esta vista es el que se muestra a continuación: <br>

                <code>
&lt;?php <br>
defined('BASEPATH') OR exit('No direct script access allowed');<br>
?><br>

&lt;!DOCTYPE html><br>
&lt;html lang="es" ><br>

&lt;head><br>
  &lt;meta charset="UTF-8"><br>
  &lt;title>CRUD</title><br>
 
&lt;/head><br>

&lt;body><br>

  &lt;div class="form"><br>
    &lt;h1>Bienvenido al CRUD de ejemplo</h1><br>

    &lt;p>Aquí puedes elegir una de las siguientes opciones:</p><br>

    &lt;li><br>
      &lt;a href="&lt;?php echo base_url() ?>CrudController/insertarView">Insertar</a><br>
      &lt;a href="&lt;?php echo base_url() ?>CrudController/verView">Ver</a><br>
      &lt;a href="&lt;?php echo base_url() ?>CrudController/updateView">Actualizar</a><br>
      &lt;a href="&lt;?php echo base_url() ?>CrudController/eliminarView">Eliminar</a><br>
    &lt;/li><br>
    

  &lt;/div><br>

&lt;/body><br>

&lt;/html><br>
                </code>
              </p>

              <p>
                Como se puede observar en el código anterior, solo nos dirige a las opciones que se desean, 
                por ejemplo el primer link <b>Insertar</b>, llama al método <b>insertarView</b> del controlador que tendremos,
                dicho método despliega la vista al usuario, y así de igual forma para los demás links.
                A continuación se muestra el código de la vista para insertar datos.
              </p>
            
                
              <p><b>Vista insertar</b></p>

              <p>
                En la carpeta de vistas, crearemos un archivo con extensión .php, al cual llamaremos <b>insertarView.php</b>, esta vista
                será llamada desde el método insertarView del controlador. Esta página muestra al usuario un pequeño y simple 
                formulario que pide ingresar el email y contraseña de un usuario y luego los almacena en la base de datos.
              </p>

              <code>
&lt;?php <br>
defined('BASEPATH') OR exit('No direct script access allowed');<br>
?><br>

&lt;!DOCTYPE html><br>
&lt;html lang="en" ><br>

&lt;head><br>

  &lt;meta charset="UTF-8"><br>
  &lt;title>Insertar</title><br>
 
&lt;/head><br>

&lt;body><br>

  &lt;div class="form"><br>
      
      
      &lt;div class="tab-content"><br>
        &lt;div id="signup">   <br>
          &lt;h1>Rellene los campos para insertar en la base de datos.</h1><br>
          
          &lt;form action="&lt;?php echo base_url() ?>CrudController/insertarDatos" method="post"><br>

          &lt;div class="field-wrap"><br>
            &lt;label><br>
              Email<span class="req">*</span><br>
            &lt;/label><br>
            &lt;input type="email" name="userEmail" required autocomplete="off"/><br>
          &lt;/div><br>
          
          &lt;div class="field-wrap"><br>
            &lt;label><br>
              contraseña<span class="req">*</span><br>
            &lt;/label><br>
            &lt;input type="password" name="userPass" required autocomplete="off"/><br>
          &lt;/div><br>
          
          &lt;button type="submit" class="button button-block"/>Continuar</button><br>
          
          &lt;/form><br>

        &lt;/div><br>
               
      &lt;/div><!-- tab-content --><br>
      
&lt;/div> <!-- /form --><br>

&lt;/body><br>

&lt;/html><br>
              </code>

              <p>
                Lo relevante en este código para nosotros es poner atención en como funciona el formulario que se despliega
                al usuario, lo primero que debemos fijarnos es en la línea<br>
                <code>&lt;form action="&lt;?php echo base_url() ?>CrudController/insertarDatos" method="post"></code>, ya
                que ésta indica la acción del formulario, en otras palabras, aquí indicamos hacia donde se deben
                enviar los datos que el usuario ingresa, con <b>action</b> estamos indicando que los datos van hacia el método
                <b>insertarDatos</b> de nuestro controlador CrudController, luego <b>method</b> indica la forma en que se estan
                enviando los datos hacia el controlador, para este caso es mediante post (tambien puede ser get, pero
                de momento no se comentará detalles de las diferencias).

                El otro punto importante a considerar en el código, son las lineas: <br>
                <code>
                  &lt;input type="email" name="userEmail" required autocomplete="off"/><br>
                  &lt;input type="password" name="userPass" required autocomplete="off"/><br>
                </code>
                aquí es importante el atributo <b>name</b>, en el cual para el caso del email se llama <b>"userEmail"</b>
                y para el caso de la password se llama <b>"userPass</b>, ya que posteriormente en nuestro controlador necesitaremos
                estos nombres para extraer los datos del formulario y luego poder enviarlos al modelo que los inserte en la
                base de datos.
              </p>

              <p>
                Para las siguientes 3 vistas, el funcionamiento es muy similar a lo que se acaba de explicar.
              </p>

              <p><b>Vista ver</b></p>

              <code>

              </code>
            
            <p><b>Vista actualizar</b></p>
            <code>
&lt;?php <br>
defined('BASEPATH') OR exit('No direct script access allowed');<br>
?><br>

&lt;!DOCTYPE html><br>
&lt;html lang="en" ><br>

&lt;head><br>

  &lt;meta charset="UTF-8"><br>
  &lt;title>Insertar</title><br>
 
&lt;/head><br>

&lt;body><br>

  &lt;div class="form"><br>
      
      
      &lt;div class="tab-content"><br>
        &lt;div id="signup">   <br>
          &lt;h1>Rellene los campos para insertar en la base de datos.</h1><br>
          
          &lt;form action="&lt;?php echo base_url() ?>CrudController/insertarDatos" method="post"><br>

          &lt;div class="field-wrap"><br>
            &lt;label><br>
              Email<span class="req">*</span><br>
            &lt;/label><br>
            &lt;input type="email" name="userEmail" required autocomplete="off"/><br>
          &lt;/div><br>
          
          &lt;div class="field-wrap"><br>
            &lt;label><br>
              contraseña<span class="req">*</span><br>
            &lt;/label><br>
            &lt;input type="password" name="userPass" required autocomplete="off"/><br>
          &lt;/div><br>
          
          &lt;button type="submit" class="button button-block"/>Continuar</button><br>
          
          &lt;/form><br>

        &lt;/div><br>
               
      &lt;/div><!-- tab-content --><br>
      
&lt;/div> <!-- /form --><br>

&lt;/body><br>

&lt;/html><br>
            </code>

            <p><b>Vista eliminar</b></p>
            <code>
&lt;?php <br>
defined('BASEPATH') OR exit('No direct script access allowed');<br>
?><br>

&lt;!DOCTYPE html><br>
&lt;html lang="en" ><br>

&lt;head><br>

  &lt;meta charset="UTF-8"><br>
  &lt;title>Insertar</title><br>
 
&lt;/head><br>

&lt;body><br>

  &lt;div class="form"><br>
      
      
      &lt;div class="tab-content"><br>
        &lt;div id="signup">   <br>
          &lt;h1>Ingrese el email que desea eliminar.</h1><br>
          
          &lt;form action="&lt;?php echo base_url() ?>CrudController/eliminarDatos" method="post"><br>

          &lt;div class="field-wrap"><br>
            &lt;label>
              Email<span class="req">*</span><br>
            &lt;/label><br>
            &lt;input type="email" name="userEmail" required autocomplete="off"/><br>
          &lt;/div><br>
          
          &lt;button type="submit" class="button button-block"/>Continuar</button><br>
          
          &lt;/form><br>

        &lt;/div><br>
               
      &lt;/div><!-- tab-content --><br>
      
&lt;/div> <!-- /form --><br>

&lt;/body><br>

&lt;/html><br>
            </code>

          </div>
          <hr>

          <h3 class="post-subtitle">
                El Controlador.
          </h3>

          <p>
            Ahora que ya tenemos las vistas y el moedelo, solo queda unir todo mediante un controlador, en la carpeta
            controllers, crearemos un archivo llamado CrudController.php, el cual contendrá el siguiente código: <br>
          </p>

          <p>

            <code>
&lt;?php <br>
defined('BASEPATH') OR exit('No direct script access allowed');<br>

class CrudController extends CI_Controller {<br>


  public function index()<br>
  {<br>
    $this->load->view('crudView');<br>
  }<br>


/*************************** Insertar *****************************/<br>
  public function insertarView()<br>
  {
    $this->load->view('insertarView');<br>
  }<br>

  public function insertarDatos()<br>
  {<br>
    //Obtiene los datos del formulario<br>
    $id       = null;<br>
    $userEmail    = $this->input->post('userEmail');<br>
    $userPass     = $this->input->post('userPass');<br>

    $this->load->model('CrudModel');<br>
    $this->CrudModel->insertar($id,$userEmail,$userPass);<br>

    $this->load->view('crudView');<br>
  }<br>
/*************************** /Insertar *****************************/<br>

/*************************** Ver *****************************/<br>
  public function verView()<br>
  {<br>
    $this->load->view('verView');<br>
  }<br>

  public function verDatos()<br>
  {<br>
    
    $this->load->model('CrudModel');<br>
        $datos['registrousuarios'] = $this->CrudModel->ver();<br>
        $this->load->view('resultadosView',$datos);<br>
  }<br>
/*************************** /Ver *****************************/<br>

/*************************** Update *****************************/<br>
  public function updateView()<br>
  {<br>
    $this->load->view('updateView');<br>
  }<br>

  public function updateDatos()<br>
  {<br>
    //Obtiene los datos del formulario<br>
    $id       = null;<br>
    $userEmail    = $this->input->post('userEmail');<br>
    $userPass     = $this->input->post('userPass');<br>

    $this->load->model('CrudModel');<br>
    $this->CrudModel->updateDatos($id,$userEmail,$userPass);<br>

    $this->load->view('crudView');<br>
  }<br>
/*************************** /Update *****************************/<br>

/*************************** Eliminar *****************************/<br>


  public function eliminarView()<br>
  {<br>
    $this->load->view('eliminarView');<br>
  }<br>

  public function eliminarDatos()<br>
  {<br>
    //Obtiene los datos del formulario<br>
    $userEmail    = $this->input->post('userEmail');<br>

    $this->load->model('CrudModel');<br>
    $this->CrudModel->eliminar($userEmail);<br>

    $this->load->view('crudView');<br>
  }<br>

/*************************** /Eliminar *****************************/<br>

}<br>
            </code>
          </p>

          <p>
            El método insertarDatos mediante la ejecución de <b>post('userEmail')</b> obtiene el email ingresado 
            por el usuario, es importante aquí <b>'userEmail'</b> ya que éste es el nombre que tiene el campo email
            en la vista correspondiente, lo mismo para el caso del campo <b>userPass</b>. Luego el método carga el modelo
            y llama al método insertar del modelo cargado, al cual le pasa las variables <b>$id,$userEmail,$userPass</b>. 
            Finalmente el método carga la vista <b>'crudView'</b>.
          </p>

          <p>
            La explicación de los demás métodos es muy similar a la de insertarDatos, por lo que se deja al lector su análisis.
          </p>




          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="<?php echo base_url() ?>CapituloCincoController/">Capítulo Siguiente &rarr;</a>
            &nbsp &nbsp
            <a class="btn btn-primary float-right" href="<?php echo base_url() ?>CapituloTresController/">&larr; Capítulo Anterior </a>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; YLIT </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url() ?>js/clean-blog.min.js"></script>

  </body>

</html>
