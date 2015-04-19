<html>
	<head>

		<title>Geometric Brand</title>

		<script type="text/javascript" src="/js/jquery-1.11.2.min.js"></script>

		<script type="text/javascript" src="/js/jquery.backstretch.min.js"></script>

		<script type="text/javascript" src="/js/master.js"></script>

		<script type="text/javascript" src="/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="/css/welcome.css">

		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

		<link href="/css/fontElegant.css" rel="stylesheet" type="text/css" />

		<link rel="shortcut icon" href="/images/favicon.ico">

		<!-- Theme CSS -->
		<link href="/css/style.css" rel="stylesheet" type="text/css" />
		<link href="/css/responsive.css" rel="stylesheet" type="text/css" />
		<link href="/css/fontElegant.css" rel="stylesheet" type="text/css" />
		<link href="/css/prettyPhoto.css" rel="stylesheet" type="text/css" />

		<!-- Web Fonts  -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	</head>

	<body>

		<div class="jumbotron">
			<div class="content">

			</div>
		</div>

		<!-- Preloader -->
		<!-- <div id="loader"><div class="bar"></div></div> -->
		<!-- //Preloader -->
		
			<!-- CONTACT INFO -->
			<section class="contacts_block">
				
				<!-- CONTAINER -->	
				<div class="container">

					@if(Session::has('message'))
						<div class="alert-success alert">
							{{ Session::get('message') }}
						</div>
					@endif
				
					<!-- ROW -->
					<div class="row">
						<div class="col-lg-7 col-sm-7 padbot40">
							<div class="page_title">
								<h2>Env&iacuteanos un mensaje</h2>
							</div>
							
							<!-- CONTACT FORM -->
							<div id="contact-form">
								<div id="sendmessage">Su mensaje ha sido enviado. ¡Muchas Gracias!</div>
								{!! Form::open(['action' => 'MailController@requestInfo', 'class' => 'contactForm', 'role' => 'form']) !!}
									<div class="row">
										<div class="form-group col-xs-6 col-ss-12">
											{!! Form::text('name', null, ['id' => 'name', 'placeholder' => 'Nombre', 'autofocus' => true, 'data-rule' => 'maxlen:4', 
												'data-msg' => 'Por favor, ingrese al menos 4 carácteres']) !!}
											<div class="validation"></div>
										</div>
										<div class="form-group col-xs-6 col-ss-12">
											{!! Form::text('last_name', null, ['id' => 'last-name', 'placeholder' => 'Apellido', 'data-rule' => 'maxlen:4', 'data-msg' => 'Por favor, ingrese al menos 4 carácteres']) !!}
											<div class="validation"></div>
										</div>
										<div class="form-group col-xs-6 col-ss-12">
											{!! Form::text('email', null, ['id' => 'email', 'placeholder' => 'Email', 'data-rule' => 'email', 'data-msg' => 'Por favor, ingrese un email correcto']) !!}
											<div class="validation"></div>
										</div>
										<div class="form-group col-xs-6 col-ss-12">
											{!! Form::text('phone', null, ['id' => 'phone', 'placeholder' => 'Teléfono', 'data-rule' => 'maxlen:4', 'data-msg' => 'Por favor, ingrese in mínimo de 8 carácteres']) !!}
											<div class="validation"></div>
										</div>
									</div>
									<div class="form-group">
										{!! Form::textarea('message', null, ['placeholder' => 'Mensaje', 'data-rule' => 'required', 'data-msg' => 'Por favor, ingrese su mensaje']) !!}
										<div class="validation"></div>
									</div>
									<input type="submit" name="submit" value="Enviar" />
								</form>
							</div><!-- //CONTACT FORM -->
						</div>
						<div class="col-lg-5 col-sm-5 padbot40">
							<div class="page_title">
								<h2>Redes Sociales</h2>
							</div>
							
							<!-- CONTACT INFO -->
							<ul class="list4 contacts_info">
								<!-- <li><b class="fe icon_pin"></b><span>5512 Lorem Ipsum Vestibulum Mas, Dolor Sit Amet, 666</span></li> -->
								<!-- <li><b class="fe icon_mail"></b><span><a href="mailto:info@geometricbrand.com" alt="">info@geometricbrand.com</a></span></li> -->
								<li><b class="fe social_twitter"></b><span><a href="javascript:void(0);" alt="">twitter.com/geometric.brand</a></span></li>
								<li><img src="/images/instagram.png" width="14px" height="14px"><a href="www.instagram.com/geo_mcbo" target="_blank" style="padding-left: 14px;">instagram.com/geo_mcbo</a></li>
								<!-- <li><b class="fe icon_phone"></b><span>+1 800 450 69 35, +1 800 450 69 40</span></li> -->
								<!-- <li><b class="fe social_flickr"></b><span><a href="javascript:void(0);" alt="">flickr.com/photos/companyname</a></span></li> -->
								<!-- <li><b class="fe social_facebook"></b><span><a href="javascript:void(0);">facebook.com/companyname</a></span></li> -->
								<!-- <li><b class="fe social_vimeo"></b><span><a href="javascript:void(0);">vimeo.com/companyname</a></span></li> -->
							</ul><!-- //CONTACT INFO -->
						</div>
					</div><!-- //ROW -->
				</div><!-- //CONTAINER -->
			</section><!-- //CONTACTS INFO -->


			<!-- Footer -->
				<footer>
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-sm-8">
								
								<!-- Footer info -->
								<ul class="foot_info">
									<li><i class="fe icon_house"></i>Geometric Brand - Maracaibo, Venezuela</li>
									<!-- <li><i class="fe icon_phone"></i>76-245-2478</li> -->
									<li><i class="fe icon_mail"></i>info@geometricbrand.com</li>
								</ul><!-- Footer info -->
							</div>
							
							<div class="col-md-4 col-sm-4 right">
								<div class="copyright">Geometric Brand<span> &copy; Copyright 2015</span></div>
							</div>
						</div>
					</div>
				</footer><!-- //Footer -->
		
		<!-- <script src="js/validate.js"></script> -->
		<script src="js/myscript.js" type="text/javascript"></script>

		<script type="text/javascript">

			$('.alert').delay(3000).slideUp(300);

		</script>

	</body>
<html>