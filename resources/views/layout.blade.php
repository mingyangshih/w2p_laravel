<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新雲端印刷網-@yield('title')</title>
    <link rel="icon" type="image/png" href="/static/favicon.ico">
    {{-- swiper --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/774f392016.js" crossorigin="anonymous"></script>
    {{-- google font --}}
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC:400,700&display=swap" rel="stylesheet">

    
    {{-- TAOPIX檔案 --}}
    <link rel="stylesheet" href="/tpx-includes/tpxReset.css">
    <link rel="stylesheet" href="/tpx-includes/tpxMultilineBasketAPI.css">
    <link rel="stylesheet" href="/tpx-includes/basicModal.min.css">
    <script src="/tpx-includes/tpxMultilineBasketAPI.js"></script>
    <script src="/tpx-includes/basicModal.min.js"></script>
    {{-- 自己寫的css --}}
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body onLoad="tpxHighLevelBasketInitialise()">
    
    @yield('content')
    
    @section('copyright')
      @include('./component/copyright')
    @show
  </body>
</html>