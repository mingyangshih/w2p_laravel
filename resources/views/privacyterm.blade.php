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
  {{-- privacy term --}}
  <div class="privacyterm">
    <div class="container px-0">
      <div class="pageTitle text-center my-30">
        隱私保護條款
      </div> 
    </div>
    <div class="container px-4">
      <p class="termTitle">
        隱私權政策(適用於台灣地區)
      </p>
      <p class="termDetail termDetailUnorder">
        永豐雲端印刷網網站非常重視個人資料的保護，同時也承諾保障您的隱私權，因此制訂了隱私權保護政策。請細讀以下有關隱私權保護政策的內容。
      </p>
      <p class="termTitle">
        1.歡迎您加入成為永豐雲端印刷網網站的會員
      </p>
      <p class="termDetail text-justify">
        (a)非常歡迎您加入成為會員！當您在會員資料登記之電子郵件信箱中收到永豐雲端印刷網網站所發出會員資料確認信並確認加入會員之後，表示您已經閱讀、瞭解且同意接受本條款所有的內容與約定，並完全接受本服務現有與未來衍生之服務項目。
      </p>
      <p class="termDetail text-justify">
        (b)永豐雲端印刷網網站有權於任何時間基於需要而修改或變更本條款內容，修改後的條款內容將公佈在永豐雲端印刷網網站上，本公司將不會個別通知會員，建議您隨時注意相關修改與變更。您於任何修改或變更之後繼續使用本服務，將視為您已經詳細閱讀、瞭解且同意已完成之相關修改與變更。如果您不同意本條款的內容，您應立即停止使用本服務。  
      </p> 
      <p class="termDetail text-justify">
        (c)永豐雲端印刷網網站所提供的服務範圍，包括 www.網域下所有網站，以及未來所有可能衍生，屬於永豐雲端印刷網網站並包括使用永豐雲端印刷網網站所提供金流、物流與資訊流平台之所有網站、實體等服務。其服務內容包括但不限於電子郵件或其他方式進行商品行銷資訊之提供。本公司得依實際情形，增加、修改或是終止相關服務。  
      </p> 
      <p class="termTitle">
        2.隱私權保護政策的適用範圍  
      </p> 
      <p class="text-justify termDetailUnorder">
        隱私權保護政策內容，包括永豐雲端印刷網網站如何處理在用戶使用網站服務時收集到的身份識別資料，也包括永豐雲端印刷網網站如何處理在商業伙伴與永豐雲端印刷網網站合作時分享的任何身份識別資料。隱私權保護政策不適用於永豐雲端印刷網網站及商業伙伴以外的公司，也不適用於非永豐雲端印刷網網站所僱用或管理的人員。  
      </p> 
      <p class="termTitle">
        3.資料收集及使用方式  
      </p> 
      <p class="termDetail text-justify">
        (a)永豐雲端印刷網網站在您註冊永豐雲端印刷網網站之帳號、使用永豐雲端印刷網網站的產品或服務、瀏覽永豐雲端印刷網網站網頁、參加宣傳活動或贈獎遊戲時，永豐雲端印刷網網站會收集您的個人識別資料。永豐雲端印刷網網站也可以從商業夥伴處取得個人資料。
      </p> 
      <p class="termDetail text-justify">
        (b)當您在永豐雲端印刷網網站註冊時，我們會問及您的姓名、電子郵件地址、出生日期、性別、職位、行業及個人興趣等資料。永豐雲端印刷網網站也自動接收並紀錄您瀏覽器上的伺服器數值，包括互聯網協定位址 (IP Address) 、永豐雲端印刷網網站cookie中的資料及您要求取用的網頁紀錄。
      </p> 
      <p class="termDetail text-justify">
        (c)永豐雲端印刷網網站會使用資料作以下用途：改進為您提供的廣告及網頁內容、完成您對某項產品的要求及通知您特別活動或新產品。
      </p>
      <p class="termTitle">
        4.資料分享以及公開方式  
      </p> 
      <p class="text-justify termDetailUnorder">
        永豐雲端印刷網網站對於您所登錄或留存之個人資料，在未獲得您的同意以前，絕不對非本公司相關商業伙伴以外之人揭露您的姓名、地址、電子郵件地址及其他依法受保護之個人資料。同時為提供行銷、市場分析或研究、或為提供會員個人化服務或加值服務之目的，您同意本公司、或本公司之商業伙伴，得記錄、保存、並利用您在本網站所留存或產生之資料及記錄，同時在不揭露各該資料之情形下，得公開或使用統計資料。
      </p> 
      <p class="text-justify termDetailUnorder">
        在以下的情況下，永豐雲端印刷網網站會向政府機關、商業伙伴提供您的個人識別資料：
      </p> 
      <p class="termDetail text-justify">
        (a)與商業伙伴共用資料前取得您的同意。
      </p> 
      <p class="termDetail text-justify">
        (b)需要商業伙伴共用您的資料，才能夠提供您要求的產品或服務。
      </p> 
      <p class="termDetail text-justify">
        (c)向代表永豐雲端印刷網網站提供商業伙伴資料，以便向您提供產品或服務。
      </p> 
      <p class="termDetail text-justify">
        (d)應遵守法令或政府機關的要求。
      </p> 
      <p class="termDetail text-justify">
        (e)我們發覺您在網站上的行為違反永豐雲端印刷網網站服務條款或產品、服務的特定使用指南。
      </p> 
      <p class="text-justify termDetailUnorder">
        為了保護使用者個人隱私，我們無法為您查詢其他使用者的帳號資料，若您有相關法律上問題需查閱他人資料時，請務必向警政單位提出告訴，我們將全力配合警政單位調查並提供所有相關資料，以協助調查及破案！
      </p> 
      <p class="text-justify termDetailUnorder">
        關於您所登錄或留存之個人資料及其他特定資料 ( 例如交易資料 ) ，悉依永豐雲端印刷網網站「隱私權保護政策」受到保護與規範。
      </p>
      <p class="termTitle">
        5.Cookies  
      </p> 
      <p class="text-justify termDetailUnorder">
        永豐雲端印刷網網站會到您的電腦設定並取用永豐雲端印刷網網站cookie。永豐雲端印刷網網站容許在網頁上擺放廣告的廠商到您的電腦設定並取用cookie。其他公司將根據其自訂的隱私權保護政策，而並非本政策使用其cookie。其他廣告商或公司不能提取永豐雲端印刷網網站的cookie。
      </p> 
      <p class="termTitle">
        6.安全付款機制
      </p> 
      <p class="text-justify termDetailUnorder">
        永豐雲端印刷網網站提供您以下2種安全且便利之付款方式：
      </p> 
      <p class="text-justify termDetail">
        (a)信用卡線上刷卡：永豐雲端印刷網網站採用與銀行相同等級的「SSL 128 Bit 安全加密機制保障」，透過網路使用線上刷卡，您的個人及信用卡資料絕不外洩。
      </p> 
      <p class="text-justify termDetail">
        (b)ATM付款：永豐雲端印刷網網站採用虛擬ATM付款，每筆訂單產生唯一的匯款帳號，相同帳號相同金額，銀行才會接受您的款項。
      </p> 
      <p class="text-justify termDetail">
        (c)為保障您的隱私及安全，您的永豐雲端印刷網網站帳號資料會用密碼保護。在部分情況下永豐雲端印刷網網站使用通行標準的SSL保全系統，保障資料傳送的安全。
      </p>
      <p class="termTitle">
        7.隱私權保護政策修訂
      </p> 
      <p class="text-justify termDetailUnorder">
        永豐雲端印刷網網站可以不時修訂本政策。當我們在使用個人資料的規定上作出大修改時，我們會在網頁上張貼告示，通知您相關事項。
      </p>
      <p class="termTitle">
        8.智慧財產權
      </p> 
      <p class="text-justify termDetail">
        (a)永豐雲端印刷網網站所使用之軟體或程式、網站上所有內容，包括但不限於著作、圖片、檔案、資訊、資料、網站架構、網站畫面的安排、網頁設計，除永豐雲端印刷網網站有特別約定外，皆由永豐雲端印刷網網站或其他權利人依法擁有其智慧財產權，包括但不限於商標權、專利權、著作權、營業秘密與專有技術等。
      </p> 
      <p class="text-justify termDetail">
        (b)任何人不得擅自使用、修改、重製、公開播送、改作、散布、發行、公開發表、進行還原工程、解編或反向組譯。任何人欲引用或轉載前述軟體、程式或網站內容，必須依法取得永豐雲端印刷網網站或其他權利人的事前書面同意。如有違反，您應對永豐雲端印刷網網站負損害賠償責任 ( 包括但不限於訴訟費用及律師費用等 ) 。
      </p>
      <p class="termTitle">
        9.本條款之效力、準據法與管轄法院
      </p> 
      <p class="text-justify termDetail">
        (a)本條款中，任何條款之全部或部份無效時，不影響其他約定之效力。
      </p> 
      <p class="text-justify termDetail">
        (b)您與永豐雲端印刷網網站之權利義務關係，應依網路交易指導原則及中華民國法律定之；若發生任何爭議，以台灣台北地方法院為第一審管轄法院。本公司的任何聲明、條款如有未盡完善之處，將以最大誠意，實信用、平等互惠原則，共商解決之道。
      </p>
      <p class="termTitle">
        10.其他事項
      </p> 
      <p class="text-justify termDetail">
        (a)本站以您註冊時所設定之帳號、密碼作為辨識會員的依據，請妥善保管、記憶您的帳號與密碼，並請勿將之交付或告知他人，以保護自身權益。
      </p> 
      <p class="text-justify termDetail">
        (b)您同意不會使用本網站進行任何非法或不當之行為，並保證您所提供之資料為您本人的真實資料，或已得當事人合法授權之資料。如您提供任何足以侵害他人或本網站或網站維運機構權益之資料，或為其他足以損害他人或本網站或網站維運機構之行為，我們可能會將您的帳號予以停權或刪除；且若任何人因您所提供之資料或您的行為而受任何損害，您將負擔完全之民、刑事或行政責任。
      </p>
      <p class="termTitle">
        個人資料保護政策
      </p> 
      <p class="text-justify termDetailUnorder">
        為提供給您更多完善及多元之服務及商品，對於您所提供永豐雲端印刷網與之個人資料，將依個人資料保護法之規定來使用、保管您之個人資料，並維護您的隱私權。同時，本網站在此對於您個人資料之使用蒐集將依下列聲明為利用、管理。
      </p>
      <p class="termTitle">
        1.個人資料收集目的
      </p> 
      <p class="text-justify termDetail">
        (a)永豐雲端印刷網網站在您註冊永豐雲端印刷網網站之帳號、使用永豐雲端印刷網網站的產品或服務、瀏覽永豐雲端印刷網網站網頁、參加宣傳活動或贈獎遊戲時，永豐雲端印刷網網站會收集您的個人識別資料，也可以從商業伙伴處取得個人資料。
      </p> 
      <p class="text-justify termDetail">
        (b)當您在永豐雲端印刷網網站註冊時，我們會問及您的姓名、電子郵件地址、出生日期、性別及個人興趣等資料。永豐雲端印刷網網站也自動接收並紀錄您瀏覽器上的伺服器數值，包括互聯網協定位址 (IP Address) 、永豐雲端印刷網網站cookie中的資料及您要求取用的網頁紀錄。
      </p> 
      <p class="text-justify termDetail">
        (c)永豐雲端印刷網網站會使用資料作以下用途：商業交易、會員管理、行銷、物流配送、客服聯繫、客訴聯繫處理、活動或廣告通知、資訊與資料庫管理、統計調查與分析、其他合於營業登記項目或章程所定業務之需要等目的，蒐集並於前述目的範圍內利用您所提供之個人資料。
      </p> 
      <p class="termTitle">
        2.個人資料適用範圍
      </p> 
      <p class="text-justify termDetail">
        (a)包括永豐雲端印刷網網站如何處理在用戶使用網站服務時收集到的身份識別資料，也包括永豐雲端印刷網網站如何處理在商業伙伴與永豐雲端印刷網網站合作時分享的任何身份識別資料。隱私權保護政策不適用於永豐雲端印刷網網站及商業伙伴以外的公司，也不適用於非永豐雲端印刷網網站所僱用或管理的人員。
      </p> 
      <p class="termTitle">
        3.個人資料利用之期間、地區、對象及蒐集與利用方式
      </p> 
      <p class="text-justify termDetail">
        (a)利用之期間：永豐雲端印刷網上個人資料(會員、設計師、交易紀錄)若未收到使用者告知要求刪除，在未影響永豐雲端印刷網正常運作使用狀況下，將使用至您提出停止使用或永豐雲端印刷網停止提供服務之日為止。但永豐雲端印刷網保有刪除相關個資的權利。
      </p> 
      <p class="text-justify termDetail"> 
        (b)永豐雲端印刷網個人資料保護政策適用於台灣地區。
      </p> 
      <p class="text-justify termDetail">
        (c)蒐集方式：當您使用永豐雲端印刷網服務及商品時，本網站基於服務之提供或商品之銷售，將會請您填寫服務所需之相關資料(EX.會員註冊申請、商品宅配資料、退款、兌換贈品等其他行銷活動或基於服務需要)，而取得您的基本資料。
      </p> 
      <p class="text-justify termDetail">
        (d)利用對象：永豐雲端印刷網、永豐雲端印刷網物流等商業伙伴。
      </p> 
      <p class="text-justify termDetail">
        (e)利用方式：符合個人資料保護相關法令以自動化機器或其他非自動化之利用方式之蒐集、處理、傳輸、印刷用。
      </p> 
      <p class="termTitle">
        4.當事人得自由選擇提供個人資料時，不提供將對其權益之影響
      </p> 
      <p class="text-justify termDetailUnorder">
        本網站係一提供網路印刷服務之網站，您得自由選擇提供個人資料之程度，惟若提供之資料不足或有誤時，本網站將無法提供當事人網路印刷及配送完整之服務。如此，將影響當事人之購買機會。
      </p> 
      <p class="termTitle">
        5.個人資料儲存及保管方式
      </p> 
      <p class="text-justify termDetailUnorder">
        您的個人資料均被嚴密地保存在本公司的資料庫系統中。同時，任何人均需在本公司訂定之資料授權管理規範下，進行資料之取得與使用，而不在授權範圍內之任何人，均不得亦無法通過授權控管系統而取得資料。
      </p> 
      <p class="termTitle">
        6.個人資料揭露對象
      </p> 
      <p class="text-justify termDetailUnorder">
        我們絕對不會任意出售、交換、出租或以其他變相之方式，將您的個人資料揭露與其他團體或個人。惟有下列三種情形，我們會與第三者共用您的個人資料。
      </p> 
      <p class="text-justify termDetail">
        (a)經過您的事前同意或授權允許時。
      </p> 
      <p class="text-justify termDetail">
        (b)司法單位或其他主管機關經合法正式的程序要求時。
      </p> 
      <p class="text-justify termDetail">
        (c)為了提供您其他服務或優惠權益，需要與提供該服務或優惠之商業伙伴共用您的資料時，我們會在活動時提供充分說明並告知，您可以自由選擇是否接受這項服務或優惠。
      </p>
      <p class="termTitle">
        7.當事人個人資料變更修改方式
      </p> 
      <p class="text-justify termDetail">
        (a)當事人個人資料得自行登錄本站會員系統，至我的訂單會員中心項次，選資料修改，以查詢、閱覽、複製、補充、更正您的個人資料。
      </p> 
      <p class="text-justify termDetail">
        (b)您得就您留於本網站之個人資料依法向本網站以書面或電子文件請求行使:查詢或請求閱覽、製給複製本、補充或更正、請求停止蒐集、處理或利用、請求刪除等權利。惟上述權利，若因會員不符合申請程序或法律規定，或本網站依法負有保存義務，或法律另有規定之情況者，則不在此限。
      </p> 
      <p class="text-justify termDetail">
        (c)如果您就您的會員註冊資料向本網站請求答覆查詢、提供閱覽或製給複製本時，本網站將酌收必要成本費用。而前述之申請，應填具申請文件 ，本網站得向您請求提出可資確認之身分證明文件;若委託他人代為申請者，並應出具委任書，且提供本人及代理人之身分證明文件。
      </p> 
      <p class="text-justify termDetail">
        (d)如果您無法自網站項自行修改相關個人資料，可自網站聯絡我們或致電本網站客服中心修正您的個人資料。
      </p> 
      <p class="text-justify termDetail">
        (e)本網站協助您執行本項需求時可能因此刪除您的銷售紀錄及紅利點數，本網站於取得您同意後，即進行資料之移除或停止使用相關程序。
      </p>
      <p class="termTitle">
        8.選擇退出方式
      </p> 
      <p class="text-justify termDetailUnorder">
        如果您不願意將您的資料提供予永豐雲端印刷網或永豐雲端印刷網之商業伙伴使用，您也可自網站聯絡我們或致電本網站客服中心，我們將於停止您的資料繼續使用。您得自由選擇提供個人資料之程度，惟若提供之資料不足或有誤時，永豐雲端印刷網則可能將無法提供完整之服務。
      </p> 
      <p class="termTitle">
        9.個人資料及隱私保護諮詢
      </p> 
      <p class="text-justify termDetailUnorder">
        如果您對於我們的隱私權保護政策或是有個人資料蒐集、利用、更新等問題，請於上班時間聯絡：
      </p> 
      <p class="termDetailUnorder text-justify">
        服務時間：週一至週五 ( 非例假日 )，10:00 ~ 12:00 及 13:00 ~ 17:00
      </p> 
      <p class="termDetailUnorder text-justify">
        客服電話：02-2266-8944 Ext.8800
      </p> 
      <p class="termDetailUnorder text-justify">
        客服傳真：02-2266-5451
      </p> 
      <p class="termDetailUnorder text-justify mb-8">
        客服信箱：services@cloudw2p.com
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