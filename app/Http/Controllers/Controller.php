<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $menu;
    // 產品全部大類
    public $totalCategory = Array();
    public $categoryId = Array();
    public function __construct() {
        $data = $this->callAPI('GET','product/getmenu');
        $this->menu = json_decode($data)->data;
        
        foreach($this->menu as $item) {
            if(!in_array($item->productCategory, $this->totalCategory)) {
                $this->totalCategory[] = $item->productCategory;
                $this->categoryId[] = $item->categoryId;
            }
        }
        // 計算各大類下的產品數量(用來決定是否要讓下拉選單可連到大類頁)
        // 建新array 對應大類總數
        $eachCategoryNumber = array_fill( 0, count($this->totalCategory), 0);
        // 某個大類下有幾個產品，過濾出產品的ID，先設空array
        $eachCategoryProduct = array_fill( 0, count($this->totalCategory), []);
        foreach($this->menu as $item) {
            foreach($this->totalCategory as $idx => $item1) {
                if($item->productCategory === $item1) {
                    $eachCategoryNumber[$idx] += 1;
                    $eachCategoryProduct[] = $item->productId;
                }
            }
        }
    }
    // call api Method
    public function callAPI($method,$url) {
            // create & initialize a curl session
            $API_PATH = env('API_PATh').$url;
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // default 都為true 需設false才能取值回來
            curl_setopt($curl, CURLOPT_HEADER, false); //設定是否輸出頁面內容   
            // return the transfer as a string, also with setopt()
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //如果成功只將結果返回，不自動輸出任何內容。設定是否顯示header資訊
            
            switch($method){
                   case 'GET':
                    // set our url with curl_setopt()
                    curl_setopt($curl, CURLOPT_URL, $API_PATH);
                    //curl_setopt($curl, CURLOPT_REFERER, $API_PATH); //在HTTP請求中包含一個"referer"heder的字串。

                    break;
            }
           
            // curl_exec() executes the started curl session
            // $output contains the output string
            $output = curl_exec($curl);

            // close curl resource to free up system resources
            // (deletes the variable made by curl_init)
            curl_close($curl);
            
            //把前面的BOM去掉            
            $result = trim($output, "\xEF\xBB\xBF");
            
            return   $result;
    }
}
