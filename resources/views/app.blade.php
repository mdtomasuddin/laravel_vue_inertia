<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    {{-- <title>{{ $meta['title'] }}</title> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="https://unpkg.com/nprogress@0.2.0/nprogress.css">
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>