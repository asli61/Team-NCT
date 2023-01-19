@extends('layouts.master')






@section('content')


<style>
.firecontainer{
    border-width: 2px;
    border-color: black;
}

</style>

@foreach ($fires as $fires)

<div class="firecontainer">{{$fires}}</div>
    
@endforeach


@endsection