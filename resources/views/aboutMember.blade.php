@include('./component/serviceContentNav')

@extends('layout')

@section('content')
  <div class="serviceContent mt-30">
    <div class="container">
      <div class="row">
        <input type="checkbox" class="d-none" id="dropdown">
        <label for="dropdown" class="col-12">
          <span class="d-flex align-items-center">
            關於會員<i class="fas fa-chevron-down ml-auto"></i>
          </span>
        </label>
        {{-- 左邊側邊攔 --}}
        <div class="col-md-2 ">
          @yield('serviceContentNav')
        </div>
        <div class="col-md-10">
          <div class="teachEdit">
            <div class="title">
              關於會員
            </div>
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="first" class="d-none">
              <div class="d-flex labelContent">
                <label for="first" class="mb-0 plus mr-3">+</label>
                <label for="first" class="mb-0 minus mr-3">-</label>
                <label for="first" class="destitle mb-0">Q1：如何加入會員？</label>
              </div>
              <div class="text-justify indent pl-3">A：在永豐雲端印刷網網站首頁上，點選「註冊」輸入個人基本資料（個人電子信箱、密碼、手機號碼等資料）後，立即成為會員。</div>
            </div>
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="two" class="d-none">
              <div class="d-flex labelContent">
                <label for="two" class="mb-0 plus mr-3">+</label>
                <label for="two" class="mb-0 minus mr-3">-</label>
                <label for="two" class="destitle mb-0">Q2：沒有加入會員可以編輯作品嗎?</label>
              </div>                
              <div class="text-justify indent pl-3">A：編輯任何商品無須加入會員，即可體驗編輯。若要購買商品須完成會員註冊才能成立訂單。</div>
            </div>
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="three" class="d-none">
              <div class="d-flex labelContent">
                <label for="three" class="mb-0 plus mr-3">+</label>
                <label for="three" class="mb-0 minus mr-3">-</label>
                <label for="three" class="destitle mb-0">Q3：忘記密碼，怎麼辦？</label>
              </div>                
              <div class="text-justify indent pl-3">A：步驟如下</div>
              <ol class="indent">
                <li>可由登入頁面，點選「忘記了您的密碼嗎？」。</li>
                <li>請在欄位輸入您的電子郵件帳號，按下「發送重置連結」，會將重置連結寄送到您註冊時所使用的 E-mail 信箱；同時畫面會顯示的程式碼(驗證碼) 請記下或複製。</li>
                <li>請至您的E-mail信箱，開啟密碼重設確認信，點選「密碼變更」。</li>
                <li>輸入程式碼(驗證碼)，即可重置新密碼。</li>
              </ol>                
              <div class="text-justify indent pl-3 font-weight-bold">※特別說明，因個資保護法條規定，客服人員無法查詢及變更您的密碼，敬請見諒。</div>
            </div>
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="four" class="d-none">
              <div class="d-flex labelContent">
                <label for="four" class="mb-0 plus mr-3">+</label>
                <label for="four" class="mb-0 minus mr-3">-</label>
                <label for="four" class="destitle mb-0">Q4：收不到永豐雲端印刷網寄來的信，怎麼辦？</label>
              </div>                
              <div class="text-justify indent pl-3">A：如一直收不到回覆信件，請查明您的垃圾信件夾，並將services@cloudw2p.com 加入通訊錄喔！</div>
            </div>
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="five" class="d-none">
              <div class="d-flex labelContent">
                <label for="five" class="mb-0 plus mr-3">+</label>
                <label for="five" class="mb-0 minus mr-3">-</label>
                <label for="five" class="destitle mb-0">Q5：無法順利「登入」帳戶？</label>
              </div>                
              <div class="text-justify indent pl-3">請確認您的帳戶/密碼是否正確，並請注意大小寫須符合原設定。</div>
            </div>     
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="six" class="d-none">
              <div class="d-flex labelContent">
                <label for="six" class="mb-0 plus mr-3">+</label>
                <label for="six" class="mb-0 minus mr-3">-</label>
                <label for="six" class="destitle mb-0">Q6：會員如何更改帳戶資料或密碼？</label>
              </div>
              <div class="text-justify indent pl-3">登入後，點選「我的帳戶」>「帳戶詳細資料」或「變更密碼」，即可重新設定。</div>
            </div>
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="seven" class="d-none">
              <div class="d-flex labelContent">
                <label for="seven" class="mb-0 plus mr-3">+</label>
                <label for="seven" class="mb-0 minus mr-3">-</label>
                <label for="seven" class="destitle mb-0">Q7：有關會員「版權」與「隱私權」？</label>
              </div>                
              <div class="text-justify indent pl-3">其「版權所有」依照來源歸屬有其所有者。永豐雲端印刷網官方提供物件：永豐雲端印刷網編輯器中，官方所提供的版型、背景、插圖、文字等，其版權歸雲印網所有。會員提供的物件：由會員自行上傳的照片、圖片、文字等可視為會員所有之物件，其版權為會員或物件產生者所有。</div>
              <div class="text-justify indent pl-3">※ 永豐雲端印刷網提醒您，請確認您的物件來源 ( 包含但不限於照片、圖片、文字等 ) 為正當性，若有侵權行為或第三者質疑時，使用者應自負法律責任，與永豐雲端印刷網無關。</div>
              <div class="text-justify indent pl-3">【會員隱私權保護】相關政策如下：</div>
              <ol class="indent">
                <li>針對會員上傳的照片與圖片並不會顯示於網站上，僅會在個人的編輯器內顯示。因此不會像部落格相簿一樣下載、儲存，而被惡意盜用的情況發生。</li>
                <li>在永豐雲端印刷網上分享出來的相簿，網友是無法透過下載方式將會員分享出來的相簿另存檔案的。</li>
                <li>作品製作出來後，會員作品著作權屬於會員所有 ( 前提是不違背會員條款所載之事項 )，未經過會員同意，並取得會員相關授權文件的情況下，絕對不會被複製出來用作其他商業用途。</li>
                <li>印刷過程中，印刷工廠針對不良品有強制的規範。若發生錯誤而有重製的情況，原不良的印刷品，皆會銷毀不留存確保個人隱私，所以不會有圖片外洩的可能。</li>
                <li>針對隱私與著作保護的資訊安全部分，永豐雲端印刷網所屬的公司已經通過 ISO27001 資訊安全管理驗證服務標準並獲得國際認證。( ISO27001詳細介紹 http://en.wikipedia.org/wiki/ISO27001 )</li>
              </ol>                
              <div class="imgBoxServiceContent justify-content-center">
                <img src="/static/assets/img/serviceContent/ISO-PIC.jpg" alt="" class="img-fluid mt-3">
              </div>   
            </div>                           
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection