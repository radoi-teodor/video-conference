<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    @yield('head')
  </head>
  <body>
    @include('components.errors')
    
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
