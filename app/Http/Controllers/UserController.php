<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function updateProfile(Request $request)
    {
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();
        $imageName = time().'.'.$request->profile_picture->extension();  
        $request->profile_picture->move(public_path('images'), $imageName);
        $user->profile_picture = $imageName;
        $user->save();

        return back()->with('success','Profil berhasil diganti');
    }

    public function showProfile()
    {
        $user = Auth::user(); // Mendapatkan user yang sedang login
        return view('profile.index', compact('user')); // Mengirim data user ke view
    }
}
