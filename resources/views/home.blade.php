@extends('layouts.app')

@section('content')
    @include('layouts.home-slider')
    <!-- Intro -->
    <section class="section-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="intro text-center">
                        <h2 class="mb-32">Designing a Resilient Tomorrow</h2>
                        <p class="lead">For each project we establish relationships with partners who we know will help us create added value for your project.
                        As well as bringing together the public and private sectors, we make sector-overarching links to gather knowledge and to
                        learn from each other. The way we undertake projects is based on permanently applying values that reinforce each other: socio-cultural
                        value, experiental value, building-technical value and economical value.</p>
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
                            <h3 class="service-1__title">Planning</h3>
                            <ul class="service-1__features">
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Modern Design</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Unique Foundation</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Smart Heating System</span>
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
                            <h3 class="service-1__title">Interior design</h3>
                            <ul class="service-1__features">
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Modern Design</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Unique Foundation</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Smart Heating System</span>
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
                            <h3 class="service-1__title">Exterior Design</h3>
                            <ul class="service-1__features">
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Modern Design</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Unique Foundation</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Smart Heating System</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end services -->

    <!-- Portfolio -->
    <section class="section-wrap pt-48">
        <div class="container">
            <div class="title-row mb-48">
                <p class="subtitle">Portfolio</p>
                <h2 class="section-title">Featured Works</h2>
            </div>

            <div class="projects">
                <div class="project-1">
                    <div class="project-1__container">
                        <div class="project__img-holder hover-scale">
                            <a href="portfolio-single.html">
                                <img src="{{asset(config('app.public_prefix').'assets/img/portfolio/v-2/1.jpg')}}" alt="" class="project__img">
                            </a>
                        </div>
                    </div>

                    <div class="project-1__description-holder">
                        <div class="project-1__description">
                            <h3 class="project-1__title">Keangnam Grand Hall</h3>
                            <p class="project-1__text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.</p>
                            <a href="#" class="read-more">
                                <span class="read-more__text">Read More</span>
                                <i class="ui-arrow-right read-more__icon"></i>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->

                <div class="project-1">
                    <div class="project-1__container">
                        <div class="project__img-holder hover-scale">
                            <a href="portfolio-single.html">
                                <img src="{{asset(config('app.public_prefix').'assets/img/portfolio/v-2/1.jpg')}}" alt="" class="project__img">
                            </a>
                        </div>
                    </div>

                    <div class="project-1__description-holder">
                        <div class="project-1__description">
                            <h3 class="project-1__title">Green House</h3>
                            <p class="project-1__text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.</p>
                            <a href="#" class="read-more">
                                <span class="read-more__text">Read More</span>
                                <i class="ui-arrow-right read-more__icon"></i>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->
            </div>					

        </div>
    </section> <!-- end portfolio -->


    <!-- Testimonials -->
    <section class="section-wrap bg-dark-overlay" style="background-image: url({{asset(config('app.public_prefix').'assets/img/testimonials/bg.jpg')}});">
        <div class="container">
            <div class="title-row text-center">
                <p class="subtitle">Testimonials</p>
                <h2 class="section-title">What clients say about us</h2>
                <i class="quote">“</i>
            </div>					

            <div class="slick-slider slick-testimonials">

                <div class="testimonial clearfix">
                    <div class="testimonial__body">
                        <p class="testimonial__text">“I have witnessed and admired the work for years. I highly recommend this work for anyone seeking to increase.”</p>
                    </div>
                    <div class="testimonial__info">
                        <span class="testimonial__author">Joeby Ragpa</span>
                        <span class="testimonial__company">DeoThemes</span>
                    </div>
                </div>

                <div class="testimonial clearfix">
                    <div class="testimonial__body">
                        <p class="testimonial__text">“Every detail has been taken care these team are realy amazing and talented! I will work only to help your sales goals.”</p>
                    </div>
                    <div class="testimonial__info">
                        <span class="testimonial__author">Alexander Samokhin</span>
                        <span class="testimonial__company">DeoThemes</span>
                    </div>
                </div>

                <div class="testimonial clearfix">
                    <div class="testimonial__body">
                        <p class="testimonial__text">“I have witnessed and admired the work for years. I highly recommend this work for anyone seeking to increase.”</p>
                    </div>
                    <div class="testimonial__info">
                        <span class="testimonial__author">Joeby Ragpa</span>
                        <span class="testimonial__company">DeoThemes</span>
                    </div>
                </div>

                <div class="testimonial clearfix">
                    <div class="testimonial__body">
                        <p class="testimonial__text">“Every detail has been taken care these team are realy amazing and talented! I will work only to help your sales goals.”</p>
                    </div>
                    <div class="testimonial__info">
                        <span class="testimonial__author">Alexander Samokhin</span>
                        <span class="testimonial__company">DeoThemes</span>
                    </div>
                </div>

            </div> <!-- end slider -->

        </div>
    </section> <!-- end testimonials -->

    <!-- Contact -->
    <section class="section-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-lg-48">
                    <div class="title-row">
                        <p class="subtitle">Contact</p>
                        <h2 class="section-title">Get in Touch</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                    </div>

                    <!-- Contact Form -->
                    <form id="contact-form" class="contact-form material" method="post" action="#">
                        
                        <!-- Name -->
                        <div class="material__form-group form-group">
                            <input type="text" name="name" id="name" class="form-input material__input" required="">
                            <label for="name" class="material__label">Name
                                <abbr title="required" class="required">*</abbr>
                            </label>
                            <span class="material__underline"></span>
                        </div>
                        
                        <!-- Email -->
                        <div class="material__form-group form-group">
                            <input type="email" name="email" id="email" class="form-input material__input" required="">
                            <label for="email" class="material__label">Email
                                <abbr title="required" class="required">*</abbr>
                            </label>
                            <span class="material__underline"></span>
                        </div>

                        <!-- Subject -->
                        <div class="material__form-group form-group">
                            <input type="text" name="subject" id="subject" class="form-input material__input">
                            <label for="subject" class="material__label">Subject
                            </label>
                            <span class="material__underline"></span>
                        </div>							

                        <div class="material__form-group form-group">
                            <textarea id="message" name="message" rows="7" class="form-input material__input" required=""></textarea>
                            <label for="message" class="material__label">Message
                            <abbr title="required" class="required">*</abbr>
                            </label>
                            <span class="material__underline"></span>
                        </div>								
                    
                        <input type="submit" class="btn btn--lg btn--color btn--button" value="Send Message" id="submit-message">
                        <div id="msg" class="message"></div>
                    </form>
                </div>						

                <div class="col-lg-7 offset-lg-1">
                    <!-- Google Map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.9679844513716!2d120.97225391411865!3d14.60089968980224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca1023917729%3A0xfb3589db486b911!2sV.%20Tytana%20St%2C%20Binondo%2C%20Manila%2C%201006%20Metro%20Manila%2C%20Philippines!5e0!3m2!1sen!2sng!4v1611965013561!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

            </div>
        </div>
    </section> <!-- end contact -->
@endsection
