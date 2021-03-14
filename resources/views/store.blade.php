@extends('layouts.app')
@section('header')
    @include('layouts.header2')
@endsection
@section('content')
<div class="content-wrapper content-wrapper--boxed oh">

    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url({{ asset(config('app.storage_prefix').$products[0]->path) }});">
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">My Store</h1>
                <p class="page-title__subtitle d-none">For each project we establish relationships with partners</p>
            </div>
        </div>
    </section> <!-- end page title --> 

    <!-- Portfolio -->
    <section class="section-wrap">
        <div class="container">
            
            <div class="projects">
                @forelse($products as $product)
                <div class="project-1">
                    <div class="project-1__container">
                        <div class="project__img-holder hover-scale">
                            <a href="#" class=" preview-image" data-src="{{ asset(config('app.storage_prefix').$product->path) }}" data-desc="{{ $product->description_decode }}"
                                data-title="{{ $product->title }}" data-size="{{ $product->size }}" data-category="{{ $product->category }}" 
                                data-amount="{{ number_format($product->amount, 2, '.', ',') }}" data-toggle="modal" data-target="#previewImageModal">
                                <img src="{{ asset(config('app.storage_prefix').$product->path) }}" alt="{{ $product->title }}" class="project__img">
                            </a>
                        </div>
                    </div>

                    <div class="project-1__description-holder">
                        <div class="project-1__description">
                            <h3 class="project-1__title">{{ $product->title }}</h3>
                            @if(!empty($product->amount))	
                                <h5 class="pt-8 pb-8">₦ {{ number_format($product->amount, 2, '.', ',') }}</h5>
                            @endif
                            <div class="project-1__text feed-content">{!! $product->description_decode !!}</div>
                            <!-- <a href="#" class="read-more" info="{{json_encode($product)}}" data-toggle="modal" data-target="#showInterestModal">
                                <span class="read-more__text">Drop a Message</span>
                                <i class="ui-arrow-right read-more__icon"></i>
                            </a> -->
                            <a href="https://wa.me/2347030555625?text=I'm%20interested%20in%20buying%20{{$product->title}}&photos={{asset(config('app.storage_prefix').$product->path)}}"
                             info="{{json_encode($product)}}">
                                <span class="read-more__text">Drop a Message</span>
                                <i class="ui-arrow-right read-more__icon"></i>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->
                @empty
                    <div class="col-sm-12 text-center text-dark">
                        No record found.
                    </div>
                @endforelse
            </div>	
            <div class="row justify-content-center">
                @if (!empty($products) && method_exists($products,'hasPages') && !empty($products->total()))
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div style="padding: 12px;">Showing
                        <span>{{ $products->currentPage() == 1 ? '1' : ($products->perPage() * ($products->currentPage() - 1)) + 1 }}</span> -
                        @if (($products->perPage() * $products->currentPage()) > $products->total())
                            <span>{{ $products->total() }}</span> of
                        @else
                            <span>{{ $products->currentPage() == 1 ? $products->perPage() : ($products->perPage() * ($products->currentPage() - 1)) + count($products) }}</span> of
                        @endif
                        <span>{{ $products->total() }}</span>
                    </div>
                    {{ $products->withQueryString()->links() }}
                </div>
                @endif
            </div>
        </div>
    </section> <!-- end portfolio -->

    @include('layouts.footer')
    @include('shared.preview-image-modal2')
    <!-- @include('shared.show-interest-modal') -->
</div>
@endsection