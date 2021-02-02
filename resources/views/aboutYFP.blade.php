@include('./component/navbar')
@include('./component/footer')


@extends('layout')
  @section('title', '關於永紙')
  @section('content')
    <div class="container-fluid px-0  bg-primary">
      <div class="p-3 container text-white text-center">
        新平台，新體驗，正式上線！
      </div>
    </div>
    {{-- navbar --}}
    @yield('navbar')
    {{-- 關於我們 --}}
    <div class="aboutYFP">
      <div class="container px-0">
        <div class="pageTitle text-center mt-30 mb-5 font-weight-bold px-2">關於我們</div>
        <div class="text-center">
          <img src="/static/aboutYFP.jpg" alt="" class="img-fluid aboutYFPImg">
        </div>
      </div>
      <div class="container">
        <div class="pageTitle text-center mt-30 mb-5 font-weight-bold px-2">我們的使命，是為了讓您的生活更有價值</div>
        <div class="row justify-content-center">
          <div class="col-12 px-0">
            <p class="aboutYFPImgDes mt-4 text-justify px-2">
              以前，想要一本家中孩子的成長相片集，往往只能交給沖印館，或是自己編輯後送廠印刷，一方面擔心沖印館的排版不是自己想要的，另一方面，想自己編輯卻不熟悉軟體，甚至需要反覆校稿，一來一往間，想要一本相片書的願望就被現實擱置了。
            </p>
            <p class="aboutYFPImgDes aboutYFPImgDesSecond text-justify px-2">
              現在，我們想提供最便捷的步驟、最直覺的操作、最完整的服務，讓編輯作品變成一件簡單、流暢的事，幾個步驟就能完成，您節省下的時間，值得拿去創造更多回憶。
            </p>
          </div>
        </div>
        <div class="pageTitle text-center mt-4 font-weight-bold mb-5">我們致力於提供完美的印刷體驗</div>
      </div>
      <div class="container-fluid printExperienceBox">
        <div class="row align-items-center flex-column mx-0">
          <div class="border border-dark px-3 py-2 pageTitle mb-5 mt-4">關於永豐</div>
          <p class="printExperienceFirstDes aboutYFPImgDes text-justify mb-5 px-2">
            數十餘年的印刷經驗，透過雲端印刷網把傳統的企業印刷服務，拓展到各種情境，不管是您只是為了家中孩子印一本成長相片書，還是一次下單十份明信片的文創微型創業，在雲端印刷網，您的作品能有不同想像。
          </p>
          <div class="row printExperienceFirstDes mx-0 justify-content-center">
            <div class="col-md-3 col-6 mb-4 mx-md-3 px-1">
              <img src="/static/001.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-4 mx-md-3 px-1">
              <img src="/static/002.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-4 mx-md-3 px-1">
              <img src="/static/003.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-4 mx-md-3 px-1">
              <img src="/static/004.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0">
        <div class="row mx-0">
          <div class="col-md-6 px-0 col-12">
            <img src="/static/wontregret.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-md-6 wontRegretBlueBg col-12">
            <div class="d-flex flex-column w-100 h-100 justify-content-center align-items-center">
              <p class="pageTitle text-white wontRegretTitle">您不會後悔的選擇。</p> 
              <p class="aboutYFPImgDes text-white mb-4 wontRegretSecondTitle">Your best choice.</p>
              <a href="/standard/14" class="btn btnInPage py-0 pr-0 text-primary bg-white">
                <span class="font-weight-bold">立即體驗</span>
                <i class="fas fa-chevron-right fa-xs"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0">
        <div class="row mx-0 reverse">
          <div class="col-md-6 col-12 wontRegretDarkBg">
            <div class="d-flex flex-column w-100 h-100 justify-content-center align-items-center">
              <p class="pageTitle text-white wontRegretTitle">我們永遠在這為您服務。</p>
              <p class="aboutYFPImgDes text-white mb-4 wontRegretSecondTitle">We are always waiting for you.</p>
              <a href="#" class="btn btnInPage py-0 pr-0 text-primary bg-white">
                <span class="font-weight-bold">聯絡我們</span>
                <i class="fas fa-chevron-right fa-xs"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-12 px-0">
            <img src="/static/chair.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
      <div class="container px-0 mt-8 mt-5">
        <div class="row justify-content-center w-100 mx-auto px-0">
          <h2 class="pageTitle text-center font-weight-bold w-100">全新的線上編輯器</h2>
          <p class="text-center w-100 aboutYFPImgDes px-2 mb-0">從電腦到手機，讓你隨時隨地編輯都便利</p>
          <div class="bgSetting">
            <img src="/static/3c.jpg" alt="" class="newEditor">
          </div>
        </div>
      </div>
      {{-- footer --}}
      <div class="container-fluid border-top px-0 footer">
        <footer class="container">
          @yield('footer')
        </footer>
      </div>
    </div>
  @endsection