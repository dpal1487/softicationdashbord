<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <title>@yield('title' ?? 'Home') | Softication Technology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  shrink-to-fit=no">
    <meta name="title" content="<?= page_title; ?>, Web & E-Commerce Development, Mobile App Development, Digital Marketing, Call us now @+91-7404664714" />
    <meta name="document-tdsdype" content="Public" />
    <meta name="keywords" content="<?= page_keyword; ?>" />
    <meta name="description" content="<?= page_description; ?>" />
    <meta name="email" content="info@softication.com" />
    <meta name="website" content="https://www.softication.com/" />
    <meta name="search" content="Softication Technology, <?= page_keyword; ?>, Best Web development company, E-Commerce Development, Digital Marketing, SEO, Mobile App Development, web development near by me, digital marketing agency near by me, social media marketing, Web development compnay in Noida, Web development compnay in Gurgaon, Web Development Near by me, SEO Services Near by me, Best digital marketing agency near by me, digital marketing, School ERP, school software" />
    <meta name="author" content="www.softication.com" />
    <meta property="og:locale" content="en_US" />
    <meta name="googlebot" content="index, follow" />
    <meta name="yahooseeker" content="index, follow" />
    <meta name="msnbot" content="index, follow" />
    <meta name="robots" content="index, follow" />
    <meta name="distribution" content="global" />
    <meta name="revisit-after" content="5 days" />
    <meta name="rating" content="general" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@Amarnathhawkin2" />
    <meta name="twitter:title" content="<?= page_title; ?>, Web & E-Commerce Development | Mobile App Development | Digital Marketing | Web development Company near by me" />
    <meta name="twitter:description" content="<?= page_description; ?>" />
    <meta name="twitter:image" content="images/logo-dark.png" />
    <meta property="fb:app_id" content="https://www.facebook.com/Softication">
    <meta property="og:title" content="<?= page_title; ?>, Web & E-Commerce Development, Mobile App Development, Digital Marketing" />
    <meta name="instagram:title" content="SoftiCation Technology : <?= page_title; ?> | Web & E-Commerce Development | Mobile App Development | Digital Marketing">
    <meta name="instagram:description" content="<?= page_description; ?>">
    <meta name="instagram:image" content="images/logo-dark.png">
    <meta name="instagram:card" content="summary_large_image">
    <meta property="og:description" content="<?= page_description; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="assets/images/logo-white.png" />
    <meta property="og:url" content="https://www.softication.com/" />
    <meta name="serp-rank" position="1" />
    <link href="<?= page_url; ?>" rel="canonical" />
    <link rel="icon" href="{{asset('images/logo-white.png')}}" type="image/x-icon" sizes="180x180">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/logo-white.png')}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">


    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('images/logo-light01.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/logo-light01.png')}}" type="image/x-icon">
    @yield('head')
    <style>
        .icon-bar-sticky {
            position: fixed;
            top: 35%;
            -webkit-transform: translateY(-35%);
            -ms-transform: translateY(-35%);
            transform: translateY(-35%);
            z-index: 9;
            right: 0;
        }

        [class^="icon-"],
        [class*=" icon-"] {
            font-family: 'icomoon' !important;
            speak: never;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .waves-effect {
            position: relative;
            cursor: pointer;
            display: inline-block;
            overflow: hidden;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
            vertical-align: middle;
            z-index: 1;
            transition: .3s ease-out;
        }

        .btn-facebook {
            background-color: #3b5998;
            border-color: #3b5998;
            color: #ffffff;
        }

        .btn-youtube {
            background-color: #e43f52;
            border-color: #e43f52;
            color: #ffffff;
        }

        .btn-twitter {
            background-color: #1da1f2;
            border-color: #1da1f2;
            color: #ffffff;
        }

        .btn-linkedin {
            background-color: #0077b5;
            border-color: #0077b5;
            color: #ffffff;
        }

        .btn-whatsapp {
            background-color: #03a84e;
            border-color: #03a84e;
            color: #ffffff;
        }

        .icon-bar-sticky a {
            display: block;
            text-align: center;
            transition: all 0.3s ease;
            border-radius: 0;
            padding: 10px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    @include('layouts.home.header')

    @yield('content')

    @include('layouts.home.footer')


    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    @yield('js')

</body>

</html>
