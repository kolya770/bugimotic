@extends('layouts.layout-main')

@section('title')
    Bugimotic
@endsection

@section('content')
    <div class="content">
        @foreach($blogs as $blog)
            <div class="container content-width">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                        <h2>{!! $blog->title !!}</h2>
                        <div class="body-text">{!! Helper::arrayToFindFirstTag($blog->body) !!}</div>
                        {{--{!! ($blog->body) !!}--}}
                        <a href="{{ action('BlogController@show', ['id'=>$blog->id] ) }}" class="btn btn-default read-all-btn center-block">Читать все</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection