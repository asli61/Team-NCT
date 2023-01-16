<?php

namespace App\Http\Controllers;

use App\Models\FireTableInput;
use Illuminate\Http\Request;

class FireTableController extends Controller
{
    public function index()
    {
        $request = request()->all();

        FireTableInput::create([
            'adress' => $request["adress"],
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
