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
        
        	

            <div id="banner_disenoweb-dominio">
                <div class="row wow fadeInDown">
                    <div class="container">
                    <h2 style="padding-top:80px">Dominio y Hosting Web</h2>
                    <p >Asesoramiento sobre Hosting Web / Cloud Servers / VPSs</p>
                    <p >Asesoramiento para adquirir tu dominio .com, .net, .org</p>
                    </div>
                </div>
            </div>

	<div class="container" >
		<div class="row" >
		<br/>

            <div class="col-lg-12 col-sm-12  col-xs-12">
        		<h2>Hosting Web / Cloud Servers / VPSs</h2>

        			<p>Ofrecemos asesoramiento sobre que tipo de Hospedaje o Servidor necesitas para colocar tu Pagina Web/ Software / APP / Sistema de forma Online. Conocemos el mercado Venezuelano e Internacional sobre que servicio puede ser mas efectivo y cual debe escoger. </p>
        		<h2>Dominios Web .com, .net, .org </h2>
        			<p>Ofrecemos información sobre el estado actual de dominios .com, .net, .org y asesoramos a nuestros clientes sobre cual es el que mejor se adapta al proyecto de un cliente.</p>

        		<h2>Dominios Web .ve </h2>		
        			<p>Trabajamos de la mano con la institucion gubernamental que permite el registro de dominios .ve, para darle el mejor servicio a nuestros clientes y que en caso de escoger un dominio .ve tenga la forma de adquirirlo facilmente.</p>
            </div>

            <br/>
            <div class="col-lg-12 col-sm-12  col-xs-12 center">
                <hr/>
                <p><a href="contacto.php" class="btn-lg btn-success"> Deseo una Asesor&iacute;a</a></p>
                <br/>
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