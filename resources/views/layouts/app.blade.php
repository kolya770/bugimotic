<?php
    require_once 'Mobile_Detect.php';
    $detect = new Mobile_Detect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bugimotic</title>
    <link rel="stylesheet" href="{{ elixir('css/main.css') }}">
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

<div class="modal fade contact popup-wrapper" id="contactUs"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <a href="" class="close-btn"><img src="img/close.png"></a>
                <h5>Напишите нам</h5>
                <p>Что бы заказать обратный звонок введите свое имя и номер телефона</p>
                <form id="contForm" method="post" action="mail.php" name="contact">
                    <label>
                        <input type="text" name="name" required="required" placeholder="Имя" id="name" >
                    </label>
                    <label>
                        <input type="tel" name="tel" required="required" placeholder="Номер телефона" id="tel">
                    </label>
                    <label>
                        <textarea class="animated" name="message" placeholder="Ваше сообщение"></textarea>
                    </label>
                    <button type="submit">Отправить</button>
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

@include('partials.first-screen')
@include('partials.navbar')
@yield('content')
@include('partials.footer')

<script src="{{ elixir('js/main.js') }}"></script>

<?php if ( $detect->isMobile() ): ?>
    <script src="js/mobile.js"></script>
<?php endif ?>

</body>
</html>