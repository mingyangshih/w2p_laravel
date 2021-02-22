<template>
    <div>
        <p class="productTitle">{{standardTitle}}</p>
        <p class="text-primary font-weight-bold secondTitle">選擇規格/尺寸</p>
        <p class="font-weight-bold">規格</p>
        <div class="d-flex align-items-end mb-3">
            <div class="d-flex flex-column align-items-center schematic" v-for="item in productSpec" @click.prevent="direction = item.specName; specId =item.specId;">
                <img :src="'/'+item.specThumbnail" :alt="item.specName" class="mb-2" :class="{'selected' : item.specName === direction}">
                <span class="fz12">{{item.specName}}</span>
            </div>
        </div>
        <div class="d-flex align-items-center mb-3">
            <label for="">尺寸</label>
            <select name="" id="size" class="form-control w-75 ml-3" v-model="sizeId">
                <option v-for="item in productSize" :value="item.sizeId">{{item.sizeDesc}}</option>
            </select>
        </div>
        <hr>
        <p class="text-primary font-weight-bold secondTitle">產品資訊</p>
        <div class="row">
            <div class="col-4">
                <p>規格</p>
            </div>
            <div class="col-8">
                <p>{{direction}}</p>
            </div>
        </div>
        <div class="row" v-for="(itm,idx) in specIdSizeIdInfo.productIntroLeftCol">
            <div class="col-4">
               <p>{{itm}}</p> 
            </div>
            <div class="col-8">
                <p v-if="specIdSizeIdInfo.productIntroId[idx] === '6'" v-html="'付款後' + specIdSizeIdInfo.productIntroRightCol[idx] + '個工作天寄出'"></p>
                <p v-else v-html="specIdSizeIdInfo.productIntroRightCol[idx]"></p>
            </div>
        </div>
        <hr class="mt-0">
        <!-- 沒有活動用這個 -->
        <div class="newPlatform text-primary d-flex font-weight-bold my-3" v-if="specIdSizeIdInfo.discountprice === null">
            <span v-html="standardPageNotify" ></span>
            <p class="mb-0 soldPrice">
                <span class="fz26">NT {{specIdSizeIdInfo.price}}</span>
                <span class="ml-2" v-if="specIdSizeIdInfo.priceRange">起</span>
            </p>
        </div>
        <!-- 活動用這個 -->
        <div class="newPlatform text-primary d-flex font-weight-bold my-3 align-items-center" v-else>
            <span v-html="standardPageNotify"></span>
            <p class="mb-0 discountStyle soldPrice" ><span class="d-flex">NT {{specIdSizeIdInfo.price}}</span><span class="ml-2" v-if="specId_sizeId_info.priceRange">起</span></p>
            <div class="text-danger activityPrice" v-html="specIdSizeIdInfo.discountprice"></div>
        </div>
        <!-- 編輯連結 -->
        <div class="d-flex btnBox">
            <a href="" class="btn btn-outline-primary font-weight-bold btnInPage teachEdit" v-if="materialPage === 'Y'">紙材介紹</a>
            <a href="/servicecontent" class="btn btn-outline-primary font-weight-bold btnInPage teachEdit">編輯教學</a>
            <a :href="specIdSizeIdInfo.link" class="btn btn-primary font-weight-bold btnInPage py-0 text-white startEdit" v-if="specIdSizeIdInfo.cnt === 1">開始製作</a>
            <a href="" v-if="specIdSizeIdInfo.cnt !== 1" class="btn btn-primary font-weight-bold btnInPage py-0 text-white chooseStyle">選擇風格</a>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                // 方向
                direction: '',
                // 對應方向
                specId: null,
                // 規格名稱
                standardTitle:'',
                // 右上方小圖
                productSpec:[],
                // 全部資料
                productItem:[],
                // 對應尺寸
                sizeId: null,
                // 價格
                price: null,
                // 規格頁數選資料
                productIntroDesc: [],
                standardPageNotify : process.env.MIX_STANDARD,
                // 判斷是否進紙材
                productMaster:[],
                materialPage: null,
            }            
        },
        computed:{
            productSize() {
                let vm = this
                let productSize = []
                vm.productSpec.forEach(item => {
                    if(item.specId === vm.specId) {
                        productSize = item.productSize
                        vm.sizeId = item.productSize[0].sizeId
                    }
                })
                return productSize
            },
            specIdSizeIdInfo() {
                let productIntroLeftCol = []
                let productIntroRightCol = []
                let productIntroId = []
                let link = null
                let price = null
                let priceRange = null
                let cnt = null
                let vm = this
                let discountprice = null
                // 取得判斷是否要進到風格的cnt
                vm.productSpec.forEach(itm =>{
                    itm.productSize.forEach(item => {
                        if(item.sizeId === vm.sizeId) {
                            cnt = item.cnt
                        }
                    })
                })
                // 用specid and sizeid 篩選價錢跟編輯連結
                vm.productItem.forEach(itm => {
                    if(itm.specId === vm.specId && itm.sizeId === vm.sizeId) {
                        link = itm.editLink
                        discountprice = itm.discountprice
                        if (itm.price[itm.price.length - 1] === '起') {
                            price = itm.price.substring(0, itm.price.length - 1)
                            priceRange = true
                        } else {
                            price = itm.price
                            priceRange = false
                        }
                    }
                    
                })
                // 組合產品特性
                vm.productIntroDesc.forEach((item,idx) => {
                    productIntroLeftCol.push(item.introName)
                    productIntroId.push(item.productIntroId)
                    if(idx === 0) {
                        vm.productSize.forEach(itm => {
                            if (itm.sizeId === vm.sizeId) productIntroRightCol.push(itm.sizeDesc)
                        })
                    }else{
                        productIntroRightCol.push(item.productIntroDesc)
                    }
                })
                return {link,priceRange,productIntroLeftCol,productIntroRightCol,productIntroId,discountprice,price,cnt}
            }
        },
        async mounted() {
            let API;
            if(process.env.NODE_ENV === 'development'){
                API = process.env.MIX_API_PATH
            }else{
                API = process.env.MIX_API_PATH_REAL
            }
            let vm = this
            let id = window.location.pathname.replace(/\/standard\//,'')
            await fetch(`${API}product/getdetail/${id}`).then(function(response) {
                return response.json();
            }).then(function(rep) {
                let {productSpec, productItem, productFeature, productRecommend, productMaster, productIntroDesc} = rep.data
                vm.productSpec = productSpec
                vm.productItem = productItem
                vm.productIntroDesc = productIntroDesc
                vm.productMaster = productMaster
                vm.materialPage = vm.productMaster[0].materialPage
                vm.standardTitle = productItem[0].productName
                let categoryName = productItem[0].categoryName
                let categoryId = productItem[0].categoryId
                let productId = productItem[0].productId
                
                
                vm.direction = productSpec[0].specName
                vm.specId = productSpec[0].specId
                vm.sizeId = productSpec[0].productSize[0].sizeId
            });
        }
    }
