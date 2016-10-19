@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <div class="col-sm-12">
            @if(session()->has('ok'))
                <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Liste des slides</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Priorite</th>
                            <th>Activé ?</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($slides as $slide)
                            <tr>
                                <td>{!! $slide->id !!}</td>
                                <td><img src="/{{ $slide->image }}" width="140" /></td>
                                <td class="text-primary"><strong>{!! $slide->titre !!}</strong></td>
                                <td>{!! $slide->priorite !!}</td>
                                <td>{!! $slide->active !!}</td>
                                <td>{!! link_to_route('slide.edit', 'Modifier', [$slide->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['slide.destroy', $slide->id]]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer ce slide ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {!! link_to_route('slide.create', 'Ajouter un slide', [], ['class' => 'btn btn-info pull-right']) !!}
            {!! $links !!}
        </div>
    </div>
@endsection