<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ elixir('css/main.css') }}">
    @yield('css')
</head>
<body>

<div id="page-preloader">
    <div class="cssload-container">
        <div class="cssload-loader-inner">
            <div class="cssload-cssload-loader-line-wrap-wrap">
                <div class="cssload-loader-line-wrap"></div>
            </div>
            <div class="cssload-cssload-loader-line-wrap-wrap">
                <div class="cssload-loader-line-wrap"></div>
            </div>
            <div class="cssload-cssload-loader-line-wrap-wrap">
                <div class="cssload-loader-line-wrap"></div>
            </div>
            <div class="cssload-cssload-loader-line-wrap-wrap">
                <div class="cssload-loader-line-wrap"></div>
            </div>
            <div class="cssload-cssload-loader-line-wrap-wrap">
                <div class="cssload-loader-line-wrap"></div>
            </div>
            <div class="cssload-cssload-loader-line-wrap-wrap">
                <div class="cssload-loader-line-wrap"></div>
            </div>
            <div class="cssload-cssload-loader-line-wrap-wrap">
                <div class="cssload-loader-line-wrap"></div>
            </div>
        </div>
    </div>
</div>

@include('partials.first-screen')
@include('partials.navbar')
@yield('content')
@include('partials.footer')
@yield('popup')

{!! Html::script('js/main.js') !!}
@yield('js')

<?php if ( $detect->isMobile() ): ?>
{!! Html::script('js/mobile.js') !!}
<?php endif ?>

</body>
</html>