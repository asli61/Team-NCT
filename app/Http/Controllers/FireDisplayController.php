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
        $fireTable = FireTableInput::orderBy("id","desc")->take(1000)->get();
        $fireTime = Carbon::parse($fireTable["created_at"]);
        $fireArray = [];

        $var2 = FireTableInput::where(Carbon::parse("created_at") + 2 > now())->get();

        foreach($fireTable as $fires)
        {
            $fireArray[] = $fires;
        }

        return view("fire-display")->with("fires", $fireArray);
    }
}
