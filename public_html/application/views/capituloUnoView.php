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

    <title>Lamp Tutorial</title>

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
              <a class="nav-link" href="<?php echo base_url() ?>">Contact</a>
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
              <h1>Lamp Tutorial</h1>
              <span class="subheading">Desarrollado por <a color='red' href="https://ylit.cl/">YLIT</a></span>
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
                Capítulo 1:
              </h1>
              <h1 class="post-title">
                Conociendo Lamp.
              </h1>
              <h3 class="post-subtitle">
                .
              </h3>
            

                <p>
                - Creación archivo nombreSitio.conf
                - Ejecutar a2ensite nombreSitio
                - Ejecutar service apache2 reload
                
                  <br> <code>define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');</code>.  </p>
                <p>Aquí es importante tener en cuenta el significado de 'development', como su nombre lo dice, 
                  indica que el proyecto se encuentra en fase de desarrollo, mientras que una vez que el proyecto sea implantado
                  en algún servidor, este valor debería ser 'production'.</p>
                  <p>La diferencia entre esos 2 valores es que en modo 'development' los errores se muestran por pantalla,
                    mientras que en modo 'production', los errores se ocultan. Para este caso se deja tal cual esta en modo 
                    'development'.</p>

            
          </div>
          <hr>

          <!-- Archivo config.php -->
          <div class="post-preview">
            
              <h2 class="post-title">
                El archivo config.php.
              </h2>
            

            <p>Ahora iremos al archivo application->config->config.php, donde buscaremos la línea
              <code>$config['base_url'] = '';</code> y le pondremos el valor correspondiente al proyecto, 
              <code>$config['base_url'] = 'https://localhost/tuProyecto/';</code> donde localhost/ es tu servidor y tuProyecto/
              es el nombre de la carpeta donde se descomprimio codeIgniter en el capítulo anterior.</p>

            <p>Al ser implantado en un servidor dicha configuración debería quedar 
              <code>$config['base_url'] = 'https://tusitio.com/';</code>
            </p>
            <p>De momento no se realizarán otras configuraciones, sin embargo es bueno seguir leyendo este archivo, 
              para conocerlo.</p>
          
            
          </div>
          <hr>


          <!-- Comenzando MVC -->
          <div class="post-preview">
            
              <h2 class="post-title">
                Comenzando a utilizar MVC.
              </h2>
              <h3 class="post-subtitle">
                Modelo Vista Controlador.
              </h3>
            
            
            <p> CodeIgniter utiliza el patrón MVC para funcionar, los modelos son las clases que contiene la lógica para acceder
              a los datos, las vistas con las páginas que se muestran a los usuarios, y el controlador son las clases que contienen
              la lógica para comunicarse con los modelos y las vistas.
            </p>

            <p>En esta sección solo se hablará de los controladores y las vistas, ya que aun no se realizará accesos a bases de datos.</p>

            <h4>Analizando la primera vista y controller.</h4>
            <p>En el capítulo anterior, se visualizó la página de bienvenida de CodeIgniter, la cual se ingreso mediante url en el navegador. 
              Esto funciona de la siguiente forma: al querer acceder a páginas o vistas, siempre actúa un controlador, el cual toma las 
              deciciones sobre lo que se debe realizar. 
            </p>

            <p>En este caso el controlador por defecto se encuentra en application->controllers el cual se llama welcome.php.
              Este controlador extiende de CI_Controller (el cual no importa saber como funciona en este caso), solo notar que el
              nombre de la clase debe ser el mismo que el nombre del archivo.php.
              Luego, este controlador posee un método llamado index(), el cual es un método por defecto que podemos usar en cualquier
              controlador (más adelante se explicará de mejor forma.).
            </p>

            <p>Este método index(), es quién se encarga de llamar a la página de bienvenida que se nos muestra.
              El cual contiene el siguiente código: <br><code>public function index() {
              $this->load->view('welcome_message');
              }</code>
            </p>

            <p>Mediante el objeto <code>load</code> y el método <code>view</code> se carga la vista llamada <code>welcome_message</code>.
              Esta vista se encuentra en application->views
            </p>

            
          </div>
          <hr>

          <!-- Crear Primera vista y controlador -->
          <div class="post-preview">
            
              <h2 class="post-title">
                Creando la primera vista y controlador.
              </h2>
            
            
            <p>Ahora que ya se sabe como funcionan las vistas y controladores, procederemos a crear nuestra propia vista y controlador
              de inicio.
            </p>
            <h4>La vista.</h4>
            <p>
              En application->views, crearemos 2 vistas llamadas firstView.php y secondView.php. Lo que haremos con esto será que al 
              ingresar a la url base del proyecto mostraremos firstView.php el cual contendrá un link para visualizar secondView.php.
            </p>

            <p>El archivo firstView.php tendrá el siguiente código:</p>
            <p><code>
              <pre>&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>&lt;!DOCTYPE html>
