@extends('layouts.app')

@section('title', 'Login')

@section('content')

<h1>Login</h1>

<form class="w3-container w3-card-4" action="" method="POST">
    @csrf
    <p>
    <label class="w3-text-blue"><b>Email</b></label>
    <input class="w3-input w3-border" name="email" type="text"></p>
    <p>
    <label class="w3-text-blue"><b>Password</b></label>
    <input class="w3-input w3-border" name="password" type="password"></p>
    @error('message')
    <p>
    <div class="w3-panel w3-red">
        <p>Usuario o contraseña incorrecto.</p>
    </div>
    </p>
    @enderror
    <p>
    <button class="w3-btn w3-blue">Acceso</button></p>
</form>

@endsection
