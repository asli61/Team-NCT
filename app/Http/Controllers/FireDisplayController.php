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
        
        $adress_var = FireTableInput::with("product_id")->get();//go on here
        foreach($adress_var as $adress)
        {
            echo $adress->producToId->adress;
        }

        $fireTable = FireTableInput::orderBy("created_at","desc")->take(1000)->get();
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
