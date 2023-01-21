<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function login()
    {
        //login logic is supposed to be here

        $request = request()->all();
        $passwordHash = hash("sha512", $request["email"].$request["password"]);

        $validator = Validator::make($request, [
            "email" => "required|exists:users",
            "password" => "required|string"
        ]);

        if (!($validator->fails()))
        {
            $User = User::where([
            "email" => $request["email"],
            "password" => $passwordHash])->first();

            if(!empty($User["id"]))
            {
            Auth::loginUsingId($User["id"], $request["remember-me"]);

            return redirect(route("home.route"));
            }
        }
        return redirect(route("login.route"))->withInput()
        ->with(["error" => true , "flash" => "Either email or password is wrong"]);
    

        /*if((!empty($request["email"])) & (!empty($request["password"])))
    {      

        $User = User::where([
        "email" => $request["email"],
        "password" => $passwordHash])->first();    

        if((!empty($User["email"])) & (!empty($User["password"])))
        {
            if(($request["email"] === $User["email"]) & ($passwordHash === $User["password"]))
            {
                Auth::loginUsingId($User["id"], $request["remember-me"]);

                return redirect(route("login.route"))->withInput()
                ->with(["error" => true , "flash" => "log in is successful"]);
            }
        }
    }
    return redirect(route("login.route"))->withInput()
        ->with(["error" => true , "flash" => "Either email or password is wrong"]);*/
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->back();
    }
}
