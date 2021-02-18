@extends('layouts.dashboard')
@section('breadcrumbs')
    <nav aria-label="breadcrumbs">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item breadcrumbs__url font-weight-bold"><a href="/root/home">Dashboard</a></li>
            <li class="breadcrumbs__item breadcrumbs__url font-weight-bold"><a href="/root/exhibitions">Exhibitions</a></li>
            <li class="breadcrumbs__item breadcrumbs__url font-weight-bold"><a href="/root/exhibition/{{ $exhibition->id }}">{{ $exhibition->title }}</a></li>
            <li class="breadcrumbs__item text-dark-em" aria-current="page">{{ $exhibition_item->title }}</li>
        </ul>
    </nav>
@endsection

@section('content')
    <div class="col-sm-12">
        <div class="form-group">
            <button class="btn btn--sm btn--dark" data-toggle="modal" data-target="#editExhibitionItemModal"><span> Replace Image</span></button>
        </div>
    </div>
    <div class="col-sm-12">
        @include('shared.error_message')
        @include('shared.success_message')
    </div>
    <div class="col-lg-8 project__info mb-md-40 d-none">
        <h3>{{ $exhibition->title }}</h3>
        <p>{!! $exhibition->description_decode !!}</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 project__info mb-md-40">
            <h4>{{ $exhibition_item->title }}</h4>
            <div class="gallery gallery-size-large">
                <figure class="gallery-item">
                    <div class="gallery-icon landscape">
                        <img src="{{ asset(config('app.storage_prefix').$exhibition_item->path) }}" class="attachment-large size-large"
                        alt="">
                    </div>
                </figure>
            </div>
        </div>
        @if(!empty($exhibition_item->medium) || !empty($exhibition_item->size))
        <div class="col-lg-4 project__details">
            <ul class="project__meta">
                @if(!empty($exhibition_item->medium))
                <li class="project__meta-item">
                    <span class="project__meta-label">Medium:</span>
                    <span class="project__meta-value">{{ $exhibition_item->medium }}</span>
                </li>	
                @endif
                @if(!empty($exhibition_item->size))
                <li class="project__meta-item">
                    <span class="project__meta-label">Size:</span>
                    <span class="project__meta-value">{{ $exhibition_item->size }}</span>
                </li>
                @endif
            </ul>
        </div>
        @endif
    </div>
@include('root.exhibition.edit-image-modal')
@endsection