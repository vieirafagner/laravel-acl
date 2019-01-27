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

        return view('usuario.index',compact('a_user'));
    }

    public function indexE(){

        $a_user = User::where('level','Estagiario')->get();

        return view('usuario.index',compact('a_user'));
    }
    public function create(){
        $a_setor = Setor::all();
        return view('usuario.create',compact('a_setor'));
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

        $setor = Setor::find($request->setor);
        $user->setors()->attach($setor);
        return redirect()->route('login');
    }

    public function chamada(){
        return view('professor.chamada');
    }

    public function oferta(){

        return view('professor.oferta');
    }
}