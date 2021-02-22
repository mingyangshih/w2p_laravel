
@include('./component/serviceContentNav')

@extends('layout')

@section('content')
  <div class="serviceContent mt-30">
    <div class="container">
      <div class="row">
        <input type="checkbox" class="d-none" id="dropdown">
        <label for="dropdown" class="col-12">
          <span class="d-flex align-items-center">
            作品編排須知<i class="fas fa-chevron-down ml-auto"></i>
          </span>
        </label>
        {{-- 左邊側邊攔 --}}
        <div class="col-md-2 ">
          @yield('serviceContentNav')
        </div>
        <div class="col-md-10">
          <div class="teachEdit">
            <div class="title">
              作品編排須知
            </div>
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="first" class="d-none">
              <div class="d-flex labelContent">
                <label for="first" class="mb-0 plus mr-3">+</label>
                <label for="first" class="mb-0 minus mr-3">-</label>
                <label for="first" class="destitle mb-0">Q1：編輯作品時需要注意什麼事情？</label>
              </div>                
              <ol class="indent">
                <li>畫面中的灰色外框為該商品製作時可能會裁切或裝訂的出血(裁切)範圍，文字不可超出或接近黑色外框線，以免被裁切掉，請將重要圖文避開此區。</li>
                <li>相片書產品內頁編排勿靠近中線頁面內側(此為裝訂處)以免被裁切或不易閱讀。</li>
                <li>編輯時如需滿版或靠齊邊緣，照片必須超出黑色外框線並填滿灰色區域，成品才不會露出白邊。</li>
              </ol>                
              <div class="imgBoxServiceContent justify-content-center">
                <img src="/static/assets/img/serviceContent/作品編排須知Q01.jpg" alt="" style="max-width:80%;" class="img-fluid mt-3">
              </div>
            </div>
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="highlow" class="d-none">
              <div class="d-flex labelContent">
                <label for="highlow" class="mb-0 plus mr-3">+</label>
                <label for="highlow" class="mb-0 minus mr-3">-</label>
                <label for="highlow" class="destitle mb-0">Q2：「高級編輯」和「簡單編輯」的差異？</label>
              </div>                
              <div class="text-justify indent pl-3">A：說明如下：</div>
              <div class="text-justify indent pl-0 ml-5">高級編輯：適用「電腦版」，編輯功能較豐富。</div>
              <div class="text-justify indent pl-0 ml-5">簡單編輯：適用「電腦版」和「手機版」。因手機裝置的螢幕寬度限制，若使用手機編排作品僅限使用簡單編輯。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="two" class="d-none">
              <div class="d-flex labelContent">
                <label for="two" class="mb-0 plus mr-3">+</label>
                <label for="two" class="mb-0 minus mr-3">-</label>
                <label for="two" class="destitle mb-0">Q3：如何知道圖片解析度夠不夠？</label>
              </div>                
              <div class="text-justify indent pl-3">A：請您將上傳的圖片拉進編輯區或圖片框內，若圖片框出現驚嘆號圖示就表示圖片解析度不足，會影響印刷成品，建議您更換圖片或縮小圖片至驚嘆號圖示消失，亦表示解析度足夠。</div>
              <div class="imgBoxServiceContent justify-content-center">
                <img src="/static/assets/img/serviceContent/作品編排須知Q02.jpg" alt="" style="max-width:80%;" class="img-fluid mt-3">
              </div>                
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="three" class="d-none">
              <div class="d-flex labelContent">
                <label for="three" class="mb-0 plus mr-3">+</label>
                <label for="three" class="mb-0 minus mr-3">-</label>
                <label for="three" class="destitle">Q4：圖片可以使用哪些檔案格式和色彩模式？</label>
              </div>                
              <div class="text-justify indent pl-3">A：可以上傳JPG、JPEG、PNG、TIFF的影像檔案格式；RGB或CMYK的色彩模式皆可上傳。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="four" class="d-none">
              <div class="d-flex labelContent">
                <label for="four" class="mb-0 plus mr-3">+</label>
                <label for="four" class="mb-0 minus mr-3">-</label>
                <label for="four" class="destitle">Q5：同一個作品可以不同的行動裝置上編輯嗎？</label>
              </div>                
              <div class="text-justify indent pl-3">A：可以。只要有確定儲存作品就可以在不同的行動裝置(如手機、平板、電腦)登入繼續編輯。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="five" class="d-none">
              <div class="d-flex labelContent">
                <label for="five" class="mb-0 plus mr-3">+</label>
                <label for="five" class="mb-0 minus mr-3">-</label>
                <label for="five" class="destitle">Q6：未編輯完成的作品，可以之後繼續編輯嗎？</label>
              </div>                
              <div class="text-justify indent pl-3">A：未編輯完成的作品，請點選「保存」，若您尚未加入會員，請依步驟註冊，註冊完成作品將會儲存在「我的作品」內。若您已成為本站會員，請登入會員帳號，即可將作品儲存。若要繼續編輯作品時請登入後，可在「我的作品」內，點選作品下方的「編輯」按鈕。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="sevenZero" class="d-none">
              <div class="d-flex labelContent">
                <label for="sevenZero" class="mb-0 plus mr-3">+</label>
                <label for="sevenZero" class="mb-0 minus mr-3">-</label>
                <label for="sevenZero" class="destitle">Q7：「我的作品」和「購買後的作品」保存期限有多長?</label>
              </div>                
              <div class="text-justify indent pl-3">A：說明如下：</div>
              <div class="text-justify indent pl-3">因系統空間有限，「我的作品」的編輯期限是由最新的編輯日起算，如果您超過60天未編輯作品，我們會假設您已經不需要這個作品，系統就會自動刪除作品。請大家隨時回來「我的作品」編輯您未完成的作品喔！</div>
              <div class="text-justify indent pl-3">「購買後的作品」的保存期限是由訂購完成後起算，如果您超過365天未再「重新訂購」或「複製」作品，系統就會自動刪除作品，造成您的不便，敬請見諒。</div>
              <div class="text-justify indent pl-3">※ 當系統空間不足，逾期作品 ( 包含上傳照片 ) 將優先被刪除。當您每次登入繼續編輯，系統會重新計算編輯期限，所以只要您有持續的在編輯您的作品，就不用擔心作品會被刪除囉！</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="six" class="d-none">
              <div class="d-flex labelContent">
                <label for="six" class="mb-0 plus mr-3">+</label>
                <label for="six" class="mb-0 minus mr-3">-</label>
                <label for="six" class="destitle">Q8：編輯時的操作反應很慢？</label>
              </div>                
              <div class="text-justify indent pl-3">A：因本站使用的是即時線上編輯器，主要的原因與您當下的網路速度及網路環境有關。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="seven" class="d-none">
              <div class="d-flex labelContent">
                <label for="seven" class="mb-0 plus mr-3">+</label>
                <label for="seven" class="mb-0 minus mr-3">-</label>
                <label for="seven" class="destitle">Q9：使用手機編輯作品時，為何不能調整相片框位置及大小或增加文字及插圖？</label>
              </div>                
              <div class="text-justify indent pl-3">A：因手機版瀏覽裝置限制僅能支援「簡易編輯」，請您使用電腦或平板裝置編輯作品，即可使用「進階編輯」操作上列功能。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="eight" class="d-none">
              <div class="d-flex labelContent">
                <label for="eight" class="mb-0 plus mr-3">+</label>
                <label for="eight" class="mb-0 minus mr-3">-</label>
                <label for="eight" class="destitle">Q10：我可以分享完成訂購的作品嗎？</label>
              </div>                
              <div class="text-justify indent pl-3">A：請您登入後，點選「我的帳戶」>「您的訂單」，選擇欲分享的作品並點選「分享」即可透過各種平台分享給您的朋友。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="nine" class="d-none">
              <div class="d-flex labelContent">
                <label for="nine" class="mb-0 plus mr-3">+</label>
                <label for="nine" class="mb-0 minus mr-3">-</label>
                <label for="nine" class="destitle">Q11：上傳圖片過程中可否停止上傳或刪除圖片?</label>
              </div>                
              <div class="text-justify indent pl-3">A：圖片上傳中無法停止上傳，請您耐心等待圖片上傳完成後，再刪除即可。</div>
              <div class="text-justify indent pl-3">簡單編輯：在圖片區選擇不要的照片，再點選該照片左上角的箭頭，即出現「清除」選項。</div>
              <div class="imgBoxServiceContent justify-content-center ml-md-3">
                <img src="/static/assets/img/serviceContent/簡單編輯.jpg" alt="" class="img-fluid my-3">
              </div>                
              <div class="text-justify indent pl-3 my-4">高級編輯：可點開圖片管理器後選擇不要的照片，再點選右上方的垃圾桶刪除即可。</div>
              <div class="imgBoxServiceContent justify-content-center ml-md-3">
                <img src="/static/assets/img/serviceContent/高級編輯01.jpg" alt="" class="img-fluid mt-3">
              </div>                
              <div class="imgBoxServiceContent justify-content-center ml-md-3">
                <img src="/static/assets/img/serviceContent/高級編輯02.jpg" alt="" class="img-fluid mt-3">
              </div>
                
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="ten" class="d-none">
              <div class="d-flex labelContent">
                <label for="ten" class="mb-0 plus mr-3">+</label>
                <label for="ten" class="mb-0 minus mr-3">-</label>
                <label for="ten" class="destitle">Q12：「色差」說明？</label>
              </div>                
              <div class="text-justify indent pl-3">A：圖片上傳中無法停止上傳，請您耐心等待圖片上傳完成後，再刪除即可。</div>
              <div class="text-justify indent pl-3">關於色彩差異部分，因每台螢幕設定的色彩明亮及品牌皆不同，不同螢幕看同一張照片或圖片，會呈現不同顏色，電腦顯示的色彩模式為RGB，印刷品的色彩模式為CMYK，顯示的色域有差異會有一定的色差，間接造成印刷成品與螢幕上有所差異。</div>
              <div class="text-justify indent pl-3">印刷品皆屬影像複製，影響色彩呈現的原因有油墨、紙張、色彩曲線、時間、機台等等，所以同一圖檔在不同次印刷時，色彩都會有些微差距，有色差皆屬正常。就如同沖印相片即使到同一個相館，不同天洗出來，色彩亦有差異一樣，即使大量同時印刷，前後時段印出的產品，也會略有差異，這是色彩複製一定會有的問題，詳情請參閱國際膠印印刷標準ISO12647-2。</div>
            </div>              
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection