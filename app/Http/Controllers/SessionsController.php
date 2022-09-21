<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{
    public function create(){

        return view('auth.login');
    }

    public function store(){



        if(auth()->attempt(request(['email', 'password'])) ==false){
            return back()->withErrors(['message' => 'El correo o la contraseña es incorrecta, intente de nuevo']);
        }
        else{
            if(auth()->user()->role == 'administrador'){
                return redirect()->route('admin.index');

            }else{

            }if(auth()->user()->role == 'superadmin'){
                return redirect()->route('superadmin.index');

            }
            else{
            }if(auth()->user()->role == 'usuario'){
                return redirect()->route('usuario.index');
            }

        }

        return redirect()->to('/');
    }
    public function destroy(){
        auth()->logout();

        return redirect()->to('/');
    }
}
