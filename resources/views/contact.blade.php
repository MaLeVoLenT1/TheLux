<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The Lux Salon and Spa Suites is a luxury salon suite and booth environment dedicated to salon professionals in the beauty industry.">
    <meta name="keywords" content="Beauty, Salon, Hairstylists, Har Color Specialists, Waxing, Laser Hair Removal, Microblading, Makeup Artists, Cosmetologists,
        Eyelash Stylists, Facialists, Estheticians, Barbers, Massage Therapists, Nail Technicians, Chiropractors, Acupuncturists, Tattoo Artists, Boutique Owners">
    <meta name="author" content="The Lux Suites">
    <title>The Lux Suites</title>
    <link rel="icon" type="image/png" href="{{ asset("/images/logos/TheLux/favicon.png") }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
<div class="lux-background">

    <!-- Lux Menu -->
    <div class="lux-menu">
        <a href="{{url("/home")}}" class="link-home">
            <img src="{{asset("/images/logos/TheLux/icon.png")}}" alt="The Lux Suites" class="menu-logo">
            <span class="menu-title"> The Lux Suites </span>
        </a>

        <!-- Right Side of Menu -->
        <ul class="link-list">
            <li class="link-item" style="padding: 0;"> <a href="{{url("/about")}}">About</a> </li>
            <li class="link-item" style="padding: 0;"> <a href="javascript:void(0)">|</a> </li>
            <li class="link-item" style="padding: 0;"> <a class="link-color-faded" href="javascript:void(0)">Contact</a> </li>
            <li class="link-item" style="padding: 0;"> <a href="javascript:void(0)">|</a> </li>
            <li class="link-item" style="padding: 0;"><a href="{{url("/blog")}}">News</a> </li>
            <li class="link-item" style="padding: 0;"> <a href="javascript:void(0)">|</a> </li>
            <li class="link-item" style="padding: 0; margin-right: 15px;"><a href="{{url("/home")}}">Home</a> </li>
        </ul>

    </div>

    <!-- Page Body -->
    <div class="lux-page-body">

        <!-- Lux Banner -->
        <div class="lux-banner-wrap">
            <img class="lux-banner" src="{{asset("/images/banner/lux/banner_full.png")}}"/>
            <div class="lux-style-bar"></div>
        </div>


        <!-- Footer -->
        @include("parts.footer")
    </div>


</div>
</body>

</html>
