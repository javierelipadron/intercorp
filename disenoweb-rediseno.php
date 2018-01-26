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
        
        	
            <div id="banner_disenoweb-rediseno">
                <div class="row wow fadeInDown">
                    <div class="container">
                    <h2 style="padding-top:80px">Rediseño de Páginas Web</h2>
                    <p >Refrescamiento Web segun su Imagen Corporativa </p>
                    <p >Añada Redes Sociales a su Sitio Web</p>
                    <p >Modifique o agregue nuevas funcionabilidades a su Página Web</p>
                    </div>
                </div>
            </div>

	<div class="container" >
		<div class="row" >
		<br/>

		
            <div class="col-lg-6 col-sm-12  col-xs-12">
    		    <h2>Redise&ntilde;o de Pagina Web </h2>

    			<p>Si usted ya tiene su página Web pero desea actualizarlo,  ya sea en el diseño, colocación de Redes Sociales, cambiar los botones, aplicar una mejora, agregarle páginas internas más actualizadas y mejor contenido.</p>

    			<p>En algunos casos los cambios pueden ser de imagen y énfasis manteniendo la estructura y en otros se requiere partir desde cero haciendo un rediseño más moderno y fresco.</p>

    			<p>Este servicio es el que usted necesita, y recuerde que lo mejor de todo es que después del Rediseño de su Página Web, (Diseño web Adaptativo) usted podrá visualizarla en tablets, teléfonos inteligentes y todo la nueva tecnología.</p>

    		</div>

            <div class="col-lg-6 col-sm-12  col-xs-12"> 	
         		<h2> Que le ofrecemos al Rediseñar su Pagina Web</h2>
        		<ul> 
        			<li>Realizar un estudio sobre el diseño actual de su página web y modificarlo por uno que se adapte a sus  nuevas necesidades.</li>
        			<li>Cambio o Refrescamiento de la Imagen de su Pagina Web</li>
        			<li>Mejorar la visibilidad de contenidos dentro de su Pagina.</li>
        			<li>Modificacion de imágenes/ contenidos.</li>
        			<li>Actualización de Noticias, novedades / promociones.</li>
        			<li>Actualizar enlaces a otras páginas web (links).</li>
        			<li>Agregar y enlazar con todas las Redes Sociales.</li>
        			<li>Quitar, reemplazar o agregar Banners Publicitarios.</li>
        			<li>Quitar, reemplazar o agregar páginas internas.</li>
        			<li>Agregar archivos PDF, DOCX entre otros</li>
        			<li>Visible desde Telefonos Celulares a través de un Diseño Responsitivo</li>

        		</ul> 
    		</div>
    		
            <br/>
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