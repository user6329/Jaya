@extends('layouts.app')

@section('contenido')
<div class="container mx-auto mt-8 p-4">
    <h1 class="text-2xl font-bold mb-4">Mi perfil</h1>

    <div class="bg-white shadow-md rounded p-6">
        @if ($user->profile_photo)
            <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Foto de perfil" class="w-24 rounded-full mb-4">
        @endif

        <p><strong>Nombre:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Teléfono:</strong> {{ $user->phone }}</p>
        <p><strong>Dirección:</strong> {{ $user->address }}</p>
        <p><strong>Bio:</strong> {{ $user->bio }}</p>

        <a href="{{ route('perfil.edit') }}" class="btn btn-primary mt-4 inline-block">Editar</a>
    </div>
</div>
@endsection
