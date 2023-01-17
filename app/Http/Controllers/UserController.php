<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'remember_token'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->password = $request->confirm_password;
        $user->remember_token = $request->remember_token;
        $user->save();
        return redirect('/login')->with('success', 'You have been registered successfully');
    }

    public function UserLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ($user->password == $request->password) {
                $request->session()->put('user', $user);
                $value = $request->session()->get('user');
                if ($value) {
                    return redirect('/articles');
                } else {
                    return redirect('/login');
                }
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        } else {
            return back()->with('fail', 'No account found for this email');
        }
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy()
    {
        session()->pull('user');
        return redirect('/login');
    }
}
