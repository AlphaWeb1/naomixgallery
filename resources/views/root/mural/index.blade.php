@extends('layouts.dashboard')
@section('breadcrumbs')
    <nav aria-label="breadcrumbs">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item breadcrumbs__url font-weight-bold"><a href="/root/home">Dashboard</a></li>
            <li class="breadcrumbs__item text-dark-em" aria-current="page">Murals</li>
        </ul>
    </nav>
@endsection
@section('content')
<div class="col-sm-12">
    <div class="form-group">
        <button class="btn btn--md btn--dark" data-toggle="modal" data-target="#muralModal"><span> + New Mural</span></button>
    </div>
</div>
<div class="col-sm-12">
    @include('shared.error_message')
    @include('shared.success_message')
</div>
<div class="col-sm-12">
    <div class="container-fluid container-semi-fluid">
        <div class="row justify-content-center">
            @forelse($murals as $mural)
            <div class="col-xl-4 col-lg-6">
                <div class="service-1">
                    <a href="/root/mural/{{ $mural->id }}" class="service-1__url hover-scale">
                        <img src="{{ asset(config('app.storage_prefix').$mural->path) }}" class="service-1__img" 
                        alt="{{ $mural->title }}">
                    </a>
                    <div class="service-1__info">
                        <a href="/root/mural/{{ $mural->id }}">
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
</div>
@include('root.mural.add-mural-modal')
@endsection