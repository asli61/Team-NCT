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

<div>{{Oluşturulma zamanı:$fire["created-at"]}}</div>
    
@endforeach
</div>

@endsection