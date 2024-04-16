@extends('layouts.app')

@section('title', 'Registro')

@section('content')

<div class="w3-container w3-center">
<h1>Registro</h1>
</div>

<form class="w3-container w3-card-4" action="" method="POST">
    @csrf
<p>
<label class="w3-text-blue"><b>Nombre</b></label>
<input class="w3-input w3-border" name="name" type="text"></p>
<p>
<label class="w3-text-blue"><b>Email</b></label>
<input class="w3-input w3-border" name="email" type="text"></p>
<p>
<label class="w3-text-blue"><b>Password</b></label>
<input class="w3-input w3-border" name="password" type="password"></p>
<p>
<label class="w3-text-blue"><b>Confirmar password</b></label>
<input class="w3-input w3-border" name="cpassword" type="password"></p>
<p>
<button class="w3-btn w3-blue">Registro</button></p>
</form>

@endsection
