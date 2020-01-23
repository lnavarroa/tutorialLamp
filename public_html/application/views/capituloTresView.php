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
                Capítulo 3:
              </h1>
              <h1 class="post-title">
                Modelos y conexión con base de datos.
              </h1>
              <h3 class="post-subtitle">
                Qué es y como funciona un modelo.
              </h3>
            
                <p>
                  Como ya sabemos el funcionamiento de las vistas y los controladores, daremos paso a conocer como
                  funcionan los modelos, los cuales serán los encargados de darnos acceso a las bases de datos
                </p>  
                <p>
                  Los modelos no son más que solo clases con sus respectivos métodos que realizarán el trabajo
                  de la lógica de negocio y funcionan de la misma forma que los controladores, la diferencia entre 
                  controladores y modelos es simplemente el trabajo que realiza cada uno (un controlador actúa como 
                  intermediario entre una vista y un modelo, mientras que un modelo accede a las bases de datos).
                </p>

                <p>
                  Una característica de codeigniter, es que nos ofrece una gran cantidad de métodos para realizar consultas,
                  las cuales tienen por ventaja, que si en algún momento se decide cambiar el tipo 
                  de base de datos, como por ejemplo de MySql a Oracle, no tenemos que cambiar la consulta, 
                  ya que el propio framework se encarga de definir el formato de las consultas.
                </p>  

                <p>
                  Los modelos son clases que se almacenan en application->models.
                </p>

                <p>
                  El prototipo básico de un modelo es el siguiente (muy similar a un controlador). <br>
                  <code>
class Model_name extends CI_Model { <br>

}
                  </code>
                </p>

                <p>
                  Donde Model_name es el nombre de la clase, este nombre debe tener la primera letra en mayúscula,
                  también se debe asegurar que dicha clase extiende de CI_Model. Adicionalmente debemos recordar 
                  que el nombre del arhivo .php debe tener el mismo nombre que la clase, es decir para este ejemplo
                  el archivo debiese ser: <br>
                  <code>
application/models/Model_name.php.
                  </code>
                </p>

                <h3 class="post-subtitle">
                  Como cargar un modelo.
                </h3>
                <p>
                  Para cargar un modelo, se usar el siguiente método: <br>
                  <code>
$this->load->model('model_name');
                  </code>
                </p>

                <p>
                  Una vez cargado del modelo, se puede acceder a sus métodos usando un objeto con el mismo nombre
                  que la clase: <br>
                  <code>
$this->load->model('model_name'); <br>

$this->model_name->method();
                  </code>
                </p>

                <p>
                  Si se desea asignar un objeto con distinto nombre, se puede especificar ingresando un segundo parámetro
                  al momento de cargar el modelo. <br>
                  <code>
$this->load->model('model_name', 'nombre_objeto'); <br>

$this->nombre_objeto->method();
                  </code>
                </p>


                <h3 class="post-subtitle">
                  Cargar automáticamente un modelo (auto-load).
                </h3>
                <p>
                  Si se necesita o desea cargar un modelo de forma global, para que se encuentre disponible 
                  en más de un módulo o sección de tu aplicación, existe la posibilidad de cargar modelos 
                  de forma automática durante la inicialización del sistema.
                </p>

                <p>
                  Para realizar el auto-load de un modelo, simplemente abriremos el archivo de configuración
                  llamado autoload.php, el cual se encuentra en: <code>application/config/autoload.php</code>.
                  En este archivo busca la línea de código <code>$autoload['model'] = array();</code>, y aquí 
                  puedes colocar el o los modelos que se deseen cargar automáticamente, quedando así: <br>
                  <code>$autoload['model'] = array('first_model', 'second_model');</code>.
                </p>

                <h3 class="post-subtitle">
                  Configuración para conectar con una base de datos.
                </h3>

                <p>
                  Cargar un modelo no implica que exista conección a la base de datos
                </p>

                <p>
                  Para realizar esto, se debe abrir el archivo de configuración de base de datos, el cual se 
                  encuentra en application->config->database.php. Para tener una coneeción básica a una base de datos
                  solo basta configurar los siguientes 4 parámetros. <br>

                  <code>
