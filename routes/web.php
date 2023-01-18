<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::view("/", "home")->name("home.route");


/*Route::get("register", "RegisterController@index")->name("register.route");
Route::post("register", "RegisterController@register"); //The link returned will be the same so no need for seperate names


Route::get("login", "LoginController@index")->name("login.route");
Route::post("login", "LoginController@login"); //The link returned will be the same so no need for seperate names

Route::get("logout", "LoginController@logout")->name("logout.route");*/


Auth::routes();

Route::get("/", "HomeController@index")->name("home");

Route::get("/home", "HomeController@index"); // home is used in the default code and in case I forgot to change some, I am sending it to index page here

//Route::post("fire-report", "FireInputController@index");

Route::get("product-register", "ProductRegister@index")->name("product-register");
Route::post("product-register", "ProductRegister@Register");

Route::get("admin-product-register", "ProductRegister@adminRegisterView")->name("admin-product-register");
Route::post("admin-product-register", "ProductRegister@adminRegister");

Route::view('/hakkımızda', 'about-us')-name("about-us");
Route::view('/iletişim', 'contact-us')-name("route-name");
Route::view('/servislerimiz', 'services')-name("route-name");