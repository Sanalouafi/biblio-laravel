<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }
    public function show(User $user)
    {
        return view('admin.users.show', ['user' => $user]);
    }
    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role_id' => '',
        ]);
        $validatedData['role_id'] = 2;
        $user = User::create($validatedData);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
        ]);

        $user->update($validatedData);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }

}
