@extends('layouts.master')






@section('content')


<style>
.firecontainer div{
    border-top: 1px solid black;
}

</style>
<div class="firecontainer">
@foreach ($fires as $fires)

<div>{{$fires}}</div>
    
@endforeach
</div>

@endsection