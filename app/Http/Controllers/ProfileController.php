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
        return view('perfil.mostrar', ['user' => Auth::user()]);
    }

    public function editar()
    {
        return view('perfil.edit', ['user' => Auth::user()]);
    }
    public function update(Request $request)
    {
        $user = User::find(Auth::id());
    
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'profile_photo' => 'nullable|image|max:2048',
        ]);
    
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->bio = $request->bio;
        $user->profile_photo = $request->profile_photo;
        if ($request->hasFile('profile_photo')) {
            if ($user->profile_photo && Storage::exists('public/' . $user->profile_photo)) {
                Storage::delete('public/' . $user->profile_photo);
            }
    
            $path = $request->file('profile_photo')->store('profile_photos', 'public');
            $user->profile_photo = $path;
        }
        
        $user->save();
        if (!$user->save()) {
            return back()->withErrors(['error' => 'No se pudo guardar el perfil.']);
        }
    
        return redirect()->route('perfil.mostrar')->with('success', 'Perfil actualizado correctamente');
    }
    
}
