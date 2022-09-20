@extends('layouts.appm')

@section('title', 'Editar')

@section('content')


<form action="{{route('products.update', $product->id)}}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
 @csrf
 @method('put')
<h2 class="text-2xl text-center py-4 mb-4 font-semibold">EDITAR PRODUCTOS MISCELANEA {{$product->id}}

</h2>

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Producto" name="Nombre_del_Producto" value="{{$product->Nombre_del_Producto}}">

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Marca" name="Marca" value="{{$product->Marca}}">

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Proveedor" name="Proveedor" value="{{$product->Proveedor}}">

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Existencia" name="Existencia" value="{{$product->Existencia}}">

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Precio" name="Precio" value="{{$product->Precio}}">

<button type="submit" class="my-3 w-full bg-green-600 p-2 font-semibold rounded text-white hover:bg-blue-600">Editar</button>

</form>

@endsection
