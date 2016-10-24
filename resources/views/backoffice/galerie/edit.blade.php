


@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
    	@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
		@endif
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Modifier une image</h3>
			</div>
			<div class="panel-body">
                
            </div>
		</div>
		{!! link_to_route('user.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info pull-right']) !!}
		<!--{!! $links !!}-->
	</div>
@endsection