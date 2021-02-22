<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class buyAndTakeController extends Controller
{
    public function init() {
        // 選單 or footer 用
        $totalCategory = $this->totalCategory;
        $menu = $this->menu;
        $categoryId = $this->categoryId;
        parent::__construct();
        return View('buyAndTake',['totalCategory'=>$totalCategory,'menu'=>$menu,'categoryId'=>$categoryId]);
    }
}
