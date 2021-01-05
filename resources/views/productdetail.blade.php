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
      {{-- 不同的裝訂方式 --}}
      <div class="container bookBindingProduct">
        <div class="row justify-content-center">
          @foreach ($getSubMenu->subProducts as $key => $item)
            <div class="col-6 col-md-3 text-center mb-3">
              <div class="card rounded-0">
                <div class="imgBox">
                  <a href="">
                    <img src="/{{$item->subMenuSmallImg}}" alt="{{$item->productName}}" class="card-img-top rounded-0">
                  </a>                  
                </div>
                <div class="card-body">
                  <h6 class="card-title text-secondary">{{$item->productName}}</h6>
                </div>
              </div>
            </div>
          @endforeach          
        </div>
      </div>
      {{-- second banner --}}
      <div class="container-fluid bg-gray secondBannerBox">
        <div class="row">
          <div class="col-md-6 secondBannerDesBox">
            <div class="secondBannerDesProduct">
              <p class="title text-primary font-weight-bold mb-md-4">{{$getSubMenu->categoryBanner1Title}}</p>
              <p>{{$getSubMenu->categoryBanner1Desc}}</p>
              <div class="d-flex try mb-3">
                <a href="" class="btn btn-primary btnInPage py-0 pr-0">
                  <span class="font-weight-bold">馬上體驗</span>
                  <i class="fas fa-chevron-right fa-xs"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 px-0 secondBanner">
            <img src="/{{$getSubMenu->categoryBanner1}}" alt="second banner">
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row satisfyAllNeeds">
          <h2 class="title text-center font-weight-bold w-100 mb-0">滿足您所有場景的需求</h2>
        </div>
      </div>

      <div class="container-fluid ">
        @foreach ($getSubMenu->subProducts as $key => $item)
            <div class="row justify-content-center specialEffectleft  my-5">
              <div class="col-md-7 standard bgSetting">
                <img src="/{{$item->subMenuBigImg}}" alt="">
              </div>
              <div class="col-md-4">
                <div class="under_second_banner_des_box_right">
                  <div class="glasses">
                    <p class="font-weight-bold text-dark under_secondbanner_des_title">{{$item->productName}}</p>
                    <p class="under_secondbanner_des">{{$item->productDesc}}</p>
                    <div class="d-flex try mb-3">
                      <a href="" class="btn btn-primary btnInPage py-0 pr-0">
                        <span class="font-weight-bold">我要製作</span> <i class="fas fa-chevron-right fa-xs"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>        
            </div>
        @endforeach
      </div>
    </div>
    
    
    
    
    {{-- footer --}}
    <div class="container-fluid border-top px-0 footer">
      <footer class="container">
        @yield('footer')
      </footer>
    </div>
  @endsection