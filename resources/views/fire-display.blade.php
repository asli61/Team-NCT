@extends('layouts.master')






@section('content')



@foreach ($fireTable as $fires)

{{$fires}}
    
@endforeach


@endsection