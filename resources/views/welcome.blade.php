<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin-main</title>

       <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-open">
        <div class="container-fluid" id="app">
           <app></app>
        </div>

        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