</script>

<style lang="scss" scoped>
    .fz12{
        font-size:12px;
    }
    .productTitle{
        font-size: 24px;
        font-weight: bold;
    }
    @media(max-width:640px){
        .productTitle{
            margin-top: 16px;
        }
    }
    .secondTitle{
        font-size: 18px;
    }
    .schematic{
        img{
        max-width: 50%;
        opacity: .5;
            &.selected{
                opacity: 1;
            }
        }
        cursor: pointer;

    }
    @media(min-width: 640px){
        .schematic{
            &:hover{
                opacity: .5;
            }
        }
    }
    @media(max-width: 641px){
        .newPlatform{
            flex-direction: column;
        }
    }
    @media(max-width: 641px){
        .soldPrice{
            display: flex;
            flex-shrink: 0;
        }
    }
    @media(min-width: 640px){
        .soldPrice{
            margin-left: auto;
            white-space:nowrap;
            display:flex;
            flex-shrink: 0;
            align-items: center;
        }
    }
    @media(max-width:641px){
        .soldPrice{
            display:flex;
            flex-shrink: 0;
            align-items: center;
        }
    }
    // 頁面中的Btn樣式

  .btnBox{
    justify-content: flex-end;
  }

  .btnInPage{
    border-radius: 5px;
    width: 203px;
    height: 39px;
    font-size: 21px;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    align-items: center;
    .fa-chevron-right{
      margin-left: 37px;
    }
  }
  @media(min-width:813px){
    .btnInPage{
      padding-left: 0;
      &.teachEdit{
        margin:0 8px;
      }
      &.startEdit{
        margin:0 8px;
      }
    }
  }
  @media(max-width: 812px){
    .btnBox{
      justify-content: center;
      flex-wrap: wrap;
    }
    .btnInPage{
      padding-left: 0;
      margin-bottom: 8px;
      &.teachEdit{
        width:100%;
        margin-bottom:8px;
      }
      &.startEdit,&.chooseStyle{
        width: 100%;
      }
    }
  }
</style>
