<!DOCTYPE html>
<html>
<head>
	<title>Geometric</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta charset="UTF-8">
	<meta name="author" content="Carlos Garcell">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Design, Necklace, Venezuelan, Geometric, Brand, GeometricBrand">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/vegas.min.css">
	<link rel="stylesheet" type="text/css" href="css/preview.css">
</head>
<body>

	<!-- Email sent notification -->
	<!-- @include('flash::message') -->
	@include('partials.EmailSentNotification')

	<!-- Error display -->
	@include('partials.InformationRequestValidation')

	<div class="container content">
		<div class="col-md-12 pageHeader container">
			<section class="pageHeaderText">
				<h2>Geometric</h2>
				<h2>Brand</h2>
			</section>
		</div>
		<div class="col-md-12 upcoming">
			<h3>PR&Oacute;XIMAMENTE</h3>
		</div>

		<div class="col-md-12 socialNetworks">
			<h3>¡S&Iacute;GUENOS EN NUESTRAS REDES SOCIALES!</h3>
			<div class="socialNetworksList row">
				<section class="col-md-6 col-xs-12 instagram"><a href="https://instagram.com/geo_mcbo/"><img src="images/white-instagram.png">@GEO_MCBO</a></section>
				<section class="col-md-6 col-xs-12 twitter"><a href=""><img src="images/white-twitter.png">@GEOMETRIC_BRAND</a></section>
			</div>
		</div>

		<div class="col-md-12 col-xs-12 contactForm">
			<section class="col-md-12 col-xs-12 contactFormHeader">
				<h3>ENV&Iacute;ANOS UN MENSAJE</h3>
			</section>

			{!! Form::open(['url' => '/mail', 'class' => 'userData']) !!}
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<section class="col-md-6 col-xs-12 form-group">
					<input type="text" class="form-control" placeholder="Nombre" name="name" autofocus="autofocus" id="name" value="<?php echo Request::old('name'); ?>">
				</section>
				<section class="col-md-6 col-xs-12 form-group">
					<input type="text" class="form-control" placeholder="Apellido" name="lastName" id="lastName" value="<?php echo \Request::old('lastName'); ?>">
				</section>
				<section class="col-md-12 col-xs-12 form-group">
					<input type="email" class="form-control" placeholder="Email" name="email" id="email" value="<?php echo \Request::old('email'); ?>">
				</section>
				<section class="col-md-12 col-xs-12 form-group">
					<textarea class="form-control" rows="4" placeholder="Mensaje" name="message" id="message"><?php echo \Request::old('message'); ?></textarea>
				</section>
				<section class="col-md-12 col-xs-12 form-group">
					<input type="submit" class="btn btn-primary btn-lg" id="submitButton" value="Enviar">
				</section>
			{!! Form::close() !!}
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vegas.min.js"></script>
	<script type="text/javascript" src="js/SlideshowPhotos.js"></script> 
	<script type="text/javascript" src="js/FormFieldBehavior.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			// $('div.customFlashMessage').slideDown(300);
			$('div.customFlashMessage').delay(4000).slideUp(300);
		});
	</script>
</body>
</html>