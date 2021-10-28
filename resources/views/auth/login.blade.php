@extends('layouts.app')

@section('content')

<form action="{{ route('login') }}" method="POST">

    @csrf

    <input type="email" name="email" value="{{ old('email')}}" placeholder="Correo Electrónico...">
    <br>
    @error('email')
        <span>{{ $message }}</span>
    @enderror
    <br>
    <input type="password" name="password" placeholder="Contraseña...">
    <br>
    @error('password')
        <span>{{ $message }}</span>
    @enderror
    <br>
    <button type="submit">Login</button>

</form>

@endsection