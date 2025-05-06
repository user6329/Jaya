@extends('layouts.app')

@section('contenido')
    <div class="container mx-auto mt-8 pt-[100px] flex  justify-center items-center">


        <div class="  bg-jaya-camelClaro rounded-2xl h-[600px] w-[500px]">
            <h1 class="text-2xl text-center font-serif text-jaya-dorado mb-4">Mi perfil</h1>
            <div class="flex justify-center mb-4">
                @if (auth()->user()->profile_photo)
                <img src="{{ asset('storage/' . auth()->user()->profile_photo) }}" alt="Foto de perfil"
                    class="w-36 h-36  rounded-full">
            @else
                <img src="{{ asset('images/default-profile.png') }}" alt="Foto por defecto" 
                    class="w-36 h-36 rounded-full">
            @endif
            </div>

            <p class="text-2xl mb-2  text-center font-serif">
                {{ $user->name }} {{ $user->lastname }}
            </p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Teléfono:</strong> {{ $user->phone }}</p>
            <p><strong>Dirección:</strong> {{ $user->address }}</p>
            <p><strong>Bio:</strong> {{ $user->bio }}</p>

            <a href="{{ route('perfil.edit') }}" class="btn btn-primary mt-4 inline-block">Editar</a>
        </div>
    </div>
@endsection