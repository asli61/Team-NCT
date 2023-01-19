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
        
        $var = ProductInfo::with("product_id");//go on here
        $fireTable = FireTableInput::orderBy("created_at","desc")->take(1000)->get();
        //$fireTime = Carbon::parse($fireTable["created_at"]);
        $fireArray = [];

        foreach($fireTable as $fires)
        {
            if($fires["created_at"] > now()->subHours(2))
            {
                $fireArray[] = $fires;
            }
        }

        return view("fire-display")->with("fires", $fireArray);
    }
}
