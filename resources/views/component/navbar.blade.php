@section('navbar')
  <div class="container px-0 mx-md-6">
    <div id="tpx-basket-bar" class="row justify-content-between align-items-center tpx mx-0 py-0 border-bottom-0 topNavBox">
      <div class="tpx tpx-bar-container tpx-clearfix topNav" id="tpx-basket-bar-inner">
        <a href="/" class="home">
          <img src="/static/logo-big.png" alt="logo">   
        </a>
        {{-- hover 選單 --}}
        <nav class="item allProd mb-0 align-items-center deskTop">所有產品
          <div class="dropDownMenu bg-white px-3">
            <div class="text-decoration-none row">
              @foreach ($totalCategory as $key => $item)
                <div class="col-md-4 py-3">
                  <div class="d-flex flex-column">
                    <a href={{'/productDetail/'.$categoryId[$key]}} class="text-decoration-none mb-2 itemHover">{{$item}}</a>
                    @foreach ($menu as $item1)
                      @if ($item1->productCategory === $item)
                      <p class="text-decoration-none pl-3 mb-2 itemHover"> {{$item1->productName}}</p> 
                      @endif                    
                    @endforeach
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </nav>
        {{-- 幫助中心 --}}
        <nav class="item helpCenter mb-0 align-items-center">幫助中心</nav>
        <nav class="item helpCenter mb-0 align-items-center activity">抽獎活動</nav>
        <nav class="text-dark item aboutUs mb-0 align-items-center text-decoration-none">關於我們</nav>
        <nav class="item contactUs mb-0 align-items-center">聯絡我們</nav>
        {{-- 註冊 --}}
        <label class="item register mb-0 align-items-center">
          <a href="#" class="font-weight-bold text-decoration-none text-dark" onclick="tpxHighLevelRegisterInitControl(); return false;" id="tpx-register"></a>
        </label>
        {{-- 登入登出 --}}
        <label class="item login mb-0 align-items-center">
          <a href="#" class="font-weight-bold text-decoration-none text-dark" id="tpx-signIn" onclick="tpxHighLevelSignInInitControl(); return false;"></a>
        </label>
        {{-- 我的作品 --}}
        <nav class="item myItem mb-0 align-items-center" id="tpx-projectslinkli">
          <a id="tpx-projectslist" class="text-dark text-decoration-none" href="#" onclick="tpxMyProjectsOnClick(); return false;"></a>
        </nav>
        {{-- 購物車 --}}
        <nav class="item myItem mb-0 align-items-center tpx">
          <div class="tpx" id="tpx-basketButtonWrapper">
            <p class="mb-0 tpx tpx-button tpx-basketButton" id="tpx-basketlink" onclick="tpxBasketOnClick(); return false;">
              <span class="tpx tpx-basketCount" id="tpx-basketButtonCount"></span>
            </p>
          </div>
        </nav>
      </div>
      <!-- My Projects pop out panel -->
      <div id="tpx-projectlistcontents" class="tpx tpx-projectlist">
        <div id="tpx-projectsItemListContainer" class="tpx tpx-projectlist-items-container">
            <ul id="tpx-projectsItemList" class="tpx tpx-shopping-cart-items"></ul>
            <div id="tpx-projectloadingspinnercontainer" class="tpx tpx-loadingspinnercontainer">
                <span id="tpx-projectloadingspinner" class="tpx tpx-loading-spinner"></span>
            </div>
            <div id="tpx-empty-state">
                <p id="tpx-empty-project-text">You don't have any saved projects.</p>
            </div>
        </div>
        <button class="btn btn-secondary" onClick="tpxMyProjectsOnClick()">X</button>
      </div>
      <!-- Basket pop out panel -->
      <div id="tpx-shoppingcartcontents" class="tpx tpx-shopping-cart">
        <div class="tpx tpx-shopping-cart-header tpx-clearfix">
            <span id="tpx-basketcountbadgeinner" class="tpx tpx-badge">0</span>
            <a href="#" id="tpx-emptyBasketButton" onClick="tpxHighLevelEmptyBasketControl()" class="tpx tpx-button tpx-emptycartbutton">Empty Basket</a>
        </div>
        <div id="tpx-basketItemListContainer" class="tpx tpx-shopping-cart-items-container">
            <ul id="tpx-basketItemList" class="tpx tpx-shopping-cart-items"></ul>
            <div id="tpx-loadingspinnercontainer" class="tpx tpx-loadingspinnercontainer"></div>
            <div id="tpx-empty-cart">
                <p id="tpx-empty-cart-text">Your basket is currently empty</p>
            </div>
        </div>
        <a href="#" id="tpx-checkoutbutton" onClick="tpxHighLevelCheckoutControl()" class="tpx tpx-button tpx-checkout-button">Checkout</a>
        <a href="#" onclick="tpxBasketOnClick()" class="tpx tpx-button tpx-checkout-button bg-secondary mt-1 text-light" id="tpx-checkoutbutton">關閉</a>
      </div>
    </div>
  </div>  
@endsection