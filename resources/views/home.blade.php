@include('./component/home/swiper')
@include('./component/home/getIndex')
@include('./component/home/swiper')
@include('./component/home/secondBanner')
@include('./component/home/getCategory')


@extends('layout')

  @section('title', '首頁')

  @section('content')  
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
    
    
    {{-- 自己寫的sweiprjs --}}
    <script src="/js/swiper.js"></script>
  @endsection