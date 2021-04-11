<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $user = User::find(1);
        // dd($user->roles[0]->name);
        // $user->roles()->attach(1);
        // $user->roles()->detach(1);
        // $user->roles()->sync([1, 2]);
        // dd($user->roles);
        // dd($user->roles()->first()->pivot->created_at);

        $role = Role::find(1);
        dd($role->users);

    }
}
