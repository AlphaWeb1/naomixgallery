@extends('layouts.app')

@section('header')
    @include('layouts.header2')
@endsection
@section('content')
<div class="content-wrapper content-wrapper--boxed oh">
    <section class="section-wrap">
        <div class="container">
            <div class="title-row mb-24 text-center">
                <h2 class="section-title">{{ __('Admin Login') }}</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="material__form-group form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror material__input" name="email" 
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

                                <div class="material__form-group form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror material__input" name="password" 
                                    required autocomplete="current-password">
                                    <label for="password" class="material__label">{{ __('Password') }}
                                        <abbr title="required" class="required">*</abbr>
                                    </label>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="material__form-group form-group">
                                    <div class="form-check mb-8">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="material__form-group form-group mb-0">
                                    <button type="submit" class="btn btn--lg btn--color btn--button btn--primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn--lg btn--color py--15" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <div>
        </div>
    </section>
    @include('layouts.footer')
</div>
@endsection
