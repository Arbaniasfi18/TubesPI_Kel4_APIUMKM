<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
      <title>{{ $page_name }}</title>
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/auth.css') }}">
      
   </head>
   <body>
        @if(Route::currentRouteName() == 'login')
            @include('login')
        @else
            @include('register')
        @endif
   </body>
</html>