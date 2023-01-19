@extends('layouts.master')






@section('content')


<style>
.firecontainer div{
    border-width: 1px;
    border-color: black;
    border:solid; 
}

</style>
<div class="firecontainer">
@foreach ($fires as $fires)

<div>{{$fires}}</div>
    
@endforeach
</div>

@endsection