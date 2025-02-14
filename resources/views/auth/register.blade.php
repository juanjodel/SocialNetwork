@extends('layouts.app')

@section('titulo')

Registrate en esta app 

@endsection

@section('contenido')

<div class="md:flex md:justify-center md:gap-10 md:item-center">

    <div class="md:w-6/12 p-5">
        <img src="{{asset('img/registro.jpg')}}" alt="Imagen registro de usuarios">
    </div>

    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">

        <form action="{{route('register')}}" method="POST" novalidate>
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                    nombre
                </label>

                <input
                    id="name" 
                    name="name"
                    type="text"
                    placeholder="Tu Nombre"
                    class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                    value=""
                />
            </div>

            @error('name') 
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
            @enderror

            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                    username
                </label>
                <input
                    id="username" 
                    name="username"
                    type="text"
                    placeholder="Tu Nombre de usuario"
                    class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                    value=""
                />
            </div>

            @error('username') 
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
            @enderror

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
                    value=""
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
                    value=""
                />
            </div>

            @error('password') 
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
            @enderror

            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                    Repetir Password
                </label>
                <input
                    id="password_confirmation" 
                    name="password_confirmation"
                    type="password"
                    placeholder="Repite tu Password"
                    class="border p-3 w-full rounded-lg"
                />
            </div>

            <div>
                <input 
                    type ="submit"
                    values ="Crear cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </div>
        </form>
    </div>
</div>

@endsection