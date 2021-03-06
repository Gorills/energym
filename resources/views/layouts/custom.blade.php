<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/site.css?').('v.1.0.9') }}">
    <script src="https://kit.fontawesome.com/0af96d350a.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')" />
    <link rel="canonical" href="@yield('canonical')"/>
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('og:title')" />
    <meta property="og:description" content="@yield('og:description')" />
    <meta property="og:url" content="@yield('og:url')" />
    <meta name="theme-color" content="#2b2a28">
    <meta property="og:site_name" content="energym-tomsk.ru" />
    <meta property="vk:image" content="{{ URL::asset('images/og.jpg') }}" />
    <meta property="og:image" content="{{ URL::asset('images/og.jpg') }}" />
    <meta property="og:image" content="{{ URL::asset('images/og-mess.jpg') }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="@yield('twitter:title')" />
    <meta name="twitter:description" content="@yield('twitter:description')" />
    <link rel="shortcut icon" href="{{URL::asset('favicon.ico')}}" type="image/x-icon" />
    <link rel="icon" type="image/png" href="{{URL::asset('/fav/favicon-32x32.png')}}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{URL::asset('/fav/apple-touch-icon.png')}}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{URL::asset('/fav/apple-touch-icon-57x57.png')}}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('/fav/apple-touch-icon-72x72.png')}}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('/fav/apple-touch-icon-76x76.png')}}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('/fav/apple-touch-icon-114x114.png')}}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('/fav/apple-touch-icon-120x120.png')}}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{URL::asset('/fav/apple-touch-icon-144x144.png')}}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('/fav/apple-touch-icon-152x152.png')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('/fav/apple-touch-icon-180x180.png')}}" />
    <meta name="yandex-verification" content="a0e13ff6d7c3440f" />
    <meta name="google-site-verification" content="vyXQxfNIK6B1V-NjIeajgElsHBcVaaJqT0q1yB6QJNo" />
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(68671951, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/68671951" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <script src="//code-ya.jivosite.com/widget/BpUlTzqORA" async></script>
</head>
<body>



@component('components.header')

@endcomponent





@yield('content')






@component('components.footer')

@endcomponent


@component('components.popup')

@endcomponent






<script type="application/ld+json"> {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "ENERGYM",
    "alternateName": "Energym",
    "description": "Тренажерный зал",
    "url": "https://www.energym-tomsk.ru/",

    "legalName": "Energym",
    "logo": "https://www.energym-tomsk.ru/images/logo.png",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "RU",
      "addressLocality": "Томск",
      "addressRegion": "Томская область",
      "postalCode": "634012",
      "streetAddress": "ул. Елизаровых, 33"
    },
    "telephone": "+73822321070"
  }
</script>







{{--<style src="{{ URL::asset('js/app.js') }}"></style>--}}
<script src="{{ URL::asset('js/site.js?').('v.1.0.9') }} "></script>


</body>
</html>
