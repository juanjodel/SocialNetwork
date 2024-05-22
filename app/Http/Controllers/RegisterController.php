<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        
        return view('auth.register');
    }

    public function store(Request $request){
        
        //return "$request";
        //dd($request);
        $this->validate($request,[
            'name' => 'required|max:50',
            'username' => 'required|unique:users|min:3|max:50',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);

        auth()->attempt($request->only('email','password'));

        return redirect()->route('posts.index',auth()->user());

    }
}
