<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productDetailController extends Controller
{
    //
    public function init($id) {
        // 
        $home = new homeController();
        // navbar footer data
        parent::__construct();
        $menu = $this->menu;
        $totalCategory = $this->totalCategory;
        $categoryId = $this->categoryId;
        $productDetailData = json_decode($this->callAPI('GET','product/getsubmenu/'.$id));
        
        if(count($productDetailData->data) === 0 || $productDetailData->data[0]->categoryBanner === null) {
            return redirect('/');
        }else{
            $getSubMenu = $productDetailData->data[0];
            return View('productdetail',['totalCategory' => $totalCategory, 'menu' => $menu, 'getSubMenu' => $getSubMenu, 'categoryId'=>$categoryId]);
        }
        
    }
}
