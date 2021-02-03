@extends('layouts.custom')

@section('title', 'Тренажерный зал Energym в Томске | Фитнес-клуб в Томске')
@section('description', 'Недорогой тренажерный зал в Кировском районе Томска. Большое помещение, множество тренажеров. ')
@section('keywords', 'тренажерный зал, качалка томск, тренажерка, энерджим, энержим')
@section('canonical', 'https://www.energym-tomsk.ru/')
@section('og:title', 'Тренажерный зал Energym в Томске | Фитнес-клуб в Томске')
@section('og:description', 'Недорогой тренажерный зал в Кировском районе Томска. Большое помещение, множество тренажеров.')
@section('og:url', 'https://www.energym-tomsk.ru/')
@section('twitter:title', 'Тренажерный зал Energym в Томске | Фитнес-клуб в Томске')
@section('twitter:description', 'Недорогой тренажерный зал в Кировском районе Томска. Большое помещение, множество тренажеров.')


@section('content')


    <div class="start">

        <header class="header">
            <div class="container-fluid">
                <div class="header__inner">

                    <?php $home = '/' ?>
                    @if($home == $_SERVER['REQUEST_URI'])
                            <img src="{{ URL::asset('images/logo.png') }}" alt="energym" class="header__logo">
                    @else
                            <a href="{{ utl('/') }}" class="header__logo-link">
                                <img src="{{ URL::asset('images/logo.png') }}" alt="energym" class="header__logo">
                            </a>
                    @endif




                    <nav class="header__nav" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
                        <ul class="header__list" itemprop="about" itemscope="" itemtype="http://schema.org/ItemList">

                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                                <a class="header__link" href="{{ url('/') }}" itemprop="url">Главная</a>
                                <meta itemprop="name" content="Главная" />
                            </li>
                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                                <a class="header__link" href="{{ url('/#actions') }}" itemprop="url">Акции</a>
                                <meta itemprop="name" content="Акции" />
                            </li>

                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                                <a class="header__link" href="{{ url('/#about') }}" itemprop="url">О нас</a>
                                <meta itemprop="name" content="О нас" />
                            </li>
                            @if($home == $_SERVER['REQUEST_URI'])
                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                                <a class="header__link" href="#price" itemprop="url">Цены</a>
                                <meta itemprop="name" content="Цены" />
                            </li>
                            @else
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                                    <a class="header__link" href="{{ url('/#price') }}" itemprop="url">Цены</a>
                                    <meta itemprop="name" content="Цены" />
                                </li>
                            @endif

                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                                <a class="header__link" href="{{ url('/#treners') }}" itemprop="url">Тренеры</a>
                                <meta itemprop="name" content="Тренеры" />
                            </li>


