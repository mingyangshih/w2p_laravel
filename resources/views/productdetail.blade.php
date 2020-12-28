@include('./component/navbar')
@include('./component/footer')

@extends('layout')

  @section('title',$getSubMenu->categoryName)
  
  @section('content')
    <div class="container-fluid px-0  bg-primary">
      <div class="p-3 container text-white text-center">
        新平台，新體驗，正式上線！
      </div>
    </div>
    {{-- 上方選單 --}}
    @yield('navbar')
    {{-- 主要內容 --}}
    <div class="productDetail">
      <div class="container d-flex my-3">
        <a href="/" class="mb-0 text-gray text-decoration-none">首頁</a>
        <p class="mb-0 text-gray mx-2">/</p>
        <p class="mb-0">{{$getSubMenu->categoryName}}</p>
      </div>
      <div class="container-fluid">
        {{-- banner --}}
        <div class="row px-0">
          <div class="col-sm-12 px-0">
            <img src="/{{$getSubMenu->categoryBanner}}" alt="" class="w-100 firstBanner img-fluid firstBannerPc">
            <img src="/{{$getSubMenu->categoryBannerM}}" alt="" class="w-100 firstBanner img-fluid firstBannerMb">
          </div>
        </div>
        {{-- 裝訂方式 --}}
        <div class="row bookBinding">
          <div class="col-sm-12 px-0 text-center">
            <h2 class="font-weight-bold mb-0 text-secondary">{{$getSubMenu->categoryBannerText}}</h2>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    {{-- footer --}}
    <div class="container-fluid border-top px-0 footer">
      <footer class="container">
        @yield('footer')
      </footer>
    </div>
  @endsection