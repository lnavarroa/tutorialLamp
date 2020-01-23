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
                Capítulo 5:
              </h1>
              <h1 class="post-title">
                Validaciones.
              </h1>


              <p>
                En este capítulo se aborda el tema de validar formularios en el lado del servidor, ya que es mucho más
                segura que cualquier otra validación en el lado del cliente (ya sea validación HTML o JavaScript).
              </p>

              <p>
                Para implementar la validación de un formulario necesitaremos 3 cosas: <br>
                1.- Una vista que contenga el formulario. <br>
                2.- Una vista que contenga un mensaje de "exito", para ser mostrado luego del registro exitoso. <br>
                3.- Un controlador que reciva y procese los datos ingresados. <br>
              </p>

              <h3 class="post-subtitle">
                El formulario.
              </h3>

              <p>
                En el directorio de vistas crearemos un archivo llamado "myform.php", el cual contendrá el siguiente código fuente: <br>
<code>
&lt;html> <br>
&lt;head> <br>
&lt;title>My Form&lt;/title> <br>
&lt;/head> <br>
&lt;body> <br>

&lt;?php echo validation_errors(); ?> <br>

&lt;?php echo form_open('form'); ?> <br>

&lt;h5>Username&lt;/h5> <br>
&lt;input type="text" name="username" value="" size="50" /> <br>

&lt;h5>Password&lt;/h5> <br>
&lt;input type="text" name="password" value="" size="50" /> <br>

&lt;h5>Password Confirm&lt;/h5> <br>
&lt;input type="text" name="passconf" value="" size="50" /> <br>

&lt;h5>Email Address&lt;/h5> <br>
&lt;input type="text" name="email" value="" size="50" /> <br>

&lt;div>&lt;input type="submit" value="Submit" />&lt;/div> <br>

&lt;/form> <br>

&lt;/body> <br>
&lt;/html> <br>
</code>
              </p>

              <h3 class="post-subtitle">
                La página de exito.
              </h3>

              <p>
                En el directorio de vistas crearemos una página llamada "formsuccess.php", con el siguiente código: <br>
                <code>
&lt;html> <br>
&lt;head> <br>
&lt;title>My Form&lt;/title> <br>
&lt;/head> <br>
&lt;body> <br>

&lt;h3>Your form was successfully submitted!&lt;/h3> <br>

&lt;p>&lt;?php echo anchor('form', 'Try it again!'); ?>&lt;/p> <br>

&lt;/body> <br>
&lt;/html> <br>

                </code>
              </p>

              <h3 class="post-subtitle">
                El controlador.
              </h3>

              <p>
                En el directorio de controladores crearemos un controlador llamado "Form.php", con el siguiente código: <br>

                <code>
&lt;?php <br>

class Form extends CI_Controller { <br>

