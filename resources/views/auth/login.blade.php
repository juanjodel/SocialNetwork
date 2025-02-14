@extends('layouts.app')

@section('titulo')

Inicia sesion y disfruta 

@endsection

@section('contenido')

<div class="md:flex md:justify-center md:gap-10 md:item-center">

    <div class="md:w-6/12 p-5">
        <img src="{{asset('img/bienvenido.jpg')}}" alt="Imagen login de usuarios">
    </div>

    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">

        <form   method="POST" action="{{route('login')}}"novalidate>
            @csrf

            @if(session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{session('mensaje')}}
                </p>
            @endif
            

            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    Email
                </label>
                <input
                    id="email" 
                    name="email"
                    type="email"
                    placeholder="Tu email de registro"
                    class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                    value="{{session('mensaje')}}"
                />
            </div>

            @error('email') 
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
            @enderror

            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Password
                </label>
                <input
                    id="password" 
                    name="password"
                    type="password"
                    placeholder="Password de registro"
                    class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                />
            </div>

            @error('password') 
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
            @enderror
            
            <div class="mb-5">
                <input type="checkbox" name="remember"> <label for="text-gray-500 text-sm">Mantener mi sesion abierta</label>
            </div>
            <div>
                <input 
                    type ="submit"
                    values ="Iniciar sesion"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </div>
        </form>
    </div>
</div>

@endsection