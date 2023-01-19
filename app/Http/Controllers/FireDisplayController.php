<?php

namespace App\Http\Controllers;

use App\Models\FireTableInput;
use Illuminate\Http\Request;

class FireDisplayController extends Controller
{
    public function index()
    {
        $fireTable = FireTableInput::all();
        $fireArray = [];

        foreach($fireTable as $fires)
        {
            $fireArray[] = $fires;
        }

        return view("fire-display")->with($fireArray);
    }
}
