<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The Lux Website">
    <meta name="keywords" content="Beauty, Salon">
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
            <li class="link-item" style="padding: 0;"><a class="link-color-faded" href="javascript:void(0)">News</a> </li>
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

        <!-- News Display -->
        <div class="post-parallax">
            <div class="lux-style-bar"></div>
            <div class="relative page-content">
                <div class="dark-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="v-middle">
                                <h3 class="light-txt text-uppercase">Skills and Experience</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="light-txt space">
                                <h4 class="text-uppercase light-txt">
                                    We are damn expart !
                                </h4>
                                <p class="light-txt">
                                    We are a team of multi-skilled and curious digital specialists who are always up for a massive challenge forever. We are a team of multi-skilled and curious digital specialists who are always up for a massive challenge forever.
                                </p>
                                <div class="p-top-30">
                                    <div class="progress massive-progress">
                                        <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar">
                                            HTML / CSS / JQUERY
                                            <span>80%</span>
                                        </div>
                                    </div>
                                    <div class="progress massive-progress">
                                        <div role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" class="progress-bar">
                                            PHOTOSHOP
                                            <span>90%</span>
                                        </div>
                                    </div>
                                    <div class="progress massive-progress">
                                        <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" class="progress-bar">
                                            GRAPHIC DESIGN
                                            <span>75% </span>
                                        </div>
                                    </div>
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
