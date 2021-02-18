@extends('layouts.dashboard')
@section('content')
<div class="col-sm-12">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-8">
            <div class="card card__bordered">
                <h3 class="card-header text-center">
                    Gallery
                </h3>
                <div class="card__body text-center">
                   <span class="font-weight-bold">Total: 23</span>
                </div>
                <div class="form-group">
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">Absract (75%)</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">Miniature (55%)</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Portraits (20%)</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Collection (25%)</div>
                    </div>
                </div>
                <div class="form-group">
                    <a href="/root/gallery" class="btn btn--md btn--light"><span>Explore</span></a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-6 mb-8">
            <div class="card card__bordered">
                <h3 class="card-header text-center">
                    Exhibitions
                </h3>
                <div class="card__body text-center">
                    23
                </div>
                <div class="form-group">
                    <a href="/root/exhibitions" class="btn btn--md btn--light"><span>Explore</span></a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-6 mb-8">
            <div class="card card__bordered">
                <h3 class="card-header text-center">
                    Murals
                </h3>
                <div class="card__body text-center">
                    23
                </div>
                <div class="form-group">
                    <a href="/root/mural" class="btn btn--md btn--light"><span>Explore</span></a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-6 mb-8">
            <div class="card card__bordered">
                <h3 class="card-header text-center">
                    Store
                </h3>
                <div class="card__body text-center">
                    23
                </div>
                <div class="form-group">
                    <a href="/root/store" class="btn btn--md btn--light"><span>Explore</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection