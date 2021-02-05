@extends('layouts.app')

@section('header')
    @include('layouts.header2')
@endsection
@section('content')
	<div class="content-wrapper content-wrapper--boxed oh">
    
        <!-- Page Title -->
        <section class="page-title bg-dark-overlay text-center" style="background-image: url({{asset(config('app.public_prefix').'assets/img/page-title/about.jpg')}});">
            <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">About Us</h1>
                <p class="page-title__subtitle">For each project we establish relationships with partners</p>
            </div>
            </div>
        </section> <!-- end page title -->

        <!-- Intro -->
        <section class="section-wrap">
            <a name="about">&nbsp;</a>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="intro text-center">
                            <h2 class="mb-32">Naomix Gallery Limited</h2>
                            <p class="lead">Naomix Gallery is a zestful contemporary online art gallery provided for the artist to express her untamed 
                                creativity beyond boundaries. It serves as a platform to swiftly reach and interact with art enthusiasts locally and globally. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- end intro -->

        <!-- Services -->
        <section class="section-wrap pt-0 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="service-1">
                            <a href="#" class="service-1__url hover-scale">
                                <img src="{{asset(config('app.public_prefix').'assets/img/services/v-2/1.jpg')}}" class="service-1__img" alt="">
                            </a>								
                            <div class="service-1__info">
                                <h3 class="service-1__title">Exhibitions</h3>
                                <ul class="service-1__features">
                                    <li class="service-1__feature">
                                        <i class="ui-check service-1__feature-icon"></i>
                                        <span class="service-1__feature-text">2019, When Thought Becomes Reality, SNA October Rain Exhibition, Freedom Park Lagos Island.</span>
                                    </li>
                                    <li class="service-1__feature">
                                        <i class="ui-check service-1__feature-icon"></i>
                                        <span class="service-1__feature-text">2019, Gift of Blood, A Multi-Art Exhibition, Kulture Kode Arthub, Chocolate Mall,Wuse 2 Abuja.</span>
                                    </li>
                                    <li class="service-1__feature">
                                        <i class="ui-check service-1__feature-icon"></i>
                                        <span class="service-1__feature-text">2019, Uncovered Female Nigerian Artists, British Club British Village Inn, Abuja.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="service-1">
                            <a href="#" class="service-1__url hover-scale">
                                <img src="{{asset(config('app.public_prefix').'assets/img/services/v-2/2.jpg')}}" class="service-1__img" alt="">
                            </a>								
                            <div class="service-1__info">
                                <h3 class="service-1__title">Gallery</h3>
                                <ul class="service-1__features">
                                    <li class="service-1__feature">
                                        <i class="ui-check service-1__feature-icon"></i>
                                        <span class="service-1__feature-text">MoGallery Collection</span>
                                    </li>
                                    <li class="service-1__feature">
                                        <i class="ui-check service-1__feature-icon"></i>
                                        <span class="service-1__feature-text">Miniature</span>
                                    </li>
                                    <li class="service-1__feature">
                                        <i class="ui-check service-1__feature-icon"></i>
                                        <span class="service-1__feature-text">Portraiture</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="service-1">
                            <a href="#" class="service-1__url hover-scale">
                                <img src="{{asset(config('app.public_prefix').'assets/img/services/v-2/3.jpg')}}" class="service-1__img" alt="">
                            </a>								
                            <div class="service-1__info">
                                <h3 class="service-1__title">Mural</h3>
                                <ul class="service-1__features">
                                    <li class="service-1__feature">
                                        <i class="ui-check service-1__feature-icon"></i>
                                        <span class="service-1__feature-text">2019, Creation of fashion illustrations on the walls of AnnCranberry Couture Fashion house.</span>
                                    </li>
                                    <li class="service-1__feature">
                                        <i class="ui-check service-1__feature-icon"></i>
                                        <span class="service-1__feature-text">2018, Creation of the Guinness harp logo with crown corks for a mural wall design at The Guinness Flavour 
                                        Rooms event.</span>
                                    </li>
                                    <li class="service-1__feature">
                                        <i class="ui-check service-1__feature-icon"></i>
                                        <span class="service-1__feature-text">2017, Participation in the creation of the Ojodu-Berger Bridge mural commissioned by Governor Akinwunmi Ambode.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- end services -->

        <!-- Intro -->
        <section class="section-wrap">
            <a name="passion">&nbsp;</a>
            <a name="goal">&nbsp;</a>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-10 col-md-6 col-lg-5">
                        <div class="intro text-center">
                            <h2 class="mb-32">Our Passion</h2>
                            <p class="lead">
                                We use our highly titillating and tantalizing impressionistic art forms to rewrite history, 
                                retell stories and recolour the world in bright scintillating shades of smiles, sanity, and serenity.  
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-md-6 col-lg-5">
                        <div class="intro text-center">
                            <h2 class="mb-32">Our Goal</h2>
                            <p class="lead">
                                To distill the thoughts and imaginations of every client into our canvases and create for them the world as they want it while we create for ourselves an art identity that will resonate every household, globally.  
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- end intro -->

        <!-- Statistic -->
        <div class="container">
            <div class="statistic-wrap">
            <div class="row">
                <div class="col-md-3">
                <div class="statistic">
                    <span class="statistic__number">461</span>
                    <h5 class="statistic__title">Exhibitions</h5>
                </div>
                </div>
                <div class="col-md-3">
                <div class="statistic">
                    <span class="statistic__number">290</span>
                    <h5 class="statistic__title">Happy Customers</h5>
                </div>
                </div>
                <div class="col-md-3">
                <div class="statistic">
                    <span class="statistic__number">45</span>
                    <h5 class="statistic__title">Art Works</h5>
                </div>
                </div>
                <div class="col-md-3">
                <div class="statistic">
                    <span class="statistic__number">36</span>
                    <h5 class="statistic__title">Awards</h5>
                </div>
                </div>
            </div>
            </div>
        </div> <!-- end statistic -->

        <!-- Team -->
        <section class="section-wrap d-none">
            <div class="container">
            <div class="row">
                <div class="col-lg-3">
                <div class="blog-grid__title-col d-flex flex-column mb-lg-48">
                    <div class="title-row">
                    <p class="subtitle">team</p>
                    <h2 class="section-title">Our specialists</h2>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun tur magni dolores eos qui
                    ratione</p>
                    </div>
                </div>							
                </div>

                <div class="col-lg-8 offset-lg-1">
                <div class="slick-slider slick-team">
                    <div class="team-col">
                    <div class="team hover-trigger">
                        <div class="team__img-holder">
                        <img src="img/team/1.jpg" alt="" class="team__img">
                        <div class="hover-overlay">
                            <div class="team__details text-center">
                            <div class="socials socials--white">
                                <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                                <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                                <a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                                <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
                            </div>
                            </div>
                        </div>
                        </div>										
                        <h5 class="team__name">Melissa Shredinger</h5>
                        <span class="team__occupation">Interior Designer</span>								
                    </div>
                    </div>

                    <div class="team-col">
                    <div class="team hover-trigger">
                        <div class="team__img-holder">
                        <img src="img/team/2.jpg" alt="" class="team__img">
                        <div class="hover-overlay">
                            <div class="team__details text-center">
                            <div class="socials socials--white">
                                <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                                <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                                <a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                                <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
                            </div>
                            </div>
                        </div>
                        </div>										
                        <h5 class="team__name">Donald Thompson</h5>
                        <span class="team__occupation">Architect</span>								
                    </div>
                    </div>

                    <div class="team-col">
                    <div class="team hover-trigger">
                        <div class="team__img-holder">
                        <img src="img/team/3.jpg" alt="" class="team__img">
                        <div class="hover-overlay">
                            <div class="team__details text-center">
                            <div class="socials socials--white">
                                <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                                <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                                <a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                                <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
                            </div>
                            </div>
                        </div>
                        </div>										
                        <h5 class="team__name">Melissa Shredinger</h5>
                        <span class="team__occupation">Sedona White</span>								
                    </div>
                    </div>

                </div> <!-- end slider -->
                </div>

            </div>
            </div>
        </section> <!-- end team -->


        <!-- Partners -->
        <div class="partners bg-light text-center d-none">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="#">
                            <img src="img/partners/1.png" alt="">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="#">
                            <img src="img/partners/2.png" alt="">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="#">
                            <img src="img/partners/3.png" alt="">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="#">
                            <img src="img/partners/4.png" alt="">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="#">
                            <img src="img/partners/5.png" alt="">
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="#">
                            <img src="img/partners/6.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
@endsection
