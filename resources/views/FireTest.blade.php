@extends('layouts.master')

@section('title', 'Test')

@section('content')

Test

<form method="post">
    <input type = "text" name = "serial_number">
    <button type = "submit">Submit</button>
 </form>

@if (session()->get("error"))
    
{{session()->get("flash")}}
    
@endif

@endsection