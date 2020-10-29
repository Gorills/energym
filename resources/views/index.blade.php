@extends('layouts.custom')

@section('title', 'Тренажерный зал Energym в Томске | Записаться на тренировку')
@section('description', 'Недорогой тренажерный зал в Кировском районе Томска. Большое помещение, множество тренажеров. ')
@section('keywords', 'тренажерный зал')
@section('canonical', 'https://www.energym-tomsk.ru/')
@section('og:title', 'Тренажерный зал Energym в Томске | Записаться на тренировку')
@section('og:description', 'Недорогой тренажерный зал в Кировском районе Томска. Большое помещение, множество тренажеров.')
@section('og:url', 'https://www.energym-tomsk.ru/')
@section('twitter:title', 'Тренажерный зал Energym в Томске | Записаться на тренировку')
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



    <div class="price" id="price">

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
                        с 17.00 до 22.00</p>
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

    </div>

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
                            <img src="{{ URL::asset('images/treners/1.jpg') }}" alt="" class="treners__img">
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

{{--                    <div class="treners__item">--}}
{{--                        <div class="treners__img-wrap">--}}
{{--                            <img src="{{ URL::asset('images/treners/2.jpg') }}" alt="" class="treners__img">--}}
{{--                        </div>--}}
{{--                        <div class="treners__wrap">--}}
{{--                            <p class="treners__name">Emily Rosenberg</p>--}}
{{--                            <p class="treners__type">Cardio trainer</p>--}}
{{--                        </div>--}}
{{--                        <div class="treners__social">--}}
{{--                            <a href="#" class="treners__social-item">--}}
{{--                                <i class="fab fa-vk"></i>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="treners__social-item">--}}
{{--                                <i class="fab fa-instagram"></i>--}}
{{--                            </a>--}}

{{--                        </div>--}}

{{--                        <p class="treners__desc">Nulla elementum vitae odio non sollicitudin. Nullam nec augue dui. Curabitur ullamcorper interdum mi, nec laoreet nisi varius et.</p>--}}

{{--                    </div>--}}
{{--                    <div class="treners__item">--}}
{{--                        <div class="treners__img-wrap">--}}
{{--                            <img src="{{ URL::asset('images/treners/3.jpg') }}" alt="" class="treners__img">--}}
{{--                        </div>--}}
{{--                        <div class="treners__wrap">--}}
{{--                            <p class="treners__name">Emily Rosenberg</p>--}}
{{--                            <p class="treners__type">Cardio trainer</p>--}}
{{--                        </div>--}}
{{--                        <div class="treners__social">--}}
{{--                            <a href="#" class="treners__social-item">--}}
{{--                                <i class="fab fa-vk"></i>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="treners__social-item">--}}
{{--                                <i class="fab fa-instagram"></i>--}}
{{--                            </a>--}}

{{--                        </div>--}}

{{--                        <p class="treners__desc">Nulla elementum vitae odio non sollicitudin. Nullam nec augue dui. Curabitur ullamcorper interdum mi, nec laoreet nisi varius et.</p>--}}

{{--                    </div>--}}
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
                    позволит вам чувствовать себя свобоно во время тренировок. Запишитесь к нам на тренировку!
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


                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2858.7284303296387!2d84.98335527753656!3d56.4611976565304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4326eccb239f9a3b%3A0x8569d2fe80a04715!2z0KLRgNC10L3QsNC20LXRgNC90YvQuSDQl9Cw0LsgIkVORVJHWU0i!5e0!3m2!1sru!2sru!4v1603613231031!5m2!1sru!2sru" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


    </div>




    <div class="action-popup">
        <img src="{{ URL::asset('images/popup.jpg') }}" alt="акция для студентов при посещении тренажерного зала" class="action-popup__img">

        <a class="action-popup__close" href="#"><i class="fas fa-times action-popup__icon"></i></a>

    </div>
    <div class="action-popup__closer"></div>


@endsection
