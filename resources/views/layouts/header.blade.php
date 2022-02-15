<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pokemon</title>
  
    <!-- end::custom scripts -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}" type="text/css">
    <!-- end::global styles -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

    <!-- begin::custom styles -->

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- end::custom styles -->

    @yield('css')
</head>

<body>

    <div class="header-logo">
        <a href="#">
        </a>
    </div>
