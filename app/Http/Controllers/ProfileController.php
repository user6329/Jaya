<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    public function mostrar()
    {
        $user = User::find(Auth::id()); // fuerza a recargar de la DB
        return view('perfil.mostrar', ['user' => $user]);
    }
    

    public function editar()
    {
        return view('perfil.edit', ['user' => Auth::user()]);
    }
    
    public function update(Request $request)
    {
        $user = User::findOrFail(Auth::id());
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'bio' => 'nullable|string',
        ]);
        
        $user->update($validatedData);
        
        return redirect()->route('perfil.mostrar')->with('success', 'Perfil actualizado correctamente');
    }
    
    
}
