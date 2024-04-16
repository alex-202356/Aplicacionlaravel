@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<div class="w3-container w3-center">
<h1>Productos</h1>
</div>

<div class="w3-container">

    <div class="w3-container w3-center">
        <h1>Editar producto</h1>
        </div>

        <form class="w3-container w3-card-4" action="{{ route('products.update',$product->id) }}" method="POST">
            @csrf
            @method('put')
        <p>
        <label class="w3-text-blue"><b>Title</b></label>
        <input class="w3-input w3-border" name="title" type="text" value="{{ $product->title }}"></p>
        <p>
        <label class="w3-text-blue"><b>Country</b></label>
        <input class="w3-input w3-border" name="country" type="text" value="{{ $product->country }}"></p>
        <p>
        <label class="w3-text-blue"><b>Price</b></label>
        <input class="w3-input w3-border" name="price" type="text" value="{{ $product->price }}"></p>
        <p>
        <button class="w3-btn w3-blue">Guardar</button></p>
        </form>

</div>

@endsection
