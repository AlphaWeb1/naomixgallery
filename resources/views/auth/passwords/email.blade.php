@extends('layouts.app')

@section('header')
    @include('layouts.header2')
@endsection
@section('content')
<div class="content-wrapper content-wrapper--boxed oh">
    <section class="section-wrap">
        <div class="container">
            <div class="title-row mb-24 text-center">
                <h2 class="section-title">{{ __('Reset Password') }}</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <label for="email" class="material__label">{{ __('E-Mail Address') }}
                                        <abbr title="required" class="required">*</abbr>
                                    </label>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn--lg btn--color btn--button btn--primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
</div>
@endsection
