<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <title>GameMusic</title>
    </head>
    <body>
        <div id="app">
              <app-header class=></app-header>
               <router-view></router-view>
             <app-footer class=></app-footer>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>