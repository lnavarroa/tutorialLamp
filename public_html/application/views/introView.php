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
                Introducción
              </h1>
              <h3 class="post-subtitle">
                
              </h3>
          

                <p>CodeIgniter es un framework diseñado para ser liviano y de rápido aprendizaje, 
                  debido a que casi no requiere previas configuraciones,
                  para desarrollos de aplicaciones web que usan PHP.  </p>

          </div>
          <hr>

          <!-- A quien va dirigido -->
          <div class="post-preview">
            
              <h2 class="post-title">
                A Quienes va dirigido.
              </h2>
            

            <p>- A quienes no necesitan la línea de comandos para trabajar.</p>
            <p>- Si no estas interesado en librerias de gran escala como PERL.</p>
            <p>- No deseas aprender a usar plantillas grandes, que de por si son un lenguaje de progración.</p>
            <p>- Si deseas evitar la complejidad, favoreciendo las soluciones simples.</p>
            <p>- Si necesitas una documentaion clara y completa.</p>



            
          </div>
          <hr>


          <!-- Requerimientos -->
          <div class="post-preview">
            
              <h2 class="post-title">
                Requerimientos.
              </h2>
              <h3 class="post-subtitle">
                
              </h3>
            
            
            <p> <a href="http://php.net/">PHP</a> version 5.6 o posterior es recomendado.</p>
            <p>Si estas trabajando en forma local necesitas tener instalado algun servidor local como WAMP, XAMPP
             o MAMP 
              segun sea tu sistema operativo.</p>

            <p>Para el caso de este tutorial se utilizó XAMPP</p>

            <h3>Si necesitas acceso a bases de datos, estos son los motores soportados.</h3>
            <p>MySQL (5.1+) via the mysql (deprecated), mysqli and pdo drivers.</p>
            <p>Oracle via the oci8 and pdo drivers.</p>
            <p>PostgreSQL via the postgre and pdo drivers.</p>
            <p>MS SQL via the mssql, sqlsrv (version 2005 and above only) and pdo drivers.</p>
            <p>SQLite via the sqlite (version 2), sqlite3 (version 3) and pdo drivers.</p>
            <p>CUBRID via the cubrid and pdo drivers.</p>
            <p>Interbase/Firebird via the ibase and pdo drivers.</p>
            <p>ODBC via the odbc and pdo drivers (you should know that ODBC is actually an abstraction layer).</p>


            
          </div>
          <hr>

          <!-- Instalacion -->
          <div class="post-preview">
            
              <h2 class="post-title">
                Descarga e Instalación CodeIgniter 3.
              </h2>
              <h3 class="post-subtitle">
                 
              </h3>
            
            <p>Se puede descargar desde la web oficial de 
              <a href="https://www.codeigniter.com/user_guide/installation/downloads.html">CodeIgniter</a>
            </p>
            <p>Una vez descargado el archivo, descomprimir dentro de la carpeta correpondiente al servidor local,
              por ejemplo en el caso de este tutorial, como se mencionó anteriormente se usó XAMPP, por lo tanto
              se guardó en la carpeta htdocs.</p>

            <p>
              Posteriormente, al ingresar en la carpeta descomprimida se debe tener la estructura de datos que se muestra en la figura 1,
              con lo cual ya se tiene instalado CodeIgniter, listo para usar y configurar a tu antojo.
            </p>

            <a href="">
              <img src="<?php echo base_url() ?>img/codeEstructuraArchivos.jpg" width="400"
              height="300" border="5"
              alt="Figura 1." />
            </a>

            <p>Ahora que ya se tiene instalado el framework, para verificar que funciona correctamente, en el navegador 
              de preferencia del usuario, igresar al servidor local, para el caso de este tutorial, se ingresó en 
              <a href="<?php echo base_url() ?>">https://localhost/CodeIgniter-3.1.7/</a> 
              y se debiese vizualizar su pagina de inicio, tal como se muestra en la figura 2.
            </p>

            <a href="">
              <img src="<?php echo base_url() ?>/img/welcomeCodeIgniter.jpg" width="900"
              height="400" border="5"
              alt="Figura 1." />
            </a>

            <p>
              En algunos casos la direccion del servidor local podría ser: "http://localhost:8080/nombreProyecto/", eso 
              dependera de la configuración de personal de cada localhost.
            </p>  
            
          </div>
          <hr>

          <p>Con estos pasos se concluye el primer capítulo de configuraciones previas.</p>

          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="<?php echo base_url() ?>CapituloUnoController/">Capítulo Siguiente &rarr;</a>
            &nbsp &nbsp
            <a class="btn btn-primary float-right" href="<?php echo base_url() ?>">&larr; Capítulo Anterior </a>
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
