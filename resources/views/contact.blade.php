@extends('welcome')

	@section('test')

		<h4>Section Test</h4>

	@endsection

	@section('content')

		<head>
		
		<!-- Basic -->
		<meta charset="utf-8">
		<!-- <title>Best Shop | responsive bootstrap3 html5 template</title>
	    <meta name="keywords" content="HTML5 Template" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content=""> -->
		
		<link rel="shortcut icon" href="images/favicon.ico">
	    
		<!-- Theme CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="css/fontElegant.css" rel="stylesheet" type="text/css" />
	    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
		<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/responsive.css" rel="stylesheet" type="text/css" />
	    
		<!-- Web Fonts  -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		
	</head>
	<body>

		<!-- Preloader -->
		<div id="loader"><div class="bar"></div></div>
		<!-- //Preloader -->
		
		<!-- PAGE -->
		<div id="page">
			
			<!-- Page Box -->
			<div class="page_box">
		
			<!-- CONTACT INFO -->
			<section class="contacts_block">
				
				<!-- CONTAINER -->	
				<div class="container">
				
					<!-- ROW -->
					<div class="row">
						<div class="col-lg-7 col-sm-7 padbot40">
							<div class="page_title">
								<h2>Get in Touch</h2>
							</div>
							
							<!-- CONTACT FORM -->
							<div id="contact-form">
								<div id="sendmessage">Your message has been sent. Thank you!</div>
								<form class="contactForm" action="contact/contact.php" method="post" role="form">
									<div class="row">
										<div class="form-group col-xs-6 col-ss-12">
											<input id="name" type="text" name="name" placeholder="Name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
											<div class="validation"></div>
										</div>
										<div class="form-group col-xs-6 col-ss-12">
											<input id="last-name" type="text" name="last_name" placeholder="Last Name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
											<div class="validation"></div>
										</div>
										<div class="form-group col-xs-6 col-ss-12">
											<input id="email" type="email" name="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
											<div class="validation"></div>
										</div>
										<div class="form-group col-xs-6 col-ss-12">
											<input id="phone" type="text" name="phone" placeholder="Phone" data-rule="maxlen:4" data-msg="Please enter at least 8 chars of phone" />
											<div class="validation"></div>
										</div>
									</div>
									<div class="form-group">
										<textarea name="message" placeholder="Message" data-rule="required" data-msg="Please enter your message"></textarea>
										<div class="validation"></div>
									</div>
									<input type="submit" name="submit" value="Send" />
								</form>
							</div><!-- //CONTACT FORM -->
						</div>
						<div class="col-lg-5 col-sm-5 padbot40">
							<div class="page_title">
								<h2>Contact Us</h2>
							</div>
							
							<!-- CONTACT INFO -->
							<ul class="list4 contacts_info">
								<li><b class="fe icon_pin"></b><span>5512 Lorem Ipsum Vestibulum Mas, Dolor Sit Amet, 666</span></li>
								<li><b class="fe icon_mail"></b><span><a href="mailto:mail@compname.com" alt="">mail@compname.com</a></span></li>
								<li><b class="fe social_twitter"></b><span><a href="javascript:void(0);" alt="">twitter.com/companyname</a></span></li>
								<li><b class="fe icon_phone"></b><span>+1 800 450 69 35, +1 800 450 69 40</span></li>
								<li><b class="fe social_flickr"></b><span><a href="javascript:void(0);" alt="">flickr.com/photos/companyname</a></span></li>
								<li><b class="fe social_facebook"></b><span><a href="javascript:void(0);">facebook.com/companyname</a></span></li>
								<li><b class="fe social_vimeo"></b><span><a href="javascript:void(0);">vimeo.com/companyname</a></span></li>
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
									<li><i class="fe icon_house"></i>2046 Lorem Ipsum Dolor Sit 20707</li>
									<li><i class="fe icon_phone"></i>76-245-2478</li>
									<li><i class="fe icon_mail"></i>info@ideologic.net</li>
								</ul><!-- Footer info -->
							</div>
							
							<div class="col-md-4 col-sm-4 right">
								<div class="copyright">Best Shop <span> &copy; Copyright 2020</span></div>
							</div>
						</div>
					</div>
				</footer><!-- //Footer -->
			</div><!-- //Page Box -->
		</div><!-- //Page -->
		
		
		<!-- SCRIPTS -->
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
		
		<script src="js/validate.js"></script>
		<script src="js/myscript.js" type="text/javascript"></script>

	@endsection