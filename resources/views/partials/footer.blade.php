<footer class="container footer-width">
    <div class="row">
        <div class="col-sm-12 col-md-7">
            <p>{{ $footer->copyright }}<br />
            © Все права защищены</p>
        </div>
        <div class="col-sm-12 col-md-5">
            <div class="right-block">
                <p class="right-ft">Наши телефоны</p>
                <span>
                    {!! $footer->number_1 !!}
                </span><br/>
                <span>
                    {!! $footer->number_2 !!}
                </span>
            </div>
        </div>
    </div>
</footer>