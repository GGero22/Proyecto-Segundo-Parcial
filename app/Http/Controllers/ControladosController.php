<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Controlado;

class ControladosController extends Controller
{
    public function index(){

        $controlados = Controlado::all();

        return view('controlados.index', compact('controlados'));
    }

    public function create(){

        return view('controlados.create');
    }

    public function store(Request $request){

       $controlado = new Controlado();

       $controlado->nombre = $request->nombre;
       $controlado->descripcion = $request->descripcion;
       $controlado->precio = $request->precio;
       $controlado->tipo = $request->tipo;

       $controlado ->save();

       return redirect()->route('controlados.index');
    }

    public function edit($id){

        $controlado = Controlado::find($id);

        return view('controlados.edit', compact('controlado'));
    }

    public function update(Request $request, $id){

        $controlado = Controlado::find($id);

        $controlado->update($request->all());

        return redirect()->route('controlados.index');
    }

    public function destroy($id){

        $controlado = Controlado::find($id);

        $controlado->delete();

        return redirect()->route('controlados.index');

    }

}
