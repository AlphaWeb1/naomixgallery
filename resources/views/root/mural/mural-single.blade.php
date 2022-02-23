@extends('layouts.dashboard')
@section('breadcrumbs')
    <nav aria-label="breadcrumbs">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item breadcrumbs__url font-weight-bold"><a href="/root/home">Dashboard</a></li>
            <li class="breadcrumbs__item breadcrumbs__url font-weight-bold"><a href="/root/murals">Murals</a></li>
            <li class="breadcrumbs__item text-dark-em" aria-current="page">Detail</li>
        </ul>
    </nav>
@endsection

@section('content')
    <span class="d-none">{{ $description_decode = $mural->description_decode }}</span>
    <div class="col-sm-12">
        <div class="form-group">
            <button class="btn btn--sm btn--dark" data-toggle="modal" data-target="#muralModal"><span> Edit</span></button>
            <a href="/root/mural/delete/{{$mural->id}}" data-message="are you sure to delete this image" class="btn btn--sm btn--success confirmDialog d-none-em">Delete</a>
        </div>
    </div>
    <div class="col-sm-12">
        @include('shared.error_message')
        @include('shared.success_message')
    </div>
    <div class="row">
        <div class="col-lg-8 project__info mb-md-40">
            <h1>{{ $mural->title }}</h1>
            <div class="gallery gallery-size-large">
                <figure class="gallery-item">
                    <div class="gallery-icon landscape">
                        <img src="{{ asset(config('app.storage_prefix').$mural->path) }}" class="attachment-large size-large"
                        alt="">
                    </div>
                </figure>
            </div>
            @if(!empty($mural->description))
            <div>
                {!! $mural->description_decode !!}
            </div>
            @endif
        </div> <!-- project info -->

        <div class="col-lg-4 project__details">
            <ul class="project__meta">
                <li class="project__meta-item">
                    <span class="project__meta-label">Company / Client:</span>
                    <span class="project__meta-value">{{ $mural->company }}</span>
                </li>
                @if(!empty($mural->year))						
                <li class="project__meta-item">
                    <span class="project__meta-label">Year:</span>
                    <span class="project__meta-value">{{ $mural->year }}</span>
                </li>
                @endif
                @if(!empty($mural->size))
                <li class="project__meta-item">
                    <span class="project__meta-label">Size:</span>
                    <span class="project__meta-value">{{ $mural->size }}</span>
                </li>
                @endif
            </ul>
            <h6 class="share-label d-none">Share:</h6>
            <div class="socials d-none">
                <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                <a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
            </div>
        </div>
    </div>
    @include('root.mural.edit-mural-modal')
@endsection