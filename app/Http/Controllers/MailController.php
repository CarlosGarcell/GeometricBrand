<?php namespace App\Http\Controllers;

use Mailers\Mailer;
use App\Http\Requests\SendMailRequest;
use App\Http\Controllers\Controller;

class MailController extends Controller 
{

	protected $mailer;

	public function __construct(Mailer $mailer)
	{
		$this->mailer = $mailer;
	}
	
	/**
	 * Send information request to webadmin.
	 *
	 * @return Response
	 */
	public function sendMailingInfoToEmailHandler(SendMailRequest $request)
	{
		$input = $request->all();

		$name = $input['name'];
		$lastName = $input['lastName'];
		$email = $input['email'];
		$requestedInfo = $input['message'];
		$pathToImage = public_path()."/images/Geometric-modelo.png";

		$data = 
		[
			'name' => $name,
			'lastName' => $lastName,
			'email' => $email,
			'requestedInfo' => $requestedInfo,
			'pathToImage' => $pathToImage
		];

		$this->mailer->sendTo('emails.info', $data);

		// flash()->custom('¡Gracias por contactarnos! Pronto responderemos a tu solicitud.', 'customFlashMessage');

		return redirect('/')->with(['notification' => '¡Gracias por contactarnos! Pronto responderemos a tu solicitud']);
	}
}
