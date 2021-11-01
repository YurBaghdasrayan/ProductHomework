<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function postlogin(Request $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            return redirect()->route('profile');
        } else {
            return redirect()->route('login')->with('error', 'Invalid email or password');
        }
    }

    public function postSignup(CreateUserRequest $request)
    {
        $data = $request->validated();

//        dd($data);
        $user = User::create($data);

        return redirect()->route('login');

    }
}
