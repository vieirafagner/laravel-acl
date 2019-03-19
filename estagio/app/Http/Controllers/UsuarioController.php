<?php

namespace App\Http\Controllers;

use App\Setor;
use App\User;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a_user = User::where('cargo','Professor')->paginate(10); //filtra usuarios que tem cargo professor
        return view('usuario.indexp',compact('a_user'));

    }
    public function index2(){
        $a_user2 = User::where('cargo','Estagiário')->paginate(10);
        return view('usuario.indexe',compact('a_user2'));
    }
    public function create()
    {
        $a_setor=Setor::all();

        return view('usuario.create',compact('a_setor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name        = $request->name;
        $user->email = $request->email;
        $user->password   = Hash::make($request->password);
        $user->cargo       = $request->cargo;
        $user->telefone = $request->telefone;
        $user->status = "espera";
        $user->carga_f = 600;
        $user->carga_atual = 0;
        $user->save();
        $setor = Setor::find($request->setor);
        $user->setors()->attach($setor);
        return redirect()->route('login');
    }

    public function registro(){
        $a_user = User::where('status','ativo')->get();
        return view('professor.chamada',compact('a_user'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function getmatricula(){

        $a_user2 = User::where('cargo','Estagiário')->paginate(10);
        return view('usuario.matricula',compact('a_user2'));
    }

    public function  setMatricula($id){

        $upuser = User::find($id);
        $upuser->status = "ativo";
        $upuser->save();

        return redirect()->route('estagiarios.matricula')->with('sucess','Alunos matriculados com sucesso');
    }

    public  function getperfil($id){

        $user = User::find($id);
        $a_setor=Setor::all();
        return view('usuario.perfil',compact('a_setor','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $a_setor = Setor::all();
        return view('usuario.editar',compact('user','a_setor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->password   = Hash::make($request->password);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telefone = $request->telefone;
        $setor = Setor::find($id);
        $user->setors()->attach($setor);
        $user->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('estagiarios.index');
    }
}
