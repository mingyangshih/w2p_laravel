@include('./component/navbar')
@include('./component/footer')

@extends('layout')
  @section('title', $productItem[0]->productName)
  @section('content')
    <div class="container-fluid px-0  bg-primary">
      <div class="p-3 container text-white text-center">
        新平台，新體驗，正式上線！
      </div>
    </div>
    @yield('navbar')

    <div class="standard">
      <div class="container d-flex my-3">
        <a href="/" class="mb-0 text-gray text-decoration-none">首頁</a>
        <p class="mb-0 text-gray mx-2">/</p>
        <a href="/productDetail/{{$productItem[0]->categoryId}}" class="mb-0 text-gray mx-2 categoryLink text-decoration-none">{{$productItem[0]->categoryName}}</a>
        <p class="mb-0 text-gray mx-2">/</p>
        <p class="mb-0">{{$productItem[0]->productName}}</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="swiper-container gallery-top">
              <div class="swiper-wrapper">
                @foreach ($productAlbum as $item)
                  <div class="swiper-slide">
                    <img src="/{{$item->productAlbum}}" alt="" class="standardLoopImg">
                  </div> 
                @endforeach
                {{-- <div class="swiper-pagination"  slot="pagination"></div> --}}
              </div>              
            </div>
            <div class="swiper-container gallery-thumbs mt-3">
              <div class="swiper-wrapper">
                @foreach ($productAlbum as $item)
                  <div class="swiper-slide smallImg">
                    <img src="/{{$item->productAlbum}}" alt="">
                  </div>
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-md-6"></div>
        </div>
      </div>
      {{-- 產品特性 --}}
      <div class="container">
        <div class="row justify-content-center py-4">
          <h2 class="font-weight-bold mb-0 text-secondary">產品特性</h2>
        </div>
        <hr class="mt-0 mb-5">
      </div>
      @foreach ($productFeature as $key => $item)
        {{-- flex-row-reverse 判斷 --}}
        @if ($key%2 === 0)
          <div class="container specialEffectRight">
            <div class="row justify-content-center">
              <div class="col-md-5">
                <div class="under_second_banner_des_box_left">
                  <div class="glasses">
                    <p class="font-weight-bold text-dark under_secondbanner_des_title">
                      {{$item->featureTitle}}
                    </p> 
                    <p class="under_secondbanner_des mb-0">
                      {{-- print html tag --}}
                      {!! $item->featureDesc !!}
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-7 bgSetting">
                <img src="/{{$item->featurePicture}}" alt="">
              </div>
            </div>
            <hr class="my-5">
          </div>
        @else
          <div class="container specialEffectRight">
            <div class="row justify-content-center flex-row-reverse">
              <div class="col-md-5">
                <div class="under_second_banner_des_box_left">
                  <div class="glasses">
                    <p class="font-weight-bold text-dark under_secondbanner_des_title">
                      {{$item->featureTitle}}
                    </p> 
                    <p class="under_secondbanner_des mb-0">
                      {{-- print html tag --}}
                      {!! $item->featureDesc !!}
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-7 bgSetting">
                <img src="/{{$item->featurePicture}}" alt="">
              </div>
            </div>
            <hr class="my-5">
          </div>
        @endif 
      @endforeach
      {{-- 網友推薦文章 --}}
      @if (count($productRecommend) > 0)
        <div class="container-fluid mt-4">
          <div class="row border-top border-bottom py-4 align-items-center recommendArticle flex-column">
            <h2 class="font-weight-bold text-secondary secondTitle mb-4">網友推薦文章</h2>
            @foreach ($productRecommend as $item)
              <div class="eachSuggest mb-3 py-2 px-4 bg-white d-flex flex-column justify-content-center">
                <div class="d-flex">
                  <p class="mb-0 font-weight-bold">{{$item->recommendName}}</p>
                  <p class="date ml-auto">{{$item->recommendDate}}</p>
                </div>
                <a href="{{$item->recommendLink}}" target="_blank" class="mb-0 text-dark">{{$item->recommendTitle}}</a>
              </div>
            @endforeach
            
          </div>
        </div>
      @endif
      {{-- 您還有更多選擇 --}}
      @if (count($subProducts) > 1)
        <div class="container">
          <div class="row py-5 justify-content-center">
            <h2 class="font-weight-bold mb-0 text-secondary secondTitle">您還有更多選擇</h2>
          </div>
          <div class="row pb-5 moreChoicePicBox">
            @foreach ($subProducts as $item)
              @if ($item->productId!==$id
              )
                <a href="/standard/{{$item->productId}}" class="col-md-3 col-6 d-flex justify-content-center mb-md-3 text-decoration-none">
                  <div class="card">
                    <div class="imgBox">
                      <img src="/{{$item->subMenuSmallImg}}" alt="" class="card-img-top">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title font-weight-bold text-secondary text-center">{{$item->productName}}</h5>
                    </div>
                  </div>
                </a>
              @endif                
            @endforeach
          </div>
        </div>
      @endif
      
    </div>
    {{-- 自己寫的sweiprjs --}}
    <script src="/js/standard_swiper.js"></script>
  @endsection
  