<template>
  <div class="contactus">
    <div class="desktopContent">
      <hr>
      <div class="d-flex align-items-center">
        <div class="col-md-3">
          <p>客服信箱</p>
        </div>
        <div class="col-md-9">
          <p>services@cloudw2p.com</p>
        </div>
      </div>
      <div class="d-flex aligm-items-center">
        <div class="col-md-3">
          <p>客服時間</p>
        </div>
        <div class="col-md-9">
          <p>週一至週五 ( 非例假日 )，10:00 ~ 12:00 及 13:00 ~ 17:00</p>
        </div>
      </div>
      <div class="d-flex align-items-center mb-3">
        <div class="col-md-3">
          <p>姓名</p> 
        </div>
        <div class="col-md-9">
          <input type="text" v-model="contactInfo.name" class="form-control rounded-0">    
          <p class="mb-0 text-danger text-right fz14" v-if="contactInfo.name === '' && emptyInput.indexOf(0) > -1">此欄位必填</p>
        </div>          
      </div>
      <div class="d-flex align-items-center mb-3">
        <div class="col-md-3">
          <p>電話</p> 
        </div>          
        <div class="col-md-9">
          <input type="text" v-model="contactInfo.phone" class="form-control rounded-0">
          <p class="mb-0 text-danger text-right fz14" v-if="contactInfo.phone === '' && emptyInput.indexOf(1) > -1">此欄位必填</p> 
        </div>          
      </div>
      <div class="d-flex align-items-center mb-3">
        <div class="col-md-3">
          <p>Email</p> 
        </div>          
        <div class="col-md-9">
          <input type="text" v-model="contactInfo.email" class="form-control rounded-0">
          <p class="mb-0 text-danger text-right fz14" v-if="contactInfo.email === '' && emptyInput.indexOf(2) > -1">此欄位必填</p> 
        </div>
      </div>
      <div class="d-flex align-items-center mb-3">
        <div class="col-md-3">
          <p>您的留言</p> 
        </div>          
        <div class="col-md-9">
          <textarea name="" id="" cols="30" rows="10" v-model="contactInfo.message" class="form-control rounded-0"></textarea>
          <p class="mb-0 text-danger text-right fz14" v-if="contactInfo.message === '' && emptyInput.indexOf(3) > -1">此欄位必填</p> 
        </div>
      </div>
      <div class="d-flex align-items-center mb-3">
        <div class="col-md-3"></div>
        <div class="col-md-9">
          <p>
            如一直收不到回覆信件，請查明您的垃圾信件夾，並將 services@cloudw2p.com 加入通訊錄喔！上列您填入的資料，僅在雲端印刷網上交易使用，不會作為其他用途使用。以上資料請仔細填寫，聯絡將以此資料為主，謝謝您的填寫。
          </p> 
        </div>          
      </div>
      <div class="d-flex justify-content-end">
        <div class="col-md-3"></div>
        <div class="col-md-9 px-0">
          <div class="d-flex align-items-center">
            <img :src="verifyImg" alt="">
            <input type="text" v-model="contactInfo.captcha" class="ml-3 rounded-0 captchaInput mx-auto">
            <button class="btn btn-primary font-weight-bold btnInPage px-0 py-0 text-decoration-none rounded-0" @click="getImage">重產驗證碼</button> 
          </div>
        </div>          
      </div>
    </div>
    <div class="d-flex justify-content-end">
      <button class="btn btn-primary font-weight-bold btnInPage pr-0 py-0 my-3 text-decoration-none" @click="contactus">
         確認送出 <i class="fas fa-chevron-right fa-xs"></i>
      </button>
    </div>
        

  </div>
</template>

<script>
  export default {
    data() {
      return {
        contactInfo: {
          name: '',
          phone: '',
          email: '',
          message: '',
          // 取圖片時回傳的code
          captchacode: '',
          // user 填的
          captcha: ''
        },
        // 用來判斷未填的欄位
        emptyInput: [],
        // getImage回傳值
        verifyImg: '',
        code: '',
        // enter by customer
        verifyCode: ''
      }
    },
    methods:{
      getImage () {
        let vm = this;
        let API;
        if(process.env.NODE_ENV === 'development'){
            API = process.env.MIX_API_PATH
        }else{
            API = process.env.MIX_API_PATH_REAL
        }
        let number = Math.random()
        fetch(`${API}captcha/create?${number}`, {
          method: 'POST'
        }).then(res => {
          return res.json()
        }).then(result => {
          vm.verifyImg = result.imagedata
          vm.contactInfo.captchacode = result.code
        })
      },
      contactus(){
        let vm = this;
        let API;
        let keys = Object.keys(vm.contactInfo)
        let emptyInput = []
        if(process.env.NODE_ENV === 'development'){
            API = process.env.MIX_API_PATH
        }else{
            API = process.env.MIX_API_PATH_REAL
        }
        keys.forEach((itm,idx) => {
          if (vm.contactInfo[itm] === '') emptyInput.push(idx)
        })
        // 判斷是否全部都有填
        if (emptyInput.length > 0) {
          window.alert('請填寫所有欄位')
        }else{
          fetch(`${API}user/sendmail`, {method: 'POST',
            body: JSON.stringify(vm.contactInfo),
            headers: {
              'content-type': 'application/json'
            }}).then(res => {
            return res.json()
          }).then(result => {
          // 先檢查是否全部都有填
          // 回傳0: 寄信成功，回傳-1: 代表寄信失敗
            if (result.error_code === 0) {
              let message = result.error_message
              // 成功彈出視窗
              window.alert(`${message}`);
              // 成功後判斷哪些未填的array清空
              vm.emptyInput = []
              // 成功後把所有input全部清空
              let keys = Object.keys(vm.contactInfo)
              keys.forEach((itm) => {
                vm.contactInfo[itm] = ''
              })
              // 重取圖片
              vm.getImage();
            } else {
              let message = result.error_message
              window.alert(`${message}`);
            }
          })
        }
      }
    },
    created() {
      let vm = this;
      vm.getImage();
    }
  }
</script>

<style lang="scss" scoped>
  @media(max-width:641px){
    .desktopContent{
      display: none;
    }
  }
  .fz14{
    font-size: 14px;
  }
  .title{
    font-size: 24px;
    font-weight: bold;
    font-family: "Noto Serif TC",serif;
  }
  @media(min-width:641px){
    .mobileContent{
      display: none;
    }
  }
  .btnInPage{
    border-radius: 5px;
    width: 203px;
    height: 39px;
    font-size: 21px;
    padding-left: 50px;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    align-items: center;
    .fa-chevron-right{
      margin-left: 37px;
    }
  }
  .captchaInput{
    border: 1px solid black;
    height: 70px;
  }
</style>