<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){

        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create(){

        return view('products.create');
    }

    public function store(Request $request){
       $product = new Product();

       $product->Nombre_del_Producto = $request->Nombre_del_Producto;
       $product->Marca = $request->Marca;
       $product->Proveedor = $request->Proveedor;
       $product->Existencia = $request->Existencia;
       $product->Precio = $request->Precio;

       $product->save();

       return redirect()->route('products.index');
    }

    public function destroy($id){
        $product = Product::find($id);

        $product->delete();

        return redirect()->route('products.index');
    }
    public function update(Request $request, $id){

        $product = Product::find($id);

        $product->update($request->all());

        return redirect()->route('products.index');
    }

    public function edit($id){

        $product = Product::find($id);

        return view('products.edit', compact('product'));
    }

}
