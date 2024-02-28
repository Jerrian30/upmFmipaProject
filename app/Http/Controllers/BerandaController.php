<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BerandaController extends Controller
{
    public function index(){
        $adminCount = User::where('role', 'admin')->count();
        $userCount = User::where('role', 'user')->count();
        $usersCount = User::count();

        return view('beranda.index', compact('userCount', 'usersCount', 'adminCount'));
    }
}
