<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        $user = Auth::user();
        return view('users.show', ['user' => $user]);
    }

    public function edit(){
        $user = Auth::user();
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user) {
        return redirect()->route('users.show',['user' => $user]);
    }
}
