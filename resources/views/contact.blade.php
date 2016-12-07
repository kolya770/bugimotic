@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container content-width">
            <div class="row">
                <div class="col-xs-12 contact center-block my-navbar">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2>Контакты</h2>
                            <div class="col-xs-12 col-sm-5 col-sm-offset-1">
                                <p class="text">{{ $contact->text }}</p>
                            </div>
                            <div class="col-xs-12 col-sm-5 col-sm-offset-1">
                                <p class="info">{{ $footer->copyright }}<br /><br />
                                    {{ $footer->number_1 }}<br />
                                    {{ $footer->number_2 }}<br />
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 map-content">
                        <a href="" data-toggle="modal" data-target="#contactUs">
                            <button class="btn btn-default write-btn center-block">Написать нам</button>
                        </a>
                        <div id="map" class="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function initMap() {

            var myLatlng = new google.maps.LatLng(50.400641, 30.529164);

            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatlng,
                scrollwheel: false,
                zoom: 17
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
                    '</div>'+
                    '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key={{ $google_key }}&callback=initMap" async defer></script>
@endsection