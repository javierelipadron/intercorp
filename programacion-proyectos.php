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
        
        	

	<div class="container" >
		<div class="row" >
		
		
		
			<div class="col-sm-12">
			<h2> Programacion de Proyectos</h2>
			<p> Disponemos de expertos en diferentes areas de programacion, dirigidos a estudiar su proyecto y a dar opciones de crear aplicaciones a la vanguardia.</p>
			
			<h2> Programacion Web </h2>
			<p>Desde la programaci&oacute;n de sitios web basicos, administrables o tiendas virtuales, realizamos extensiones de los mismos basados en las necesidades de los clientes.
            Usando tecnologias tales como: HTML5, CSS3, PHP, AJAX,  JQuery, Javascript , Bootstrap Twitter, AngularJS, NodeJs, entre otros dependiendo de la necesidad </p>
			
			<h2>Programación de App Android</h2>
			<p>Desarrollamos para android sobre Java usando Android Studio, y segun las necesidades creamos y configuramos las correspondientes RestFull de la aplicaci&oacute;n.</p>
			
			<h2>Programación en JAVA</h2>
			<p> Nuestro personal dispone de certificaciones que los validan como programadores orientados a codigo limpio en programacion bajo JAVA.</p>
			
			<h2>Diseño y Depuración de Bases de Datos</h2>
			<p> Diseñamos de forma efectiva bases de datos relacionales. Trabajamos con diferentes bases de Datos dependiendo del Ambiente de desarrollo: MYSQL, POSTGRESQL, SQLlite entre otras. </p>	
			
			</div>

            <br/><hr/>
            <div class="col-lg-12 col-sm-12  col-xs-12 center">
                    <a href="cotizar.php" class="btn-lg btn-primary"> Deseo una Cotizaci&oacute;n</a>
                </div>
              
            </div>

			
			
		
		</div>
		<br/>			

			

			

				
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