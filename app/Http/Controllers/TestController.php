<?php
namespace App\Http\Controllers;
//header("Content-Type:text/html;charset=UTF-8");
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
    }

    function getHTTPS($url) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_REFERER, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
    }    

    public function index()
    {
        try 
        {			
            $urlstr="https://dev-api.cloudw2p.com/api/v1/product/getindex";
            echo $urlstr;						
            echo PHP_EOL;			
            $jsonString = $this->getHTTPS($urlstr);
            var_dump($jsonString);                    
           // $data = json_decode($jsonString, true);	        
           // var_dump($data);
        }
        catch(Exception $e) 
        {
            echo $e->getMessage();
        }                
    }
}
