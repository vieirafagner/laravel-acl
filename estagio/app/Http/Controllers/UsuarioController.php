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
        $user->save();
        $setor = Setor::find($request->setor);
        $user->setors()->attach($setor);
        return redirect()->route('login');
    }

    public function registro(){
        $a_user = User::where('cargo','Estagiário')->get();
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


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
