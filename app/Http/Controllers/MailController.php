<?php namespace App\Http\Controllers;

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
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Send information request to webadmin.
	 *
	 * @return Response
	 */
	public function requestInfo(SendMailRequest $request)
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

		return redirect('/')->with(['message' => '¡Gracias por contactárnos! Pronto te responderemos.']);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
