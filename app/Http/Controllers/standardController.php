<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class standardController extends Controller
{
    // 一進來取call api 再return route
    public function init($id) {
        // call construct of Controller
        parent::__construct();
        // 選單 or footer 用
        $totalCategory = $this->totalCategory;
        $menu = $this->menu;
        $categoryId = $this->categoryId;
        // get standard page data
        // $test=file_get_contents(env('API_PATh').'product/getdetail/'.$id);
        $standardData = json_decode($this->callAPI('GET','product/getdetail/'.$id))->data;
        // var_dump($standardData);
        if($standardData === "") {
            return abort(404);
        }else{
            $productItem = $standardData->productItem;
            $productFeature  = $standardData->productFeature;
            $productRecommend = $standardData->productRecommend;
            // 取得大類ID去call api，取得大類下的所有商品
            $subProducts = json_decode($this->callAPI('GET','product/getsubmenu/'.$productItem[0]->categoryId))->data[0]->subProducts;
            // var_dump($subProducts);
            return View('standard',['id'=>$id,'totalCategory'=>$totalCategory,'menu'=>$menu,'categoryId'=>$categoryId,'productItem'=>$productItem,'productFeature'=>$productFeature,'productRecommend'=>$productRecommend,'subProducts'=>$subProducts]);
        }
    }
}