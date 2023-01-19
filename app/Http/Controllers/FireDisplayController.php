<?php

namespace App\Http\Controllers;

use App\Models\FireTableInput;
use Illuminate\Http\Request;

class FireDisplayController extends Controller
{
    public function index()
    {
        $var = FireTableInput::with("product_id");
        $fireTable = FireTableInput::orderBy("id","desc")->take(50)->get();
        $fireArray = [];

        foreach($fireTable as $fires)
        {
            $fireArray[] = $fires;
        }

        return view("fire-display")->with("fires", $fireArray);
    }
}
