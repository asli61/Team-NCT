@extends('layouts.master')

@section('title', 'Ürün Kayıt')

@section('content')

Ürün kayıt edin

<form method="post">
    @csrf
    <input type = "text" name = "serial_number" placeholder = "Seri numarası" >
    <input type = "" name = "adress" placeholder ="Adres" >
    <input type="hidden" name = "remember-me" value = "0">
    <input type="checkbox" name = "remember-me" id = "check">
    <label for="check">Remember-me</label>
    <button type = "submit">Login</button>
 </form>

@if (session()->get("error"))
    
{{session()->get("flash")}}
    
@endif

@endsection