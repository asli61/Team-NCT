<?php

namespace App\Http\Controllers;

use App\Models\FireTableInput;
use App\Models\ProductInfo;
use Illuminate\Http\Request;

class FireDisplayController extends Controller
{
    public function index()
    {
        
        $var = ProductInfo::with("product_id");//go on here
        $fireTable = FireTableInput::orderBy("id","desc")->take(40)->get();
        $fireArray = [];

        foreach($fireTable as $fires)
        {
            $fireArray[] = $fires;
        }

        return view("fire-display")->with("fires", $fireArray);
    }
}
