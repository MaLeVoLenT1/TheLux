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

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="//db.onlinewebfonts.com/c/02c5086e8616653dade6e7cb3a1f0498?family=LTCBodoni175W01-Regular" rel="stylesheet" type="text/css"/>

        <!-- Styles -->
        <link href="{{ asset('css/landing.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="lux-background">
            <img class="lux-icon" src="{{asset("/images/banner/lux/banner_icon.png")}}">
            <img class="lux-icon" src="{{asset("/images/banner/lux/banner_logo.png")}}">
            <div class="links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
            <!-- <a href="{{ route('contact') }}">Contact</a>
                <a href="{{ route('blog') }}">News</a> -->
            </div>
        </div>

    </body>
</html>
