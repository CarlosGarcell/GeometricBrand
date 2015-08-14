<div class="confirmationAlert container">
	@if(Session::has('notification'))
		<div class="alert alert-success customAlert" role="alert">{{ session('notification') }}</div>
	@endif
</div>