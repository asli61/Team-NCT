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
$product_info = fire["product_info"];
<div>{{$fire}}</div>

<div>Oluşturulma zamanı: {{$fire["created_at"]}}| </div>
    
@endforeach
</div>

@endsection