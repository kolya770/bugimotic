@extends('layouts.layout-main')

@section('title')
    Bugimotic
@endsection

@section('css')
    {!! Html::style('css/libraries/lightgallery.css') !!}
    {!! Html::style('css/libraries/lg-fb-comment-box.css') !!}
    {!! Html::style('css/libraries/lg-transitions.css') !!}
@endsection

@section('content')
    <div class="container content-gallery">
        <div class="row">
            <div class="col-xs-12">
                <div id="lightgallery" class="lightgallery">
                    <a href="img/magazin.JPG">
                        <img src="img/magazin.JPG" />
                    </a>
                    <a href="img/magazin.JPG">
                        <img src="img/magazin.JPG" />
                    </a>
                    <a href="img/magazin.JPG">
                        <img src="img/magazin.JPG" />
                    </a>
                    <a href="img/magazin.JPG">
                        <img src="img/magazin.JPG" />
                    </a>
                    <a href="img/magazin.JPG">
                        <img src="img/magazin.JPG" />
                    </a>
                    <a href="img/magazin.JPG">
                        <img src="img/magazin.JPG" />
                    </a>
                    <a href="img/magazin.JPG">
                        <img src="img/magazin.JPG" />
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    {!! Html::script('js/libraries/lightgallery.js') !!}
    {!! Html::script('js/libraries/lg-fullscreen.min.js') !!}
    {!! Html::script('js/libraries/lg-thumbnail.min.js') !!}

    <script type="text/javascript">
        $(document).ready(function () {
            $("#lightgallery").lightGallery();
        });
    </script>
@endsection