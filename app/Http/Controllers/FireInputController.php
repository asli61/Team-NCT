<?php

namespace App\Http\Controllers;

use App\Models\FireTableInput;
use App\Models\ProductInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FireInputController extends Controller
{
    public function fire_input()
    {
        $request = request()->all();

        $validator = Validator::make($request, [
            "serial_number" => "required|exists:product_infos"
        ]);
        
        if(!($validator->fails()))
        {
            $product = ProductInfo::where([
                "serial_number" => $request["serial_number"]])->first();

            
            if(!(empty($product["id"]))){
                FireTableInput::create([
                'product_id' => $product["id"],
                'created_at' => now(),
                'updated_at' => now()
            ]);
            return redirect(route("home"));
        }
    }

        else
        {
            return redirect(route("product-register"))->with(["error" => true ,
             "flash" => "Seri numarası yok veya adres girilmemiş"]);
        }
    }
}
