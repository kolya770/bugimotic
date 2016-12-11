@extends('layouts.layout-main')

@section('title')
    Bugimotic
@endsection

@section('content')
    <div class="content">
        <div class="container content-width">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <h2>{!! $blog->title !!}</h2>
                    <div class="body-text">{!! $blog->body !!}</div>
                </div>
            </div>
        </div>
    </div>
@endsection