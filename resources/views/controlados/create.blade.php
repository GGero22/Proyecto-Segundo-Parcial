@extends('layouts.appmm')

@section('title', 'Crear')

@section('content')


<form action="{{route('controlados.store')}}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
    @csrf
   <h2 class="text-2xl text-center py-4 mb-4 font-semibold">MEDICAMENTOS CONTROLADOS</h2>

   <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Medicamento" name="nombre">

   <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Descripcion" name="descripcion">

   <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Precio" name="precio">

   <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="tipo" name="tipo">



   <button type="submit" class="my-3 w-full bg-black p-2 font-semibold rounded text-white hover:bg-blue-600">Crear</button>

   </form>
@endsection
