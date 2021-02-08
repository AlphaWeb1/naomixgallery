<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keyword" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Naomix Gallery') }}</title>
    @include('layouts.style')
</head>
<body>
    <main class="main-wrapper main-wrapper--offset">
        @section('header')
            @include('layouts.dash-header')
        @show
        <div class="content-wrapper oh">
            <div class="row">
                <div class="col-sm-12 h4">
                    @section('breadcrumbs')
                    <nav aria-label="breadcrumbs">
                        <ul class="breadcrumbs">
                            <li class="breadcrumbs__item breadcrumbs__url font-weight-bold"><a href="/root/home"> Dashboard</a></li>
                            <li class="breadcrumbs__item text-dark-em" aria-current="page">Home</li>
                        </ul>
                    </nav>
                    @show
                </div>
            </div>
            <section class="section-wrap">
                <div class="container">
                    @yield('content')
                </div>
            </section>
            @include('layouts.dash-footer')
        </div>
    </main>
    @include('layouts.script')
</body>
</html>
