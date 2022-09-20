@extends('layouts.app')

@section('title', 'Home')

@section('content')

<h1 class="text-5xl text-center pt-24">BIENVENIDO AL MENU PRINCIPAL!</h1>

<a href="{{route('products.index')}}" class="rounded-md bg-black w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">MISCELANEA</a>

@endsection
