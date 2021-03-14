@extends('layouts.app')

@section('header')
@endsection

@section('content')
    <div class="main-content main-content-contact">
        <div class="container my-5">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 rounded-0">
                    <div class="card">
                        <div class="card-header font-weight-bold text-center">
                            <a href="/home">
                                <img class="img img-thumbnail pull-left" src="{{ asset(!empty($mail_data->logo->path) ? $mail_data->logo->path : config('app.site_logo')) }}"
                                    title="{{ !empty($mail_data->logo->title) ? $mail_data->logo->title : config('app.name') }}" style="width: 80px; padding-right: 50px;">
                            </a>
                        </div>
                        <div class="card-body">
                            @if(!empty($mail_data->message->title))
                                <h5 class="card-title text-center">{!! $mail_data->message->title !!}</h5>
                            @endif
                            @if(!empty($mail_data->send_to->name))
                                <p class="card-text font-weight-bold">Dear {!! $mail_data->send_to->name !!}!</p>
                            @endif
                            @if(!empty($mail_data->message->paragraphs))
                                @foreach($mail_data->message->paragraphs as $paragraph)
                                    <p class="my-3">{!! $paragraph !!}</p>
                                @endforeach
                            @endif
                            @if(!empty($mail_data->button->url))
                                <div class="my-3">
                                    <a href="{{ $mail_data->button->url }}" class="btn btn--lg btn--color btn--button">
                                    @if(!empty($mail_data->button->content))
                                        {!! $mail_data->button->content !!}
                                    @else
                                        {!! $mail_data->button->url !!}
                                    @endif
                                    </a>
                                </div>
                            @endif
                            <p class="my-3">
                            @if(!empty($mail_data->message->submission))
                                {!! $mail_data->message->submission !!},<br/>
                            @endif
                                {{ config('app.name') }}
                            </p>
                        </div>
                        @if(!empty($mail_data->message->footer))
                            <div class="panel-footer text-center small"><small>{!! $mail_data->message->footer !!}</small></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection