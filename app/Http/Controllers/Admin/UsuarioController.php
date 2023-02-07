<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;


class UsuarioController extends Controller
{
 
    
    public function index()
    {
        $users = User::all();
        $role = Role::all();
        return view('admin.Usuario.index', compact('users', 'role'));
    }

    public function create()
    {
        $role = Role::all();
        return view('admin.Usuario.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        $user = User::create($request->all());
        $user->roles()->sync($request->roles);
            return redirect()->route('admin.Usuario.index', $user)->with('creado', 'ok');
    }
    

    
    public function show(User $user)
    {
        return view('admin.Usuario.show', compact('user'));
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.Usuario.edit', compact('user', 'roles'));
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => "required|unique:users,email,$user->id",
           
        ]);
     $user->update($request->all());
        $user->roles()->sync($request->roles);
        
            return redirect()->route('admin.Usuario.index', $user)->with('act', 'ok');
    }


}
