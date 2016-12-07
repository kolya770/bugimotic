<div id="top_nav" class="full-navbar">
    <a href="{{url('/')}}" id="logo" class="logo" data-spy="affix" data-offset-top="100">
        <img src="../img/logo.png">
    </a>
    <img id="rain" class="rainbow" src="../img/rainbow.png" data-spy="affix" data-offset-top="100" style="opacity: 0;">
    <nav id="nav1" class="navbar navbar-bygimotic center-block" data-spy="affix" data-offset-top="100">
        <div class="container my-navbar">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle mobile-nav collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar my-icon-bar"></span>
                    <span class="icon-bar my-icon-bar"></span>
                    <span class="icon-bar my-icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse mobile-menu" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{url('/')}}">Головна</a></li>
                    <li class="dropdown main-page">
                        <a href="{{ url('/categories') }}" role="button" aria-haspopup="true" aria-expanded="false">
                            Категории<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu my-menu">
                            <li><a href="#">пункт меню один</a></li>
                            <li><a href="#">пункт меню один</a></li>
                            <li><a href="#">пункт меню один</a></li>
                            <li><a href="#">пункт меню один</a></li>
                            <li><a href="#">пункт меню один</a></li>
                            <li><a href="#">пункт меню один</a></li>
                            <li><a href="#">пункт меню один</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right right-nav">
                    <li><a href="#">Фотогалерея</a></li>
                    <li><a href="{{ url('/contacts') }}" class="position-cn">Контакты</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
