<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <title>Blog</title>
    <script src="{{ asset('js/axios.min.js') }}"></script>
</head>

<body>

    @include('components.nav')
    @include('components.loader')

    <div class="" id="content-div">
        @yield('content')
    </div>


    @include('components.footer')
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
