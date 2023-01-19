@extends('layouts.master')






@section('content')


<style>
.firecontainer{
    border-width: 2px;
    border-color: black;
}

</style>

@foreach ($fires as $fires)

<div class="fire-container">{{$fires}}</div>
    
@endforeach


@endsection