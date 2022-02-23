@extends('layouts.app')
@section('header')
    @include('layouts.header2')
@endsection
@section('content')
<div class="content-wrapper content-wrapper--boxed oh">
    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url({{ asset(config('app.storage_prefix').(!empty($galleries[0]->path) ? 
    $galleries[0]->path : 'assets/images/gallery/'.($type == 'collection' ? 'collections' : $type).'/1.jpg') ) }});">
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">Gallery</h1>
            </div>
        </div>
    </section> <!-- end page title -->

    <section class="section-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="container-fluid container-semi-fluid">
                        {!! !empty($type) ? '<h2 class="pt-8 pb-8 font-weight-bold text-capilalize">{{ $type }}</h2>' : '' !!}
                        <!-- Filter -->
                        <div class="filter-list text-center">
                            <a href="/gallery" class="{{ empty($type) ? 'active' : ''}}" data-filter="*">All</a>
                            <a href="/gallery/{{'abstract'}}" class="{{ !empty($type) && $type == 'abstract' ? 'active' : ''}}" data-filter=".abstract">Abstract</a>
                            <a href="/gallery/{{'miniature'}}" class="{{ !empty($type) && $type == 'miniature' ? 'active' : ''}}" data-filter=".miniature">Miniature</a>
                            <a href="/gallery/{{'portrait'}}" class="{{ !empty($type) && $type == 'portrait' ? 'active' : ''}}" data-filter=".portrait">Portraits</a>
                            <a href="/gallery/{{'collection'}}" class="f{{ !empty($type) && $type == 'collection' ? 'active' : ''}}" data-filter=".collection">Collections</a>
                        </div> <!-- end filter -->
                        <div class="row masonry-grid">
                            @forelse($galleries as $gallery)		
                            <div class="masonry-item col-lg-3 project hover-trigger {{ !empty($type) ? $type : '*'}}">
                                <div class="project__container">
                                    <div class="project__img-holder">
                                        <a href="/gallery/detail/{{ $gallery->id }}">
                                            <img src="{{ asset(config('app.storage_prefix').$gallery->path) }}" alt="{{ $gallery->title }}" class="project__img">
                                            <div class="hover-overlay">
                                                <div class="project__description">
                                                    <h3 class="project__title">{{ $gallery->title }}</h3>
                                                    {!! $gallery->year ? '<span class="project__date">'.$gallery->year.'</span>' : '' !!}
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
                            @if (!empty($galleries) && method_exists($galleries,'hasPages') && !empty($galleries->total()))
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div style="padding: 12px;">Showing
                                    <span>{{ $galleries->currentPage() == 1 ? '1' : ($galleries->perPage() * ($galleries->currentPage() - 1)) + 1 }}</span> -
                                    @if (($galleries->perPage() * $galleries->currentPage()) > $galleries->total())
                                        <span>{{ $galleries->total() }}</span> of
                                    @else
                                        <span>{{ $galleries->currentPage() == 1 ? $galleries->perPage() : ($galleries->perPage() * ($galleries->currentPage() - 1)) + count($galleries) }}</span> of
                                    @endif
                                    <span>{{ $galleries->total() }}</span>
                                </div>
                                <div class="page-right">
                                    {{ $galleries->withQueryString()->links() }}
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
</div>
@endsection