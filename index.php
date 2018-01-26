<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
    include("util/title.php")
    ?>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/ihover.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">           
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

        <script>
              new WOW().init();
              </script>
    <!--End of Zopim Live Chat Script-->
    
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <?php
                             include("util/telefono.php");
                            ?>
                    </div>
                    <div class="col-sm-6 col-xs-12">
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

<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
                <li data-target="#main-slider" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">



                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content"  align="left">
                                    <h1 class="animation animated-item-1" id='carousel-h11'>Diseño Web / Software a Medida</h1>
                                    <p style='font-size:16px' class="animation animated-item-2"><br>
                                    Diseño de Paginas y Proyectos Web.
                                    <br> Adaptados para Dispositivos Moviles y Tablets.
                                    <br><br>
                                    </p>
                                      <a class="btn btn-info" href="disenoweb-inicio.php">Informativa</a>  
                                      <a class="btn btn-success" href="disenoweb-administrable.php">Administrable</a>  
                                      <a class="btn btn-warning" href="disenoweb-ecommerce.php">E-commerce</a> 
                                                               
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>

                
                <!--/.item-->

               
                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                           <div class="col-sm-5">
                                <div class="carousel-content"  align="left"><br>
                                    <h1 class="animation animated-item-1" id='carousel-h13'>Proyectos Realizados</h1>
                                    <p style='font-size:16px' class="animation animated-item-2">Revisa nuestro portafolio de aplicaciones realizadas</p>
                                    <a class="btn btn-info" href="proyectos.php">Ver nuestros Proyectos</a>                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <!--/.item-->


                <div class="item" style="background-image: url(images/slider/bg4.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                           <div class="col-sm-5">
                                <div class="carousel-content"  align="left"><br>
                                    <h1 class="animation animated-item-1" id='carousel-h13'>Software Medicos</h1>
                                    <p style='font-size:16px' class="animation animated-item-2"> Instalable en Equipos Windows  o MAC OS</p>
                                    <p style='font-size:16px' class="animation animated-item-2"> Dirigido a Especialistas y  Grupos Médicos</p>



                                    <a class="btn btn-info" href="software-medico.php">Ver M&aacute;s</a>                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>


                <!--/.item-->

                 <div class="item" style="background-image: url(images/slider/bg5.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                           <div class="col-sm-5">
                                <div class="carousel-content"  align="left"><br>
                                    <h1 class="animation animated-item-1" id='carousel-h13'>Programaci&oacute;n Android</h1>
                                    <p style='font-size:16px' class="animation animated-item-2"> Desarrollo de Aplicaciones Mobiles para Android</p>



                                    <a class="btn btn-info" href="software-medico.php">Ver M&aacute;s</a>                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>

                
                <!--/.item-->


            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>    </a>  </section>
    <!--/#main-slider-->


      <section id="recent-works" style='margin-top:20px'>
        <div class="container">
            
            <div class="center wow fadeInDown">
                <br>
                <h2 class="page-header">Sobre Nuestros Productos</h2> 
                <p>Distribuimos productos de Calidad desarrollados por nuestros ingenieros, testeados sobre altos estandares:</p>
            </div>
                
                            
                <div class="row">

                  <div class="col-xs-12 col-sm-6 col-md-3 center">
                     
                            <div class="img"><a  href="software-medico.php"><img src="images/productos/sm.jpg" alt="img"  class="img-responsive2"></a> </div>
                            
                               <h3 class='page-header'> <b>&copy; SM Software M&eacute;dico </b></h3>
                              <p>Software M&eacute;dico para Especialistas y Centros Medicos.</p>
                              
                              <a class="btn btn-info btn-lg"  href="software-medico.php">Ver M&aacute;s</a> 
                        
                  </div>

                  <div class="col-xs-12 col-sm-6 col-md-3 center">
                     
                            <div class="img"><a href="software-medico-imagenologia-facial.php"><img src="images/productos/sid.jpg" alt="img" class="img-responsive2"></a> </div>
                              <h3 class='page-header'> <b>&copy; Software de Imagenolog&iacute;a Dental </b></h3>
                              <p>Software de Imagenolog&iacute;a Dental para Centros de Imagenes y Ortodoncistas.</p>
                              <a class="btn btn-success btn-lg"  href="software-medico-imagenologia-facial.php">Ver M&aacute;s</a> 
                            
                     
                  </div>

                  <div class="col-xs-12 col-sm-6 col-md-3 center">
                     
                            <div class="img"><a href="software-medico-terapias.php"> <img src="images/productos/terapy_control.jpg" alt="img" class="img-responsive2"></a></div>
                              <h3 class='page-header'> <b>&copy; Software de Control de Terapias </b></h3>
                             
                              <p>Software para Centros de Rehabilitaci&oacute;n y Terapias </p>
                              <a class="btn btn-info btn-lg"  href="software-medico-terapias.php">Ver M&aacute;s</a> 
                            
                   </div>
                 
                  <div class="col-xs-12 col-sm-6 col-md-3 center">
                 
                          
                           <div class="img"> <a href="software-condominios-condosoft.php"><img src="images/productos/condosoft.png" alt="img"  class="img-responsive2"></a> </div>
                           <h3 class='page-header'> <b>&copy; CondoSoft </b></h3>
                          <p>Software de Gesti&oacute;n de Condominios Online</p>
                          <a class="btn btn-success btn-lg"  href="software-condominios-condosoft.php">Ver M&aacute;s</a> 
                            
                 
                  </div>

                  
                  

                </div>  


  

       </div>

    </section><!--/#recent-works-->
	

       <section id="recent-works" style='margin-top:20px'>
        <div class="container">
            
            <div class="center wow fadeInDown">
                <br>
                <h2 class="page-header">Ultimos Desarrollos Web Realizados</h2> 
                <p>Mantenemos relaciones a largo plazo, trabajando de la mano con el cliente para crear un producto de calidad</p>
            </div>
                
                            
                <div class="row">
                 
                  <div class="col-xs-12 col-sm-6 col-md-4">
                 
                    <div class="ih-item square effect4">
                      <a  target="_blank" href="http://www.fabriquim.com/" >
                        <div class="img"><img src="images/fabriquin1.png" alt="img"  class="img-responsive"></div>
                        <div class="mask1"></div>
                        <div class="mask2"></div>
                        <div class="info">
                          <h3>Fabriquim CA</h3>
                            <b>Pagina Web Administrable dise&ntilde;ada para empresa fabricante productos quimicos y agroindustriales </b>
                        
                        </div>
                      </a>
                    </div>
                 
                  </div>


                  <div class="col-xs-12 col-sm-6 col-md-4">
                     
                        <div class="ih-item square effect4"><a target="_blank" href="http://www.bodegonelllanero.com/">
                            <div class="img"><img src="images/bodegon.png" alt="img"  class="img-responsive"></div>
                            <div class="mask1"></div>
                            <div class="mask2"></div>
                            <div class="info">
                              <h3>Bodegon El LLanero</h3>
                              <b>P&aacute;gina Web E-commerce Administrable con conexion a Sistema Profit</b>

                            
                            </div>
                          </a>
                        </div>
                 
                  </div>
                  
                  <div class="col-xs-12 col-sm-6 col-md-4">
                     
                       <div class="ih-item square effect4">
                        <a  target="_blank" href="http://www.accionh.com/">
                            <div class="img"><img src="images/hipica.png" alt="img" class="img-responsive"></div>
                            <div class="mask1"></div>
                            <div class="mask2"></div>
                            <div class="info">
                              <h3>Accion Hipica</h3>
                              <b>Pagina Web de Apuestas Hipicas Online con Panel Administrativo</b>

                            </div>
                          </a>
                        </div>
                     
                  </div>

                  



                    <div class="col-xs-12 col-sm-6 col-md-4">
                           <div class="ih-item square effect4">
                            <a  target="_blank" href="http://www.intercorp.com.ve/_st/">
                                <div class="img"><img src="images/plantilla.png" alt="img" class="img-responsive"></div>
                                <div class="mask1"></div>
                                <div class="mask2"></div>
                                <div class="info">
                                    <h3>Success Template</h3>
                                    <b>Dise&ntilde;o creada por Inter Corporaciones para Venta Online</b>

                                </div>
                              </a>
                            </div>
                      </div>


                      <div class="col-xs-12 col-sm-6 col-md-4">
                     
                           <div class="ih-item square effect4">
                            <a  target="_blank" href="http://www.efecty.com.co/webefecty/index.html">
                                <div class="img"><img src="images/efecty.png" alt="img" class="img-responsive"></div>
                                <div class="mask1"></div>
                                <div class="mask2"></div>
                                <div class="info">
                                  <h3>Efecty</h3>
                                  <b>Diseño Web para Empresa Efecty en Colombia</b>

                                </div>
                              </a>
                            </div>
                        
                      </div>

                  
                      <div class="col-xs-12 col-sm-6 col-md-4">
                     
                        <div class="ih-item square effect4">
                          <a  target="_blank" href="http://www.softwaremedico.com.ve/">
                            <div class="img"><img src="images/medico.png" alt="img" class="img-responsive"></div>
                            <div class="mask1"></div>
                            <div class="mask2"></div>
                            <div class="info">
                              <h3>SM Software Medico</h3>
                              <b>software M&eacute;dico dise&ntilde;do para Especialistas y Centros M&eacute;dicos</b>  
                            </div>
                          </a>
                        </div>
                     
                      </div>

                </div>  



                <hr>
                <div  align="center">
                       <a class="btn btn-info btn-lg"  href="proyectos.php">Proyectos Web Realizados</a> 
                </div>   

       </div>

    </section><!--/#recent-works-->

    <section   style="padding:10px 0 20px 0;">
        <div class="container">
            <div class="row">
                <div class="center wow fadeInDown" >
                    <br>
                    <h2 class="page-header">Productos de Calidad</h2> 
                    <p>Una Imagen dice mas que mil palabras, te mostramos videos en vivo para que veas nuestro trabajo.</p>
                </div>
                 <div class="col-md-6 col-sm-12   wow fadeInDown" >
                  <h2 align="center" style="padding-bottom:10px; margin:0" >Mira nuestros Desarrollos Web</h2>

                   <div class="youtube-responsive">
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/jgL2ObYXvx4" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>

                 <div class="col-md-6 col-sm-12 wow fadeInDown">
                    <h2   align="center"  style="padding-bottom:10px; margin:0"> &copy; SM Software Medico 2015</h2>

                   <div class="youtube-responsive">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ULNNbak0mZ0" frameborder="0" allowfullscreen></iframe>
                   </div>

                </div>
             </div>
         </div>
    </section><!--/#recent-works-->


    <section id="middle"  style="padding:10px 0 20px 0;">
        <div class="container">
            <div class="row">
			
				
                <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <h2>¿Porque poner su confianza en nosotros?</h2>
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  Trabajamos pensando en Calidad
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="media-body">
                                             <p>Poseemos altos estandares a la hora de hacer nuestro trabajo. Basados en nuestras experiencias previas siempre trabajamos para que los proyectos emprendidos por nuestros clientes, se conviertan en casos de exito.</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                 Experiencia
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                Somos una empresa que dispone de un personal con carreras profesionales brillantes, cubriendo diferentes areas de tecnolog&iacute;a. Dia a d&iacute;a nos seguimos preparando bajo las nuevas tecnologias del mercado para mantenernos actualizados sobre lo que ocurre dentro y fuera del pa&iacute;s
                              </div>
                            </div>
                          </div>

                          
                        </div><!--/#accordion1-->
                    </div>
                </div>

			
			
			
			
                <div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
                        <h2>Habilidades</h2>
                        <p>Definitivamente tenemos cualidades que nos diferencian de otros proveedores, solo habla con nosotros y te daras cuenta de ello:</p>
						
						 <div class="progress-wrap">
                            <h3>Desarrollo de Proyectos Web / Desktop / APPs </h3>
                            <div class="progress">
                              <div class="progress-bar color1" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                               <span class="bar-width">95%</span>
                              </div>
                            </div>
                        </div>


                        <div class="progress-wrap">
                            <h3>Diseño de Paginas Web</h3>
                            <div class="progress">
                              <div class="progress-bar  color2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                <span class="bar-width">92%</span>
                              </div>

                            </div>
                        </div>
						
						<div class="progress-wrap">
                            <h3>Software M&eacute;dicos</h3>
                            <div class="progress">
                              <div class="progress-bar color1" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                               <span class="bar-width">95%</span>
                              </div>
                            </div>
                        </div>
					
					
						
						<div class="progress-wrap">
                            <h3>Programación de APPs Android  basados en JAVA</h3>
                            <div class="progress">
                              <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                               <span class="bar-width">85%</span>
                              </div>
                            </div>
                        </div>
						
						
						
						

                        <div class="progress-wrap">
                            <h3>Servidores Cloud Servers, VPS, WHM,</h3>
                            <div class="progress">
                              <div class="progress-bar color1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="bar-width">95%</span>
                              </div>
                            </div>
                        </div>

                      
                    </div>

                </div><!--/.col-sm-6-->

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#middle-->

    <section id="middle" class="container" style="padding:10px 0 20px 0; text-align:center">
        <div class="row">
            <div class="col-lg-12">
                <img src='images/tecnologias.jpg'/>
            </div>
        </div>
    </section>

    

    

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