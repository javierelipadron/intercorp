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
		 
		<?php
			
			
		
				
				//include ("intranet/util/conexion.php");
					/*$sql ="insert into requerimiento values(null,
					'".$_POST['empresa']."',
					'".$_POST['persona_contacto']."',
					'".$_POST['dominio1']."',
					'".$_POST['dominio2']."',
					'".$_POST['dominio3']."',
					'".$_POST['color_primario']."',
					'".$_POST['color_secundario']."',
					'".$_POST['color_terciario']."',
					'".$_POST['color_fondo']."',
					'".$_POST['link1']."',
					'".$_POST['dlink1']."',
					'".$_POST['link2']."',
					'".$_POST['dlink2']."',
					'".$_POST['link3']."',
					'".$_POST['dlink3']."',
					'".$_POST['link4']."',
					'".$_POST['dlink4']."',
					'".$_POST['link5']."',
					'".$_POST['dlink5']."',
					'".$_POST['link6']."',
					'".$_POST['dlink6']."',
					'".$_POST['link7']."',
					'".$_POST['dlink7']."',
					'".$_POST['link8']."',
					'".$_POST['dlink8']."',
					'".$_POST['comentario']."',1)";
					
					mysql_query($sql);
					*/
					echo '<h1 id="h1" align="center" > 
							 Toma de Requerimientos para Diseño Web </h1>
							<br/>';
					echo "<div style='margin:50px; text-align:center'>";
						echo "<img src='images/save.png' />";
						echo "<h2>¡ Hemos Recibido sus Requerimientos !</h2>";
						echo "<p>Gracias por enviarnos la informaci&oacute;n, comenzaremos a trabajar. Estaremos informandole proximamente sobre el avance de su proyecto.</p>";
						
					echo "</div>";
					
					echo "<div style='margin:20px; text-align:left'>";
						echo "<h3>Recuerde: </h3>";
						echo "<p> Para mejorar nuestro tiempo de respuesta, es necesario que nos envie la siguiente informaci&oacute;n: </p>";
						
						echo "<img src='images/li1.png' /> Logo de su Empresa ";echo "<br/>";
						echo "<img src='images/li2.png' /> Contenido o informaci&oacute;n de cada Link del sitio web.";
						echo "<br/>";
						echo "<img src='images/li3.png' /> Documentos PDF, DOC u otros que apliquen seg&uacute;n las necesidades de su empresa.
						<span style='color:red'>(*)</span>";
						echo "<br/>";
						echo "<img src='images/li4.png' /> Twitter o Facebook si han sido creados anteriormente <span style='color:red'>(*)</span>";
						echo "<br/><br/>";
						echo "<span style='color:red'>(*) Estos items dependen de si esta informaci&oacute;n sera insertada en el sitio web. </span>";
						
					
					
					
			$to = "intercorpca@gmail.com, javiereli.padron@gmail.com, javiereli.padron@hotmail.com"; 
			$email_subject = "INTERCORP WEBSITE :: REQUERIMIENTO DE PAGINA WEB / " . $_POST['empresa'];
			$email_body = "<h2> Datos Personales </h2>
					 <p><b>Empresa:</b> ".$_POST['empresa'] . "<br />" .
					 "<b>Persona de Contacto:</b> ".$_POST['persona_contacto'] . 
					 "</p>" .
					 
					 "<h2> 1. Seleccion de Dominio </h2> " . 
					 
					 "<p><b> 1ra Opci&oacute;n: </b> ".$_POST['dominio1'] . "<br />" .
					 "<b> 2da Opci&oacute;n: </b> ".$_POST['dominio2'] . "<br />" .
					 "<b> 3ra Opci&oacute;n: </b> ".$_POST['dominio3'] . "<br />" .
					 "</p>" .
					 
					 "<h2> 2. Definici&oacute;n de Colores </h2> " .
					  
					 "<b>Color Primario:</b> ".  
					 " <span style='background-color:". $_POST['color_primario'] .";width:100px;' /> "   . $_POST['color_primario'] . "</span><br/>" .  
					 "<b>Color Secundario:</b> ". 
					 " <span style='background-color:". $_POST['color_secundario'] .";width:100px;' />" . $_POST['color_secundario'] . "</span><br/>" .
					 "<b>Color Terciario:</b> ". 
					 " <span style='background-color:". $_POST['color_terciario'] .";width:100px;' />" . $_POST['color_terciario'] . "</span><br/>" .
					  "<b>Color Fondo:</b> ". 
					 " <span style='background-color:". $_POST['color_fondo'] .";width:100px;' />"  . $_POST['color_fondo'] . "</span><br/>" .
					 
					 
					  "<h2> 3. Links de su sitio Web </h2> " . 
					 
					 "<p><b> Nombre del 1er Link </b> ".$_POST['link1'] . "  <b>Descripcion:</b> " . $_POST['dlink1'] . "  <br />" .
					 "<p><b> Nombre del 2do Link </b> ".$_POST['link2'] . "  <b>Descripcion:</b> " . $_POST['dlink2'] . "  <br />" .
					 "<p><b> Nombre del 3er Link </b> ".$_POST['link3'] . "  <b>Descripcion:</b> " . $_POST['dlink3'] . "  <br />" .
					 "<p><b> Nombre del 4to Link </b> ".$_POST['link4'] . "  <b>Descripcion:</b> " . $_POST['dlink4'] . "  <br />" .
					 "<p><b> Nombre del 5to Link </b> ".$_POST['link5'] . "  <b>Descripcion:</b> " . $_POST['dlink5'] . "  <br />" .
					 "<p><b> Nombre del 6to Link </b> ".$_POST['link6'] . "  <b>Descripcion:</b> " . $_POST['dlink6'] . "  <br />" .
					 "<p><b> Nombre del 7mo Link </b> ".$_POST['link7'] . "  <b>Descripcion:</b> " . $_POST['dlink7'] . "  <br />" .
					 "<p><b> Nombre del 8vo Link </b> ".$_POST['link8'] . "  <b>Descripcion:</b> " . $_POST['dlink8'] . "  <br />" .
					 "</p>" .
					 
					  "<h2> 4. Comentarios </h2> " .$_POST['comentario'];
					
					$headers =    "MIME-Versin: 1.0\r\n" . 
										   "Content-type: text/html; charset=iso-8859-1; format=flowed\r\n" . 
										   "Content-Transfer-Encoding: 8bit\r\n" . 
										   "From: info@intercorp.com.ve\r\n" . 
											"Reply: info@intercorp.com.ve\r\n".
										   "Return-Path: info@intercorp.com.ve\r\n".
										   "X-Mailer: PHP" . phpversion(); 

					mail($to,$email_subject,$email_body,$headers);
							


			
			?> 


	
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
	
	<!--<script>
        $(document).ready(function(){
            
            // cada vez que se mueva el scroll del navegador se ejecutara
            // este evento
            $(document).scroll(function(){
            
                // si la posicion del scroll es superior a 55 pixels...
                if($(window).scrollTop()>60)
                {
                    // indicamos que el header tiene una posicion fija a -47 pixels
                    $("header").css({"position":"fixed", "top":-60, "width": "100%", "z-index":"1000", "border-bottom":"1px solid #ccc" });
                    // definimos el margen superior al contenido cuando queda fijado
                    $("content").css({"margin-top":"80", "padding-top":"10px" });
                }else{
                    $("header").css({"position":"inherit", "top":"inherit"});
                    $("content").css({"margin-top":0});
                }
            });
        });
    </script>-->
</body>
</html>