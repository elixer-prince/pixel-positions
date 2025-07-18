<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function store()
    {
        $attributes = request()->validate([
            "email"=> "required",
            "password"=> "required",
        ]);

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                "email"=> "Sorry, those credentials do not match!"
            ]);
        }

        request()->session()->regenerate();

        return redirect("/");
    }

    public function destroy(User $user)
    {
        Auth::logout();

        return redirect("/");
    }
}