{{--                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">--}}
{{--                                <a class="header__link" href="{{ url('/') }}" itemprop="url">Галерея</a>--}}
{{--                                <meta itemprop="name" content="Цены" />--}}
{{--                            </li>--}}



                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                                <a class="header__link" href="{{ url('/#contacts') }}" itemprop="url">Контакты</a>
                                <meta itemprop="name" content="Контакты" />
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>




        <div class="container">
            <div class="start__inner">


                <h2 class="start__title">
                    Начните путь в спорте вместе с <br>

                    <img src="{{ URL::asset('images/logo.png') }}" alt="energym" class="start__logo">
                </h2>

                <a href="#" class="btn btn__accent start__btn popup--show">Связаться</a>


            </div>
        </div>


        <img src="{{ URL::asset('images/slide-7.jpg') }}" alt="энерджим" class="start__img">

    </div>




    <section class="price">

            <div class="price__inner">

                <div class="price__item">
                    <h3 class="price__title">Утренний</h3>

                    <div class="price__wrapper">
                        <img src="{{ URL::asset('images/abonement/1.jpg') }}" alt="energym" class="price__img">
                    </div>

                    <p class="price__description">Абонемент «утренний» <br> 12 занятий: с 10.00 до 17.00</p>
                    <p class="price__num"> 1000 руб / месяц</p>
                </div>
                <div class="price__item">
                    <h3 class="price__title">Вечерний</h3>


                    <div class="price__wrapper">
                        <img src="{{ URL::asset('images/abonement/2.jpg') }}" alt="energym" class="price__img">
                    </div>


                    <p class="price__description">Абонемент «вечерний» <br> 12 занятий
                        с 17.00 до 22.00</p>
                    <p class="price__num">1500 руб / месяц</p>
                </div>
                <div class="price__item">
                    <h3 class="price__title">Безлимитный</h3>


                    <div class="price__wrapper">
                        <img src="{{ URL::asset('images/abonement/3.jpg') }}" alt="energym" class="price__img">
                    </div>


                    <p class="price__description">Абонемент «безлимитный» <br> без ограничений по количеству и времени посещений </p>
                    <p class="price__num">2000 руб / месяц</p>
                </div>
                <div class="price__item">
                    <h3 class="price__title">Студенческий</h3>


                    <div class="price__wrapper">
                        <img src="{{ URL::asset('images/abonement/4.jpg') }}" alt="energym" class="price__img">
                    </div>


                    <p class="price__description">Абонемент «студенческий» <br> 12 занятий
                        с 10.00 до 22.00</p>
                    <p class="price__num">1200 руб / месяц</p>
                </div>
                <div class="price__item">
                    <h3 class="price__title">Разовый</h3>


                    <div class="price__wrapper">
                        <img src="{{ URL::asset('images/abonement/5.jpg') }}" alt="energym" class="price__img">
                    </div>


                    <p class="price__description">Разовое посещение тренажерного зала.</p>
                    <p class="price__num">200 руб</p>
                </div>

            </div>
    </section>


    <section class="action" id="actions">
        <div class="container">
            <div class="action__inner">
                <h2 class="title">
                   Акции
                </h2>
                <div class="action__row">
                    <div class="action__item">
                        <img src="{{ URL::asset('images/actions/23.jpg') }}" alt="акции energym" class="action__img">
                    </div>
                    <div class="action__item">
                        <img src="{{ URL::asset('images/actions/students.jpg') }}" alt="акции energym" class="action__img">
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section class="check">
        <img src="{{ URL::asset('images/bg-2.jpg') }}" alt="energym" class="check__img">
        <div class="container">
            <div class="check__inner">
                <h2 class="title title__light">
                        <span class="title__color">
                            Тенажерный зал, <br>
                        </span>
                    который вам понравится.
                </h2>


                <p class="check__desc">
                    Наш тренажерный зал находится в Кировском районе г.Томска и имеет отличныю транспортную доступность. Большое помещение с большым количеством
                    тренажеров, удобной раздевалкой и душем придется по вкусу всем любителям комфорта.
                </p>
                <div class="check__row">
                    <div class="check__item">
                        <p class="check__num">35</p>
                        <p class="check__title">Тренажеров в нашем зале</p>
                    </div>

                    <div class="check__item">
                        <p class="check__num">200</p>
                        <p class="check__title">Квадратных метров</p>
                    </div>
                    <div class="check__item">
                        <p class="check__num">100</p>
                        <p class="check__title">Рублей - цена за тренировку</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="why">
        <div class="container">
            <div class="why__inner">
                <div class="why__column">


                </div>
                <div class="why__column">
                    <h2 class="title">
                        <span class="title__color">
                            Тренажерный зал <br>
                        </span>



                    </h2>

                    <p class="why__description">
                        Один из лучших тренажерных залов в Томске с минимальными ценами за тренировки. Уютная атмосфера и большое количество тренажеров не оставят
                        вас равнодушными, а цены за абонемент вас удивят. Приходите к нам на тренировки, мы всегда рады новым клиентам!
                        </p>


{{--                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/3qpebLCt_2c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}

                    <div class="why__wrapper">
                        <div class="why__item">
                            <img src="{{ URL::asset('images/why-1.jpg') }}" alt="тренажерный зал в Томске" class="why__item-img">
                            <div class="why__item-wrapper">
                                <h3 class="why__item-title">Занимайтесь индивидуально</h3>

                                <p class="why__item-description">Помещение тренажерного зала подходит как для индивидуальных тренировок, так и для тренировок с друзьями или своим тренером.</p>
                            </div>
                        </div>
                        <div class="why__item">
                            <img src="{{ URL::asset('images/why-2.jpg') }}" alt="Energym Томск" class="why__item-img">
                            <div class="why__item-wrapper">
                                <h3 class="why__item-title">Занимайтесь с тренером</h3>
{{--                                <p class="why__item-subtitle">Enjoy trainings and talks with new friends.</p>--}}
                                <p class="why__item-description">Наши тренеры помогут вам составить уникальную программу тренировок и питания для достижения лучших результатов. </p>
                            </div>
                        </div>


                    </div>



                </div>

            </div>
        </div>
        <img src="{{ URL::asset('images/women.jpg') }}" alt="energym" class="why__img">
    </section>




    <div class="ceny" id="price">

        <img src="{{  URL::asset('images/ceny-bg.jpg') }}" alt="" class="ceny__bg">

        <div class="container">
            <div class="ceny__inner">
                <h2 class="ceny__title">Прайс-лист</h2>

                <div class="ceny__item">
                    <div class="ceny__wrap">
                        <p class="ceny__item-title">Разовое посещение</p>
                        <div class="ceny__desc"></div>

                    </div>
                    <div class="ceny__num">
                        200.-
                    </div>

                </div>
                <div class="ceny__item">
                    <div class="ceny__wrap">
                        <p class="ceny__item-title">Абонемент "Утренний"</p>
                        <div class="ceny__desc">12 занятий / с 10.00 до 17.00</div>

                    </div>
                    <div class="ceny__num">
                        1000.-
                    </div>

                </div>
                <div class="ceny__item">
                    <div class="ceny__wrap">
                        <p class="ceny__item-title">Абонемент "Вечерний"</p>
                        <div class="ceny__desc">12 занятий / с 17.00 до 22.00</div>

                    </div>
                    <div class="ceny__num">
                        1500.-
                    </div>

                </div>
                <div class="ceny__item">
                    <div class="ceny__wrap">
                        <p class="ceny__item-title">Абонемент "Студенческий"</p>
                        <div class="ceny__desc">12 занятий / с 10.00 до 22.00</div>

                    </div>
                    <div class="ceny__num">
                        1200.-
                    </div>

                </div>
                <div class="ceny__item">
                    <div class="ceny__wrap">
                        <p class="ceny__item-title">Абонемент "Безлимитный"</p>
                        <div class="ceny__desc">1 месяц / без ограничений</div>

                    </div>
                    <div class="ceny__num">
                        2000.-
                    </div>

                </div>



            </div>
        </div>
    </div>




    <section class="treners" id="treners">
        <div class="container">
            <div class="treners__inner">
                <h2 class="treners__title">Наши тренеры</h2>
                <p class="treners__subrirle">
                    Профессиональные тренеры, которые помогут Вам составить индивидуальную программу тренировок
                    и питания. Все для того, чтобы Ваши занятия в нашем тренажерном зале проходили результативно!

                </p>

                <div class="treners__row">

                    <div class="treners__item">

                        <div class="treners__img-wrap">
                            <img src="{{ URL::asset('images/treners/1.jpg') }}" alt="Михаил Фирсов тренер" class="treners__img">
                        </div>
                        <div class="treners__wrap">
                            <p class="treners__name">Михаил Фирсов</p>
                            <p class="treners__type">Персональный тренер</p>
                        </div>


                        <div class="treners__social">
                            <a href="https://vk.com/mishafirsov1" class="treners__social-item" target="_blank">
                                <i class="fab fa-vk"></i>
                            </a>
                            <a href="https://www.instagram.com/mishafirsov/?hl=ru" class="treners__social-item" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>

                        </div>

                        <p class="treners__desc">Мастер спорта международного класса по жиму штанги лёжа в федерации СПР. Победитель чемпионата России и кубка Мира по жиму штанги (2018 г.).

                        </p>

                    </div>

                    <div class="treners__item">
                        <div class="treners__img-wrap">
                            <img src="{{ URL::asset('images/treners/3.jpeg') }}" alt="" class="treners__img">
                        </div>
                        <div class="treners__wrap">
                            <p class="treners__name">Анастасия Калинина</p>
                            <p class="treners__type">Персональный тренер</p>
                        </div>
                        <div class="treners__social">
                            <a href="https://vk.com/klosmos" class="treners__social-item">
                                <i class="fab fa-vk"></i>
                            </a>
                            <a href="https://www.instagram.com/klosmos/" class="treners__social-item">
                                <i class="fab fa-instagram"></i>
                            </a>

                        </div>

                        <p class="treners__desc">
                            Проходила обучение в колледже Бена Вейдера город Москва, по направлениям:
                            «Постуральный фитнес и коррекция осанки»; «Базовый рацион»; «Нутрицевтики»; «Гормоны и адаптация»

                        </p>

                    </div>


                    <div class="treners__item">
                        <div class="treners__img-wrap">
                            <img src="{{ URL::asset('images/treners/2.jpeg') }}" alt="" class="treners__img">
                        </div>
                        <div class="treners__wrap">
                            <p class="treners__name">Валерия Перова</p>
                            <p class="treners__type">Персональный тренер</p>
                        </div>
                        <div class="treners__social">
                            <a href="https://vk.com/valeria_perova22" class="treners__social-item">
                                <i class="fab fa-vk"></i>
                            </a>
                            <a href="https://www.instagram.com/valeria_p______/" class="treners__social-item">
                                <i class="fab fa-instagram"></i>
                            </a>

                        </div>

                        <p class="treners__desc">


                        </p>

                    </div>


                </div>
            </div>
        </div>
    </section>


    <div class="about" id="about">

        <img src="{{ URL::asset('images/slide-6.jpg') }}" alt="тренажерный зал в Томске" class="about__bg">


        <div class="container">
            <div class="about__inner">
                <h2 class="title title__light">
                        <span class="title__color">
                            Тренажерный зал <br>
                        </span>

                    в Томске
                </h2>
                <p class="about__opt">
                    Наш тренажерный зал это лучшее соотношение цены и качества предоставляемых услуг в Томске. Большое количество тренажеров и просторное помещение
                    позволит вам чувствовать себя свободно во время тренировок. Приходите тренироваться к нам и вы почувствуете прилив энергии и жизненных сил!
                </p>
                <p class="about__opt">

                </p>
                <p class="about__opt">

                </p>

            </div>
        </div>
    </div>


{{--    <div class="features">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="features__inner">--}}

{{--                <div class="features__item">--}}
{{--                    <img src="{{ URL::asset('images/icon/1.png') }}" alt="" class="features__icon">--}}

{{--                    <div class="features__wrap">--}}
{{--                        <p class="features__title">Body sculpturing program</p>--}}
{{--                        <p class="features__subtitle">Shape your muscles and stay always strong.</p>--}}
{{--                        <p class="features__desc">Cras finibus non magna sed varius. Fusce risus eros, dapibus vitae--}}
{{--                            dignissim vel, consequat.</p>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="features__item">--}}
{{--                    <img src="{{ URL::asset('images/icon/2.png') }}" alt="" class="features__icon">--}}

{{--                    <div class="features__wrap">--}}
{{--                        <p class="features__title">Body sculpturing program</p>--}}
{{--                        <p class="features__subtitle">Shape your muscles and stay always strong.</p>--}}
{{--                        <p class="features__desc">Cras finibus non magna sed varius. Fusce risus eros, dapibus vitae--}}
{{--                            dignissim vel, consequat.</p>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="features__item">--}}
{{--                    <img src="{{ URL::asset('images/icon/3.png') }}" alt="" class="features__icon">--}}

{{--                    <div class="features__wrap">--}}
{{--                        <p class="features__title">Body sculpturing program</p>--}}
{{--                        <p class="features__subtitle">Shape your muscles and stay always strong.</p>--}}
{{--                        <p class="features__desc">Cras finibus non magna sed varius. Fusce risus eros, dapibus vitae--}}
{{--                            dignissim vel, consequat.</p>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="features__item">--}}
{{--                    <img src="{{ URL::asset('images/icon/4.png') }}" alt="" class="features__icon">--}}

{{--                    <div class="features__wrap">--}}
{{--                        <p class="features__title">Body sculpturing program</p>--}}
{{--                        <p class="features__subtitle">Shape your muscles and stay always strong.</p>--}}
{{--                        <p class="features__desc">Cras finibus non magna sed varius. Fusce risus eros, dapibus vitae--}}
{{--                            dignissim vel, consequat.</p>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="features__item">--}}
{{--                    <img src="{{ URL::asset('images/icon/5.png') }}" alt="" class="features__icon">--}}

{{--                    <div class="features__wrap">--}}
{{--                        <p class="features__title">Body sculpturing program</p>--}}
{{--                        <p class="features__subtitle">Shape your muscles and stay always strong.</p>--}}
{{--                        <p class="features__desc">Cras finibus non magna sed varius. Fusce risus eros, dapibus vitae--}}
{{--                            dignissim vel, consequat.</p>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="features__item">--}}
{{--                    <img src="{{ URL::asset('images/icon/6.jpg') }}" alt="" class="features__icon">--}}

{{--                    <div class="features__wrap">--}}
{{--                        <p class="features__title">Body sculpturing program</p>--}}
{{--                        <p class="features__subtitle">Shape your muscles and stay always strong.</p>--}}
{{--                        <p class="features__desc">Cras finibus non magna sed varius. Fusce risus eros, dapibus vitae--}}
{{--                            dignissim vel, consequat.</p>--}}

{{--                    </div>--}}
{{--                </div>--}}



{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}




    <div class="contacts" id="contacts">

        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A54814eb21187dd29a5df9cc1f05e53d01d85c321b915f0d46eca7194c58d7924&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>

    </div>




{{--    <div class="action-popup">--}}
{{--        <img src="{{ URL::asset('images/popup.jpg') }}" alt="акция для студентов при посещении тренажерного зала" class="action-popup__img">--}}

{{--        <a class="action-popup__close" href="#"><i class="fas fa-times action-popup__icon"></i></a>--}}

{{--    </div>--}}
{{--    <div class="action-popup__closer"></div>--}}


@endsection
