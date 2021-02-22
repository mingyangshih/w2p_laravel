@include('./component/serviceContentNav')

@extends('layout')

@section('content')
  <div class="serviceContent mt-30">
    <div class="container">
      <div class="row">
        <input type="checkbox" class="d-none" id="dropdown">
        <label for="dropdown" class="col-12">
          <span class="d-flex align-items-center">
            訂購與取貨<i class="fas fa-chevron-down ml-auto"></i>
          </span>
        </label>
        {{-- 左邊側邊攔 --}}
        <div class="col-md-2 ">
          @yield('serviceContentNav')
        </div>
        <div class="col-md-10">
          <div class="teachEdit">
            <div class="title">
              訂購與取貨
            </div>
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="first" class="d-none">
              <div class="d-flex labelContent">
                <label for="first" class="mb-0 plus mr-3">+</label>
                <label for="first" class="mb-0 minus mr-3">-</label>
                <label for="first" class="destitle mb-0">Q1：訂購流程說明</label>
              </div>                
              <div class="text-justify indent pl-3">A：訂購操作方式</div>
              <ol class="indent">
                <li>作品編輯完成後，點選「保存」後，再點選「添加到購物車」。</li>
                <li>加入後，會出現「繼續購物」或「現在去付款」。</li>
                <li>填寫訂購資料、配送資訊並完成付款。</li>
              </ol>                
              <div class="text-justify indent pl-3">※購物車必須是「同一訂購帳號、同一訂單號碼、同一天下單、寄送同一地址」，同筆購物車最多可加入20個作品一併結帳，但所有商品會依據工作天數較長的商品出貨日統一寄出。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="two" class="d-none">
              <div class="d-flex labelContent">
                <label for="two" class="mb-0 plus mr-3">+</label>
                <label for="two" class="mb-0 minus mr-3">-</label>
                <label for="two" class="destitle mb-0">Q2：付款方式有哪些?</label>
              </div>                
              <div class="text-justify indent pl-3">A：您可以選用信用卡付費、ATM 轉帳或臨櫃匯款。</div>
              <div class="text-justify indent pl-3">1. 信用卡付費：目前接受 VISA、Master Card、JCB Card 信用卡，使用線上付款，以台幣支付「一次付清」。</div>
              <div class="text-justify indent pl-3">2. ATM 轉帳或臨櫃匯款：</div>
              <div class="text-justify indent pl-3">戶名：永豐紙業股份有限公司</div>
              <div class="text-justify indent pl-3">銀行代號：812「台新銀行-南松山分行」</div>
              <div class="text-justify indent pl-3">銀行帳號：08201071032700</div>
              <div class="text-justify indent pl-3">需告知櫃台服務人員此帳號為虛擬帳號，並匯入與訂單相同金額(勿自行扣匯費)。</div>
              <div class="text-justify indent pl-3">匯款後請來信 services@cloudw2p.com 告知轉帳資訊：</div>
              <div class="text-justify indent pl-3">訂單編號：</div>
              <div class="text-justify indent pl-3">轉帳日期：</div>
              <div class="text-justify indent pl-3">轉帳金額：</div>
              <div class="text-justify indent pl-3">轉帳帳號後五碼：  (臨櫃匯款,請提供匯款人姓名)</div>
              <div class="text-justify indent pl-3">※ ATM 轉帳：「請於訂購日起，七日內需完成轉帳並Email回覆告知」，在未確認收到款項之前，此筆訂單尚未正式成立。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="three" class="d-none">
              <div class="d-flex labelContent">
                <label for="three" class="mb-0 plus mr-3">+</label>
                <label for="three" class="mb-0 minus mr-3">-</label>
                <label for="three" class="destitle mb-0">Q3：如何知道「轉帳」是否成功？</label>
              </div>                
              <div class="text-justify indent pl-3">A：說明如下：</div>
              <div class="text-justify indent pl-3">1.轉帳完成後，請來信 services@cloudw2p.com 告知轉帳資訊，以便為您核對。</div>
              <div class="text-justify indent pl-3">永豐雲端印刷網會在收到您的轉帳通知，確認帳款後您可在轉帳完成之後的下一個工作天，直接至訂單查詢中，查詢該筆訂單狀況。</div>
              <div class="text-justify indent pl-3">※ 如為假日轉帳，將於工作日確認款項。</div>
              <div class="text-justify indent pl-3">2. 對帳完成後即訂單成立，在「我的帳戶」內「您的訂單」中，訂單狀態會顯示「收到付款」。</div>
              <div class="text-justify indent pl-3">※ 確認繳費成功前請保留 ATM 交易明細表以保障您的權益。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="four" class="d-none">
              <div class="d-flex labelContent">
                <label for="four" class="mb-0 plus mr-3">+</label>
                <label for="four" class="mb-0 minus mr-3">-</label>
                <label for="four" class="destitle mb-0">Q4：若刷卡失敗或想更改付款方式，要如何進行結帳?</label>
              </div>                
              <div class="text-justify indent pl-3">A：訂單刷卡失敗，此筆訂單將不成立，建議您到「我的作品」重新操作訂購流程，選擇您方便的付款方式進行繳款。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="five" class="d-none">
              <div class="d-flex labelContent">
                <label for="five" class="mb-0 plus mr-3">+</label>
                <label for="five" class="mb-0 minus mr-3">-</label>
                <label for="five" class="destitle mb-0">Q5：放入購物車商品可否修改？</label>
              </div>                
              <div class="text-justify indent pl-3">A：尚未完成結帳的商品皆可修改或編輯。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="six" class="d-none">
              <div class="d-flex labelContent">
                <label for="six" class="mb-0 plus mr-3">+</label>
                <label for="six" class="mb-0 minus mr-3">-</label>
                <label for="six" class="destitle mb-0">Q6：放入購物車商品可否取消？</label>
              </div>                
              <div class="text-justify indent pl-3">A：在購物車中，找到想要取消的商品，點擊作品右上的X圖樣，即可刪除。</div>
              <div class="text-justify indent pl-3">※註：購物車中移除的作品並不會從「我的作品」中消失，您還是可以自「我的作品」再次加入購物車。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="seven" class="d-none">
              <div class="d-flex labelContent">
                <label for="seven" class="mb-0 plus mr-3">+</label>
                <label for="seven" class="mb-0 minus mr-3">-</label>
                <label for="seven" class="destitle mb-0">Q7：我如果只想買一項商品，應該怎麼做？</label>
              </div>                
              <div class="text-justify indent pl-3">A：在購物車清單中，多樣或是單樣商品都是可以結帳的。另外，在編輯器中，點擊右上角「添加到購物車」也會自動將作品加入購物車，依照購物車結帳流程完成操作即可。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="eight" class="d-none">
              <div class="d-flex labelContent">
                <label for="eight" class="mb-0 plus mr-3">+</label>
                <label for="eight" class="mb-0 minus mr-3">-</label>
                <label for="eight" class="destitle mb-0">Q8：使用購物車的東西會一起收到嗎？</label>
              </div>                
              <div class="text-justify indent pl-3">A：購物車的功能主要是為了方便您一次購買多樣商品的便利結帳工具，所有商品會依據工作天較長的商品出貨日統一寄出。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="nine" class="d-none">
              <div class="d-flex labelContent">
                <label for="nine" class="mb-0 plus mr-3">+</label>
                <label for="nine" class="mb-0 minus mr-3">-</label>
                <label for="nine" class="destitle mb-0">Q9：使用購物車，發票是開成一張嗎？</label>
              </div>                
              <div class="text-justify indent pl-3">A：是的，購物車結帳只會產生一筆訂單，只會有一張發票。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="ten" class="d-none">
              <div class="d-flex labelContent">
                <label for="ten" class="mb-0 plus mr-3">+</label>
                <label for="ten" class="mb-0 minus mr-3">-</label>
                <label for="ten" class="destitle mb-0">Q10：已使用購物車結帳商品，可否取消其中一筆？</label>
              </div>                
              <div class="text-justify indent pl-3">A：無法取消其中一筆，因使用購物車的多筆訂單，為了要讓您節省轉帳手續費，只會有一組轉帳帳號，由於每組虛擬帳號都是針對當次交易產生的，因此轉帳時金額與帳號必須與帳號產生時相同，所以使用ATM付款的多筆訂單，在付款之前不能只取消其中一筆，否則根據銀行規定，金額與虛擬帳號不符時，轉帳時將無法轉帳成功，會造成無法完成其他訂單的付款，而影響您其他訂單的付款、出貨等的作業。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="eleven" class="d-none">
              <div class="d-flex labelContent">
                <label for="eleven" class="mb-0 plus mr-3">+</label>
                <label for="eleven" class="mb-0 minus mr-3">-</label>
                <label for="eleven" class="destitle mb-0">Q11：購物車內的作品，保存期限有多長？</label>
              </div>                
              <div class="text-justify indent pl-3">A：購物車內的作品等同「我的作品」，編輯期限是由最新的編輯日起算，如果您超過60天未編輯作品，系統會自動將購物車作品移除。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="twelve" class="d-none">
              <div class="d-flex labelContent">
                <label for="twelve" class="mb-0 plus mr-3">+</label>
                <label for="twelve" class="mb-0 minus mr-3">-</label>
                <label for="twelve" class="destitle mb-0">Q12：配送方式</label>
              </div>                
              <div class="text-justify indent pl-3">A：配送方式：【宅配】。線上下單付款後，依商品規定製作天數內，包裝完成並寄出。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="thirteen" class="d-none">
              <div class="d-flex labelContent">
                <label for="thirteen" class="mb-0 plus mr-3">+</label>
                <label for="thirteen" class="mb-0 minus mr-3">-</label>
                <label for="thirteen" class="destitle mb-0">Q13：訂購付款後多久會收到商品？</label>
              </div>                
              <div class="text-justify indent pl-3">A：下單付款後，依照每項商品所規定的製作天數內，包裝完成並寄出。( 週一到週五，不含例假日及國定假日 )。</div>
              <div class="text-justify indent pl-3">※ 如為特定活動提供的產品，則以活動規定為優先。</div>
              <div class="text-justify indent pl-3">相片書系列：9個工作天</div>
              <div class="text-justify indent pl-3">卡片系列：5個工作天</div>
              <div class="text-justify indent pl-3">生活雜貨：10個工作天</div>
              <div class="text-justify indent pl-3">便利科技：10個工作天</div>
              <div class="text-justify indent pl-3">衣料織品：帆布袋7個工作天、T恤10個工作天</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="fourteen" class="d-none">
              <div class="d-flex labelContent">
                <label for="fourteen" class="mb-0 plus mr-3">+</label>
                <label for="fourteen" class="mb-0 minus mr-3">-</label>
                <label for="fourteen" class="destitle mb-0">Q14：商品可以提早出貨嗎?</label>
              </div>                
              <div class="text-justify indent pl-3">A：由於永豐雲端印刷網的商品都是收到結帳後的訂單再進行印製，商品皆有一定的製作時程，因此恕不接受急件。請您參照商品製作工作天數，提前訂購。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="fifteen" class="d-none">
              <div class="d-flex labelContent">
                <label for="fifteen" class="mb-0 plus mr-3">+</label>
                <label for="fifteen" class="mb-0 minus mr-3">-</label>
                <label for="fifteen" class="destitle mb-0">Q15：訂單成立後，可否取消或更改訂單數量及商品?</label>
              </div>                
              <div class="text-justify indent pl-3">A：系統收到您的付款成功訊息後，即進入製作階段，無法再進行訂單內容變更。若仍有疑問，請寄信至客服信箱( services@cloudw2p.com )或來電客服中心，將有專人為您處理。</div>
            </div>              
            <hr>
            <div class="d-flex flex-column">
              <input type="checkbox" id="sisteen" class="d-none">
              <div class="d-flex labelContent">
                <label for="sisteen" class="mb-0 plus mr-3">+</label>
                <label for="sisteen" class="mb-0 minus mr-3">-</label>
                <label for="sisteen" class="destitle mb-0">Q16：客戶忘記轉帳帳號如何查詢</label>
              </div>                
              <div class="text-justify indent pl-3">1. 訂購完成後系統會發出訂單確認信，到您的帳號信箱即可查看匯款資訊。</div>
              <div class="text-justify indent pl-3">2. ATM 轉帳或臨櫃匯款：</div>
              <div class="text-justify indent pl-3">戶名：永豐紙業股份有限公司</div>
              <div class="text-justify indent pl-3">銀行代號：812「台新銀行-南松山分行」</div>
              <div class="text-justify indent pl-3">08201071032700</div>
              <div class="text-justify indent pl-3">匯款後請來信 services@cloudw2p.com 告知轉帳資訊：</div>
              <div class="text-justify indent pl-3">(1)訂單編號：</div>
              <div class="text-justify indent pl-3">(2)轉帳日期：</div>
              <div class="text-justify indent pl-3">(3)轉帳金額：</div>
              <div class="text-justify indent pl-3">(4)轉帳帳號後五碼：  (臨櫃匯款,請提供匯款人姓名)</div>
              <div class="text-justify indent pl-3">※ ATM 轉帳：「請於訂購日起，七日內需完成轉帳並Email回覆告知」，在未確認收到款項之前，此筆訂單尚未正式成立。</div>
            </div>              
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection