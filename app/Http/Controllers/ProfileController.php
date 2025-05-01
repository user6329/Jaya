<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function mostrar()
    {
        return view('perfil.mostrar', ['user' => Auth::user()]);
    }

    public function editar()
    {
        return view('perfil.edit', ['user' => Auth::user()]);
    }

    public function actualizar(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'profile_photo' => 'nullable|image|max:2048',
        ]);

        $user = Auth::user();
        dd($user);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->bio = $request->bio;

        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('profiles', 'public');
            $user->profile_photo = $path;
        }

        $user->save();

        return redirect()->route('perfil.mostrar')->with('success', 'Perfil actualizado');
    }
}

