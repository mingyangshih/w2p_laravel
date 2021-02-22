@include('./component/serviceContentNav')

@extends('layout')

@section('content')
  <div class="serviceContent mt-30">
    <div class="container">
      <div class="row">
        <input type="checkbox" class="d-none" id="dropdown">
        <label for="dropdown" class="col-12">
          <span class="d-flex align-items-center">
            發票與售後服務<i class="fas fa-chevron-down ml-auto"></i>
          </span>
        </label>
        {{-- 左邊側邊攔 --}}
        <div class="col-md-2 ">
          @yield('serviceContentNav')
        </div>
        <div class="col-md-10">
          <div class="teachEdit">
            <div class="title">
              發票與售後服務
            </div>
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="first" class="d-none">
              <div class="d-flex labelContent">
                <label for="first" class="mb-0 plus mr-3">+</label>
                <label for="first" class="mb-0 minus mr-3">-</label>
                <label for="first" class="destitle mb-0">Q1：如何聯絡我們?</label>
              </div>                
              <div class="text-justify indent pl-3">A：聯絡資訊</div>
              <div class="text-justify indent pl-3">服務時間：週一至週五 ( 非例假日 )，10:00 ~ 12:00 及 13:00 ~ 17:00</div>
              <div class="text-justify indent pl-3">客服電話：02-2266-8944 Ext.8800</div>
              <div class="text-justify indent pl-3">客服傳真：02-2266-5451</div>
              <div class="text-justify indent pl-3">客服信箱：services@cloudw2p.com</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="two" class="d-none">
              <div class="d-flex labelContent">
                <label for="two" class="mb-0 plus mr-3">+</label>
                <label for="two" class="mb-0 minus mr-3">-</label>
                <label for="two" class="destitle mb-0">Q2：付款後，兩週都未收到商品怎麼辦？</label>
              </div>                
              <div class="text-justify indent pl-3">A：請登入後，至「我的帳戶」→「您的訂單」中，可查詢訂單狀態。若仍有疑問，請寄信至客服信箱(services@cloudw2p.com，內容註明詢問事項、訂單與聯絡電話)或來電，我們將盡快提供協助。</div>
              <div class="text-justify indent pl-3">※ 永豐雲端印刷網將會為會員保留最近三個月的物流相關資料以供查詢。</div>
            </div>
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="three" class="d-none">
              <div class="d-flex labelContent">
                <label for="three" class="mb-0 plus mr-3">+</label>
                <label for="three" class="mb-0 minus mr-3">-</label>
                <label for="three" class="destitle mb-0">Q3：商品「發票」會如何收到?</label>
              </div>                
              <div class="text-justify indent pl-3">A：如有實體發票，發票會隨商品包裝，附於箱內。</div>
              <div class="text-justify indent pl-3">若未收到發票，請於客服時間來電或使用客服信箱，並註明內容詢問事項與聯絡電話將有專人為您處理。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="threeInvoice" class="d-none">
              <div class="d-flex labelContent">
                <label for="threeInvoice" class="mb-0 plus mr-3">+</label>
                <label for="threeInvoice" class="mb-0 minus mr-3">-</label>
                <label for="threeInvoice" class="destitle mb-0">Q4：如何開立三聯式發票?</label>
              </div>                
              <div class="text-justify indent pl-3">A：如您需開立三聯式電子發票，請您於訂購後，將「訂單編號」、「發票統編」及「公司抬頭」mail到永豐雲端印刷網的客服信箱 ( services@cloudw2p.com ) 或來電客服中心，將有專人為您處理。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="five" class="d-none">
              <div class="d-flex labelContent">
                <label for="five" class="mb-0 plus mr-3">+</label>
                <label for="five" class="mb-0 minus mr-3">-</label>
                <label for="five" class="destitle mb-0">Q5：收到發票後，是否還能修改抬頭、統編？</label>
              </div>                
              <div class="text-justify indent pl-3">A：若您當初於訂購時已選擇三聯式電子發票，訂單成立後就無法更改為二聯式電子發票，當初已選擇二聯式電子發票亦無法變更為三聯式電子發票。</div>
              <div class="text-justify indent pl-3">請於消費時確認應取得二聯（個人消費）或三聯（報帳用）發票。</div>
              <div class="text-justify indent pl-3">本公司已盡告知義務，且為配合國稅局勸止二聯換開三聯之政策，本公司有權利考量各因素後拒絕換開發票。</div>
              <div class="text-justify indent pl-3">當三聯式紙本發票資料錯誤，需更改抬頭名稱或統一編號時</div>
              <div class="text-justify indent pl-3">※ 尚未收到發票：請發信至永豐雲端印刷網客服信箱，客服人員將會盡速為您處理。</div>
              <div class="text-justify indent pl-3">※ 已收到發票：請註明正確抬頭、統編，於收到發票五日內，連同回郵信封及收到的發票掛號寄回「236新北市土城區中央路一段365巷7號6樓 永豐雲端印刷網(客服部) 收」(以郵戳為憑)，以利為您換開發票，一般處理時間需約二週。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="six" class="d-none">
              <div class="d-flex labelContent">
                <label for="six" class="mb-0 plus mr-3">+</label>
                <label for="six" class="mb-0 minus mr-3">-</label>
                <label for="six" class="destitle mb-0">Q6：客訴或退貨時能否更換製作內容及製作材料？</label>
              </div>                
              <div class="text-justify indent pl-3">A：因工廠採自動化生產，若更換材料將影響產品正確性及一致性，故無法更換。</div>
            </div> 
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="seven" class="d-none">
              <div class="d-flex labelContent">
                <label for="seven" class="mb-0 plus mr-3">+</label>
                <label for="seven" class="mb-0 minus mr-3">-</label>
                <label for="seven" class="destitle mb-0">Q7：如何「退貨」？</label>
              </div>                
              <div class="text-justify indent pl-3">A：您在永豐雲端印刷網購買的每件商品均屬個人之客製化商品，故不提供七天鑑賞期。非人為惡意損壞之缺頁、掉頁、裝訂錯誤等重大瑕疵，恕不退貨。</div>
              <div class="text-justify indent pl-3">所訂購商品如發生缺頁、裝訂不良、印刷污損與其他歸責於本公司之情況，請於收到商品的七日內，拍下瑕疵發生情形，將照片及問題mail到客服信箱( services@cloudw2p.com )，本公司將在收到您的問題反應和確認問題歸屬後，視情況提供處理辦法，無故不接受退貨。</div>
              <div class="text-justify indent pl-3">※些許色差屬印刷正常現象，彩色印刷是由CMYK四色版套印而成，由於印刷和承印物的特殊性，印刷成品色差值控制在±10%以內均為合格產品，顯示器上視覺顏色和印刷成品顏色均有一定的差異，不同批次的產品也會略有差異，詳情請參閱國際膠印印刷標準ISO12647-2，故色差並不構成退貨要件中的重大瑕疵。</div>
            </div> 
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection