<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CodeIgniter Tutorial</title>

    <!-- Bootstrap core CSS  ?php echo base_url() ?>-->
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
              <a class="nav-link" href="https://ylit.cl/">Contactanos</a>
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
          
          <!-- Tabla Contenido -->
          <div class="post-preview">
            
              <h1 class="post-title">
                Contenido de este tutorial
              </h1>
              <h3 class="post-subtitle">
                A continuación se muestran los contenidos de este tutorial.
              </h3>
            
            
          </div>
          <hr>

          <!-- Introduccion Requisitos -->
          <div class="post-preview">
            <a href="<?php echo base_url() ?>IntroController/">
              <h2 class="post-title">
                Introducción y Configuraciones Previas.
              </h2>
            </a>
            
          </div>
          <hr>

          <!-- Capítulo 1: Conociendo el framework: Primeras configuraciones.  -->
          <div class="post-preview">
            <a href="<?php echo base_url() ?>CapituloUnoController/">
              <h2 class="post-title">
                Capítulo 1: Conociendo el framework: Primeras configuraciones.
              </h2>
              <h3 class="post-subtitle">
                Comenzando a configurar el framework según la necesidad de cada desarrollador.
              </h3>
            </a>
            
          </div>
          <hr>

          <!-- Capítulo 2:  -->
          <div class="post-preview">
            <a href="<?php echo base_url() ?>CapituloDosController/">
              <h2 class="post-title">
                Capítulo 2: Remover index.php y página de error.
              </h2>
              <h3 class="post-subtitle">         
              </h3>
            </a>          
          </div>

          <hr>
          <!-- Capítulo 3:  -->
          <div class="post-preview">
            <a href="<?php echo base_url() ?>CapituloTresController/">
              <h2 class="post-title">
                Capítulo 3: Modelos.
              </h2>
              <h3 class="post-subtitle"> 
                Qué es y como funciona un modelo: Primera conexión a una base de datos.         
              </h3>
            </a>          
          </div>

          <hr>
          <!-- Capítulo 4:  -->
          <div class="post-preview">
            <a href="<?php echo base_url() ?>CapituloCuatroController/">
              <h2 class="post-title">
                Capítulo 4: CRUD simplificado.
              </h2>
              <h3 class="post-subtitle"> 
                CRUD sin ningún tipo de válidaciones        
              </h3>
            </a>          
          </div>

          <hr>
          <!-- Capítulo 5:  -->
          <div class="post-preview">
            <a href="<?php echo base_url() ?>CapituloCincoController/">
              <h2 class="post-title">
                Capítulo 5: Validaciones.
              </h2>
              <h3 class="post-subtitle"> 
                       
              </h3>
            </a>          
          </div>

          <hr>
          <!-- Capítulo 6:  -->
          <div class="post-preview">
            <a href="<?php echo base_url() ?>CapituloSeisController/">
              <h2 class="post-title">
                Capítulo 6: Manejo de sesión.
              </h2>
              <h3 class="post-subtitle"> 
                      
              </h3>
            </a>          
          </div>

          <!-- Pager -->
          
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
