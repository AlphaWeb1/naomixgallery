<!-- Google Fonts -->
<link href="{{ asset(config('app.public_prefix').'assets/css/google.css') }}" rel='stylesheet'>

<!-- Css -->
@if (!empty(Auth::user()))
    <link rel="stylesheet" href="{{ asset(config('app.public_prefix').'assets/bootstrap/css/bootstrap.min.css') }}" />
@else
    <link rel="stylesheet" href="{{ asset(config('app.public_prefix').'assets/css/bootstrap.min.css') }}" />
@endif
<link rel="stylesheet" href="{{ asset(config('app.public_prefix').'assets/css/font-icons.css')}}" />
<link rel="stylesheet" href="{{ asset(config('app.public_prefix').'assets/revolution/css/settings.css') }}" />
<link rel="stylesheet" href="{{ asset(config('app.public_prefix').'assets/css/style.css') }}" />

@if(in_array(request()->path(), array('root/gallery', 'root/gallery/'.( $gallery->id ?? ''), 
'root/exhibitions', 'root/exhibition/'.( $exhibition->id ?? ''), 'root/murals', 'root/mural/'.( $mural->id ?? ''), 
'root/store', 'root/store/'.( $product->id ?? '') )) && Auth::user())
    <link rel="stylesheet" href="{{ asset(config('app.public_prefix').'assets/quill/quill.core.css') }}"/>
    <link rel="stylesheet" href="{{ asset(config('app.public_prefix').'assets/quill/quill.bubble.css') }}"/>
    <link rel="stylesheet" href="{{ asset(config('app.public_prefix').'assets/quill/quill.snow.css') }}"/>
@endif

<!-- Favicons -->
<link rel="shortcut icon" href="{{ asset(config('app.public_prefix').'assets/images/logo/icon-logo.png') }}">
<link rel="apple-touch-icon" href="{{ asset(config('app.public_prefix').'assets/images/logo/icon-logo.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset(config('app.public_prefix').'assets/images/logo/icon-logo.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset(config('app.public_prefix').'assets/images/logo/icon-logo.png') }}">
<style>
    .py--15{
        padding-top: 15px;
        padding-bottom: 15px;
    }
    .ql-editor{
        min-height: 230px;
    }

    .landscape-picture{
        width: 100%;
        height: 250px;
        margin-bottom: 1rem;
    }
    .photo-label {
        padding: 0.5rem;
        border-radius: 0px;
        width: 100%;
        cursor: pointer;
    }
    .dash-footer{
        position: fixed;
        bottom: 0px;
        width: 100%;
        z-index: 999999;
    }
    .filter-list a{
        color: #868686;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        display: inline-block;
        position: relative;
        padding: 0 12px;
    }
    .filter-list a.active, .filter-list a:hover{
        color: #ffb31a;
    }
    .filter-list{
        margin-bottom: 60px;
        margin-left: -12px;
    }
    .feed-content{
        height: 200px;
    }
    .feed-content:after{
        content : " ...";
    }
    .custom-btn {
        /* padding: 0.8rem; */
        /* background: #ffffff; */
        /* border: 1px solid; */
    }
    .custom-btn:hover {
        background: #dedede;
        color: #181818;
    }
    .custom-btn.custom-btn-sm {
        padding: 0.5rem;
    }
</style>