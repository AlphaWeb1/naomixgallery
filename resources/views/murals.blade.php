@extends('layouts.app')
@section('header')
    @include('layouts.header2')
@endsection
@section('content')
<div class="content-wrapper content-wrapper--boxed oh">

    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url({{ asset(config('app.storage_prefix').$murals[0]->path) }});">
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">Murals</h1>
            </div>
        </div>
    </section> <!-- end page title -->

    <section class="section-wrap pt-24 pb-24">
        <div class="container">
            <div class="row justify-content-center">
                @forelse($murals as $mural)
                    <div class="col-xl-4 col-lg-6">
                        <div class="service-1">
                            <a href="#" class="service-1__url hover-scale preview-image" data-src="{{ asset(config('app.storage_prefix').$mural->path) }}" 
                                data-title="{{ $mural->title }}" data-size="{{ $mural->size }}" data-company="{{ $mural->company }}" data-year="{{ $mural->year }}" 
                                data-toggle="modal" data-target="#previewImageModal">
                                <img src="{{ asset(config('app.storage_prefix').$mural->path) }}" class="service-1__img" alt="{{ $mural->title }}">
                            </a>
                            <div class="service-1__info">
                                <a href="#" class="preview-image" data-src="{{ asset(config('app.storage_prefix').$mural->path) }}" data-year="{{ $mural->year }}" 
                                    data-title="{{ $mural->title }}" data-size="{{ $mural->size }}" data-company="{{ $mural->company }}" 
                                    data-toggle="modal" data-target="#previewImageModal">
                                    <h3 class="service-1__title">{{ $mural->title }}</h3>
                                    <div class="pt-8 text-secondary">{{ $mural->company }}</div>
                                    <div class="feed-content d-none">{!! $mural->description_decode !!}</div>
                                    {!! $mural->year ? '<span class="project__date">'.$mural->year.'</span>' : '' !!}
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-sm-12 text-center text-dark">
                        No record found.
                    </div>
                @endforelse
                @if (!empty($murals) && method_exists($murals,'hasPages') && !empty($murals->total()))
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div style="padding: 12px;">Showing
                        <span>{{ $murals->currentPage() == 1 ? '1' : ($murals->perPage() * ($murals->currentPage() - 1)) + 1 }}</span> -
                        @if (($murals->perPage() * $murals->currentPage()) > $murals->total())
                            <span>{{ $murals->total() }}</span> of
                        @else
                            <span>{{ $murals->currentPage() == 1 ? $murals->perPage() : ($murals->perPage() * ($murals->currentPage() - 1)) + count($murals) }}</span> of
                        @endif
                        <span>{{ $murals->total() }}</span>
                    </div>
                    {{ $murals->withQueryString()->links() }}
                </div>
                @endif
            </div>
        </div>
    </section>
    @include('layouts.footer')
    @include('shared.preview-image-modal')
</div>
@endsection