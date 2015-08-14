<?php namespace Mailers;

class Mailer 
{
	public function sendTo($view, $data = [])
	{
		\Mail::queue($view, $data, function($message) use ($data)
		{
			$message->from($data['email'], "GeometricBrand");

			$message->to('info@geometricbrand.com', 'Geometric')->subject('Solicitud de Información');
		});
	}
}