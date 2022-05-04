<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        // Assign role to user
        $role = Role::where('slug', 'editor')->first();
        $user->roles()->attach($role);
        dd($user->roles);

        return view('dashboard');
    }
}
