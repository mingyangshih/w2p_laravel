<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

/*
 * use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
 * use Illuminate\Foundation\Bus\DispatchesJobs;
 * use Illuminate\Foundation\Validation\ValidatesRequests;
*use Illuminate\Routing\Controller as BaseController;
 */

//use App\Models\User;f

class homeController extends Controller
{
    
    public function getHomeData() {
         parent::__construct();
         $banner = json_decode($this->callAPI('GET','banner/list'));
         //  paramater of getindex.blade.php
         $getIndex = json_decode($this->callAPI('GET','product/getindex'));
         //  paramater of getCategory
         $getCategory = json_decode($this->callAPI('GET','product/getcategory'))->data;
         // banner參數 
         $pc = $banner->data[0]->pc;
         $mb = $banner->data[1]->mobile;
         $totalCategory = $this->totalCategory;
         $menu = $this->menu;
         $categoryId = $this->categoryId;
        //  var_dump($menu);
         return View('home',['pc' => $pc, 'mb' => $mb, 'index' => $getIndex, 'category' => $getCategory, 'totalCategory' => $totalCategory, 'menu' => $menu, 'categoryId'=>$categoryId] );
    }
}

