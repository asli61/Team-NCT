<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductRegister extends Controller
{
    /*public function index()
    {
        return view("ProductRegister");
    }


    public function register()
    {
        $request = request()->all();
        
        if((!empty($request["serial_number"])) & (!empty($request["adress"])))
        {
            $product = Table::where([
                "serial_number" => $request["serial_number"]])->first();
        }

        if(!empty($product["id"]))
        {
            Table::create([
                'adress' => $request["adress"],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        
    }*/
}
