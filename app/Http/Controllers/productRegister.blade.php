@extends('layouts.master')

@section('title', 'Login')

@section('content')

Ürün kayıt et

<form method="post">
    @csrf
    <input type = "text" name = "serial_number" placeholder = "Ürün seri numarasını giriniz" >
    <input type = "text" name = "adress" placeholder ="Ürünün yerleştirileceği yerin açık adresi" >
    <button type = "submit">Kayıt Et</button>
 </form>

@if (session()->get("error"))
    
{{session()->get("flash")}}
    
@endif

@endsection