$config['hostname'] = 'localhost'; <br>
$config['username'] = 'myusername'; <br>
$config['password'] = 'mypassword'; <br>
$config['database'] = 'mydatabase'; <br>
                  </code>
                </p>

                <p>
                  'localhost' es el nombre del servidor donde se encuentra alojada la base de datos, si dicha base de datos 
                  se encuentra en el mismo servidor que el proyecto, este parámetro queda como localhost, en caso que la 
                  base de datos se encuentra en un servidor distinto al del proyecto (base de datos remota), se debe 
                  especificar la direccion del otro servidor por ejemplo 'https://otroservidor.com/' o ingresando la dirección 
                  IP del servidor remoto, como por ejemplo 'https://201.200.1.0'.
                </p>

                <p>
                  Los siguientes parámetros corresponden al nombre de usuario, contraseña y nombre de la base de datos 
                  a la cual se desea conectar.
                </p>

                <p>
                  Con lo anterior configurado, aun no se tiene conectada la base de datos, para lograr esto existen 2 formas
                  las cuales se describen a continuación:
                </p>
                
                <h3 class="post-subtitle">
                  Conectar automáticamente con una base de datos.
                </h3>

                <p>
                  La característica "auto connect" cargará e instanciará la clase base de datos con cada página cargada.
                  Para habilitar “auto connecting”, se debe ir al archivo application/config/autoload.php, y aqui buscar
                  el código <br><code>$autoload['libraries'] = array('');</code> y dejarlo como: <br>
                  <code>$autoload['libraries'] = array('database');</code>. Con esto ya se tendrá conectada la base de datos
                  en forma automática cada vez que la aplicación sea iniciada.                  
                </p>

                <h3 class="post-subtitle">
                  Conectar manualmente con una base de datos.
                </h3>

                <p>
                  Si solo algunas de tus páginas requieren conectividad con tu base de datos, se puede conectar a la 
                  base de datos colocando el siguiente código dentro la funcíon que lo requiera: <br>
                  <code>
$this->load->database();
                  </code>. Esta es la forma más usada para conectarse a una base de datos, ya que al hacerlo de forma automática
                  la base de datos está conectada todo el tiempo sin necesidad de que este en uso, con lo cual podrían
                  ocurrir ploblemas de seguridad. 
                </p>

                <p>
                  Una vez que la página usó la base de datos y ya no la necesitará, podemos cerrar la conexión de forma
                  manual <code>$this->db->close();</code>.
                </p>

                <h3 class="post-subtitle">
                  Conectar multiples bases de datos.
                </h3>

                <p>
                  Code igniter provee una forma de conectar con más de una base datos si es que lo necesitamos.
                  Para esto basta con realizar lo siguiente: <br>
                  <code>
$DB1 = $this->load->database('firstDataBase'); <br>
$DB2 = $this->load->database('secondDataBase'); 
                  </code> <br>
                  Y luego solo se debe usar el nombre del objeto para realizar las consultas, como por ejemplo: <br>
                  <code>
$DB1->query(); <br>
$DB1->result();
                  </code>
                </p>

                <h3 class="post-subtitle">
                  Reconectar/Mantener la conexión.
                </h3>

                <p>
                  Si el servidor de base de datos excede el timeout mientras se realiza algun proceso o tarea de gran tamaño
                  (por ejemplo procesar imagenes de gran tamaño), se deberia considerar el uso del método reconnect(),
                  antes de realizar alguna consulta compleja. Para esto usar <code>$this->db->reconnect();</code>
                </p>
          
      
            
          </div>
          <hr>

          <p>En el siguiente capítulo se construirá un CRUD simple.</p>

          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="<?php echo base_url() ?>CapituloCuatroController/">Capítulo Siguiente &rarr;</a>
            &nbsp &nbsp
            <a class="btn btn-primary float-right" href="<?php echo base_url() ?>CapituloDosController/">&larr; Capítulo Anterior </a>
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
