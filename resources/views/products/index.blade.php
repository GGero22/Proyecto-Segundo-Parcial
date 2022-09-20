@extends('layouts.appm')

@section('title', 'Home')

@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-black text-white">
                <th class="w-20 py-4 ...">ID</th>
                <th class="w-1/4 py-4 ...">Nombre del Producto</th>
                <th class="w-1/16 py-4 ...">Marca</th>
                <th class="w-1/16 py-4 ...">Proveedor</th>
                <th class="w-1/16 py-4 ...">Existencia</th>
                <th class="w-28 py-4 ...">Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $row)


            <tr>
                <td class="py-3 px-6">{{$row->id}}</td>
                <td class="p3-3 px-6">{{$row->Nombre_del_Producto}}</td>
                <td class="p3-3 text-center">{{$row->Marca}}</td>
                <td class="p3-3 text-center">{{$row->Proveedor}}</td>
                <td class="p3-3 text-center">{{$row->Existencia}}</td>
                <td class="p3-3 text-center">{{$row->Precio}}</td>
                <td class="p-3 flex justify-center">

                    <form action="{{route('products.destroy', $row->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="bg-red-500 text-while px-3 py-1 rounded-sm mx-1">
                        <i class="fas fa-trash"></i></button>
                        </form>



                    <a href="{{route('products.edit', $row->id)}}" class="bg-green-500 text-white px-3 py-1 rounded-sm"><i class="fas fa-pen"></i></a>
                </td>
            </tr>

            @endforeach


        </tbody>

    </table>
</div>

@endsection
