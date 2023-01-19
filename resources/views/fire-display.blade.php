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

<div>Oluşturulma zamanı: {{$fire["created_at"]->addHours(3)}} | Adres: {{$adress[$array_key]}} | Seri Numarası: {{$serial[$array_key]}}</div>
@php
$array_key += 1;
@endphp
@endforeach
</div>

@endsection