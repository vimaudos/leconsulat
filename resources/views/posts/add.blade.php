@extends('layouts.app')

@section('content')

	<br>

    <div class="container">
        <div class="col-sm-12">
          
            <h1>{{trans('backoffice.ajout_article')}}</h1>  
            <br/>
            {!! Form::open(['route' => 'post.store', 'files' => true]) !!}
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#fr" aria-controls="{{trans('backoffice.fr')}}" role="tab" data-toggle="tab">{{trans('backoffice.fr')}}</a>
                    </li>
                    <li role="presentation">
                        <a href="#en" aria-controls="{{trans('backoffice.en')}}" role="tab" data-toggle="tab">{{trans('backoffice.en')}}</a>
                    </li>
                    <li role="presentation">
                        <a href="#es" aria-controls="{{trans('backoffice.es')}}" role="tab" data-toggle="tab">{{trans('backoffice.es')}}</a>
                    </li>
                    <li role="presentation">
                        <a href="#pt" aria-controls="{{trans('backoffice.pt')}}" role="tab" data-toggle="tab">{{trans('backoffice.pt')}}</a>
                    </li>
                    <li role="presentation">
                        <a href="#de" aria-controls="{{trans('backoffice.de')}}" role="tab" data-toggle="tab">{{trans('backoffice.de')}}</a>
                    </li>
                    <li role="presentation">
                        <a href="#it" aria-controls="{{trans('backoffice.it')}}" role="tab" data-toggle="tab">{{trans('backoffice.it')}}</a>
                    </li>
                </ul>
                <br/>
            
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="fr">
                        <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                            <label for="titre_fr">{{trans('backoffice.titre_fr')}}</label>
                            {!! Form::text('titre_fr', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('titre_fr', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('contenu') ? 'has-error' : '' !!}">
                            <label for="contenu_fr">{{trans('backoffice.contenu_fr')}}</label>
                            {!! Form::textarea ('contenu_fr', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('contenu_fr', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="en">
                        <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                            <label for="titre_en">{{trans('backoffice.titre_en')}}</label>
                            {!! Form::text('titre_en', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('titre_en', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('contenu') ? 'has-error' : '' !!}">
                            <label for="contenu_en">{{trans('backoffice.contenu_en')}}</label>
                            {!! Form::textarea ('contenu_en', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('contenu_en', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="es">
                        <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                            <label for="titre_es">{{trans('backoffice.titre_es')}}</label>
                            {!! Form::text('titre_es', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('titre_es', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('contenu') ? 'has-error' : '' !!}">
                            <label for="contenu_es">{{trans('backoffice.contenu_es')}}</label>
                            {!! Form::textarea ('contenu_es', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('contenu_es', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="pt">
                        <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                            <label for="titre_pt">{{trans('backoffice.titre_pt')}}</label>
                            {!! Form::text('titre_pt', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('titre_pt', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('contenu') ? 'has-error' : '' !!}">
                            <label for="contenu_pt">{{trans('backoffice.contenu_pt')}}</label>
                            {!! Form::textarea ('contenu_pt', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('contenu_pt', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="de">
                        <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                            <label for="titre_de">{{trans('backoffice.titre_de')}}</label>
                            {!! Form::text('titre_de', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('titre_de', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('contenu') ? 'has-error' : '' !!}">
                            <label for="contenu_de">{{trans('backoffice.contenu_de')}}</label>
                            {!! Form::textarea ('contenu_de', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('contenu_de', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="it">
                        <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                            <label for="titre_it">{{trans('backoffice.titre_it')}}</label>
                            {!! Form::text('titre_it', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('titre_it', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('contenu') ? 'has-error' : '' !!}">
                            <label for="contenu_it">{{trans('backoffice.contenu_it')}}</label>
                            {!! Form::textarea ('contenu_it', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('contenu_it', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                </div>
            
                <div class="form-group {!! $errors->has('tag') ? 'has-error' : '' !!}">
                    <label for="titre_fr">{{trans('backoffice.categorie')}}</label>
                    <select multiple class="form-control" name="tags[]">
                        @foreach($tags as $tag) 
                            <option name="{{ $tag->id }}"> {{ $tag->tag }} </option>
                        @endforeach
                    </select>
                                        
                </div>
            
                <br/>
                
                <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                    <label for="image">{{trans('backoffice.image')}}</label>
					{!! Form::file('image', ['class' => 'form-control']) !!}
					{!! $errors->first('image', '<small class="help-block">:message</small>') !!}
				</div>
            
                {!! Form::submit('Ajouter !', ['class' => 'btn btn-info pull-right']) !!}
            {!! Form::close() !!}
            
            <a href="javascript:history.back()" class="btn btn-primary">
			     <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
            </a>
            
        </div>
    </div>
    
@endsection