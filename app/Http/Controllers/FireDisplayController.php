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
        //$fireTable = FireTableInput::all();
        $fireTable = FireTableInput::orderBy("created_at","desc")->take(1000)->get();//go on here
        foreach($fireTable as $adress)
        {
            $var = $adress->product_id;
        }

        $fireArray = [];

        foreach($fireTable as $fires)
        {
            if($fires["created_at"] > now()->subHours(2))
            {
                $fireArray[] = $fires;
            }
            else
            {
                return view("fire-display")->with("fires", $fireArray);
            }
        }
    }
}
