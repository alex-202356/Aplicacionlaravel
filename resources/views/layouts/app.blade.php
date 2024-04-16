<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title') - Laravel App</title>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-container w3-sand">
<div class="w3-bar w3-black">
    <a href="#" class="w3-bar-item w3-button">Mi aplicacion</a>
    @if(auth()->check())
    <a href="{{ route('login.destroy') }}" class="w3-bar-item w3-button w3-right">Cerrar sesion</a>
    <a href="{{ route('products.index') }}" class="w3-bar-item w3-button w3-right">Productos</a>
    <a href="#" class="w3-bar-item w3-button w3-right">Bienvenido: {{ auth()->user()->name }}</a>
    @else
    <a href="{{ route('login.index') }}" class="w3-bar-item w3-button w3-right">Login</a>
    <a href="{{ route('registro.index') }}" class="w3-bar-item w3-button w3-right">Registro</a>
    @endif
</div>

@yield('content')

</body>
</html>
