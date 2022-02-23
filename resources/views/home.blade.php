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

    <!-- Gallery -->
    <section class="section-wrap  pt-0 pb-0">
        <a name="gallery">&nbsp;</a>
        <div class="container">
            <div class="title-row mb-24 d-none">
                <p class="subtitle d-none">Portfolio</p>
                <h2 class="section-title">Gallery</h2>
            </div>
            <div class="projects">
                <div class="project-1">
                    <div class="project-1__container">
                        <div class="project__img-holder hover-scale">
                            <a href="/gallery">
                                <img src="{{asset( !empty($gallery->path) ? config('app.storage_prefix').$gallery->path : 
                                config('app.public_prefix').'assets/images/gallery/collections/1.jpg' )}}" alt="" class="project__img">
                            </a>
                        </div>
                    </div>
                    <a href="/gallery">
                        <div class="project-1__description-holder">
                            <div class="project-1__description">
                                <h3 class="project-1__title">Gallery ({{ $gallery->title ?? 'The Best Teacher'}})</h3>
                                <div class="project-1__text">
                                    {!! $gallery->description_decode ?? 'It is often said that there is no better teacher than life itself. The people we come across, circumstances we face, 
                                    situations we find ourselves and events that takes place in our lives are what shapes us with the lessons they taught us.' !!}
                                </div>
                            </div>
                        </div>
                    </a>
                </div> <!-- end project -->

                <div class="project-1">
                    <div class="project-1__container">
                        <div class="project__img-holder hover-scale">
                            <a href="/exhibitions">
                                <img src="{{asset( !empty($exhibitions[0]->first_item->path) ? config('app.storage_prefix').$exhibitions[0]->first_item->path : 
                                config('app.public_prefix').'assets/images/exhibition/2.jpg')}}" alt="" class="project__img">
                            </a>
                        </div>
                    </div>

                    <a href="/exhibitions">
                        <div class="project-1__description-holder">
                            <div class="project-1__description">
                                <h3 class="project-1__title">Exhibition</h3>
                                <div class="project-1__text">
                                    {!! !empty($exhibition->year) ? $exhibition->year .', '. $exhibition->title : 
                                    '2019, When Thought Becomes Reality, SNA October Rain Exhibition' !!}
                                </div>
                            </div>
                        </div>
                    </a>
                </div> <!-- end project -->
                
                <div class="project-1">
                    <div class="project-1__container">
                        <div class="project__img-holder hover-scale">
                            <a href="/murals">
                                <img src="{{asset( !empty($mural->path) ? config('app.storage_prefix').$mural->path : 
                                config('app.public_prefix').'assets/images/mural/1.jpg')}}" alt="" class="project__img">
                            </a>
                        </div>
                    </div>

                    <a href="/murals" class="read-more">
                        <div class="project-1__description-holder">
                            <div class="project-1__description">
                                <h3 class="project-1__title">Portraits</h3>
                                <div class="project-1__text">
                                    {!! !empty($mural->year) ? $mural->year .', '. $mural->title : 
                                    '2019, Creation of fashion illustrations on the walls' !!}
                                </div>
                            </div>
                        </div>
                    </a>
                </div> <!-- end project -->
            </div>					
        </div>
    </section> <!-- end portfolio -->

    <!-- Store -->
    <section class="section-wrap pt-24 pb-0">
        <div class="container d-none">
            <div class="title-row mb-24">
                <p class="subtitle d-none">Portfolio</p>
                <h2 class="section-title">Store</h2>
            </div>
            <div class="row justify-content-center">
                @forelse($products as $product)
                <div class="col-lg-4 col-md-6">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="/store/{{$product->id}}">
                                <img src="{{ asset(config('app.storage_prefix').$product->path) }}" class="entry__img" alt="{{ $product->title }}">
                            </a>
                        </div>
                        <div class="entry__body text-center">
                            <ul class="entry__meta">
                                @if(!empty($product->size))
                                <li class="entry__meta-date">
                                    <span>{{ $product->size }}</span>
                                </li>
                                @endif
                                @if(!empty($product->amount))
                                    <li class="entry__meta-date">
                                        <span>₦ {{ number_format($product->amount, 2, '.', ',') }}</span>
                                    </li>
                                @endif
                            </ul>
                            @if(!empty($product->title))
                            <h2 class="entry__title">
                                <a href="/store/{{$product->id}}">{{ $product->title }}</a>
                            </h2>
                            @endif
                        </div>
                    </article>
                </div>
                @empty
                <div class="col-lg-8 col-md-10">
                    <p>Store is currently empty</p>
                </div>
                @endforelse
                <div class="col-lg-12 col-md-12 text-center mb-24">
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
    <section class="section-wrap wrapper-orange">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-lg-12">
                    <div class="title-row text-center">
                        <h4 class="text-white">Click the button below to reach us out for more information of our services. </h4>
                        <a class="section-title btn btn--lg btn--color btn--restored btn--black btn--button" href="/contact">Get in Touch</a>
                        <!-- class="btn btn--lg btn--color btn--button" -->
                    </div>
                </div>	
            </div>
        </div>
    </section> <!-- end contact -->
    @include('layouts.footer')
</div>
@endsection
