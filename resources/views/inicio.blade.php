@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
    <div class="w-full h-[800px] bg-center bg-no-repeat bg-cover flex flex-col items-be justify-center"
        style="background-image: url('{{ asset('img/banner2.jpg') }}')">
        <div class="flex flex-col justify-start">
            <h1 class="font-serif text-center text-jaya-beige text-7xl">Bienvenido</h1>
            <h1 class="text-3xl text-center text-jaya-beige">A</h1>
            <h1 class="font-serif text-center text-jaya-beige text-7xl">JAYA</h1>
            <button class="pt-16" >
                <a href="{{ route('productos') }}"
                    class="px-4 py-2 mt-8 font-bold rounded-full bg-jaya-beige text-jaya-brown hover:bg-jaya-brown hover:text-jaya-beige">
                    Ver Coleccion
                </a>
            </button>
        </div>
        <div class="flex flex-col justify-end pt-32">
            <p class="flex flex-col items-center font-serif text-2xl text-center text-jaya-beige">Artesanía que perdura.
                Piel trabajada con pasión y tradición</p>
        </div>
    </div>
    <!-- Banner 2 -->
    <div class="grid items-center grid-cols-1 gap-6 px-6 py-8 md:grid-cols-2 md:px-32">
        <div class="transition-transform duration-300 ease-in-out hover:scale-105">
            <h1 class="font-serif text-4xl text-center md:text-7xl">Sobre JAYA</h1>
            <p class="pt-6 text-lg text-center md:text-3xl">
                Delfino Valerio Montalvo utiliza técnicas
            </p>
            <p class="text-lg text-center md:text-3xl">
                de tradición en la marroquinería y talabartería
            </p>
            <p class="text-lg text-center md:text-3xl">
                para crear productos de alta calidad y durabilidad.
            </p>
        </div>

        <!-- IMAGEN -->
        <img src="{{ asset('img/inicio1.jpg') }}" alt="inicio1"
            class="w-[700px] max-w-full h-auto mt-8 rounded-lg shadow-lg object-contain transition-transform duration-300 ease-in-out hover:scale-105">
    </div>
        <div class="grid items-center grid-cols-1 gap-6 px-6 py-8 md:grid-cols-2 md:px-32">
       
        <!-- IMAGEN -->
        <img src="{{ asset('img/Materials & process.jpg') }}" alt="inicio1"
            class="w-[700px] max-w-full h-auto mt-8 rounded-lg shadow-lg object-contain transition-transform duration-300 ease-in-out hover:scale-105">

         <!-- TEXTO -->
        <div class="transition-transform duration-300 ease-in-out hover:scale-105">
            <h1 class="font-serif text-4xl text-center md:text-6xl ">Piel Artesania y Esencia</h1>
            <br>
            <p class="text-lg text-center md:text-3xl">
                Hecho para durar No para Desechar 
            </p>
        </div>

    </div>


  <!-- Apartado de los iconos -->  
<div class="grid items-center grid-cols-5 grid-rows-5 gap-8 text-center">
    <div class="col-span-5">
        <h1 class="font-serif text-4xl text-center md:text-4xl"> El Cuero Envejece Pero Solo el Bueno Mejora con el Tiempo. </h1>
    </div>
    
    <div class="col-start-2 row-start-2 grid place-items-center h-[100px] transition-transform duration-300 ease-in-out hover:scale-105">
        <div class="w-32 h-32 bg-jaya-beige rounded-full border-4 border-[#0e0d0d] grid place-items-center ">
            <img class="w-24 h-24 " src="{{ asset ('iconos/leather_6734189.png') }}" >
        </div>
    
    </div>
    <div class="grid col-start-3 row-start-2 place-items-center h-[100px] transition-transform duration-300 ease-in-out hover:scale-105 ">
        <div class="w-32 h-32 bg-jaya-beige rounded-full border-4 border-[#0e0d0d] grid place-items-center">
             <img class="w-24 h-24" src="{{ asset ('iconos/belt_1177077.png') }}" >
             
        </div>
        </div>
       
    <div class="col-start-4 row-start-2 grid place-items-center h-[100px] transition-transform duration-300 ease-in-out hover:scale-105" >
        <div class="w-32 h-32 bg-jaya-beige rounded-full border-4 border-[#0e0d0d] grid place-items-center">
            <img class="w-24 h-24" src="{{ asset ('iconos/bag_1065029.png') }}" >
        </div>
    </div>
    <div class="col-start-2 row-start-3">
        <p class="font-serif text-4xl text-center md:text-4xl">Seleción de la Piel</p>
    </div>
    <div class="col-start-3 row-start-3">
        <p class="font-serif text-4xl text-center md:text-4xl" > Corte y Confección del Articulo</p>
    </div>
    <div class="col-start-4 row-start-3">
        <p class="font-serif text-4xl text-center md:text-4xl">Acabados con Tecnicas Artesanales</p>
    </div>
    <!-- Texto debajo de los Iconos  -->
    <div class="col-span-5 row-start-4 mt-12">
        <div class="">
            <p class="items-end font-serif text-2xl md:text-3xl">
            Cada articulo es elaborado a mano con materiales de la mas alta calidad.
        </p>
        </div>
        <div>
             <p class="items-start font-serif text-2xl md:text-3xl">
            Nuestro compromiso no es solo con la belleza del diseño, 
            </p>
        </div>
        <div>
            <p class="items-start font-serif text-2xl md:text-3xl" >
                sino también con la durabilidad y autenticidad de cada pieza
            </p>
        </div>
    </div>
    <div class="col-span-5 row-start-5">
       
    </div>
</div>
    
    

@endsection