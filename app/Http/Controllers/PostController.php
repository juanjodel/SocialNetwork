<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PostController extends Controller
{

public function __construct(){
    $this->middleware('auth');   
}    

    public function index(User $user){

        return view('dashboard',[
            'user'=> $user,
            //'posts'=>$posts
        ]);

    }

    public function create(){
        return view('posts.create');
    }
}
