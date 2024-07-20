<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/icon.png') }}">
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>

    <style>
        .loader2 {
            position: relative;
            width: 64px;
            height: 64px;
            background-color: rgba(0, 0, 0, 0.5);
            transform: rotate(45deg);
            overflow: hidden;
        }

        .loader2:after {
            content: '';
            position: absolute;
            inset: 8px;
            margin: auto;
            background: #222b32;
        }

        .loader2:before {
            content: '';
            position: absolute;
            inset: -15px;
            margin: auto;
            background: #de3500;
            animation: diamondLoader2 2s linear infinite;
        }

        @keyframes diamondLoader2 {

            0%,
            10% {
                transform: translate(-64px, -64px) rotate(-45deg)
            }

            90%,
            100% {
                transform: translate(0px, 0px) rotate(-45deg)
            }
        }



        .loader {
            width: 48px;
            height: 48px;
            border: 5px solid #FFF;
            border-bottom-color: #FF3D00;
            border-radius: 50%;
            display: inline-block;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @media (min-width: 992px) {
            .show-tool {
                width: 400px;
                margin-top: 24px !important;
            }

            .show-lang {
                margin-top: 24px !important;
            }

            /* .nav-sear {
               padding-bottom: 10px;
                width: 50%;
            } */
        }

        a {
            text-decoration: none;
        }

        #form-search {
            position: relative;
        }

        #input-button:hover {
            background: #CA2B2B;
        }

        #input-button {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            height: 100%;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            background: #E76D6D;
        }

        .form-control {
            background: #FFDFDF;
            height: 60px;
            padding-right: 90px;
            /* Adjust this value based on the button width */
        }

        .btn:hover {
            background: #CA2B2B;
        }

        .nav-tabs .nav-link.active {
            background-color: #CA2B2B;
            border-color: #CA2B2B;
            border-radius: 10px;
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
        }

        .tab-content {
            border: 1px solid #dee2e6;
            border-top: none;
            padding: 1rem;
        }

        .btn-a:not(.active) {
            background-color: #E76D6D;
            color: #ffffff;
            border-radius: 10px;
            padding-bottom: 15px !important;
            justify-content: center
        }

        .fade-show.active {
            background-color: #E76D6D;

            /* Màu nền khi không active */
        }

        .btn-ca {
            background: #E76D6D;
        }

        .btn-ca:hover {
            background: #CA2B2B;

        }

        .pa-left {
            padding-left: 30px
        }

        .background-ca {
            background: #FFDFDF
        }

        .btn-white {
            background: #ffffff
        }

        .border-none {
            border: none;
        }

        .accordion-button:not(.collapsed) {
            background: #FFDFDF
        }

        .accordion-body {
            background: #FFEBEB;
            border-radius: 0 0 10px 10px
        }


        .step-number {
            font-size: 15px;
            font-weight: bold;
            text-align: center;
            position: relative;

            z-index: 1;

            margin: 0 auto;
        }

        .step-line {
            position: absolute;
            left: 50%;
            top: -18px;
            transform: translateX(-50%);
            width: 4px;
            height: 185px;
            background-color: #000;
            z-index: 0;
        }

        .step-container {
            position: relative;
        }

        .step-container:last-child .step-line {
            display: none;
        }

        .step-text {
            font-size: 1.2rem;

        }

        .step-img {
            text-align: left;
        }

        .step-img img {
            max-width: 100%;
            height: auto;
        }

        .drop-hover:hover {
            background: #FFDFDF
        }
    </style>
</head>

<body>
    @include('content.header')

    <main>
        @yield('content')
    </main>

    @include('content.footer')





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>




</body>

</html>
