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
<link rel="stylesheet" href="{{ asset(config('app.public_prefix').'assets/css/montserrat.css') }}" />

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
    body{
        font-family: 'Montserrat';
    }
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Montserrat Bold';
    }
    .nav__menu > li > a {
        font-family: "Montserrat Medium";
    }
    .wrapper-orange{
        background: #ffb31a;
        color: #ffffff;
    }
    .text-white {
        color: #ffffff;
    }
    .btn--restored{
        font-size: 18px !important;
        padding: 15px 48px !important;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .btn--black {
        background: #222222;
        color: #ffffff !important;
    }
    .btn--black:hover {
        background: inherit;
        color: #222222 !important;
    }

    img.testimonial__image {
        /* max-width: 200px; */
        /* border: 0.2rem solid #fff; */
        /* box-shadow: 0px 0px 7px 6px; */
        /* border-radius: 50%; */
        margin-top: 10px;
        height: 100px;
        width: 100px;
        /* border-radius: 50%; */
        
    }
    .testimonial__header {
        text-align: center;
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .testimonial__company{
        font-size: 14px;
        font-style: italic;
        margin-left: -18px;
    }
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
        /* z-index: 999999; */
        z-index: 10;
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
    .pager-horizontal{
        display: flex;
        justify-content: space-between;
    }
    .flex {
        display: flex;
    }
    .inline-flex {
        display: inline-flex;
    }
    .justify-between {
        justify-content: space-between;
    }
    .page-right a, .page-right span, .page-right span a{
        white-space: nowrap;
        padding: 9px;
        display: inline;
    }
    .page-right a, .page-right span a, .page-right span.items-center{
        border: 1px #cccccc solid;
    }
    .page-right span svg, .page-right span>svg{
        width: 16px !important;
        height: 16px !important;
    }
    .page-right>nav>div>div>p{
        display: none;
    }
    .page-right nav div.hidden{
        padding-top: 9px;
    }
    @media(min-width: 768px){
        ._large_screen_only{
            display: inherit;
        }
    }
    @media(max-width: 1280px){
        ._large_screen_only{
            display: none !important;
        }
    }
</style>