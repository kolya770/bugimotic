@extends('layouts.layout-main')

@section('title')
    Bugimotic
@endsection

@section('content')
    <div class="content">
        <div class="container content-width">
            <div class="row">
                <div class="col-xs-12 contact center-block my-navbar">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2>Контакты</h2>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <p class="info">{{ $footer->copyright }}<br /><br />
                                    {{ $footer->number_1 }}<br />
                                    {{ $footer->number_2 }}<br />
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <p class="text">{{ $contact->text }}</p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-1">
                                <img src="/img/magazin.JPG" alt="" class="img-content">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 map-content">
                        <button id="open-popup" class="btn btn-default write-btn center-block" data-toggle="modal" data-target="#contactUs">Написать нам</button>
                        <div id="map" class="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('popup')
    <div class="modal fade contact popup-wrapper" id="contactUs"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button class="close-btn" type="button" data-dismiss="modal" aria-label="Close"><img src="img/close.png"></button>
                    <h5>Напишите нам</h5>
                    <p>Что бы заказать обратный звонок введите свое имя и номер телефона</p>
                    <form id="form" method="post" action="mail.php" name="contact">
                        <label>
                            <input type="text" name="name" placeholder="Имя" id="name" >
                        </label>
                        <label>
                            <input type="tel" name="tel" placeholder="Номер телефона" id="tel">
                        </label>
                        <label>
                            <input type="email" name="email" placeholder="Email" id="email">
                        </label>
                        <label>
                            <textarea class="animated" name="message" placeholder="Ваше сообщение" id="message"></textarea>
                        </label>
                        <button id="send-message" type="submit">Отправить</button>
                    </form>
                    <!-- <div class="text-center"><span>Fields marked with* are mandatory</span></div> -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="thanks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="thanks-message">
                        <p class="thx">Спасибо!<br/>Мы вам перезвоним!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    {!! Html::script('js/libraries/jquery.maskedinput.min.js') !!}

    <script type="text/javascript">
        function initMap() {

            var myLatlng = new google.maps.LatLng(50.400641, 30.529164);

            var positionMap = new google.maps.LatLng(50.403641, 30.529164);

            var map = new google.maps.Map(document.getElementById('map'), {
                center: positionMap,
                scrollwheel: false,
                zoom: 16
            });

            var marker = new google.maps.Marker({
                map: map,
                position: myLatlng,
                title:"проспект Науки, 11А"
            });

            var contentString = '<div id="content">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<div id="bodyContent">'+
                    '<p>Украина, Киев, проспект Науки, 11А</p>'+
                    'Магазин игрушек, детской одежды и обуви <a href="#">Весёлый Бугимотик</a>, ' +
                    'а так же - <a href="#">Арт-студия Тринити</a>, ' +
                    'салон красоты - <a href="#">Життєдайна квітка</a> ' +
                    'и кафе-бар <a href="#">Апельсин</a>.' +
                    '</p>'+
                    '</div>'+
                    '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }

        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }

        $(document).ready(function () {

            var name_send       = $("#name");
            var message_send    = $("#message");
            var email_send      = $("#email");
            var phone_send      = $("#tel");

            //Open modal and delete all val
            $("#open-popup").on('click', function() {
                $("#form input, #form textarea").val('');
            });

            //Phone mask
            phone_send.mask("+38(999) 999-99-99");

            //Validation email
            $(email_send).on('change', function () {
                if( isEmail(email_send.val())) {
                    email_send.removeClass('message-error');
                } else {
                    email_send.addClass('message-error');
                }
            });

            //Validator all field
            $('#send-message').on('click', function () {

                if(name_send.val() == '') {

                    name_send.addClass('message-error');

                } else {

                    name_send.removeClass('message-error');
                }

                if(message_send.val() == '') {

                    message_send.addClass('message-error');

                } else {

                    message_send.removeClass('message-error');
                }

                if(email_send.val() || phone_send.val() ) {

                    if(email_send.val()) {

                        email_send.removeClass('message-error');
                        phone_send.removeClass('message-error');
                    }

                    if($("#tel").val()) {

                        phone_send.removeClass('message-error');
                        email_send.removeClass('message-error');

                    }
                } else {

                    phone_send.addClass('message-error');
                    email_send.addClass('message-error');
                }
            })
        })
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key={{ $google_key }}&callback=initMap" async defer></script>
@endsection