@include('./component/home/swiper')
@include('./component/home/getIndex')
@include('./component/home/swiper')
@include('./component/home/secondBanner')
@include('./component/home/getCategory')
@include('./component/footer')
@include('./component/navbar')

@extends('layout')

@section('title', '首頁')

{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新雲端印刷網-首頁</title> --}}
    
    {{-- swiper --}}
    {{-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> --}}
    <!-- fontawesome -->
    {{-- <script src="https://kit.fontawesome.com/774f392016.js" crossorigin="anonymous"></script> --}}
    {{-- google font --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC:400,700&display=swap" rel="stylesheet"> --}}

    
    {{-- TAOPIX檔案 --}}
    {{-- <link rel="stylesheet" href="/tpx-includes/tpxReset.css">
    
    <link rel="stylesheet" href="/tpx-includes/tpxMultilineBasketAPI.css">
    
    <link rel="stylesheet" href="/tpx-includes/basicModal.min.css">
    <script src="/tpx-includes/tpxMultilineBasketAPI.js"></script>
    <script src="/tpx-includes/basicModal.min.js"></script> --}}
    {{-- 自己寫的css --}}
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
  {{-- </head> --}}
  {{-- <body onLoad="tpxHighLevelBasketInitialise()"> --}}
    @section('content')
    
      {{-- 最上方公告 --}}
      <div class="container-fluid px-0  bg-primary">
        <div class="p-3 container text-white text-center">
          新平台，新體驗，正式上線！
        </div>
      </div>
      
      
      @yield('navbar')
      
      
      {{-- home swiper --}}
      <header class="container-fluid">
        {{-- swiper  api--}}
        @yield('swiper')
        <div class="row letPhotoForever">
          <div class="col-sm-12 px-0 text-center">
              <h2 class="font-weight-bold text-secondary eachTitle">一個理由，讓照片永存</h2>
              <p class="eachSecondTitle px-2">將照片留在記錄中，讓它成為你的重要“故事”。</p>
          </div>
        </div>
      </header>
      {{-- 一個理由，讓照片永存 getindex api--}}
      @yield('getIndex')


      {{-- 只需簡單的步驟 完成不簡單的作品 --}}
      @yield('secondBanner')
      

      {{-- 一個機會讓生活獨特 --}}
      @yield('category')
      
      {{-- footer --}}
      <div class="container-fluid border-top px-0 footer">
        <footer class="container">
          @yield('footer')
        </footer>
      </div>
      
      {{-- 自己寫的sweiprjs --}}
      <script src="/js/swiper.js"></script>
    @endsection
  {{-- </body> --}}
{{-- </html> --}}