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

        <br/>

        <div class="col-lg-6 col-sm-12  col-xs-12">
    		<h2 class="page-header">Quienes Somos</h2>

            <p>Somos un equipo de ingenieros especializados en el diseño desarrollo de aplicaciones de software pensados en cubrir las expectativas de nuestros clientes, tratando de hacer la vida de nuestros usuarios mas fáciles.</p>
            <p>Trabajamos de forma activa en diferentes países del mundo, lanzando aplicaciones web, mobiles y para desktop. </p>
            <p>Durante varias años hemos venido desarrollando nuestros propios productos, probando su calidad dia a dia basado en los requerimientos de nuestros clientes. </p>
            <p>Si desea  cotizar su proyecto y asesoramiento sobre el, comuníquese con nosotros y con gusto le atenderemos.</p>
            <hr/>
            <p align="center">
            <a class="btn btn-primary btn-lg"  href="proyectos.php">Ver Portafolio</a> 
            </p>
        </div>
          

  
        <div class="col-lg-6 col-sm-12  col-xs-12" align="center">
             <h2 class="page-header" align="left">Sobre Nuestros Proyectos</h2>

             <div class="youtube-responsive">
                 <iframe width="560" height="315" src="https://www.youtube.com/embed/ULNNbak0mZ0" frameborder="0" allowfullscreen></iframe>
             </div>

        </div>  
 
		
           


            <!-- our-team -->
			<div class="team">
				

			

				
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