@extends('layouts.master')






@section('content')


<style>
.firecontainer div{
    border: 1px solid black;
}

.content2{
    overflow-y: scroll;
}

</style>
<div class="firecontainer">
@foreach ($fires as $fire)

@php
$product_info = $fire["product_info"];
var_dump($fire["product_info"]);
var_dump($product_info);
var_dump($fire["adress"]);
var_dump($adress);
@endphp

<div>{{$fire}}</div>

<div>Oluşturulma zamanı: {{$fire["created_at"]}}| Adres: {{$product_info}}</div>
    
@endforeach
</div>

@endsection