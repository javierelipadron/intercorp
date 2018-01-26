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
          

            <div id="banner_aplicaciones-moviles">
                <div class="row wow fadeInDown">
                    <div class="container">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                        <h2 style="padding-top:80px">Aplicaciones Mobiles <br>Android</h2>
                        
                        </div>
                    </div>
                </div>
            </div>
        	

	<div class="container" >
		<div class="row" >
        
        <div class="col-lg-12 col-sm-12  col-xs-12">
            <h2>Aplicaciones Mobiles para Android</h2> 
    		<br/>
	    </div>
        <div class="col-lg-6 col-sm-12  col-xs-12">
    		<p>Android es una de las plataformas mas usadas hoy en dia por usuarios en el mundo. Su impacto en la vida diaria es notable a través de la gran cantidad de apps disponibles. Tenemos experiencia en orientarte sobre la direccion que debe llevar el diseño de tu aplicacion para lograr el exito que buscas en el area empresarial.</p>
            <p>Ponemos a tu alcance un servicio adaptado a tus necesidades, desde una consultoría integral con supervisión de todos y cada uno de los pasos que has de seguir para crear un negocio actual (comunicación, diseño corporativo, tecnologías...) a productos adaptados a metodologías ágiles de creación de apps diseñadas por nosotros y avaladas por nuestros años de experiencia.</p>
		</div>

        <div class="col-lg-6 col-sm-12  col-xs-12">
            <ul>
            <li>Desarrollamos Aplicaciones Nativas en Java desarrolladas en Android Studio.</li>
            <li>Dependiendo del tipo de aplicacion, dise&ntilde;amos estructuras de aplicaciones basadas en RestFull.</li>
            </ul>
            <hr/>
            <div align="center" >
            <a class="btn btn-lg btn-primary" href="cotizar.php">Deseo una Cotizaci&oacute;n</a>
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