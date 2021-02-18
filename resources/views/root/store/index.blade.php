@extends('layouts.dashboard')
@section('breadcrumbs')
    <nav aria-label="breadcrumbs">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item breadcrumbs__url font-weight-bold"><a href="/root/home">Dashboard</a></li>
            <li class="breadcrumbs__item text-dark-em" aria-current="page">Store</li>
        </ul>
    </nav>
@endsection
@section('content')
<div class="col-sm-12">
    <div class="form-group">
        <button class="btn btn--md btn--dark" data-toggle="modal" data-target="#productModal"><span> + New Product</span></button>
    </div>
</div>
<div class="col-sm-12">
    @include('shared.error_message')
    @include('shared.success_message')
</div>
<div class="col-sm-12">
    <div class="container-fluid container-semi-fluid">
        <div class="row justify-content-center">
            @forelse($products as $product)
            <div class="col-xl-4 col-lg-6">
                <div class="service-1">
                    <a href="/root/store/{{ $product->id }}" class="service-1__url hover-scale">
                        <img src="{{ asset(config('app.storage_prefix').$product->path) }}" class="service-1__img" 
                        alt="{{ $product->title }}">
                    </a>
                    <div class="service-1__info">
                        <a href="/root/store/{{ $product->id }}">
                            <h3 class="service-1__title">{{ $product->title }}</h3>
                            <div class="pt-8 text-secondary">{{ $product->company }}</div>
                            <div class="pt-8 text-secondary">₦ {{ number_format($product->amount, '2', '.', ',') }}</div>
                            <div class="feed-content d-none">{!! $product->description_decode !!}</div>
                            {!! $product->year ? '<span class="project__date">'.$product->year.'</span>' : '' !!}
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-sm-12 text-center text-dark">
                No record found.
            </div>
            @endforelse
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
</div>
@include('root.store.add-product-modal')
@endsection