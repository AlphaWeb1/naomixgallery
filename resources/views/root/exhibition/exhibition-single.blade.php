@extends('layouts.dashboard')
@section('breadcrumbs')
    <nav aria-label="breadcrumbs">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item breadcrumbs__url font-weight-bold"><a href="/root/home">Dashboard</a></li>
            <li class="breadcrumbs__item breadcrumbs__url font-weight-bold"><a href="/root/exhibitions">Exhibitions</a></li>
            <li class="breadcrumbs__item text-dark-em" aria-current="page">Detail</li>
        </ul>
    </nav>
@endsection

@section('content')
    <span class="d-none">{{ $description_decode = $exhibition->description_decode }}</span>
    <div class="col-sm-12">
        <div class="form-group">
            <button class="btn btn--sm btn--dark" data-toggle="modal" data-target="#exhibitionModal"><span> Edit</span></button>
            <button class="btn btn--sm btn--dark" data-toggle="modal" data-target="#exhibitionItemModal"><span> Add Item</span></button>
        </div>
    </div>
    <div class="col-sm-12">
        @include('shared.error_message')
        @include('shared.success_message')
    </div>
    <div class="col-lg-8 project__info mb-md-40">
        <h1>{{ $exhibition->title }}</h1>
        <p>{!! $exhibition->description_decode !!}</p>
    </div>
    <div class="col-sm-12">
        <h4>Images</h4>
        <div class="container-fluid container-semi-fluid">
            <div class="row masonry-grid">
                @forelse($exhibition->exhibition_items as $item)		
                <div class="masonry-item col-lg-3 project hover-trigger *">
                    <div class="project__container">
                        <div class="project__img-holder">
                            <a href="/root/exhibition/{{$exhibition->id}}/{{ $item->id }}">
                                <img src="{{ asset(config('app.storage_prefix').$item->path) }}" alt="{{ $item->title }}" class="project__img">
                                <div class="hover-overlay">
                                    <div class="project__description">
                                        <h3 class="project__title">{{ $item->title }}</h3>
                                        {!! $item->size ? '<span class="project__date">'.$item->size.'</span>' : '' !!}
                                        {!! $item->medium ? ', <span class="project__date">'.$item->medium.'</span>' : '' !!}
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

@include('root.exhibition.edit-exhibition-modal')
@include('root.exhibition.add-image-modal')
@endsection