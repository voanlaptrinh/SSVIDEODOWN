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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/icon.png') }}">
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <meta property="og:type" content="website">
    {{-- <meta property="og:site_name" content="TikConverter">
    <meta property="og:url" content="https://tikconverter.com"> --}}

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
</head>

<body>
    <div class="wrapper ">
        @include('content.header')

        <main>
            @yield('content')
        </main>

        @include('content.footer')

    </div>


    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>


</body>

</html>
