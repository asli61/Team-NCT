<?php

namespace App\Http\Controllers;

use App\Models\FireTableInput;
use App\Models\ProductInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FireDisplayController extends Controller
{
    public function index()
    {
        /*$fireTable = FireTableInput::select('FireTable.created_at', 'serial_number', "adress")
->join('product_infos', 'product_id', '=', 'product_infos.id')->orderBy("created_at","desc")
->take(1000)
->get();*/
        //$fireTable = FireTableInput::orderBy("created_at","desc")->take(1000)->get();//go on here

        $fireTable = FireTableInput::with("productInfo")->orderBy("created_at","desc")->take(1000)->get();

        $fireArray = [];

        foreach($fireTable as $fires)
        {
            if($fires["created_at"] > now()->subHours(2))
            {
                $fireArray[] = $fires->productId;
            }     

            /*else
            {
                return view("fire-display")->with("fires", $fireArray);
            }*/
        }
        return view("fire-display")->with("fires", $fireArray);
    }
}
