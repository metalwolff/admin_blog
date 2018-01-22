 <?php include 'class.blog.php' ?>
 <!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Llatzer-Blog</title>
    <meta name="description" content="Pagina web de Llatzer">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Solatara">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estiloblog.css">
    <link rel="stylesheet" href="css/fuentes.css" type="text/css" />
    
    

  </head>
  <body class="fondo-blog">

    <!-- Inicio menu-->
    <div class="container-fluid bg-inverse fixed-top">
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded navbar-inverse bg-inverse container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
          </button>
                  <a class="navbar-brand" href="https://miliary-noise.000webhostapp.com/">
            <img src="img/Logo.png" width="auto" height="auto" class="d-inline-block align-top" alt="">
          </a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link " href="https://miliary-noise.000webhostapp.com/conocenos.html">Conócenos</a>
             	<a class="nav-item nav-link" href="https://miliary-noise.000webhostapp.com/cursos.html">Cursos</a>
              	<a class="nav-item nav-link" href="https://miliary-noise.000webhostapp.com/contactanos.html">Contacto</a>
              	<a class="nav-item nav-link " href="https://miliary-noise.000webhostapp.com/alumni.html">Almumni</a>
              <a class="nav-item nav-link active" href="https://miliary-noise.000webhostapp.com/blog.html">Blog<span class="sr-only">(current)</span></a>
            </div>
          </div>
        </nav>
   </div>
    <!--fin menu -->
    <!-- inicio -->
    
    
    <div style="margin-top: 90px;" class="container-fluid ">

    <div class="row no-gutters">

       
        <div style="background-color: #344FA1" class="col-12 col-sm-12 col-md-4 col-lg-4  ">
        <div class="div-position">
            <div class="text-center ">

            <img class="img-fluid " src="img/texto_noticias.png"> 
            <h3 class="post-destacado-blog">Post destacado</h3>
            <div class="text-center div-blog">

            	<?php 

					$blog = Blog::ningunDato();

					$blog->select()->fetch_array();
					$primer_dato = reset($datos);
					//unset($datos[0]);
					foreach ($datos as $dato) {
						echo '<h4 class="texto-post-blog">'. $dato['titulo'].'</h4>';
						echo '<p style="font-size: 15px; margin-left: 10px;>'. $dato['subtitulo'].'</p>';
					}
					/*while ($row = $datos->fetch_array()) {
						
						echo '<h4 class="texto-post-blog">', $row['titulo'],'</h4>';
						echo '<p style="font-size: 15px; margin-left: 10px;>', $row['subtitulo'],'</p>';
						
					}*/
				?>
               <!--<img name="encabezado" class="img-fluid imgbloguno " />

                <h4 name="titulo" class="texto-post-blog">
                 </h4>
                 <p name="subtitulo" class="subtitulo" style="font-size: 15px; margin-left: 10px;"></p>-->
            </div>
        </div>
        </div>        
        </div>
        
        <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
        <!-- secundario -->

        <div class="col-6 col-sm-6 col-md-3 col-lg-3 ">
        <div style="margin-top: 80px">
            <div class="div-izquierda-blog">
            <img name="encabezado" class="img-blog img-fluid">
            <h4 name="titulo" class="texto-general-blog">
                  </h4>
                 <p name="subtitulo" style="font-size: 15px; margin-left: 10px;"></p> 
                 </div>
        </div> 
        </div>
        
        <!-- terciario -->
        <div class="col-6 col-sm-6 col-md-4 col-lg-4">
        <div style="  margin-top: 130px;">
            <div class="div-derecha-blog ">
            <img class="img-blog img-fluid"">
            <br>
            <h4 name="titulo" class="texto-general-blog-derecha"></h4>
        	<p name="subitulo" style="font-size: 15px;  "></p>
        </div>
            
        </div>        
        
        
    </div>
    </div>
    <!-- fin inicio-->
    </body>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js""></script>
  </body>
</html>