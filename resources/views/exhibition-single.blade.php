@extends('layouts.app')
@section('header')
    @include('layouts.header2')
@endsection
@section('content')
<div class="content-wrapper content-wrapper--boxed oh">

    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url({{ asset(config('app.storage_prefix').$exhibition->exhibition_items[0]->path) }});">
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">{{$exhibition->title}} </h1>
                <h4 class="text-center">{{$exhibition->year}} </h4>
            </div>
        </div>
    </section> <!-- end page title -->
    <section class="section-wrap">
        <div class="container">
            @if(!empty($exhibition->description))
            <div class="intro">
                {!! $exhibition->description_decode !!}
            </div>
            @endif
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="container-fluid container-semi-fluid">
                        <div class="row masonry-grid">
                            @forelse($exhibition->exhibition_items as $image)		
                            <div class="masonry-item col-lg-3 project hover-trigger">
                                <div class="project__container">
                                    <div class="project__img-holder">
                                        <a href="#" class="preview-image" data-src="{{ asset(config('app.storage_prefix').$image->path) }}" 
                                            data-title="{{ $image->title }}" data-size="{{ $image->size }}" data-medium="{{ $image->medium }}" 
                                            data-toggle="modal" data-target="#previewImageModal">
                                            <img src="{{ asset(config('app.storage_prefix').$image->path) }}" alt="{{ $image->title }}" class="project__img">
                                            <div class="hover-overlay">
                                                <div class="project__description">
                                                    <h3 class="project__title">{{ $image->title }}</h3>
                                                    {!! $image->size ? '<span class="project__date">'.$image->size.'</span>' : '' !!}
                                                    {!! $image->medium ? ', <span class="project__date">'.$image->medium.'</span>' : '' !!}
                                                </div>
                                            </div>
                                        </a>              
                                    </div>                  
                                </div> 
                            </div> <!-- end project -->
                            @empty
                            <div class="col-sm-12 text-center text-dark">
                                No record found.
                            </div>
                            @endforelse
                            @if (!empty($exhibition->exhibition_items) && method_exists($exhibition->exhibition_items,'hasPages') && !empty($exhibition->exhibition_items->total()))
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div style="padding: 12px;">Showing
                                    <span>{{ $exhibition->exhibition_items->currentPage() == 1 ? '1' : ($exhibition->exhibition_items->perPage() * ($exhibition->exhibition_items->currentPage() - 1)) + 1 }}</span> -
                                    @if (($exhibition->exhibition_items->perPage() * $exhibition->exhibition_items->currentPage()) > $exhibition->exhibition_items->total())
                                        <span>{{ $exhibition->exhibition_items->total() }}</span> of
                                    @else
                                        <span>{{ $exhibition->exhibition_items->currentPage() == 1 ? $exhibition->exhibition_items->perPage() : ($exhibition->exhibition_items->perPage() * ($exhibition->exhibition_items->currentPage() - 1)) + count($exhibition->exhibition_items) }}</span> of
                                    @endif
                                    <span>{{ $exhibition->exhibition_items->total() }}</span>
                                </div>
                                {{ $exhibition->exhibition_items->withQueryString()->links() }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    @include('shared.preview-image-modal')
</div>
@endsection