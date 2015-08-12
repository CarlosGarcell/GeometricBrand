<?php
	
	//Where will you get the forms' results?
	define("CONTACT_FORM", 'anirov@gmail.com');

	error_reporting (E_ALL ^ E_NOTICE);

	$post = (!empty($_POST)) ? true : false;

	if($post){
		
		$name = stripslashes($_POST['name']);
		$last_name = stripslashes($_POST['last_name']);
		$email = trim($_POST['email']);
		$subject = stripslashes($_POST['phone']);
		$message = stripslashes($_POST['message']);

		$error = '';

		
		if(!$error){
			
			$mail = mail(CONTACT_FORM, $subject, $message,
				"From: ".$name." ".$last_name." <".$email.">\r\n"
				."Reply-To: ".$email."\r\n"
				."X-Mailer: PHP/" . phpversion());

			if($mail){
				echo 'OK';
			}
		}
	}
?>