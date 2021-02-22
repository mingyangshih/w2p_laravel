@include('./component/serviceContentNav')

@extends('layout')
@section('content')
  <div class="serviceContent mt-30">
    <div class="container">
      <div class="row">
        <input type="checkbox"  class="d-none"  id="dropdown">
        <label class="col-12" for="dropdown">
          <span class="d-flex align-items-center">
            編輯教學<i class="fas fa-chevron-down ml-auto"></i>
          </span>
        </label>
        {{-- 左邊側邊攔 --}}
        <div class="col-md-2 ">
          @yield('serviceContentNav')
        </div>
        <div class="col-md-10">
          <div class="teachEdit">
            {{-- 桌機看到的樣子 --}}
            <div class="">
              <div class="title">
                編輯教學
              </div>
              <hr>
              <div class="d-flex flex-column">
                <input type="checkbox" id="oneOne" class="d-none">
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
                <div class="text-justify indent pl-3">
                  (3) 將上傳的照片拖拉到編輯區的圖片框中  
                </div> 
                <div class="imgBoxServiceContent ml-md-3 justify-content-center">
                  <img src="/static/assets/img/serviceContent/1-3.jpg" alt="" class="img-fluid mt-3">
                </div>
                
              </div>
              <hr>
              <div class="d-flex flex-column">
                <input type="checkbox" id="twoOne" class="d-none">
                <div class="d-flex labelContent">
                  <label for="twoOne"  class="mb-0 plus mr-3">+</label>
                  <label for="twoOne" class="mb-0 minus mr-3">-</label> 
                  <label for="twoOne" class="destitle mb-0">2-1.開始編輯：左方工具列「圖片」功能說明</label>
                </div>
                <div class="text-justify indent pl-3">(1) 照片排序</div> 
                  <div class="imgBoxServiceContent ml-md-3">
                    <img src="/static/assets/img/serviceContent/2-1-1.jpg" alt="" class="img-fluid mt-3">
                  </div>
                  <div class="text-justify indent pl-3">(2) 圖片管理器</div> 
                  <div class="imgBoxServiceContent ml-md-3 justify-content-center">
                    <img src="/static/assets/img/serviceContent/2-1-2.jpg" alt="" class="img-fluid mt-3">()
                  </div>
                  <div class="text-justify indent pl-3">(3) 撤銷(復原鍵入) / 重做 / 照片右上角數字 / 總上傳張數</div> 
                  <div class="imgBoxServiceContent ml-md-3">
                    <img src="/static/assets/img/serviceContent/2-1-3.jpg" alt="" class="img-fluid mt-3">
                  </div>
              </div>
              <hr>
              <div class="d-flex flex-column">
                <input type="checkbox" id="twoTwo" class="d-none">
                <div class="d-flex labelContent">
                  <label for="twoTwo" class="mb-0 plus mr-3">+</label>
                  <label for="twoTwo" class="mb-0 minus mr-3">-</label>
                  <label for="twoTwo" class="destitle mb-0">2-2.開始編輯：上方工具列「編輯工具」功能說明</label>
                </div>
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-2-0.jpg" alt="" class="img-fluid mt-3">
                </div>
                <div class="text-justify indent pl-3">(1) 添加圖片框 / 添加文本框(文字框)</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-2-1.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(2) 點選「自動排版」，即跳出下圖視窗，將您上傳的圖片自動編輯到作品。</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-2-2.jpg" alt="" class="img-fluid mt-3">
                </div>
                <div class="text-justify indent pl-3">(3) 智能指引：編輯的過程中會顯示參考線。</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-2-3.jpg" alt="" class="img-fluid mt-3"> 
                </div>                  
                <div class="text-justify indent pl-3">(4) 頁面版式：選擇版型拖拉到編輯區使用</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-2-4.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(5) 背景：選擇背景拖拉到編輯區使用</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-2-5.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(6) 素材庫：選擇圖示拖拉到編輯區使用</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-2-6.jpg" alt="" class="img-fluid mt-3">
                </div>
                <div class="text-justify indent pl-3">(7) 蒙版：選擇遮色片效果拖拉到圖片上使用</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-2-7.jpg" alt="" class="img-fluid mt-3">
                </div>                  
              </div>
              <hr>
              <div class="d-flex flex-column">
                <input type="checkbox" id="twoThree" class="d-none">
                <div class="d-flex labelContent">
                  <label for="twoThree" class="mb-0 plus mr-3">+</label> 
                  <label for="twoThree" class="mb-0 minus mr-3">-</label> 
                  <label for="twoThree" class="destitle mb-0">2-3. 開始編輯：上方工具列「圖片選項」功能說明</label> 
                </div>
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-3-0.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(1) 效果</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-3-1.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(2) 增強</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-3-2.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(3) 裁剪 / 整理</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-3-3.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(4) 邊界</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-3-4.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(5) 陰影</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-3-5.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(6) 透明度</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-3-6.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(7) 方向</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-3-7.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(8) 形狀</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-3-8.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(9) 尺寸&位置</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-3-9.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(10) 對齊</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-3-10.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(11) 佈置</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-3-11.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(12) 適合</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-3-12.jpg" alt="" class="img-fluid mt-3">
                </div>                  
              </div>
              <hr>
              <div class="d-flex flex-column">
                <input type="checkbox" id="twoFour" class="d-none">
                <div class="d-flex labelContent">
                  <label for="twoFour" class="mb-0 plus mr-3">+</label> 
                  <label for="twoFour" class="mb-0 minus mr-3">-</label> 
                  <label for="twoFour" class="destitle mb-0">2-4. 開始編輯：上方工具列「文字選項」功能說明</label> 
                </div>
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-4-0.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(1) 文本編輯</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-4-1.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(2) 文本格式</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-4-2.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(3) 文本對齊</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-4-3.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(4) 邊界</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-4-4.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(5) 背景</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-4-5.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(6) 輪流</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-4-6.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(7) 文本方向</div> 
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-4-7.jpg" alt="" class="img-fluid mt-3">
                </div>                  
              </div>
              <hr>
              <div class="d-flex flex-column">
                <input type="checkbox" id="twoFive" class="d-none">
                <div class="d-flex labelContent">
                  <label for="twoFive" class="mb-0 plus mr-3">+</label>
                  <label for="twoFive" class="mb-0 minus mr-3">-</label>
                  <label for="twoFive" class="destitle mb-0">2-5. 開始編輯：右方工具列「編輯器」功能說明</label>  
                </div>
                <div class="text-justify indent pl-3">(1)  剪下         (2)  複製         (3)  貼上         (4)  刪除</div>
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-5.jpg" alt="" class="img-fluid mt-3">
                </div>                  
              </div>
              <hr>
              <div class="d-flex flex-column">
                <input type="checkbox" id="twoSix" class="d-none">
                <div class="d-flex labelContent">
                  <label for="twoSix" class="mb-0 plus mr-3">+</label>
                  <label for="twoSix" class="mb-0 minus mr-3">-</label>
                  <label for="twoSix" class="destitle mb-0">2-6. 開始編輯：下方工具列「頁次管理」功能說明</label>
                </div>
                <ol class="indent">
                  <li>總頁數：下拉可以更改可訂購頁數。(可訂購頁數分別為36、48、60、72、84頁)</li>
                  <li>插入頁：插入頁數一次為 2 頁，編輯完成總頁數請依照36、48、60、72、84頁為主。</li>
                  <li>刪除頁：刪除頁數一次為 2 頁，編輯完成總頁數請依照36、48、60、72、84頁為主。</li>
                  <li>頁次：可以拖拉更換頁面順序。</li>
                </ol>                  
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/2-6.jpg" alt="" class="img-fluid mt-3">
                </div>
              </div>
              <hr>
              <div class="d-flex flex-column">
                <input type="checkbox" id="threeThree" class="d-none">
                <div class="d-flex labelContent">
                  <label for="threeThree" class="mb-0 plus mr-3">+</label>
                  <label for="threeThree" class="mb-0 minus mr-3">-</label>
                  <label for="threeThree" class="destitle mb-0">3. 編輯完成進行訂購</label>
                </div>                  
                <div class="text-justify indent pl-3">(1) 點選右上角「添加到購物車」即可進行結帳</div>
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/3.jpg" alt="" class="img-fluid mt-3">
                </div>                  
              </div>
              <hr>
              <div class="d-flex flex-column">
                <input type="checkbox" id="fourFour" class="d-none">
                <div class="d-flex labelContent">
                  <label for="fourFour" class="mb-0 plus mr-3">+</label>
                  <label for="fourFour" class="mb-0 minus mr-3">-</label>
                  <label for="fourFour" class="destitle mb-0">4. 上方工具列「作品管理」功能說明</label>
                </div>                  
                <div class="imgBoxServiceContent ml-md-3">
                  <img src="/static/assets/img/serviceContent/4-0.jpg" alt="" class="img-fluid mt-3">
                </div>                  
                <div class="text-justify indent pl-3">(1) 分享：您可以複製連結到您社群網站分享作品</div>
                <div class="imgBoxServiceContent ml-md-3"><img src="/static/assets/img/serviceContent/4-1.jpg" alt="" class="img-fluid mt-3"></div>
                <div class="text-justify indent pl-3">(2) 簡單編輯：可切換到簡單模式編輯</div>
                <div class="text-justify indent pl-3">(3) 保存：輸入作品名稱及可儲存作品</div>
                <div class="imgBoxServiceContent ml-md-3"><img src="/static/assets/img/serviceContent/4-3.jpg" alt="" class="img-fluid mt-3"></div>
                <div class="text-justify indent pl-3">(4) 預覽</div>
                <div class="imgBoxServiceContent ml-md-3"><img src="/static/assets/img/serviceContent/4-4.jpg" alt="" class="img-fluid mt-3"></div>
                <div class="text-justify indent pl-3">(5) 各國語言切換</div>
                <div class="imgBoxServiceContent ml-md-3"><img src="/static/assets/img/serviceContent/4-5.jpg" alt="" class="img-fluid mt-3"></div>
              </div>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection