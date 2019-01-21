<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $a_posts = Post::all();
        return view('home',compact('a_posts'));
    }

    public function rolesPermissions(){

        $nameuser = auth()->user()->name;
        echo "<h1>$nameuser</h1>";
        echo '<br>';
        foreach ( auth()->user()->roles as $role){
            echo "<b>$role->nome =></b>  ";
            $a_permissions = $role->permissions;
            foreach ($a_permissions as $permission){
                echo "$permission->nome - ";
            }
            echo "<hr>";
        }
    }

    public function update($idPost){
        $post = Post::find($idPost);
        $this->authorize('updatePost',$post);
        return view('post-update',compact('post'));
    }
}
