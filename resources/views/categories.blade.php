@extends('layouts.layout-main')

@section('title')
    Bugimotic
@endsection

@section('content')
    <div class="content">
        <div class="container content-width">
            <div class="row">
                <div class="col-xs-12 categories center-block my-navbar">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2>Категории товаров</h2>
                        </div>
                        <div class="col-xs-12 image-click">
                            <div class="col-xs-12 col-sm-12 col-md-6 padding background-1">
                                <div class="hover-action">
                                    <img src="img/game.png">
                                    <div class="centred stationery-block">
                                        <p class="font-sz no-hover-text">Игрушки</p>
                                        <hr class="center-block" style="margin-top: 10px;">
                                    </div>
                                    <div class="holder">
                                        <div class="block">
                                            <p class="hover-text">Канцтовары</p>
                                            <hr class="center-block width">
                                            <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</span>
                                            {{--<button class="btn btn-danger stationery-btn center-block">Читать все</button>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 padding background-1">
                                <div class="hover-action">
                                    <img src="img/dress.png">
                                    <div class="centred stationery-block">
                                        <p class="no-hover-text">Одежда</p>
                                        <hr class="center-block width">
                                    </div>
                                    <div class="holder">
                                        <div class="block">
                                            <p class="hover-text">Канцтовары</p>
                                            <hr class="center-block width">
                                            <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</span>
                                            {{--<button class="btn btn-danger stationery-btn center-block">Читать все</button>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 padding background-1">
                                <div class="hover-action">
                                    <img src="img/kids.png">
                                    <div class="centred stationery-block">
                                        <p class="no-hover-text">Для малышей</p>
                                        <hr class="center-block width">
                                    </div>
                                    <div class="holder">
                                        <div class="block">
                                            <p class="hover-text">Канцтовары</p>
                                            <hr class="center-block width">
                                            <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</span>
                                            {{--<button class="btn btn-danger stationery-btn center-block">Читать все</button>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 padding background-1">
                                <div class="hover-action">
                                    <img src="img/stationery.png">
                                    <div class="centred stationery-block">
                                        <p class="no-hover-text">Канцтовары</p>
                                        <hr class="center-block width">
                                    </div>
                                    <div class="holder">
                                        <div class="block">
                                            <p class="hover-text">Канцтовары</p>
                                            <hr class="center-block width">
                                            <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</span>
                                            {{--<button class="btn btn-danger stationery-btn center-block">Читать все</button>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 padding background-1">
                                <div class="hover-action">
                                    <img src="img/shoes.png">
                                    <div class="centred stationery-block">
                                        <p class="no-hover-text">Обувь</p>
                                        <hr class="center-block width">
                                    </div>
                                    <div class="holder">
                                        <div class="block">
                                            <p class="hover-text">Канцтовары</p>
                                            <hr class="center-block width">
                                            <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</span>
                                            {{--<a href="{{url('/categories-article')}}">--}}
                                                {{--<button class="btn btn-danger stationery-btn center-block">Читать все</button>--}}
                                            {{--</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection