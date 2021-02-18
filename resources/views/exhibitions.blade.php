@extends('layouts.app')
@section('header')
    @include('layouts.header2')
@endsection
@section('content')
<div class="content-wrapper content-wrapper--boxed oh">

    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url({{ asset(config('app.storage_prefix').$exhibitions[0]->first_item->path) }});">
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">Exhibitions</h1>
            </div>
        </div>
    </section> <!-- end page title -->

    <section class="section-wrap pt-24 pb-24">
        <div class="container">
            <div class="row justify-content-center">
                @forelse($exhibitions as $exhibition)
                    <div class="col-xl-4 col-lg-6">
                        <div class="service-1">
                            <a href="/exhibition/{{ $exhibition->id }}" class="service-1__url hover-scale">
                                <img src="{{ asset(config('app.storage_prefix').$exhibition->first_item->path) }}" class="service-1__img" 
                                alt="{{ $exhibition->first_item->title }}">
                            </a>
                            <div class="service-1__info">
                                <h3 class="service-1__title">{{ $exhibition->title }}</h3>
                                <div class="feed-content">{!! $exhibition->description_decode !!}</div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-sm-12 text-center text-dark">
                        No record found.
                    </div>
                @endforelse
                @if (!empty($exhibitions) && method_exists($exhibitions,'hasPages') && !empty($exhibitions->total()))
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div style="padding: 12px;">Showing
                        <span>{{ $exhibitions->currentPage() == 1 ? '1' : ($exhibitions->perPage() * ($exhibitions->currentPage() - 1)) + 1 }}</span> -
                        @if (($exhibitions->perPage() * $exhibitions->currentPage()) > $exhibitions->total())
                            <span>{{ $exhibitions->total() }}</span> of
                        @else
                            <span>{{ $exhibitions->currentPage() == 1 ? $exhibitions->perPage() : ($exhibitions->perPage() * ($exhibitions->currentPage() - 1)) + count($exhibitions) }}</span> of
                        @endif
                        <span>{{ $exhibitions->total() }}</span>
                    </div>
                    {{ $exhibitions->withQueryString()->links() }}
                </div>
                @endif
            </div>
        </div>
    </section>
    @include('layouts.footer')
</div>
@endsection