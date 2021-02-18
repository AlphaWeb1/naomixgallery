@extends('layouts.dashboard')
@section('breadcrumbs')
    <nav aria-label="breadcrumbs">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item breadcrumbs__url font-weight-bold"><a href="/root/home">Dashboard</a></li>
            <li class="breadcrumbs__item text-dark-em" aria-current="page">Gallery</li>
        </ul>
    </nav>
@endsection
@section('content')
<div class="col-sm-12">
    <div class="form-group">
        <button class="btn btn--md btn--dark" data-toggle="modal" data-target="#galleryModal"><span> + New Image</span></button>
    </div>
</div>
<div class="col-sm-12">
    @include('shared.error_message')
    @include('shared.success_message')
</div>
<div class="col-sm-12">
    <div class="container-fluid container-semi-fluid">
        {!! !empty($type) ? '<h2 class="pt-8 pb-8 font-weight-bold text-capilalize">{{ $type }}</h2>' : '' !!}
        <!-- Filter -->
        <div class="text-center filter-list">
            <a href="/root/gallery" class="{{ empty($type) ? 'active' : ''}}">All</a>
            <a href="/root/gallery?type=abstract" class="{{ !empty($type) && $type == 'abstract' ? 'active' : ''}}">Abstract</a>
            <a href="/root/gallery?type=miniature" class="{{ !empty($type) && $type == 'miniature' ? 'active' : ''}}">Miniature</a>
            <a href="/root/gallery?type=portrait" class="{{ !empty($type) && $type == 'portrait' ? 'active' : ''}}">Portraits</a>
            <a href="/root/gallery?type=collection" class="{{ !empty($type) && $type == 'collection' ? 'active' : ''}}" >Collections</a>
        </div> <!-- end filter -->
        <div class="row masonry-grid">
            @forelse($galleries as $gallery)		
            <div class="masonry-item col-lg-3 project hover-trigger {{ !empty($type) ? $type : '*'}}">
                <div class="project__container">
                    <div class="project__img-holder">
                        <a href="/root/gallery/{{ $gallery->id }}">
                            <img src="{{ asset(config('app.storage_prefix').$gallery->path) }}" alt="{{ $gallery->title }}" class="project__img">
                            <div class="hover-overlay">
                                <div class="project__description">
                                    <h3 class="project__title">{{ $gallery->title }}</h3>
                                    {!! $gallery->year ? '<span class="project__date">'.$gallery->year.'</span>' : '' !!}
                                    <!-- <a href="/root/galler/edit/{{ $gallery->id }}" class="btn btn--sm btn--dark">Edit</a> -->
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
                {{ $galleries->withQueryString()->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@include('root.gallery.add-gallery-modal')
@endsection