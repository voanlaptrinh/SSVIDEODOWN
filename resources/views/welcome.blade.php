<!doctype html>
<html lang="{{ app()->getLocale() }}" @if (app()->isLocale('ar')) dir="rtl" @endif>
@php
    $languages = config('app.available_locales');
    $currentUrl = request()->url();
    $language = app()->getLocale();

    $cleanUrl = preg_replace('/\/' . $language . '\b/', '', $currentUrl);
    $controller = request()->route()->controller;

@endphp

<head>
    <meta charset="utf-8">
    <title>{{ $controller->metaTile }}</title>
    <meta name="description" content="{{ $controller->metaDescription }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/icon.png') }}"> --}}




    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/icon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/image/icons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/image/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="144x144" href="{{ asset('/image/android-chrome-144x144.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/image/android-chrome-192x192.png') }}">

    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/image/icons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/image/icons/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/image/icons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/image/icons/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/image/icons/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/image/icons/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/image/icons/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/image/icons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/image/icons/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-startup-image" href="{{ asset('/image/icons/apple-touch-icon-180x180.png') }}" />



    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $controller->metaTile }}">
    <meta property="og:description" content="{{ $controller->metaTile }}">
    <meta property="og:image" content="">
    <meta property="og:locale" content="{{ app()->getLocale() }}">

    <meta itemprop="image" content="">
    <?php
    if ($controller->alternate) {
        echo $controller->alternate;
    }
    ?>
    <style>
        .title {
            display: block;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            max-width: 100%;
            /* Optional: Limit the width if needed */
        }

        .sty-btn:hover {
            background: rgb(230, 212, 212)
        }

      



        @media (min-width: 1342px) {
            .sty-btn {
                width: 100% !important;
                height: 70px !important;
            }
        }

        @media (min-width: 576px) {
            .sty-btn {
                width: 100%;
                height: 70px;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper ">
        @include('content.header')

        <main>
            @yield('content')
        </main>

        @include('content.footer')

    </div>
    <div class="modal fade ppdowload" id="popupDowload" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background:#DF4952">
                    <h5 class="modal-title text-white" id="exampleModalLabel">@lang('main.convert')</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-body text-center model_co" id="model">

                       
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>





    <script>
        var base_url = '{{ URL::to('/') }}';
        console.log(base_url);
        var download = '@lang('main.download')';
        var convert = '@lang('main.convert')';
    </script>
</body>

</html>
