@extends('layouts.appmm')

@section('title', 'Home')

@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-black text-white">
                <th class="w-20 py-4 ...">ID</th>
                <th class="w-1/4 py-4 ...">Nombre del Medicamento</th>
                <th class="w-1/16 py-4 ...">Descripcion</th>
                <th class="w-1/16 py-4 ...">Precio</th>
                <th class="w-1/16 py-4 ...">tipo</th>

            </tr>
        </thead>
        <tbody>


            @foreach ($controlados as $row)




            <tr>
                <td class="py-3 px-6">{{$row->id}}</td>
                <td class="p3-3 px-6">{{$row->nombre}}</td>
                <td class="p3-3 text-center">{{$row->descripcion}}</td>
                <td class="p3-3 text-center">{{$row->precio}}</td>
                <td class="p3-3 text-center">{{$row->tipo}}</td>

                <td class="p-3 flex justify-center">



                        <form action="{{route('controlados.destroy', $row->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="bg-red-500 text-while px-3 py-1 rounded-sm mx-1">
                            <i class="fas fa-trash"></i></button>
                        </form>


                        <a href="{{route('controlados.edit', $row->id)}}" class="bg-green-500 text-white px-3 py-1 rounded-sm"><i class="fas fa-pen"></i></a>

                </td>
            </tr>
            @endforeach




        </tbody>

    </table>
</div>

@endsection
