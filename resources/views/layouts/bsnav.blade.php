<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">

    <meta name="theme-color" content="#ffffff">

    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ URL::asset('css/vendors/simplebar.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/simplebar.css'); }}">

    <!-- Main styles for this application-->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/style.css'); }}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="{{ URL::asset('css/bootstrap/example.css'); }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
    <link href="{{ URL::asset('vendor/bootstrap/@coreiu/chartjs/css/coreui-chartjs.css'); }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    

    {{-- font-family: 'Source Serif Pro', serif; --}}
    

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js'])

    
</head>
<body>
        <main class="" style="">
            @yield('content')
        </main>
</body>
</html>
