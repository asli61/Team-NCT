<?php

namespace App\Http\Controllers;

use App\Models\FireTableInput;
use App\Models\ProductInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FireInputController extends Controller
{
    public function index()
    {
        $request = request()->all();

        $validator = Validator::make($request, [
            "serial_number" => "required|exists:product_infos"
        ]);
        
        if(!($validator->fails()))
        {
            $product = ProductInfo::where([
                "serial_number" => $request["serial_number"]])->first();

            
            if(!(empty($product["id"])))
            {
                FireTableInput::create([
                'product_id' => $product["id"],
                'created_at' => now(),
                'updated_at' => now()
                ]);
            }
        }
    }

    public function view()
    {
        return view("FireTest");
    }
}
