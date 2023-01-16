@extends('layouts.master')

@section('title', 'Login')

@section('content')

Login

<form method="post">
    @csrf
    <input type = "text" name = "email" value = "<?=old("email")?>" placeholder = "Enter your email" >
    <input type = "password" name = "password" placeholder =" Enter Password" >
    <input type="hidden" name = "remember-me" value = "0">
    <input type="checkbox" name = "remember-me" id = "check">
    <label for="check">Remember-me</label>
    <button type = "submit">Login</button>
 </form>

@if (session()->get("error"))
    
{{session()->get("flash")}}
    
@endif

@endsection