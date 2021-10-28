

@extends('layouts.app')

@section('content')
    
{{ auth()->user()->name }}


<form action="/logout" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

@endsection