<?php

namespace App\Http\Controllers;

use App\Models\FireTableInput;
use App\Models\ProductInfo;
use Illuminate\Http\Request;

class ProductRegister extends Controller
{
    public function index()
    {
        return view("productRegister");
    }


    public function register()
    {
        $request = request()->all();
        
        if((!empty($request["serial_number"])) & (!empty($request["adress"])))
        {
            $product = ProductInfo::where([
                "serial_number" => $request["serial_number"]])->first();
        }

        if(!empty($product["id"]))
        {
            FireTableInput::create([
                'product_id' => $request["id"],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        else
        {
            redirect(route("product-register"))->with(["error" => true , "flash" => "Either serial number doesn't exist or adress is empty"]);
        }
        
    }
}
