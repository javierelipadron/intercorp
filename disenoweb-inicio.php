<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php 
	include("util/title.php")
	?>
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
   
    <!--Start of Zopim Live Chat Script-->
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
	$.src='//v2.zopim.com/?1LA7fJJKcjdaw4ZE29ecEN6D7brebjuX';z.t=+new Date;$.
	type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
	</script>
	<!--End of Zopim Live Chat Script-->
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                     <div class="col-sm-6 col-xs-4">
                       
                          <?php
                             include("util/telefono.php");
                            ?>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                             <?php
                           	 include("util/social-network.php");
                            ?>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <?php
					include("util/menu-principal.php");
					?>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
	</header><!--/header-->

    <section class="header_tittle">
        
        	<div id="banner_disenoweb-inicio">
				<div class="row wow fadeInDown">
                    <div class="container">
                        <div class="col-lg-12 col-sm-12 col-md-12">
    					<h2 style="padding-top:80px">Pagina Web Informativa</h2>
    					<p>La Pagina Ideal para proyectos Personales y Pequeñas Empresas </p>
    					<p>Perfecta para dar a conocer en Internet su negocio </p>
    					</div>
                    </div>
				</div>
			</div>

	<div class="container" >
		<br/>

        <div class="col-lg-6 col-sm-12  col-xs-12">
    		<h2 class="page-header">Pagina Web Informativa</h2>

    		<p>Si usted desea diseñar una página web para dar a conocer en Internet su negocio, sus productos, perfiles profesionales, servicios varios y todo lo que ofrece sin invertir mucho dinero, este paquete web es Ideal para su empresa y lo más importante es que le hará crecer su negocio.</p>
            <p>Es un sitio web que permite introducir la información de mayor interés de su negocio, y le permite a usted posteriormente puede transformarla en una Página Web con un Panel Administrativo para poder Administrarla independientemente.</p>
            <p>Este tipo de Pagina Web no es Administrable, pero le prestamos el servicio de mantenimiento según las necesidades que usted posea por un costo minimo.</p>

           
		</div>

        <div class="col-lg-6 col-sm-12  col-xs-12">
            <h2 class="page-header">As&iacute; son nuestros Proyectos Web</h2>

            <div class="youtube-responsive">
             <iframe width="560" height="315" src="https://www.youtube.com/embed/jgL2ObYXvx4" frameborder="0" allowfullscreen></iframe>
            </div>
		</div>


        <br/>
        <div class="col-lg-12 col-sm-12  col-xs-12 ">
         <h2 class="page-header">  Detalles del Sitio Web</h2>
            <ul> 
                <li>Diseño de Sitio Web usando  Colores y Gustos dados por el cliente.</li>
                <li>Link principal o Portada del Sitio Web</li>
                <li>Desde 4 a 7 Links informativos con textos, imágenes o videos (Incrustados desde Youtube).</li>
                <li>1 Link de Contacto con su Formulario para envio de Mensajes</li>
                <li>Banner promocional con hasta 5 imágenes.</li>
                <li>Galería fotográfica con 20 imágenes.</li>
                <li>Configuración de Palabras Clave en su Web para Google y otros Buscadores</li>
                <li>Agregar archivos PDF, DOCX (hasta 10 archivos).</li>
                <li>Visible desde Telefonos Celulares a través de un Diseño Responsitivo</li>
            </ul> 
        </div>
        <div class="col-lg-12 col-sm-12  col-xs-12 center">
            <hr/>
            <p><a href="cotizar.php" class="btn-lg btn-primary"> Deseo una Cotizaci&oacute;n</a></p>
            <br/>
        </div>

		
				
		
		
	
	</div>
			

			

				
			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->
	

    <footer id="footer" class="midnight-blue">
        	 <?php
                 include("util/footer.php");
             ?>
    </footer><!--/#footer-->
    

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
	
	
</body>
</html>