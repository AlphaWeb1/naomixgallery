@extends('layouts.app')

@section('content')
<div class="content-wrapper content-wrapper--boxed oh">
    <section class="section-wrap">
        <div class="container">
            <div class="title-row mb-24 text-center">
                <h2 class="section-title">{{ __('Confirm Password') }}</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            {{ __('Please confirm your password before continuing.') }}

                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" 
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

                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn--lg btn--color btn--button btn--primary">
                                        {{ __('Confirm Password') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn--lg btn--color btn--button btn--primary py--15" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
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
