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
        @include('layouts.header')
		<div class="content-wrapper oh">
            @yield('content')
            @include('layouts.footer')
        </div>
    </main>
    @include('layouts.script')
</body>
</html>
