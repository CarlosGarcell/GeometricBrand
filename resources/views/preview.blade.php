<!DOCTYPE html>
<html>
<head>
	<title>Geometric</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/preview.css">
</head>
<body class="backstretch">

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
			<ul class="socialNetworksList row">
				<li class="col-md-6 col-xs-12" id="instagram">INSTAGRAM</li>
				<li class="col-md-6 col-xs-12" id="twitter">TWITTER</li>
			</ul>
		</div>
		<div class="col-md-12 contactForm">
			<section class="col-md-12 col-xs-12 contactFormHeader">
				<h3>ENV&Iacute;ANOS UN MENSAJE</h3>
			</section>

			<form action="http://geometric.app/mail" method="POST" accept-charset="UTF-8">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<section class="userData">
					<section class="col-md-6 col-xs-12">
						<input type="text" class="form-control" placeholder="Nombre" autofocus="true" id="name">
					</section>
					<section class="userData col-md-6 col-xs-12">
						<input type="text" class="form-control" placeholder="Apellido" id="lastName">
					</section>
				</section>
				<section class="userData col-md-12 col-xs-12">
					<input type="email" class="form-control" placeholder="Email" id="email">
				</section>
				<section class="userData col-md-12 col-xs-12">
					<textarea class="form-control" rows="4" placeholder="Mensaje" id="message"></textarea>
				</section>
				<section class="col-md-12 col-xs-12">
					<input type="submit" class="btn btn-primary btn-lg" id="submitButton" value="Enviar">
				</section>
			</form>
	</div>

	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
	<script type="text/javascript" src="js/SlideshowPhotos.js"></script>
	<script type="text/javascript" src="js/FormFieldBehavior.js"></script>

</body>
</html>