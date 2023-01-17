<?php

namespace App\Http\Controllers;

use App\Models\FireTableInput;
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
            $product = FireTableInput::where([
                "serial_number" => $request["serial_number"]])->first();
        }

        if(!empty($product["id"]))
        {
            FireTableInput::create([
                'adress' => $request["adress"],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        
    }
}
