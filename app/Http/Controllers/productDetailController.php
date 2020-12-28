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
        $getSubMenu = json_decode($this->callAPI('GET','product/getsubmenu/'.$id))->data[0];
        if($getSubMenu->categoryBanner === null) {
            return redirect('/');
        }else{
            return View('productdetail',['totalCategory' => $totalCategory, 'menu' => $menu, 'getSubMenu' => $getSubMenu, 'categoryId'=>$categoryId]);
        }
        
    }
}
