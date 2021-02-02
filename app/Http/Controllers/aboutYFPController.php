<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutYFPController extends Controller
{
    //init
    public function init() {
        // 選單 or footer 用
        $totalCategory = $this->totalCategory;
        $menu = $this->menu;
        $categoryId = $this->categoryId;
        parent::__construct();
        return View('aboutYFP',['totalCategory'=>$totalCategory,'menu'=>$menu,'categoryId'=>$categoryId]);
    }
}
