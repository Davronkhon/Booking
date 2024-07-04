<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }
    public function create()
    {
        $users = User::all();
        return view('user.create', compact('users'));
    }
    public function destroy(User $users, $id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('/user')->with('success', 'Users updated succesfully');
    }
    public function edit(User $users, $id)
    {
        $users = User::findOrFail($id);
        return view('user.edit', compact('users'));
    }
    public function show(User $users, $id)
    {
        $users = User::findOrFail($id);
        return view('user.index', compact('users'));
    }
    public function store(Request $request)
    {
        $validated=$request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|string',
            'email' => 'required|string',
        ]);
        // Сохранение данных
        User::create($validated);
       return redirect()->route('user.index')->with('message', 'Booking created successfully!');
    }
    public function update(Request $request, $id)
    {
//            dd($request);
//        $request->validate([
//            'username' => 'required|string',
//            'password' => 'required|string',
//            'role' => 'required|string',
//            'email' => 'required|string',
//        ]);

        $users = User::findOrFail($id);
        $users->update($request->all());

    }
}
