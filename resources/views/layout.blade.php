<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新雲端印刷網-@yield('title')</title>
    
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
    {{-- {{ Html::style('/tpx-includes/tpxReset.css') }} --}}
    {{-- {{ Html::style('tpx-includes/tpxMultilineBasketAPI.css') }} --}}
    <link rel="stylesheet" href="/tpx-includes/tpxMultilineBasketAPI.css">
    {{-- {{ Html::style('tpx-includes/basicModal.min.css') }}s --}}
    <link rel="stylesheet" href="/tpx-includes/basicModal.min.css">
    {{-- {{ Html::script('tpx-includes/tpxMultilineBasketAPI.js') }} --}}
    <script src="/tpx-includes/tpxMultilineBasketAPI.js"></script>
    {{-- {{ Html::script('tpx-includes/basicModal.min.js') }} --}}
    <script src="/tpx-includes/basicModal.min.js"></script>
    {{-- 自己寫的css --}}
    {{-- {{ Html::style('css/app.css') }} --}}
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body onLoad="tpxHighLevelBasketInitialise()">
    {{-- @section('sidebar')
      This is the master sidebar.
    @show --}}
    @yield('content')
    {{-- copyright --}}
    @section('copyright')
      @include('./component/copyright')
    @show
  </body>
</html>