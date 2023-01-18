<?php

namespace App\Http\Controllers;

use App\Models\FireTableInput;
use App\Models\ProductInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductRegister extends Controller
{
    public function index()
    {
        return view("productRegister");
    }


    public function register()
    {
        $request = request()->all();
        

        $validator = Validator::make($request, [
            "serial_number" => "required|exists:product_infos",
            "adress" => "required"
        ]);
        
        if(!($validator->fails()))
        {
            ProductInfo::where(["serial_number" => $request["serial_number"]])
                ->update(["adress" => $request["adress"]
                ]);
        }

        else
        {
            return redirect(route("product-register"))->with(["error" => true ,
             "flash" => "Seri numarası yok veya adres girilmemiş"]);
        }
    }

    public function adminRegisterView()
    {
        return view("adminProductRegister");
    }

    public function adminRegister()
    {
        $request = request()->all();

        $validator = Validator::make($request, [
            "serial_number" => "required|unique:product_infos",
        ]);

        if(!($validator->fails()))
        {
            ProductInfo::create([
                "serial_number" => $request["serial_number"],
                'created_at' => now(),
                'updated_at' => now()
            ]);
            return redirect(route("admin-product-register"))->with(["error" => true ,
            "flash" => "Seri numarası ekleme başarılı"]);
        }

        else
        {
            return redirect(route("admin-product-register"))->with(["error" => true ,
             "flash" => "Seri numarası zaten var veya seri numarası girilmemiş"]);
        }

    }
}
