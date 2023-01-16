<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function index() 
    {
        return view("register");
    }
    
    public function register()
    {
        //register logic is supposed to be here

        $request = request()->all();


        $emailValidator = Validator::make($request, [
            "email" => "required|unique:users"
        ]);

        $passValidator = Validator::make($request, [
            "password" => [
                "required",
                Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
            ]
        ]);

        $passConfirmValidator = Validator::make($request, [
            "password" => [
                "confirmed" //makes sure password and password_confirmation fields are the same
            ]
        ]);
    
        if($emailValidator->fails())
        {
            return redirect(route("register.route"))->withInput()
            ->with(["error" => true, "flash" => "This email is already in use"]);
        }

        else if($passConfirmValidator->fails())
        {
            return redirect(route("register.route"))->withInput()
            ->with(["error" => true , "flash" => "The password and password confirmation does not match"]);
        }

        else if($passValidator->fails())
        {
            return redirect(route("register.route"))->withInput()
            ->with(["error" => true , "flash" => "Your password is not strong enough.<br>
            Your password needs to have the following:<br>
            Letters, numbers, at least one uppercase and  one lowercase character and it needs to be at least 8 characters long"]);
        }

        else
        {
            User::create([
                'email' => $request["email"],
                'password' => hash("sha512", $request["email"].$request["password"]),
                'created_at' => now(),
                'updated_at' => now()
            ]);

            return redirect(route("login.route"));
        }

        /*if((!empty($request["password"])) & (!empty($request["password_confirmation"])))
    {
        if($request["password"] !== $request["password_confirmation"])
        {
            return redirect(route("register.route"))->withInput()
            ->with(["error" => true , "flash" => "The password and password confirmation does not match"]);
        }
    }

        if((!empty($request["email"])) & ((!empty($request["password"])) & (!empty($request["password_confirmation"]))))
        {
            User::create([
                'email' => $request["email"],
                'password' => hash("sha512", $request["email"].$request["password"]),
                'created_at' => now(),
                'updated_at' => now()
            ]);
    
            return redirect(route("login.route"));
        }
        return redirect(route("register.route"))->withInput()
        ->with(["error" => true , "flash" => "Please fill all the required fields"]);*/
    }
}
