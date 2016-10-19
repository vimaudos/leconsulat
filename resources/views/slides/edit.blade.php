@extends('layouts.app')

@section('content')

    <div class="container">

        
            <br>
            <div class="panel panel-default">	
                <div class="panel-heading">Modification d'un slide.</div>
                <div class="panel-body"> 
                    <div class="col-sm-12">
                        {!! Form::model($slide, ['route' => ['slide.update', $slide->id], 'method' => 'put', 'files' => true]) !!}
                        
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
                                    {!! Form::text('titre_fr', $slide->translate('fr')->titre, ['class' => 'form-control']) !!}
                                    {!! $errors->first('titre_fr', '<small class="help-block">:message</small>') !!}
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="en">
                                <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                                    <label for="titre_en">{{trans('backoffice.titre_en')}}</label>
                                    {!! Form::text('titre_en', $slide->translate('en')->titre, ['class' => 'form-control']) !!}
                                    {!! $errors->first('titre_en', '<small class="help-block">:message</small>') !!}
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="es">
                                <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                                    <label for="titre_es">{{trans('backoffice.titre_es')}}</label>
                                    {!! Form::text('titre_es', $slide->translate('es')->titre, ['class' => 'form-control']) !!}
                                    {!! $errors->first('titre_es', '<small class="help-block">:message</small>') !!}
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="pt">
                                <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                                    <label for="titre_pt">{{trans('backoffice.titre_pt')}}</label>
                                    {!! Form::text('titre_pt', $slide->translate('pt')->titre, ['class' => 'form-control']) !!}
                                    {!! $errors->first('titre_pt', '<small class="help-block">:message</small>') !!}
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="de">
                                <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                                    <label for="titre_de">{{trans('backoffice.titre_de')}}</label>
                                    {!! Form::text('titre_de', $slide->translate('de')->titre, ['class' => 'form-control']) !!}
                                    {!! $errors->first('titre_de', '<small class="help-block">:message</small>') !!}
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="it">
                                <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                                    <label for="titre_it">{{trans('backoffice.titre_it')}}</label>
                                    {!! Form::text('titre_it', $slide->translate('it')->titre, ['class' => 'form-control']) !!}
                                    {!! $errors->first('titre_it', '<small class="help-block">:message</small>') !!}
                                </div>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-4">
                                <img src="/{{ $slide->image }}" width="100%" />
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                                    <label for="image">{{trans('backoffice.image')}}</label>
                                    {!! Form::file('image', ['class' => 'form-control']) !!}
                                    {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                                </div>
                                <div class="form-group {!! $errors->has('priorite') ? 'has-error' : '' !!}">
                                    <label for="priorite">{{trans('backoffice.priorite')}}</label>
                                    {!! Form::text('priorite', $slide->priorite, ['class' => 'form-control']) !!}
                                    {!! $errors->first('priorite', '<small class="help-block">:message</small>') !!}
                                </div>
                                <div class="form-group {!! $errors->has('priorite') ? 'has-error' : '' !!}">
                                    {!! Form::checkbox('active', 1, $slide->active) !!}Activé ?
                                </div>
                            </div>
                        </div>
                                               
                            {!! Form::submit('Valider', ['class' => 'btn btn-primary pull-right']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <a href="javascript:history.back()" class="btn btn-primary">
                <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
            </a>
    
    </div>
@endsection