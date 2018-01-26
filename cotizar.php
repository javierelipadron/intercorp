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
		<br/>
		 
		<div class="col-sm-12">
		<h2>Solicitud de Cotización o Información de Productos</h2>
			 <form  class="contact-form" name="contact-form" method="post" action="enviar_cotizar.php">
                   
                        <div class="form-group">
                            <label>Nombre *</label>
                            <input type="text" name="nombre" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label>Telefono de Contacto</label>
                            <input type="number" class="form-control"  name="telefono">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>

                        <div class="form-group">
                            <label>Producto &oacute; Servicio Solicitado</label>
                            <select class="form-control" required="required" name="producto">
                                <option value="Pagina Web Informativa"> Pagina Web Informativa</option>
                                <option value="Pagina Web Administrable"> Pagina Web Administrable </option>
                                <option value="Pagina Web E-commerce"> Pagina Web E-commerce </option>
                                <option value="Pagina Web Wordpress"> Pagina Web Wordpress </option>
                                <option value="Redise&ntilde;o Web"> Redise&ntilde;o Web </option>
                                <option value="Software Medico para Especialista"> Software Medico para Especialista </option>
                                <option value="Software Medico para Grupo Medico "> Software Medico para Grupo Medico </option>
                                <option value="Software Medico para Clinica o Centro de Especialidades"> Software Medico para Clinica o Centro de Especialidades </option>
                                <option value="Software Medico Control de Terapias "> Software Medico Control de Terapias </option>
                                <option value="Software Medico Imagenolog&iacute;a Dental"> Software Medico Imagenolog&iacute;a Dental </option>
                                <option value="Software CondoSoft - Software de Gestion de Condominios"> CondoSoft - Software de Gestion de Condominios </option>
                            </select>

                        </div>    
                       
                        <div class="form-group">
                            <label>Escriba su Mensaje y expliquemos con detalle sobre sus dudas *</label>
                            <textarea name="mensaje" id="message" required="required" class="form-control" rows="4"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Solicitud de Cotizacion</button>
                        </div>
                    
                </form> 
		

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