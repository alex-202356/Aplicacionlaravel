@extends('layouts.app')

@section('title', 'Registro')

@section('content')

<div class="w3-container w3-center">
<h1>Productos</h1>
</div>
<a href="{{ route('products.nuevo') }}" class="w3-button w3-green">Nuevo</a>
<div class="w3-container">

    <table class="w3-table-all">
      <thead>
        <tr class="w3-red">
          <th>ID</th>
          <th>Title</th>
          <th>Country</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $products as $row)
        <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->title }}</td>
        <td>{{ $row->country }}</td>
        <td>{{ $row->price }}</td>
        <td>

            <a href="{{ route('products.edit',$row->id) }}" class="w3-btn w3-blue">Editar</a>
            <form action="{{ route('products.destroy',$row->id) }}" method="POST">
                @csrf
                @method('delete')
                <button class="w3-btn w3-red">Eliminar</button>
            </form>
        </td>
        </tr>
        @endforeach
      </tbody>

    </table>
  </div>

@endsection
