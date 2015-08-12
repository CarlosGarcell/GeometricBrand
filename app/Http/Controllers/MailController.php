`<?php namespace App\Http\Controllers;

use Mailers\Mailer;
use App\Http\Requests\SendMailRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MailController extends Controller {

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
	public function sendMailingInfoToEmailHAndler(SendMailRequest $request)
	{
		$input = $request->all();
		$name = $input['name'];
		$lastName = $input['last_name'];
		$email = $input['email'];
		$phone = $input['phone'];
		$requestedInfo = $input['message'];
		$pathToImage = public_path()."/images/Geometric-modelo.png";

		$data = [
			'name' => $name,
			'lastName' => $lastName,
			'email' => $email,
			'phone' => $phone,
			'requestedInfo' => $requestedInfo,
			'pathToImage' => $pathToImage
		];

		$this->mailer->sendTo('emails.info', $data);

		return redirect('/')->with(['message' => '¡Gracias por escribirnos! Pronto te responderemos.']);
	}
}
