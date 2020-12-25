@section('footer')
  <div class="row py-8 justify-content-center">
    <div class="col-md-3 col-6 footerContent">
      <p class="footerTitle font-weight-bold">商品資訊</p>
      @foreach ($totalCategory as $item)
        <a href="#" class="link mb-3 text-decoration-none text-dark d-block" >{{$item}}</a>
      @endforeach
    </div>
    <div class="col-md-6 col-6 d-flex aboutUsBox">
      <div class="aboutUs w-100 w-md-50">
        <p class="footerTitle font-weight-bold">認識我們</p>
        <a href="#" class="mb-3 text-decoration-none d-block text-dark link">關於我們</a>
        <a href="#" class="mb-3 text-decoration-none d-block text-dark link">服務使用條款</a>
        <a href="#" class="mb-3 text-decoration-none d-block text-dark link">隱私保護條款</a>
      </div>
      <div class="saledServiceBox w-100 w-md-50">
        <p class="footerTitle font-weight-bold">服務內容</p> 
        <a href="#" class="mb-3 text-decoration-none d-block text-dark link">編輯教學</a>
        <a href="#" class="mb-3 text-decoration-none d-block text-dark link">關於會員</a>
        <a href="#" class="mb-3 text-decoration-none d-block text-dark link">作品編排須知</a>
        <a href="#" class="mb-3 text-decoration-none d-block text-dark link">訂購與取貨</a>
        <a href="#" class="mb-3 text-decoration-none d-block text-dark link">發票與售後服務</a>
      </div>
    </div>
    <div class="col-md-3 px-0 mx-0 contactUsBox">
      <p class="footerTitle font-weight-bold contactUsTitlePC d-block">聯絡我們</p>
      <a href="#" class="d-block mb-3 text-decoration-none link text-dark">客服信箱</a>
      <p class="workTimePC">週一至週五 ( 非例假日 )</p>
      <p class="workTimePC">10:00 ~ 12:00 及 13:00 ~ 17:00</p>
      <p class="workTimeMB">週一至週五 ( 非例假日 )</p>
      <p class="workTimeMB">10:00 ~ 12:00 及 13:00 ~ 17:00</p>
      <p>電子郵件<span class="w2pemail">services@cloudw2p.com</span></p>
      <a href="#" class="btn btn-primary font-weight-bold btnInPage pr-0 py-0 mt-3 text-decoration-none contactUsTitleMB">聯絡我們 <i class="fas fa-chevron-right fa-xs"></i></a>
      <div class="d-flex align-items-center socialIconBox">
        <a href="https://www.facebook.com/cloudw2p.tw" target="_blank">
          <img src="static/fb.svg" class="fb">
        </a>
        <a href="https://www.instagram.com/cloudw2p/" target="_blank" class="ml-2">
          <img src="static/ig.png" class="ig">
        </a>
        {{-- <div class="FBTEST">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcloudw2p.tw%2F&tabs=timeline&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=326337338443023" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div> --}}
      </div>
    </div>  
  </div>
@endsection