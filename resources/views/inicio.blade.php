@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
    <div class="w-full h-[800px] bg-center bg-no-repeat bg-cover flex flex-col items-be justify-center"
        style="background-image: url('{{ asset('img/banner2.jpg') }}')">
        <div class="justify-start flex flex-col">
            <h1 class=" text-jaya-beige text-7xl font-serif text-center">Bienvenido</h1>
            <h1 class="text-jaya-beige  text-3xl text-center">A</h1>
            <h1 class="text-jaya-beige text-7xl font-serif text-center">JAYA</h1>
            <button class="pt-16" >
                <a href="{{ route('productos') }}"
                    class="bg-jaya-beige text-jaya-brown hover:bg-jaya-brown hover:text-jaya-beige font-bold py-2 px-4 rounded-full mt-8">
                    Ver Coleccion
                </a>
            </button>
        </div>
        <div class="pt-32 justify-end flex flex-col">
            <p class=" text-jaya-beige text-2xl items-center flex flex-col text-center font-serif  ">Artesanía que perdura.
                Piel trabajada con pasión y tradición</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 px-6 md:px-32 py-16 gap-8 items-center">
        <!-- TEXTO -->
        <div>
            <h1 class="font-serif text-4xl md:text-7xl">Sobre JAYA</h1>
            <p class="text-left text-lg md:text-3xl pt-6">
                Delfino Valerio Montalvo utiliza técnicas
            </p>
            <p class="text-left text-lg md:text-3xl">
                de tradición en la marroquinería y talabartería
            </p>
            <p class="text-left text-lg md:text-3xl">
                para crear productos de alta calidad y durabilidad.
            </p>
        </div>

        <!-- IMAGEN -->
        <img src="{{ asset('img/inicio1.jpg') }}" alt="inicio1"
            class="w-[736px] max-w-full h-auto mt-8 rounded-lg shadow-lg object-contain transition-transform duration-300 ease-in-out hover:scale-105">

    </div>

@endsection