@extends('layouts.app')

@section('header')
    @include('layouts.header2')
@endsection
@section('content')
<div class="content-wrapper oh">
    @include('layouts.home-slider')
    <!-- Intro -->
    <section class="section-wrap">
        <a name="intro">&nbsp;</a>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="intro text-center">
                        <h2 class="mb-32">Naomix Gallery Limited</h2>
                        <p class="lead">
                            A zestful contemporary online art gallery provided for the artist to express her untamed creativity beyond boundaries. 
                            It serves as a platform to swiftly reach and interact with art enthusiasts locally and globally.
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
                <h5 class="statistic__title">In Store</h5>
            </div>
            </div>
            <div class="col-md-3">
            <div class="statistic">
                <span class="statistic__number">290</span>
                <h5 class="statistic__title">Exhibitions</h5>
            </div>
            </div>
            <div class="col-md-3">
            <div class="statistic">
                <span class="statistic__number">45</span>
                <h5 class="statistic__title">Gallery</h5>
            </div>
            </div>
            <div class="col-md-3">
            <div class="statistic">
                <span class="statistic__number">36</span>
                <h5 class="statistic__title">Mural</h5>
            </div>
            </div>
        </div>
        </div>
    </div> <!-- end statistic -->

    <!-- Services -->
    <section class="section-wrap pt-0 pb-0">
        <a name="offer">&nbsp;</a>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="service-1">
                        <a href="#" class="service-1__url hover-scale">
                            <img src="{{asset(config('app.public_prefix').'assets/images/exhibition/2.jpg')}}" class="service-1__img" alt="">
                        </a>								
                        <div class="service-1__info">
                            <h3 class="service-1__title">Exhibitions</h3>
                            <ul class="service-1__features">
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">2019, When Thought Becomes Reality, SNA October Rain Exhibition...</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">2019, Gift of Blood, A Multi-Art Exhibition, Kulture Kode Arthub...</span>
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
                            <img src="{{asset(config('app.public_prefix').'assets/images/gallery/collections/2.jpg')}}" class="service-1__img" alt="">
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
                            <img src="{{asset(config('app.public_prefix').'assets/images/mural/1.jpg')}}" class="service-1__img" alt="">
                        </a>								
                        <div class="service-1__info">
                            <h3 class="service-1__title">Mural</h3>
                            <ul class="service-1__features">
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">2019, Creation of fashion illustrations on the walls...</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">2018, Creation of the Guinness harp logo with crown corks...</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">2017, Participation in the creation of the Ojodu-Berger Bridge mural...</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end services -->

    <!-- Gallery -->
    <section class="section-wrap  pt-0 pb-0">
        <a name="gallery">&nbsp;</a>
        <div class="container">
            <div class="title-row mb-24">
                <p class="subtitle d-none">Portfolio</p>
                <h2 class="section-title">Gallery</h2>
            </div>
            <div class="projects">
                <div class="project-1">
                    <div class="project-1__container">
                        <div class="project__img-holder hover-scale">
                            <a href="/gallery/gallery-collection">
                                <img src="{{asset(config('app.public_prefix').'assets/images/gallery/collections/1.jpg')}}" alt="" class="project__img">
                            </a>
                        </div>
                    </div>
                    <div class="project-1__description-holder">
                        <div class="project-1__description">
                            <h3 class="project-1__title">Gallery Collection (The Best Teacher)</h3>
                            <p class="project-1__text">It is often said that there is no better teacher than life itself. The people we come across, circumstances we face, 
                                situations we find ourselves and events that takes place in our lives are what shapes us with the lessons they taught us.</p>
                            <a href="/gallery/gallery-collection?id=1" class="read-more">
                                <span class="read-more__text">Explore</span>
                                <i class="ui-arrow-right read-more__icon"></i>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->

                <div class="project-1">
                    <div class="project-1__container">
                        <div class="project__img-holder hover-scale">
                            <a href="/gallery/miniature">
                                <img src="{{asset(config('app.public_prefix').'assets/images/gallery/miniature/1.jpg')}}" alt="" class="project__img">
                            </a>
                        </div>
                    </div>

                    <div class="project-1__description-holder">
                        <div class="project-1__description">
                            <h3 class="project-1__title">Miniature</h3>
                            <p class="project-1__text">Abundance MEDIUM oil on canvas, 20 x 24 inches, EAR 2017.</p>
                            <a href="/gallery/miniature?id=1" class="read-more">
                                <span class="read-more__text">Explore</span>
                                <i class="ui-arrow-right read-more__icon"></i>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->
                
                <div class="project-1">
                    <div class="project-1__container">
                        <div class="project__img-holder hover-scale">
                            <a href="/gallery/portrauture">
                                <img src="{{asset(config('app.public_prefix').'assets/images/gallery/portraiture/1.jpg')}}" alt="" class="project__img">
                            </a>
                        </div>
                    </div>

                    <div class="project-1__description-holder">
                        <div class="project-1__description">
                            <h3 class="project-1__title">Portraiture</h3>
                            <p class="project-1__text">Neo @6Months, oil on canvas, 16 x 18 inches, 2019</p>
                            <a href="/gallery/portrauture?id=1" class="read-more">
                                <span class="read-more__text">Explore</span>
                                <i class="ui-arrow-right read-more__icon"></i>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->
            </div>					
        </div>
    </section> <!-- end portfolio -->
    
    <section class="section-wrap pt-0 pb-0">
        <a name="exhibition">&nbsp;</a>
        <div class="container">
            <div class="title-row mb-24">
                <p class="subtitle d-none">Portfolio</p>
                <h2 class="section-title">Exhibitions</h2>
            </div>
            <article class="entry">
                <div class="entry__img-holder">
                    <a href="/exhibition/1">
                    <img src="{{asset(config('app.public_prefix').'assets/images/exhibition/1.jpg')}}" class="entry__img" alt="">
                    </a>
                </div>
                <div class="entry__body text-center">
                    <ul class="entry__meta">
                    <li class="entry__meta-date">
                        <span>October 2019</span>
                    </li>
                    <li class="entry__meta-author">
                        <a href="#">Freedom Park</a>
                    </li>
                    <li class="entry__meta-category">
                        <a href="#">Lagos Island</a>
                    </li>
                    </ul>
                    <h2 class="entry__title">
                    <a href="/exhibition/1">2019, When Thought Becomes Reality, SNA October Rain Exhibition</a>
                    </h2>
                    <div class="entry__excerpt">
                    <p></p>
                    </div>
                    <a href="/exhibitions" class="read-more">
                    <span class="read-more__text">Explore</span>
                    <i class="ui-arrow-right read-more__icon"></i>
                    </a>
                </div>
            </article>
        </div>
    </section>

    <!-- Store -->
    <section class="section-wrap pt-0 pb-0">
        <div class="container">
            <div class="title-row mb-24">
                <p class="subtitle d-none">Portfolio</p>
                <h2 class="section-title">New Store</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="/store">
                                <img src="{{asset(config('app.public_prefix').'assets/images/store/1.png')}}" class="entry__img" alt="">
                            </a>
                        </div>
                        <div class="entry__body">
                            <ul class="entry__meta d-none">
                                <li class="entry__meta-date">
                                    <span>13 June 2018</span>
                                </li>
                            </ul>
                            <h2 class="entry__title">
                                <a href="/store/1">Product Name</a>
                            </h2>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="/store">
                                <img src="{{asset(config('app.public_prefix').'assets/images/store/2.png')}}" class="entry__img" alt="">
                            </a>
                        </div>
                        <div class="entry__body">
                            <ul class="entry__meta d-none">
                                <li class="entry__meta-date">
                                    <span>13 June 2018</span>
                                </li>
                            </ul>
                            <h2 class="entry__title">
                                <a href="store/2">Product Name</a>
                            </h2>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="/store">
                                <img src="{{asset(config('app.public_prefix').'assets/images/store/3.png')}}" class="entry__img" alt="">
                            </a>
                        </div>
                        <div class="entry__body">
                            <ul class="entry__meta d-none">
                                <li class="entry__meta-date">
                                    <span>13 June 2018</span>
                                </li>
                            </ul>
                            <h2 class="entry__title">
                                <a href="/store/3">Product Name</a>
                            </h2>
                        </div>
                    </article>
                </div>
                <div class="col-lg-12 col-md-12 text-center">
                    <a href="/store" class="read-more">
                        <span class="read-more__text">Explore</span>
                        <i class="ui-arrow-right read-more__icon"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('testimonial')

    <!-- Contact -->
    <section class="section-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-lg-24">
                    <div class="title-row">
                        <p class="subtitle">Contact</p>
                        <h2 class="section-title">Get in Touch</h2>
                        <p>Use the form fill below to contact us for more enquiry</p>
                    </div>

                    <!-- Contact Form -->
                    <form id="contact-form" class="contact-form material" method="post" action="/contact">
                        @csrf()
                        <!-- Name -->
                        <div class="material__form-group form-group">
                            <input type="text" name="name" id="name" value="{{old('name') ?? ''}}" class="form-input material__input" required>
                            <label for="name" class="material__label">Name
                                <abbr title="required" class="required">*</abbr>
                            </label>
                            @if ($errors->has('name'))
                                <div class="material__underline">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        
                        <!-- Email -->
                        <div class="material__form-group form-group">
                            <input type="email" name="email" id="email" value="{{old('email') ?? ''}}" class="form-input material__input" required>
                            <label for="email" class="material__label">Email
                                <abbr title="required" class="required">*</abbr>
                            </label>
                            @if ($errors->has('email'))
                                <div class="material__underline">{{ $errors->first('email') }}</div>
                            @endif
                        </div>

                        <!-- Subject -->
                        <div class="material__form-group form-group">
                            <input type="text" name="subject" id="subject" value="{{old('subject') ?? ''}}" 
                                class="form-input material__input @error('subject') is-invalid @enderror">
                            <label for="subject" class="material__label">Subject</label>
                            @if ($errors->has('subject'))
                                <div class="material__underline">{{ $errors->first('subject') }}</div>
                            @endif
                        </div>							

                        <div class="material__form-group form-group">
                            <textarea id="message" name="message" rows="7" class="form-input material__input" required>{{old('email') ?? ''}}</textarea>
                            <label for="message" class="material__label">Message
                                <abbr title="required" class="required">*</abbr>
                            </label>
                            @if ($errors->has('message'))
                                <div class="material__underline">{{ $errors->first('message') }}</div>
                            @endif
                        </div>								
                    
                        <input type="submit" class="btn btn--lg btn--color btn--button" value="Send Message" id="submit-message">
                        <div id="msg" class="message"></div>
                    </form>
                </div>						

                <div class="col-lg-7 offset-lg-1">
                    <!-- Google Map -->
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.9679844513716!2d120.97225391411865!3d14.60089968980224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca1023917729%3A0xfb3589db486b911!2sV.%20Tytana%20St%2C%20Binondo%2C%20Manila%2C%201006%20Metro%20Manila%2C%20Philippines!5e0!3m2!1sen!2sng!4v1611965013561!5m2!1sen!2sng"  style="width: 100%; min-height: 450;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                </div>

            </div>
        </div>
    </section> <!-- end contact -->
    @include('layouts.footer')
</div>
@endsection
