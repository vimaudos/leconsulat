@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="/packages/dropzone/dropzone.css" />
@stop

@section('footer')
    <script src="/packages/dropzone/dropzone.js" type="text/javascript"></script>
    <script src="/assets/js/dropzone-config-2.js" type="text/javascript"></script>
@stop

@section('content')

   <div class="container">
   
       <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{ $gallery->nom_gallery }}<span id="photoCounter"></span></h3>
            </div>
            <div class="panel-body">
            
            {!! Form::open(['url' => route('upload-post'), 'class' => 'dropzone', 'files'=>true, 'id'=>'real-dropzone']) !!}
            {!! Form::hidden('gallery_id', '1') !!}

                <div class="dz-message">

                </div>

                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>

                <div class="dropzone-previews" id="dropzonePreview"></div>

                <h4 style="text-align: center;color:#428bca;">Drop images in this area  <span class="glyphicon glyphicon-hand-down"></span></h4>

            {!! Form::close() !!}


            <ul>
                <li>Images are uploaded as soon as you drop them</li>
                <li>Maximum allowed size of image is 8MB</li>
            </ul>


            </div>

            <!-- Dropzone Preview Template -->
            <div id="preview-template" style="display: none;">

                <div class="dz-preview dz-file-preview">
                    <div class="dz-image"><img data-dz-thumbnail=""></div>
                    <input type="hidden" class="serverfilename"/>

                    <div class="dz-details">
                        <div class="dz-size"><span data-dz-size=""></span></div>
                        <div class="dz-filename"><span data-dz-name=""></span></div>
                    </div>
                    <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                    <div class="dz-error-message"><span data-dz-errormessage=""></span></div>
                
                </div>
            </div>
            <!-- End Dropzone Preview Template -->
            {!! Form::hidden('csrf-token', csrf_token(), ['id' => 'csrf-token']) !!}
        </div>
    </div>

@stop