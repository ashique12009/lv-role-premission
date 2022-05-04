<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        // Assign role to user
        //$role = Role::where('slug', 'editor')->first();
        //$user->roles()->attach($role);
        
        if ($user->hasRole('editor')) {
            // Assign premission to editor role
            $permission = Permission::first();
            $user->permissions()->attach($permission);
            
        }

        return view('dashboard');
    }
}
