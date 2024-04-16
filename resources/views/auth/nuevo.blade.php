@extends('layouts.app')

@section('title', 'Registro')

@section('content')

<div class="w3-container w3-center">
<h1>Productos</h1>
</div>

<div class="w3-container">

    <div class="w3-container w3-center">
        <h1>Nuevo producto</h1>
        </div>

        <form class="w3-container w3-card-4" action="{{ route('products.store') }}" method="POST">
            @csrf
        <p>
        <label class="w3-text-blue"><b>Title</b></label>
        <input class="w3-input w3-border" name="title" type="text"></p>
        <p>
        <label class="w3-text-blue"><b>Country</b></label>
        <input class="w3-input w3-border" name="country" type="text"></p>
        <p>
        <label class="w3-text-blue"><b>Price</b></label>
        <input class="w3-input w3-border" name="price" type="text"></p>
        <p>
        <button class="w3-btn w3-blue">Guardar</button></p>
        </form>

</div>

@endsection
