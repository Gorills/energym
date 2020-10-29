<footer class="footer">

    <img src="{{ URL::asset('images/footer-bg.jpg') }}" alt="" class="footer__bg">

        <div class="footer__wrapper">
            <div class="footer__inner">
                <div class="footer__column">
                    <p class="footer__title">О нас</p>
                    <img src="{{ URL::asset('images/logo.png') }}" class="footer__logo">
                    <p class="footer__desc">
                        Тренажерный зал в Томске
                    </p>
                    <a href="tel:+7 (3822) 321-070" class="footer__contacts"><i class="fas fa-phone"></i> +7 (3822) 321-070</a>
                    <a href="#" class="footer__contacts"><i class="fas fa-map-pin"></i> ул. Елизаровых, 33</a>
                </div>
                <div class="footer__column">
                    <p class="footer__title">МЕНЮ</p>
                    <nav class="footer__nav">
                        <ul class="footer__list">
                            <li class="footer__item"><a href="#" class="footer__link">Главная</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">О нас</a></li>

                            <li class="footer__item"><a href="{{url('/#price')}}" class="footer__link">Цены</a></li>

                            <li class="footer__item"><a href="{{url('/#treners')}}" class="footer__link">Тренеры</a></li>
{{--                            <li class="footer__item"><a href="#" class="footer__link">Галерея</a></li>--}}
                            <li class="footer__item"><a href="#" class="footer__link">Контакты</a></li>
                        </ul>
                    </nav>

                </div>
{{--                <div class="footer__column">--}}
{{--                    <p class="footer__title">ГАЛЕРЕЯ</p>--}}
{{--                    <div class="footer__gallery">--}}
{{--                        <a href="#" class="footer__gallery-item">--}}
{{--                            <img src="{{ URL::asset('images/slide-1.jpg') }}" alt="" class="footer__gallery-img">--}}

{{--                        </a>--}}
{{--                        <a href="#" class="footer__gallery-item">--}}
{{--                            <img src="{{ URL::asset('images/slide-1.jpg') }}" alt="" class="footer__gallery-img">--}}

{{--                        </a>--}}
{{--                        <a href="#" class="footer__gallery-item">--}}
{{--                            <img src="{{ URL::asset('images/slide-1.jpg') }}" alt="" class="footer__gallery-img">--}}

{{--                        </a>--}}
{{--                        <a href="#" class="footer__gallery-item">--}}
{{--                            <img src="{{ URL::asset('images/slide-1.jpg') }}" alt="" class="footer__gallery-img">--}}

{{--                        </a>--}}
{{--                        <a href="#" class="footer__gallery-item">--}}
{{--                            <img src="{{ URL::asset('images/slide-1.jpg') }}" alt="" class="footer__gallery-img">--}}

{{--                        </a>--}}
{{--                        <a href="#" class="footer__gallery-item">--}}
{{--                            <img src="{{ URL::asset('images/slide-1.jpg') }}" alt="" class="footer__gallery-img">--}}

{{--                        </a>--}}

{{--                    </div>--}}
{{--                </div>--}}
            </div>


        </div>

</footer>
