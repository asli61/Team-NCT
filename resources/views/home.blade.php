@extends('layouts.master')






@section('content')
@auth
    <div>You are logged in</div>
@endauth

@guest
    <div>You are not logged in</div>
@endguest

@endsection
