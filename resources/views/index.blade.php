@extends('layouts.custom')

@section('title', 'Тренажерный зал EnerGym в Томске | Записаться на тренировку')
@section('description', '')
@section('keywords', '')
@section('canonical', '')
@section('og:title', '')
@section('og:description', '')
@section('og:url', '')
@section('twitter:title', '')
@section('twitter:description', '')


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
                                <a class="header__link" href="{{ url('/') }}" itemprop="url">О нас</a>
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


                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                                <a class="header__link" href="{{ url('/') }}" itemprop="url">Галерея</a>
                                <meta itemprop="name" content="Цены" />
                            </li>



                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                                <a class="header__link" href="{{ url('/') }}" itemprop="url">Контакты</a>
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

                <a href="#" class="btn btn__accent start__btn ">Записаться</a>


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


    <section class="why">
        <div class="container">
            <div class="why__inner">
                <div class="why__column">


                </div>
                <div class="why__column">
                    <h2 class="title">
                        <span class="title__color">
                            Узнайте почему <br>
                        </span>

                        спорт это важно.
                    </h2>

                    <p class="why__description">Cras finibus non magna sed varius. Fusce risus eros, dapibus vitae dignissim vel, consequat et dolor. Proin maximus posuere felis a tincidunt. Etiam sit amet ligula eget libero suscipit semper eget ornare magna. Phasellus non est ligula. Nulla auctor neque non tortor tincidunt fringilla.</p>


                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/3qpebLCt_2c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <div class="why__wrapper">
                        <div class="why__item">
                            <img src="{{ URL::asset('images/why-1.jpg') }}" alt="" class="why__item-img">
                            <div class="why__item-wrapper">
                                <h3 class="why__item-title">IMPROVEMENTS AND MEETING GOALS</h3>
                                <p class="why__item-subtitle">Enjoy trainings and talks with new friends.</p>
                                <p class="why__item-description">Cras finibus non magna sed varius. Fusce risus eros, dapibus vitae dignissim vel, consequat et dolor. Proin maximus posuere felis a tincidunt.</p>
                            </div>
                        </div>
                        <div class="why__item">
                            <img src="{{ URL::asset('images/why-2.jpg') }}" alt="" class="why__item-img">
                            <div class="why__item-wrapper">
                                <h3 class="why__item-title">IMPROVEMENTS AND MEETING GOALS</h3>
                                <p class="why__item-subtitle">Enjoy trainings and talks with new friends.</p>
                                <p class="why__item-description">Cras finibus non magna sed varius. Fusce risus eros, dapibus vitae dignissim vel, consequat et dolor. Proin maximus posuere felis a tincidunt.</p>
                            </div>
                        </div>


                    </div>



                </div>

            </div>
        </div>
        <img src="{{ URL::asset('images/women.jpg') }}" alt="energym" class="why__img">
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
                    Cras finibus non magna sed varius. Fusce risus eros, dapibus vitae dignissim vel, consequat et dolor. Proin maximus posuere felis a tincidunt. Etiam sit amet ligula eget libero suscipit semper eget ornare magna. Phasellus non est ligula. Nulla auctor neque non tortor tincidunt fringilla. Nam in condimentum orci. Integer ac pellentesque sem. Nulla fringilla dui id metus viverra interdum.
                </p>
                <div class="check__row">
                    <div class="check__item">
                        <p class="check__num">35</p>
                        <p class="check__title">Тренажеров в нашем зале</p>
                    </div>

                    <div class="check__item">
                        <p class="check__num">50</p>
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


    <section class="treners" id="treners">
        <div class="container">
            <div class="treners__inner">
                <h2 class="treners__title">Команда наших тренеров</h2>
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
                            <p class="treners__name">Emily Rosenberg</p>
                            <p class="treners__type">Cardio trainer</p>
                        </div>


                        <div class="treners__social">
                            <a href="#" class="treners__social-item">
                                <i class="fab fa-vk"></i>
                            </a>
                            <a href="#" class="treners__social-item">
                                <i class="fab fa-instagram"></i>
                            </a>

                        </div>

                        <p class="treners__desc">Nulla elementum vitae odio non sollicitudin. Nullam nec augue dui. Curabitur ullamcorper interdum mi, nec laoreet nisi varius et.</p>

                    </div>
                    <div class="treners__item">
                        <div class="treners__img-wrap">
                            <img src="{{ URL::asset('images/treners/2.jpg') }}" alt="" class="treners__img">
                        </div>
                        <div class="treners__wrap">
                            <p class="treners__name">Emily Rosenberg</p>
                            <p class="treners__type">Cardio trainer</p>
                        </div>
                        <div class="treners__social">
                            <a href="#" class="treners__social-item">
                                <i class="fab fa-vk"></i>
                            </a>
                            <a href="#" class="treners__social-item">
                                <i class="fab fa-instagram"></i>
                            </a>

                        </div>

                        <p class="treners__desc">Nulla elementum vitae odio non sollicitudin. Nullam nec augue dui. Curabitur ullamcorper interdum mi, nec laoreet nisi varius et.</p>

                    </div>
                    <div class="treners__item">
                        <div class="treners__img-wrap">
                            <img src="{{ URL::asset('images/treners/3.jpg') }}" alt="" class="treners__img">
                        </div>
                        <div class="treners__wrap">
                            <p class="treners__name">Emily Rosenberg</p>
                            <p class="treners__type">Cardio trainer</p>
                        </div>
                        <div class="treners__social">
                            <a href="#" class="treners__social-item">
                                <i class="fab fa-vk"></i>
                            </a>
                            <a href="#" class="treners__social-item">
                                <i class="fab fa-instagram"></i>
                            </a>

                        </div>

                        <p class="treners__desc">Nulla elementum vitae odio non sollicitudin. Nullam nec augue dui. Curabitur ullamcorper interdum mi, nec laoreet nisi varius et.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="about">
        <div class="container">
            <div class="about__inner">
                <h2 class="title title__light">
                        <span class="title__color">
                            Тренажерный зал <br>
                        </span>

                    в Томске
                </h2>
                <p class="about__opt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cupiditate, ducimus eius fugit nesciunt obcaecati pariatur placeat, quod quos saepe sed tenetur unde vitae. Assumenda incidunt nemo obcaecati provident quia?</p>
                <p class="about__opt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cupiditate, ducimus eius fugit nesciunt obcaecati pariatur placeat, quod quos saepe sed tenetur unde vitae. Assumenda incidunt nemo obcaecati provident quia?</p>
                <p class="about__opt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cupiditate, ducimus eius fugit nesciunt obcaecati pariatur placeat, quod quos saepe sed tenetur unde vitae. Assumenda incidunt nemo obcaecati provident quia?</p>

            </div>
        </div>
    </div>


    <div class="features">
        <div class="container-fluid">
            <div class="features__inner">

                <div class="features__item">
                    <img src="{{ URL::asset('images/icon/1.png') }}" alt="" class="features__icon">

                    <div class="features__wrap">
                        <p class="features__title">Body sculpturing program</p>
                        <p class="features__subtitle">Shape your muscles and stay always strong.</p>
                        <p class="features__desc">Cras finibus non magna sed varius. Fusce risus eros, dapibus vitae
                            dignissim vel, consequat.</p>

                    </div>
                </div>
                <div class="features__item">
                    <img src="{{ URL::asset('images/icon/2.png') }}" alt="" class="features__icon">

                    <div class="features__wrap">
                        <p class="features__title">Body sculpturing program</p>
                        <p class="features__subtitle">Shape your muscles and stay always strong.</p>
                        <p class="features__desc">Cras finibus non magna sed varius. Fusce risus eros, dapibus vitae
                            dignissim vel, consequat.</p>

                    </div>
                </div>
                <div class="features__item">
                    <img src="{{ URL::asset('images/icon/3.png') }}" alt="" class="features__icon">

                    <div class="features__wrap">
                        <p class="features__title">Body sculpturing program</p>
                        <p class="features__subtitle">Shape your muscles and stay always strong.</p>
                        <p class="features__desc">Cras finibus non magna sed varius. Fusce risus eros, dapibus vitae
                            dignissim vel, consequat.</p>

                    </div>
                </div>
                <div class="features__item">
                    <img src="{{ URL::asset('images/icon/4.png') }}" alt="" class="features__icon">

                    <div class="features__wrap">
                        <p class="features__title">Body sculpturing program</p>
                        <p class="features__subtitle">Shape your muscles and stay always strong.</p>
                        <p class="features__desc">Cras finibus non magna sed varius. Fusce risus eros, dapibus vitae
                            dignissim vel, consequat.</p>

                    </div>
                </div>
                <div class="features__item">
                    <img src="{{ URL::asset('images/icon/5.png') }}" alt="" class="features__icon">

                    <div class="features__wrap">
                        <p class="features__title">Body sculpturing program</p>
                        <p class="features__subtitle">Shape your muscles and stay always strong.</p>
                        <p class="features__desc">Cras finibus non magna sed varius. Fusce risus eros, dapibus vitae
                            dignissim vel, consequat.</p>

                    </div>
                </div>
                <div class="features__item">
                    <img src="{{ URL::asset('images/icon/6.jpg') }}" alt="" class="features__icon">

                    <div class="features__wrap">
                        <p class="features__title">Body sculpturing program</p>
                        <p class="features__subtitle">Shape your muscles and stay always strong.</p>
                        <p class="features__desc">Cras finibus non magna sed varius. Fusce risus eros, dapibus vitae
                            dignissim vel, consequat.</p>

                    </div>
                </div>



            </div>
        </div>
    </div>




    <div class="action-popup">
        <img src="{{ URL::asset('images/popup.jpg') }}" alt="" class="action-popup__img">

        <a class="action-popup__close" href="#"><i class="fas fa-times action-popup__icon"></i></a>

    </div>
    <div class="action-popup__closer"></div>


@endsection
