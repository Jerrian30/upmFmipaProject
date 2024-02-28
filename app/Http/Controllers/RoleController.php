<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RoleController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user_roles.index', compact('users'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'role' => 'required|in:admin,user',
        ]);

        $user->update($data);

        return redirect()->route('user_roles.index')->with('success', 'Role berhasil diubah.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('success', 'Berhasil dihapus');
    }
}
