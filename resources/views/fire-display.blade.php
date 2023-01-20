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
@php
$array_key = 0;
@endphp
@foreach ($fires as $fire)

<div class="fire-contianer-styling">
     <div class="time-styling"> Oluşturulma zamanı: {{$fire["created_at"]->addHours(3)}} </div> 
     <div class="adress-styling"> Adres: {{$adress[$array_key]}} </div> 
     <div class="serial-styling"> Seri Numarası: {{$serial[$array_key]}} </div> 
</div>
@php
$array_key += 1;
@endphp
@endforeach
</div>

@endsection