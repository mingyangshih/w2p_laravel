@include('./component/navbar')
@include('./component/footer')

@extends('layout')
@section('content')
  <div class="container-fluid px-0  bg-primary">
    <div class="p-3 container text-white text-center">
      新平台，新體驗，正式上線！
    </div>
  </div>
  {{-- navbar --}}
  @yield('navbar')

  <div class="serviceContent mt-30">
    <div class="container">
      <div class="row">
        <div class="col-md-2 desktop">
          <div class="d-flex flex-column">
            <a href="/servicecontent" class="mb-3 d-flex justify-content-between align-items-center text-decoration-none link text-dark">
              <span >編輯教學</span> <i class="fas fa-chevron-right"></i>
            </a> 
            <a href="" class="mb-3 d-flex justify-content-between align-items-center text-decoration-none link text-dark">
              <span>關於會員</span> <i class="fas fa-chevron-right"></i>
            </a>
            <a href="" class="mb-3 d-flex justify-content-between align-items-center text-decoration-none link text-dark">
              <span>作品編排須知</span> <i class="fas fa-chevron-right"></i>
            </a>
            <a href="" class="mb-3 d-flex justify-content-between align-items-center text-decoration-none link text-dark">
              <span>訂購與取貨</span> <i class="fas fa-chevron-right"></i>
            </a>
            <a href="" class="mb-3 d-flex justify-content-between align-items-center text-decoration-none link text-dark">
              <span>發票與售後服務</span> <i class="fas fa-chevron-right"></i>
            </a>
            <a href="" class="mb-3 d-flex justify-content-between align-items-center text-decoration-none link text-dark">
              <span>客服信箱</span> <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
        <div class="col-md-10">
          <div class="teachEdit">
            {{-- 桌機看到的樣子 --}}
            <div class="desktopContent">
              <div class="title">
                編輯教學
              </div>
              <hr>
              <div class="d-flex flex-column">
                <input type="checkbox" id="oneOne" checked class="d-none">
                <div class="d-flex labelContent">
                  <label for="oneOne" class="mb-0 plus mr-3">+</label> 
                  <label for="oneOne" class="mb-0 minus mr-3">-</label>
                  <label for="oneOne" class="destitle mb-0">
                    1.點選「我要製作」開啟編輯器並上傳圖片
                  </label> 
                </div>
                <div class="text-justify indent pl-3">
                  (1) 點選藍色按鈕「添加圖片並開始」  
                </div>
                <div class="imgBoxServiceContent justify-content-center ml-md-3">
                  <img src="/static/assets/img/serviceContent/1-1.jpg" alt="" class="img-fluid mt-3">
                </div>
                <div class="text-justify indent pl-3">
                  (2) 上傳圖片  
                </div> 
                <div class="imgBoxServiceContent justify-content-center ml-md-3">
                  <img src="/static/assets/img/serviceContent/1-2.jpg" alt="" class="img-fluid mt-3">
                </div>
                  
              </div>
            </div>
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
  </div>
    
@endsection