<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('frontend.partials.link')
    <title>Easy-Travel</title>
  </head>
  <body>
    <div class="container-fluid">
    @include('frontend.partials.nav')
    @yield('content')
    @include('frontend.partials.footer')
    </div>
  @include('frontend.partials.script')
  </body>
</html>