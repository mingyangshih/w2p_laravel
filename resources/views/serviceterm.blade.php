@include('./component/navbar')
@include('./component/footer')


@extends('layout')
  @section('title', '服務使用條款')
  @section('content')
    <div class="container-fluid px-0  bg-primary">
      <div class="p-3 container text-white text-center">
        新平台，新體驗，正式上線！
      </div>
    </div>
    {{-- navbar --}}
    @yield('navbar')
    {{-- serviceterm --}}
    <div class="serviceterm">
      <div class="container px-0">
        <div class="pageTitle text-center my-30">服務使用條款</div>
      </div>
      <div class="container px-4">
        <p class="termTitle">1. 認知與接受條款</p>
        <p class="termDetail text-justify">
          (a)永豐紙業股份有限公司 ( 以下簡稱「本公司」) 係依據本服務條款提供永豐雲端印刷網( http://www.cloudw2p.com ) 服務 ( 以下簡稱「本服務」)。
        </p>
        <p class="termDetail text-justify">
          (b)使用本服務時，即表示您已閱讀、瞭解並同意接受本服務條款之所有內容。當您使用永豐雲端印刷網的特定服務時，可能會依據該特定服務之性質，而須遵守本服務所另行公告之服務條款或相關規定。
        </p>
        <p class="termDetail text-justify">
          (c)永豐雲端印刷網有權在任何時間修改或變更本服務條款之內容，針對修改或變更後仍繼續使用本服務，視為您已閱讀並明白了解且同意接受該等修改或變更。
        </p>
        <p class="termDetail text-justify">
          (d)如果您不同意本服務條款的內容，或者您所屬之國家或地域。排除本服務條款內容之全部或一部分時，您應即刻停止使用本服務。
        </p>
        <p class="termDetail text-justify">
          (e)在任何時間修改或變更本服務條款之內容並與其未修改或變更之本服務條款之內容相違背時，將以修改或變更本服務條款之內容為有效。
        </p>
        <p class="termDetail text-justify">
          (f)若您為未滿二十歲，除應符合上述規定外，並應於您的家長 ( 或監護人 ) 閱讀、瞭解並同意本服務條款之所有內容，方可使用或繼續使用本服務。
        </p>
        <p class="termDetail text-justify">
          (g)若您為未滿二十歲使用本服務時，即認定您的家長 ( 或監護人 ) 已閱讀並明白了解且同意接受本服務條款之所有內容及其後修改變更。
        </p>
        <p class="termTitle mt-30">2. 您的註冊義務</p>
        <p class="termDetail text-justify">
          為了能使用本服務，您同意以下事項：
        </p>
        <p class="termDetail text-justify">
          (a)依本服務註冊表之提示提供您本人正確、最新及完整的資料。
        </p>
        <p class="termDetail text-justify">
          (b)維持並更新您個人資料，確保其為正確、最新及完整。若您提供任何錯誤、不實或不完整的資料，永豐雲端印刷網有權暫停或終止您的帳號，並拒絕您使用本服務之全部或一部分。
        </p>
        <p class="termTitle mt-30">3. 永豐雲端印刷網隱私權政策</p>
        <p class="termDetail text-justify">
          關於您的會員註冊以及其他特定資料依永豐雲端印刷網「隱私權政策」受到保護與規範(如下)。
        </p>
        <p class="termTitle mt-30">4. 會員帳號、密碼及安全</p>
        <p class="termDetail text-justify">
          完成本服務的登記程序之後，您將收到一封帳號啟動的e-mail。基於保護密碼及帳號的機密安全，您同意以下事項：
        </p>
        <p class="termDetail text-justify">
          (a)您的密碼或帳號遭到盜用或有其他任何安全問題發生時，您必須立即通知永豐雲端印刷網。
        </p>
        <p class="termDetail text-justify">
          (b)每次使用完畢永豐雲端印刷網的服務，需登出網站系統結束您的帳號使用。
        </p>
        <p class="termTitle mt-30">5. 兒童及青少年之保護</p>
        <p class="text-justify termDetailUnorder">
          為確保兒童及青少年使用網路的安全，並避免隱私權受到侵犯，家長 ( 或監護人 ) 應盡到下列義務：未滿十二歲之兒童使用永豐雲端印刷網所提供之服務時，應全程在旁陪伴，十二歲以上未滿二十歲之青少年使用前亦應斟酌是否給予同意。
        </p>
        <p class="termTitle mt-30">6. 使用者的守法義務及承諾</p>
        <p class="text-justify termDetailUnorder">
          您承諾絕不為任何非法目的或以任何非法方式使用本服務，並承諾遵守中華民國相關法規及所有使用網際網路之國際慣例。您若係中華民國以外之使用者，並同意遵守所屬國家或地域之法令。您同意並保證不得利用本服務從事侵害他人權益或違法之行為，包括但不限於：
        </p>
        <p class="termDetail text-justify">
          (a)製作任何誹謗、侮辱、具威脅性、攻擊性、不雅、猥褻、不實、違反公共秩序或善良風俗或其他不法之文字、圖片或任何形式的檔案侵害他人名譽、隱私權、營業秘密、商標權、著作權、專利權、其他智慧財產權及其他權利或違反依法律或契約所應負之法律責任。
        </p>
        <p class="termDetail text-justify">
          (b)冒用他人名義使用本服務。
        </p>
        <p class="termDetail text-justify">
          (c)傳輸或散佈電腦病毒。
        </p>
        <p class="termDetail text-justify">
          (d)其他本公司有正當理由認為不適當之行為。本公司得依實際執行情形，增加、修改或終止相關活動，並選擇最適方式告知會員。
        </p>
        <p class="termTitle mt-30">7. 服務變更</p>
        <p class="text-justify termDetailUnorder">
          永豐雲端印刷網保留於任何時點，不經通知隨時修改或暫時或永久停止繼續提供本服務 ( 或其任一部分 ) 的權利。您同意永豐雲端印刷網對於您或是任何第三方對於任何修改、暫停或停止繼續提供本服務負任何責任。
        </p>
        <p class="termTitle mt-30">8. 拒絕或終止您的使用</p>
        <p class="text-justify termDetailUnorder">
          您同意永豐雲端印刷網得基於其自行之考量，因任何理由，包含但不限於一定期間未使用、法院或政府機關命令、您自行請求、本服務無法繼續或服務內容實質變更、無法預期之技術或安全因素或問題、您所為詐欺或違法行為、未依約支付費用，或其他永豐雲端印刷網認為您已經違反本服務條款的明文規定及精神，而終止您的密碼、帳號或本服務之使用。永豐雲端印刷網亦得依其自行之考量，於通知或未通知之情形下，隨時終止本服務或其任何部分。您同意依本服務條款任何規定提供之本服務，無需進行事先通知即得終止，永豐雲端印刷網無需徵得您的同意得立即關閉或刪除您的帳號及您帳號中所有相關資料及檔案，及停止本服務之使用。此外，您同意本服務對您或任何第三人均不承擔責任。
        </p>
        <p class="termTitle mt-30">9. 買賣或其他交易行為</p>
        <p class="text-justify termDetailUnorder">
          會員同意其訂購行為，以永豐雲端印刷網網站所示之電子交易資料為準，如有糾紛，並以該電子交易資料為認定標準。
        </p> 
        <p class="termTitle mt-30">10.智慧財產權的保護</p>
        <p class="text-justify termDetailUnorder">
          永豐雲端印刷網所使用之軟體或程式、網站上所有內容，包括但不限於著作、圖片、檔案、資訊、資料、網站架構、網站畫面的安排、網頁設計，均由永豐雲端印刷網或其他權利人依法擁有其智慧財產權，包括但不限於商標權、專利權、著作權、營業秘密與專有技術等。任何人不得逕自使用、修改、重製、公開播送、改作、散布、發行、公開發表、進行還原工程、解編或反向組譯。若您欲引用或轉載前述軟體、程式或網站內容，必須依法取得永豐雲端印刷網或其他權利人的事前書面同意。尊重智慧財產權是您應盡的義務，如有違反，您應對永豐雲端印刷網負損害賠償責任。永豐雲端印刷網及其關係企業為行銷宣傳本服務，就本服務相關之商品或服務名稱、圖樣等 ( 以下稱「永豐雲端印刷網商標」 ) ，依其註冊或使用之狀態，受商標法及公平交易法等之保護，未經永豐雲端印刷網事前書面同意，您同意不以任何方式使用永豐雲端印刷網商標。
        </p>
        <p class="termTitle mt-30"></p> 11.您對永豐雲端印刷網之授權
        <p class="text-justify termDetailUnorder">
          若您無合法權利得授權他人使用、修改、重製、公開播送、改作、散布、發行、公開發表某資料，並將前述權利轉授權第三人，請勿擅自將該資料上載、傳送、輸入或提供予永豐雲端印刷網。您應保證您上傳至永豐雲端印刷網之資料，不致侵害任何第三人之智慧財產權，否則應對永豐雲端印刷網負損害賠償責任
        </p> 
        <p class="termTitle mt-30">
          12.一般條款  
        </p>
        <p class="text-justify termDetail">
          (a)本服務條款構成您與永豐雲端印刷網就您使用本服務之完整合意，取代您先前與永豐雲端印刷網間有關本服務所為之任何約定。您於使用或購買特定永豐雲端印刷網服務、關係企業服務、第三方內容或軟體時，可能亦須適用額外條款或條件。本服務條款之解釋與適用，以及與本服務條款有關的任何爭議，除法律另有規定者外，均應依照中華民國法律予以處理，並以台灣台北地方法院為第一審管轄法院。
        </p>
        <p class="text-justify termDetail">
          (b)永豐雲端印刷網未行使或執行本服務條款任何權利或規定，不構成前開權利或規定之棄權。若任何本服務條款規定，經有管轄權之法院認定無效，當事人仍同意法院應努力使當事人於前開規定所表達之真意生效，且本服務條款之其他規定仍應完全有效。
        </p>
        <p class="text-justify termDetail">
          (c)您同意您的永豐雲端印刷網帳號係不可轉讓，且您永豐雲端印刷網帳號或帳號中內容之任何權利，於您死亡時即立刻終止。於永豐雲端印刷網接獲您的死亡證明文件時，您的帳號將被終止，且其所有內容將被永久刪除。本服務條款之標題僅係為方便起見，不具任何法律或契約效果。若有任何違反本服務條款之行為，請立即與永豐雲端印刷網客服聯絡。
        </p>
        <p class="termTitle mt-30">
          13.系統中斷或故障  
        </p> 
        <p class="text-justify termDetailUnorder">
          本服務有時可能會出現中斷或故障等現象，或許將造成您使用上的不便、資料喪失、錯誤、遭人篡改或其他經濟上損失等情形。您於使用本服務時宜自行採取防護措施。永豐雲端印刷網對於您因使用 ( 或無法使用 ) 本服務而造成的損害，除故意或重大過失外，不負任何賠償責任。
        </p> 
        <p class="termTitle mt-30">
          14.廣告
        </p>
        <p class="text-justify mb-8 termDetailUnorder">
          您在本服務中瀏覽到的所有廣告內容、文字與圖片之說明、展示樣品或其他銷售資訊，均由各該廣告商、產品與服務的供應商所設計與提出。您對於廣告之正確性與可信度應自行斟酌與判斷。永豐雲端印刷網僅接受委託予以刊登，不對前述廣告負擔保責任。
        </p> 
      </div>
      {{-- footer --}}
      <div class="container-fluid border-top px-0 footer">
        <footer class="container">
          @yield('footer')
        </footer>
      </div>
    </div>
  @endsection