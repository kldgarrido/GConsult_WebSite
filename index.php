<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- <Head> -->
		<title>GConsultores</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="resource/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="resource/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
			.carousel-inner>.item>img, .carousel-inner>.item>a>img {
				width: 100%;
				margin: auto;
			}
</style>
		<!-- </Head> -->
	</head>
	
	<body>
	
		<div class="container-fluid">
		
				<div class="site-wrapper">

					<div class="site-wrapper-inner">

						<div class="cover-container">

							<!-- <Head> -->
							<?php include 'component/head_page.php';?>
							<!-- </Head> -->


							<!-- <carousel> -->
							<?php include 'component/carousel_homepage.php';?>
							<!-- </carousel> -->

							
							<div class="row-fluid">
								<div class="col-md-12">
									<!-- <cursos_resumen> -->
									<?php include 'component/cursos_resumen.php';?>
									<!-- </cursos_resumen> -->
								</div>
							</div>

							<div class="row-fluid">

								<div class="col-md-8">

                                	<h2 style="color: #777" align="center"><span class="label label-default">Nuestra Sede:</span></h2>
                                	<br/>
                                    <p class="lead" style="color: #999; font-size: 22px;" align="center">
                                    	Nuestra sede se encuentra ubicada en la <strong>Calle 114A #50-71</strong>. Barrio: La Alahmbra.
                                    	<br/>
                                    </p>

                                    <p class="lead" style="color: #999; font-size: 18px;" align="center">
                                    <i>"Nuestras puertas estan abiertas a toda hora y todos los dias Lunes a Sábados"</i>
                                    </p>

                                    <p class="lead" style="color: #999; font-size: 18px;" align="center">
	                                    <a href="https://www.google.com.co/maps/place/Cl.+114a+%2350-71,+Bogot%C3%A1/@4.6991346,-74.062756,17z/data=!3m1!4b1!4m5!3m4!1s0x8e3f9aced9f61015:0xcbd6c9f4335bdedd!8m2!3d4.6991293!4d-74.0605673?hl=es" target="_blank">Google Map:
	                                    </a>
                                    

<div class="embed-responsive embed-responsive-16by9" align="center">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.4070417887906!2d-74.06275598581024!3d4.699134642980984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9aced9f61015%3A0xcbd6c9f4335bdedd!2sCl.+114a+%2350-71%2C+Bogot%C3%A1!5e0!3m2!1sen!2sco!4v1469207311341" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
                                    </p>
                                    </div>

								<div class="col-md-4">
									<!-- <FormContacto> -->
									<?php include 'component/form_contact_home.php';?>
									<!-- </FormContacto> -->
								</div>
							</div>

							<!-- <Footer> -->
							<?php include 'component/footer.php';?>
							<!-- </Footer> -->	


						</div>

					</div>

				</div>

			</div>

	</body>
	
</html>