&lt;html lang="en">
&lt;head>
&lt;meta charset="utf-8">
&lt;title>Welcome to CodeIgniter&lt;/title>
  
&lt;/head>
&lt;body>

&lt;div id="container">
&lt;h1>Bienvenido a CodeIgniter!&lt;/h1>

&lt;div id="body">
&lt;p>Esta es nuestra primera vista.&lt;/p>

&lt;p>Para acceder a la segunda vista click 
&lt;a href="https://localhost/tuProyecto/index.php/firstController/secondView()">aquí&lt;/a>.&lt;/p>
    
&lt;/div>
&lt;/div>
&lt;/body>
&lt;/html>
              </pre>
            </code></p>

            <p>Mientras que el archivo secondView.php tendrá el siguiente código:</p>
                        <p><code>
              <pre>&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>&lt;!DOCTYPE html>
&lt;html lang="en">
&lt;head>
&lt;meta charset="utf-8">
&lt;title>Welcome to CodeIgniter&lt;/title>
  
&lt;/head>
&lt;body>

&lt;div id="container">
&lt;h1>Bienvenido a la segunda vista!&lt;/h1>

&lt;div id="body">
&lt;p>Segunda vista cargada correctamente.&lt;/p>
 
&lt;/div>
&lt;/div>
&lt;/body>
&lt;/html>
              </pre>
            </code></p>

            <p>La primera vista contiene un link que llama al metodo secondView() del controlador
              llamado firstController.php, el cual cargará la segunda vista, como veremos a continuación.
            </p>

            <h4>El controlador.</h4>

            <p>Ahora para crear un controlador, iremos a application->controllers y crearemos un archivo
              llamado firstController.php
            </p>

            <p>Dentro de este archivo insertaremos el siguiente código:</p>

<pre>&lt;?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class FirstController extends CI_Controller { 
   public function index(){
      $this->load->view('fisrtView');
   } 
   public function secondView(){
      $this->load->view('secondView');
   } 
   
}</pre>
            </code></p>

            <p>
              Este archivo será nuestro controlador por defecto, el cual sustituirá al controlador por defecto que trae codeigniter
              , pero para que esto suceda debemos abrir
              el archivo application->config->routes.php, en el cual buscaremos la línea
              <code>$route['default_controller'] = 'welcome';</code>, y cambiarla por:
              <code>$route['default_controller'] = 'firstController';</code>, con esto al ingresar la url del proyecto
              en el navegador, se llamara al controlador firstController.
            </p>

            <p>
              Ahora que ya se tiene la ruta hacia el controlador, pasare a explicar lo que hace dicho archivo.
              Como se mencionó anteriormente los controladores extienden de CI_Controller, el método index() es el método 
              por defecto de todo controlador, esto quiere decir que para llamar a dicho método no es necesario escribir
              <code>nombreControlador/index().php</code>, si no que solo se puede escribir <code>nombreControlador/</code>
              y dicho método será invocado automaticamente por codeigniter. Para este ejemplo, el método index() esta 
              cargando la primera vista que creamos 'firstView'.
            </p>

            <p>Cuando desde la primera vista damos click en el enlace, estamos llamando al método secondView(), y como se puede
              apreciar en este caso, aquí si es necesario que la ruta contenga el nombre del método. Y como se puede apreciar
              secondView() nos cargará nuestra segunda vista.
            </p>

            
          </div>
          <hr>

          <p>Con estos pasos se concluye el capítulo 1.</p>

          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="<?php echo base_url() ?>CapituloDosController/">Capítulo Siguiente &rarr;</a>
            &nbsp &nbsp
            <a class="btn btn-primary float-right" href="<?php echo base_url() ?>IntroController/">&larr; Capítulo Anterior </a>
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
                <a href="../../#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="../../#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="../../#">
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
