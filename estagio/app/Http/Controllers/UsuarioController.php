<?php

namespace App\Http\Controllers;

use App\Setor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    //

    public function index(){

        $a_user = User::where('level','Professor')->get();

        return view('usuario.indexProfessor',compact('a_user'));
    }

    public function indexE(){

        $a_user = User::where('level','Estagiario')->get();

        return view('usuario.indexProfessor',compact('a_user'));
    }
    public function create(){
        return view('usuario.create');
    }

    public function salvar(Request $request){
        /*User::create($request->all());
        return redirect()->route('login');*/
        $user = new User();
        $user->name        = $request->name;
        $user->email = $request->email;
        $user->password   = Hash::make($request->password);
        $user->level       = $request->level;
        $user->telefone = $request->telefone;
        $user->save();
        return redirect()->route('login');
    }
}