@extends('layouts.app')

@section('content')

    <div class="container">
        
        <div class="pull-right">
            {!! link_to_route('post.create', trans('backoffice.creation'), [], ['class' => 'btn btn-info']) !!}
        </div>
        
        @if(isset($info))
            <div class="row alert alert-info">{{ $info }}</div>
        @endif
        
        <div class="text-center">
            {!! $links !!}
        </div>
        
        @foreach($posts as $post)
            <article class="row bg-gray-lighter">
                <div class="col-sm-6">
                    <header>
                        <h1>{{ $post->titre }}</h1>
                    </header>
                </div>
                <div class="col-sm-6 text-right padding-top-20">
                     @if(Auth::check() and Auth::user()->admin)
                        {!! Form::open(['method' => 'DELETE', 'route' => ['post.destroy', $post->id]]) !!}
                        
                        <div class="btn-group" role="group">        
                            {!! link_to_route('post.edit', trans('backoffice.modifier'), $post->id, ['class' => 'btn btn-sm btn-info']) !!}

                            {!! Form::submit(trans('backoffice.supprimer'), ['class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirm(\'Vraiment supprimer cet article ?\')']) !!}
                        </div>
                        
                        {!! Form::close() !!}
                    @else
                        {!! link_to_route('post.edit', trans('backoffice.modifier'), $post->id, ['class' => 'btn btn-sm btn-info']) !!}
                    
                    @endif
                                    
                </div>
                <div class="col-sm-12">
                    <hr>
                    <section>
                        <p class="article_images clearfix">
                            <img src="/{{ $post->image }}" class="img-rounded margin-right-10" width="140" />{{ $post->contenu }}</p>
                        
                        <p>
                            {!! trans('backoffice.categorie') !!} : 
                            @foreach($post->tags as $tag)
                                {!! link_to('post/tag/' . $tag->tag_url, $tag->tag,	['class' => '']) !!}
                            @endforeach
                        </p>
                        
                              
                        
                        <em class="pull-right margin-bottom-10">
                            <span class="glyphicon glyphicon-pencil"></span> {{ $post->user->name }} le {!! $post->created_at->format('d-m-Y') !!}
                        </em>
                    </section>
                    
                </div>
            </article>
            <br>
        @endforeach
        
        <div class="text-center">
            {!! $links !!}
        </div>
        
    </div>
@endsection