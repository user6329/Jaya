@extends('layouts.app')

@section('contenido')
<div class="container mx-auto mt-8 p-4">
    <h1 class="text-2xl font-bold mb-4">Editar perfil</h1>

    <form action="{{ route('perfil.actualizar') }}" method="POST"  class="space-y-4">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ old('name', $user->name) }}" placeholder="Nombre" class="w-full border p-2 rounded">
        <input type="text" name="lastname" value="{{ old('lastname', $user->lastname) }}" placeholder="Apellido" class="w-full border p-2 rounded">
        <input type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Correo" class="w-full border p-2 rounded">
        <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="Teléfono" class="w-full border p-2 rounded">
        <input type="text" name="address" value="{{ old('address', $user->address) }}" placeholder="Dirección" class="w-full border p-2 rounded">
        <textarea name="bio" placeholder="Bio" class="w-full border p-2 rounded">{{ old('bio', $user->bio) }}</textarea>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
    </form>
</div>
@endsection
