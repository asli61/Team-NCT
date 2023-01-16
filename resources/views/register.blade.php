@extends('layouts.master')

@section('title', 'Register')

@section('content')

Register

<form method="post">
    @csrf
    <input type = "email" name = "email" value  = "<?=old("email")?>" placeholder = "Enter Email" >
    <input type = "password" name = "password" placeholder =" Enter Password" >
    <input type = "password" name = "password_confirmation" placeholder = "Enter your Password again" >
    <button type = "submit">Register</button>
 </form>

@if (session()->get("error"))
    
{!!session()->get("flash")!!}
    
@endif

@endsection