@extends('layouts.appm')

@section('title', 'Crear')

@section('content')


<form action="{{route('products.store')}}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
 @csrf
<h2 class="text-2xl text-center py-4 mb-4 font-semibold">PRODUCTOS MISCELANEA</h2>

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Producto" name="Nombre_del_Producto">

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Marca" name="Marca">

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Proveedor" name="Proveedor">

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Existencia" name="Existencia">

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Precio" name="Precio">

<button type="submit" class="my-3 w-full bg-black p-2 font-semibold rounded text-white hover:bg-blue-600">Crear</button>

</form>

@endsection
