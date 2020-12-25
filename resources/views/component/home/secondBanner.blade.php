@section('secondBanner')
  <div class="container-fluid bg-gray secondBannerBox">
    <div class="row">
      <div class="col-md-6 px-0 secondBanner">
        <img src="images/home/Experience_1.jpg" alt="">
      </div>
      <div class="col-md-6 px-0 secondBannerDesBox">
        <div class="secondBannerDes py-5 px-md-4">
            <p class="mb-0 title text-primary font-weight-bold">只需簡單的步驟，</p>
            <p class="mb-30 title text-primary font-weight-bold">完成您不簡單的作品</p>
            <div class="glasses stepDesBox">
                <div class="text-dark d-flex align-items-center">
                    <p class="border border-primary num mb-0 d-flex justify-content-center align-items-center font-weight-bold text-primary">1</p>
                    <p class="mb-0 step font-weight-bold text-primary">選擇產品</p>
                </div>
                <div class="stepDes text-white">
                    <p class="text-white stepDesContent text-dark">我們提供多樣的客製化商品，您的回憶值得更有溫度的保存。</p>
                </div>
                <div class="text-dark d-flex align-items-center">
                    <p class="border border-primary num mb-0 d-flex justify-content-center align-items-center font-weight-bold text-primary">2</p>
                    <p class="mb-0 step font-weight-bold text-primary">上傳照片</p>
                </div>
                <div class="stepDes text-white stepDesContent">
                    <p class="text-white text-dark">您的回憶有比電腦硬碟更好的去處，交給我們，讓它成為您生活的一部分。</p>
                </div>
                <div class="text-dark d-flex align-items-center">
                    <p class="border border-primary num mb-0 d-flex justify-content-center align-items-center font-weight-bold text-primary">3</p>
                    <p class="mb-0 step font-weight-bold text-primary">編輯完成</p>
                </div>
                <div class="stepDes text-white stepDesContent">
                    <p class="text-white text-dark">我們的編輯器提供您完美、自由的操作體驗，只有您才能決定您生活的風格。</p>
                </div>
                <div class="d-flex try">
                    <router-link class="btn btn-primary btnInPage py-0 pr-0 text-decoration-none" to="/standard/14"><span class="font-weight-bold">馬上體驗</span> <i class="fas fa-chevron-right fa-xs"></i></router-link>
                </div>
            </div>
        </div>
      </div>
    </div>    
  </div>
@endsection