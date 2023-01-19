@extends('layouts.master')






@section('content')


<style>
.firecontainer div{
    border: 1px solid black;
}

.content2{
    height: max-content;
}

</style>
<div class="firecontainer">
@foreach ($fires as $fires)

<div>{{$fires}}</div>
    
@endforeach
</div>

@endsection