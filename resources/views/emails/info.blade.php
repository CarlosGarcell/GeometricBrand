<style type="text/css">

	.header {
		text-align: center;
		font-family: 'Helvetica Neue', sans-serif;
		font-weight: 200;
	}

</style>

<div class="email-background">
	<div class="email-container">
		<div class="header">

			<h4>Solicitud de Informaci&oacuten</h4>

		</div>

		<div class="user-data">

			<div class="user-name">

				<h4>{!! $name." ".$lastName !!}</h4>

			</div>

			<div class="user-email">

				<h4>{!! $email !!}</h4>

			</div>
			
			<div class="user-phone">

				<h4>{!! $phone !!}</h4>

			</div>

		</div>

		<div class="message">

			<p>{!! $requestedInfo !!}</p>

		</div>
	</div>
</div>