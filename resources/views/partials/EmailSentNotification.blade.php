@if(Session::has('notification'))
	<div class="confirmationAlert container">
		<div class="alert alert-success customFlashMessage" role="alert">{{ Session::get('notification') }}</div>
	</div>
@endif