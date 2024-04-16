<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class SesionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(\request(['email', 'password']))==false){
            return back()->withErrors([
                'message' => 'El correo o contraseña estan erroneos',
            ]);
        }

        return redirect()->to('/');
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}
