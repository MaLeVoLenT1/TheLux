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
                <li class="link-item" style="padding: 0;"> <a href="{{url("/contact")}}">Contact</a> </li>
                <li class="link-item" style="padding: 0;"> <a href="javascript:void(0)">|</a> </li>
                <li class="link-item" style="padding: 0;"><a href="{{url("/blog")}}">News</a> </li>
                <li class="link-item" style="padding: 0;"> <a href="javascript:void(0)">|</a> </li>
                <li class="link-item" style="padding: 0; margin-right: 15px;"><a class="link-color-faded" href="javascript:void(0)">Home</a> </li>
            </ul>

        </div>

        <!-- Page Body -->
        <div class="lux-page-body">

            <!-- Lux Banner -->
            <div class="lux-banner-wrap">
                <img class="lux-banner" src="{{asset("/images/banner/lux/banner_full.png")}}"/>
                <div class="lux-style-bar"></div>
            </div>

            <!-- Page Body -->
            <div class="lux-panel page-content Panel-Color-Primary">
                <div class="container">
                    <div class="row">

                        <!-- News Post header -->
                        <div class="m-bot-50 inline-block">
                            <div class="heading-title-alt border-short-bottom text-center">
                                <h3 class="text-uppercase link-color-active">Welcome!</h3>
                            </div>
                        </div>

                        <!-- News Information -->
                        <div class="post-list-aside">
                            <div class="post-single">
                                <div class="col-md-6">
                                    <div class="post-img title-img Panel-Color-Gradient" style="width: 526px; height: 392px; overflow: hidden;">
                                        <img src="{{asset("/images/banner/lux/OutsidePic.png")}}"/>
                                        <div class="info">Join The Suite Life!</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="post-desk">
                                        <ul class="post-cat">
                                            <li><a href="#">Hairstylists</a></li>
                                            <li><a href="#">Cosmetologists</a></li>
                                            <li><a href="#">And more...</a></li>
                                        </ul>
                                        <h4 class="text-uppercase">
                                            <a href="#" class="link-color-active">Join The Suite Life!</a>
                                        </h4>
                                        <div class="date">
                                            <a href="#" class="author">The Lux Suites</a> May 21, 2021
                                        </div>
                                        <p>
                                            The Lux Salon and Spa Suites is a luxury salon suite and booth environment dedicated to salon professionals in the beauty industry.
                                            Our suites and booths are home to an array of extremely talented and independent beauty professionals in the Historic Downtown Bethlehem,
                                            PA area, including but not limited to cosmetologists, barbers, estheticians, massage therapists, and nail technicians.
                                            The Lux Salon and Spa Suites is your solution for a spacious, luxury salon suite or booth set in an environment of several independent beauty professionals.
                                        </p>
                                        <a href="{{url("about")}}" class="p-read-more">
                                            Read More <i class="icon-arrows_slim_right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- News Display -->
            <div class="post-parallax">
                <div class="lux-style-bar"></div>
                <div class="relative page-content" style="padding: 50px;">
                    <div class="dark-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="v-middle">
                                    <h3 class="light-txt text-uppercase">Benefits of The Lux Salon</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="light-txt space">
                                    <h4 class="text-uppercase light-txt link-color-active">
                                       (610) 484-347-8500
                                    </h4>
                                    <p class="light-txt">
                                        We have affordable lease rates that help keep overhead down while you make more money.
                                        Choose and sell your own products. Own your own business. Be your own boss. Set your own hours and prices.
                                        Free Wi-Fi and all utilities included.
                                        Each salon suite and booth provide all the space you need to launch your business with minimum start-up cost.
                                        A breakroom with microwave, sink, and seating is provided. Onsite laundry facility. Abundant parking.
                                        After hour security systems allow you to operate your salon business with peace of mind.
                                    </p>
                                    <div class="p-top-30">
                                        <img  class="lux-small-pic" src="{{asset("/images/banner/lux/InnerOfficePic.png")}}" alt="">
                                        <img  class="lux-small-pic" src="{{asset("/images/banner/lux/InnerOfficePic2.png")}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="float: left;" class="lux-style-bar"></div>
            </div>

            <!-- Footer -->
            @include("parts.footer")
        </div>


    </div>
</body>

</html>
