@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <br>
            <div class="panel panel-default">	
                <div class="panel-heading">Slide</div>
                <div class="panel-body"> 

                    <img src="/{{ $slide->image }}" width="100%" class="margin-bottom-10" />
                    <p>Titre: {{ $slide->titre }}</p>

                </div>
            </div>				
            <a href="javascript:history.back()" class="btn btn-primary">
                <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
            </a>
        </div>
    </div>
@endsection 