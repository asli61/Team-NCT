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
$adress_key = 0;
@endphp
@foreach ($fires as $fire)



<div>{{$fire}}</div>

<div>Oluşturulma zamanı: {{$fire["created_at"]}}| Adres: {{$adress[$adress_key]}}</div>
@php
$adress_key += 1;
@endphp
@endforeach
</div>

@endsection