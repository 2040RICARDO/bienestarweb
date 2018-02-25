@if(Session::has('save'))
<div class="alert alert-success" role="alert">
<button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
	<strong>{{ Session::get('save') }}</strong>
</div>
@endif

@if(Session::has('save1'))
<div class="alert alert-danger" role="alert" >
<button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
	<strong>{{ Session::get('save1') }}</strong>
</div>
@endif

@if(Session::has('saveobservado'))
<div class="alert alert-success" role="alert" >
<button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
	<strong>{{ Session::get('saveobservado') }}</strong>
</div>
@endif