        public function index() <br>
        { <br>
                $this->load->helper(array('form', 'url')); <br>

                $this->load->library('form_validation'); <br>

                if ($this->form_validation->run() == FALSE) <br>
                { <br>
                        $this->load->view('myform'); <br>
                } <br>
                else <br>
                { <br>
                        $this->load->view('formsuccess'); <br>
                } <br>
        } <br>
} <br>
                </code>
              </p>


              <p>
                Ahora ya tenemos lo necesario para testear el formulario, 
                para lo cual ingresaremos en <code>https://localhost/tuproyecto/index.php/form/</code>, recordar que 
                el directorio "tuproyecto/" es el nombre del proyecto que estas construyendo.
              </p>

              <p>
               Si enviamos el formulario asi como lo tenemos hasta este momento, deberiamos ver como es recargado nuevamente.
               Además aún no se ha ingresado ningún tipo de validación, por lo cual si ingresamos datos inválidos, no detectará 
               ningún problema de momento.ei
              </p>

              <h3 class="post-subtitle">
                Explicación.
              </h3>
              
              <p>
                Debemos notar algunas cosas. El formulario (myform.php), es un formulario web estandar con un par de excepciones: <br>
                1.- Usa un <b>form helper</b> (en capítulos futuros se hablará de helpers), para ayudar en la apertura del formulario.
                Técnicamente esto no es necesario, ya que se puede crear un formulario HTML estandar. Sin embargo el beneficio de usar este helper
                es que nos genera la acción URL, basado en la URL de nuestro archivo config.php. Esto nos hace la aplicación más 
                portable en caso que las URL cambien. <br>
                2.- Al inicio del formulario hay un llamado a una función: <br>
                <code>&lt;?php echo validation_errors(); ?></code>, esta función retornará algún mensaje de error devuelto 
                por el validador. Si no hay mensaje de error, retornará un string vacío. 
              </p>

              <p>
                Por otra parte, el controlador (Form.php) tiene el método <b>index()</b>, el cual inicializa la clase <b>validation</b>,
                y carga el <b>form helper</b> junto con el <b>URL helper</b> usado por las vistas. También ejecuta la rutina 
                de validación. En función si la validación fue exitosa, presenta el formulario o la página de exito.
              </p>

              <h3 class="post-subtitle">
                Establecer reglas de validación.
              </h3>

              <p>
                Codeigniter nos permite establecer las reglas de validación que necesitemos para variados propósitos, ordenandolos 
                en cascada, e incluso nos permite preparar y preprocesar los datos al mismo tiempo. Para establecer las reglas de validación 
                debemos usar el método <b>set_rules</b>. <br>
                <code>$this->form_validation->set_rules();</code>. Este método toma 3 parámetros como entrada.
              </p>

              <p>
                1.- El campo <b>name</b>, el nombre exacto que le dimos al formulario. <br>
                2.- Un nombre "humano" para este campo, el cual será insertado en los mensajes de error. Por ejemplo si nuestro campo se llama
                "user", debiesemos darle un nombre "humano" como "Username".<br>
                3.- Las reglas de validación para el campo del formulario. <br>
                4.- (opcional) Establece mensajes de error personalizados sobre las reglas dadas para el campo actual. Si no proporcionadas
                se usarán las que están por defecto.
              </p>

              <p>
                Ahora que ya se tienen claros ciertos puntos para las validaciones, vamos al controlador (Form.php) y añadiremos líneas de 
                código justo abajo del método para inicializar las validaciones, el cual debiese quedar de la siguiente forma: <br>

                <code>
&lt;?php <br>

class Form extends CI_Controller {<br>

        public function index()<br>
        {<br>
                $this->load->helper(array('form', 'url'));<br>

                $this->load->library('form_validation');<br>

                $this->form_validation->set_rules('username', 'Username', 'required');<br>
                $this->form_validation->set_rules('password', 'Password', 'required',<br>
                        array('required' => 'You must provide a %s.')<br>
                );<br>
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');<br>
                $this->form_validation->set_rules('email', 'Email', 'required');<br>

                if ($this->form_validation->run() == FALSE)<br>
                {<br>
                        $this->load->view('myform');<br>
                }<br>
                else<br>
                {<br>
                        $this->load->view('formsuccess');<br>
                }<br>
        }<br>
}<br>
                </code>
              </p>

              <p>
                Ahora ejecutemos el formulario en el navegador con los campos en blanco, y se debiesen mostrar los mensajes de error
                Si el formulario se envia con todos los campor llenos, debiesemos ver la página de exito.
              </p>

              <p><b>Nota:</b> Los campos del formulario aún no se vuelven a llenar con los datos ya ingresados cuando hay un error.
              Eso se verá luego.</p>
              
            




          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="<?php echo base_url() ?>CapituloSeisController/">Capítulo Siguiente &rarr;</a>
            &nbsp &nbsp
            <a class="btn btn-primary float-right" href="<?php echo base_url() ?>CapituloCuatroController/">&larr; Capítulo Anterior </a>
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
