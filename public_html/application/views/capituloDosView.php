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
                Capítulo 2:
              </h1>
              <h1 class="post-title">
                Ocultar index.php de la URL, página de error.
              </h1>
              <h3 class="post-subtitle">
                Ocultando index.php de la URL.
              </h3>
            

                <p>
                  Hasta el momento cuando queremos acceder a una vista cualquiera dentro de nuestro proyecto
                  la URL se muestra de la siguiente forma: <br>
                  <code>https://tusitio.com/index.php/nombreControlador/</code>. Sin embargo index.php se puede ocultar,
                  de esta forma la URL queda así: <br> 
                  <code>https://tusitio.com/nombreControlador/</code>
                </p>  
                <p>
                  Si el servidor apache tiene mod_rewrite enabled <code>($ sudo a2enmod rewrite)</code>, fácilmente se puede hacer usando un archivo .htaccess
                  con algunas reglas simples. Para hacer esto, se debe colocar un archivo .htaccess en el directorio raíz del proyecto a 
                  nivel de index.php. Dentro de este archivo se debe colocar el siguiente código:
                </p>

                <p><code>
                	https://www.digitalocean.com/community/tutorials/how-to-set-up-mod_rewrite-for-apache-on-ubuntu-14-04
                	</code>
                </p>

                <code>
RewriteEngine On <br>
RewriteCond %{REQUEST_FILENAME} !-f <br>
RewriteCond %{REQUEST_FILENAME} !-d <br>
RewriteCond $1 !^(index.php|css|js|imag|scss) <br>
RewriteRule ^(.*)$ index.php?/$1 [L] <br>
                </code>

                <p>
                  En este código se usa el método negativo, lo que significa que todo será redireccionado excepto index.php.
                  Adicionalmente le estamos dando permiso para acceder a las carpetas css, js, img, etc. Se pueden agregar
                  carpetas o archivos que sean necesarios.
                </p>  

                <p>
                  Una vez realizado lo anterior, se puede ir a application->config->config.php, y en la línea <br>
                  <code>$config['index_page'] = 'index.php';</code> se puede eliminar index.php, esto es opcional.
                  Quedando de la siguiente forma: <br>
                  <code>$config['index_page'] = '';</code>
                </p>

            
          </div>
          <hr>

          <!-- Archivo config.php -->
          <div class="post-preview">
            
              <h3 class="post-subtitle">
                Página de error.
              </h3>
            

            <p>
              Al intentar acceder a una página que no existe, en codeigniter por defecto aparecerá una pantalla de error,
              sin embargo es bueno manejar nuestros propios errores, para lograr esto solo basta crear un controlador, el 
              cual tendrá por nombre ErrorController.php, con el siguiente código: <br>
<code>
&lt;?php <br>
defined('BASEPATH') OR exit('No direct script access allowed'); <br>

class ErrorController extends CI_Controller {<br>

  public function index() <br>
  { <br>
    echo 'Error 404. Usted está intentando acceder a una página que no existe.'; <br>
  } <br>

} <br>
</code>
            </p>
          
          <p>
            Esto lo único que hace es mostar el mensaje que le hemos puesto. De momento no se profundizará más 
            en el tema de las páginas de error, ya que se explicará de forma más completa en un próximo cápitulo, 
            en el cual se hablará de manejo de errores y logs.

          </p>
            
          </div>
          <hr>

          <p>Con estos pasos se concluye el capítulo 2.</p>

          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="<?php echo base_url() ?>CapituloTresController/">Capítulo Siguiente &rarr;</a>
            &nbsp &nbsp
            <a class="btn btn-primary float-right" href="<?php echo base_url() ?>CapituloUnoController/">&larr; Capítulo Anterior </a>
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
