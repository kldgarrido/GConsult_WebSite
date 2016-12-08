<!DOCTYPE html>
<html lang="en">
<head>
<title>GConsultores</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
.carousel-inner>.item>img, .carousel-inner>.item>a>img {
	width: 100%;
	margin: auto;
}
</style>




</head>
<body>
	<div class="container-fluid">
		<div class="site-wrapper">
			<div class="site-wrapper-inner">

				<div class="cover-container">

					<div class="page-header">

						<h2 class="text-muted"><img src="img/logo_consultores.jpg">
							GConsultores <small>Comunicacion Inteligente</small>
						</h2>
					

					</div>
				</div>
			</div>
			
		</div>

		<div class="row-fluid">
			<div class="col-md-2">&nbsp;</div>
			<div class="col-md-8" align="center">

				
				<?php
				try{
						$name = str_replace(" ","_",$_POST["name"]);
						$lastname = str_replace(" ","_",$_POST["lastname"]);
						$email = str_replace(" ","_",$_POST["email"]);
						$phone = str_replace(" ","_",$_POST["phone"]);
						$comment = str_replace(" ","_",$_POST["comment"]);
						$calendar_contact = str_replace(" ","_",$_POST["calendar_contact"]);

						$url = "http://localhost:8080/landingpage?name=$name&lastname=$lastname&email=$email&phone=$phone&calendar_contact=$calendar_contact&comment=$comment";

						$response = file_get_contents($url);
						
						if($response!=null){
							echo '<div class="alert alert-success" role="alert"><h4><strong>Perfecto!</strong> dentro de poco uno de nuestros profesores se pondra en contacto con usted.<br/><br/><strong>Muchas Gracias</strong> por comunicarse con nosotros</h4></div>';
						}
						else{
							echo '<div class="alert alert-warning" role="alert"><h4><strong>Lo sentimos</strong> no pudimos procesar el envio. Por favor intentalo nuevamente</h4></div>';
						}
				}
				catch (Exception $e) {
					echo '<div class="alert alert-warning" role="alert"><h4><strong>Lo sentimos</strong> no pudimos procesar el envio. Por favor intentalo nuevamente</h4></div>';
				}
				
				?>
				
		  </div>
		  <div class="col-md-2">&nbsp;</div>
		   </div>
		   </div>
      </div>
	  
	  <br/>
                    <div class="row-fluid">
                        <div class="col-md-2">&nbsp;</div>
                        <div class="col-md-8" align="center">
                            
                            <div class="alert alert-info" role="alert">
                                <strong>Información:</strong> Si lo deseas te puedes poner en contacto con nosotros mediante los siguientes medios:<br/>
                                <strong>Teléfonos Celulares:</strong> 3208966816 / 3213942759 / 3143457689<br/>
								<img src="img/Whatsapp_Logo.png" alt="Chania" > Escribanos por <strong>WhatsApp: 3143457689</strong><br/>
								Teléfono Fijo:<strong>(571) 6564598</strong><br/>
                                <strong>Correo electronico:</strong> gconsultores@gconsultores.com.co<br/>
                                Visita nuesto <strong>Sitio Web: </strong><a href="http://www.gconsultores.com.co/">www.gconsultores.com.co</a><br/>
                            </div>
                        </div>
                        <div class="col-md-2">&nbsp;</div>
                    </div>
                    
		
		<br/>
		
		<!-- Footer -->
		<div class="row-fluid">
			<div class="col-md-12" align="center">
				<div class="well">Calle 114A #50-71, Barrio Alhambra, Bogotá Colombia | Todos los derechos reservados GConsultores 2016.
			</div>
			</div>
		</div>		
	
	  

		<!-- Google Code for Contacto Conversion Page -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 938595316;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "w-FKCNGctGUQ9KfHvwM";
		var google_remarketing_only = false;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/938595316/?label=w-FKCNGctGUQ9KfHvwM&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript>
		
		
	</div>

</body>
</html>
