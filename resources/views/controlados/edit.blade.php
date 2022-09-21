@extends('layouts.appmm')

@section('title', 'Editar')

@section('content')


<form action="{{route('controlados.update', $controlado->id)}}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
    @csrf
    @method('put')

   <h2 class="text-2xl text-center py-4 mb-4 font-semibold">EDITAR INFORMACION DE MEDICAMENTOS CONTROLADOS {{$controlado->id}} </h2>

   <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Medicamento" name="nombre" value="{{$controlado->nombre}}">

   <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Descripcion" name="descripcion" value="{{$controlado->descripcion}}">

   <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Precio" name="precio" value="{{$controlado->precio}}">

   <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="tipo" name="tipo" value="{{$controlado->tipo}}">


   <button type="submit" class="my-3 w-full bg-green-600 p-2 font-semibold rounded text-white hover:bg-blue-600">Editar</button>

   </form>
@endsection
