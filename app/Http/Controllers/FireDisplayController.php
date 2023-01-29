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

        $request = request()->all();

        if(($request["city"]) == "0")
        {
            redirect(route("home"));
        }

        $fireTable = FireTableInput::with("productInfo")->orderBy("created_at","desc")->take(1000)->get();

        $fireArray = [];
        $adressArray = [];
        $serialArray = [];

        foreach($fireTable as $fires)
        {
            if($fires["created_at"] > now()->subHours(48))
            {
                if($fires->productInfo->city == $request["city"])
                {
                    $fireArray[] = $fires;
                    $adressArray[] = $fires->productInfo->adress;
                    $serialArray[] = $fires->productInfo->serial_number;
                }
            }     

            else
            {
                return view("fire-display")->with(["fires" => $fireArray, "adress" => $adressArray, "serial" => $serialArray]);
            }
        }
        //return view("fire-display")->with("fires", $fireArray);
        return redirect("catch");
    }
}
