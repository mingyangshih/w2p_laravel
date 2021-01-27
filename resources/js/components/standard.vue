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
                standardTitle:'',
                productSpec:[]
            }            
        },
        mounted() {
            let vm = this
            let id = window.location.pathname.replace(/\/standard\//,'')
            fetch(`https://dev-api.cloudw2p.com/api/v1/product/getdetail/${id}`).then(function(response) {
                return response.json();
            })
            .then(function(rep) {
                let {productSpec, productItem, productFeature, productRecommend, productMaster, productIntroDesc} = rep.data
                let standardTitle = productItem[0].productName
                let categoryName = productItem[0].categoryName
                let categoryId = productItem[0].categoryId
                let productId = productItem[0].productId
                vm.standardTitle = standardTitle
                vm.productSpec = productSpec
                vm.direction = productSpec[0].specName
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

</style>
