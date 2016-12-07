@extends('layouts.app')

@section('content')
    <div class="content">
        @foreach($blogs as $blog)
            <div class="container content-width">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                        <h2>{!! $blog->title !!}</h2>
                        <div>{!! $blog->body !!}</div>
                        <button class="btn btn-default read-all-btn center-block">Читать все</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection