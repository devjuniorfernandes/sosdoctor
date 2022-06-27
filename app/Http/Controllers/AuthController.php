<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller
{
    // Get All Users
    public function users()
    {
        return response([
            'users' => User::orderBy('created_at', 'desc')->get()
        ], 200);
    }

    //Register User
    public function register(Request $request)
    {

        //Validate fields
        $attrs = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create User
        $user = User::Create([
            'name' => $attrs['name'],
            'email' => $attrs['email'],
            'level' => 1,
            'password' => bcrypt($attrs['password']),
        ]);

        // Return User & Token in response

        return response([
            'user' => $user,
            'token' => $user->createToken('secret')->plainTextToken
        ]);
    }

    //Register User
    public function registeradm(Request $request)
    {

        //Validate fields
        $attrs = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'level' => 'required|integer',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create User
        $user = User::Create([
            'name' => $attrs['name'],
            'email' => $attrs['email'],
            'level' =>  $attrs['level'],
            'password' => bcrypt($attrs['password']),
        ]);

        // Return User & Token in response

        return response([
            'user' => $user,
        ]);
    }

    public function login(Request $request)
    {
        //Validate fields
        $attrs = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Login User
        if (!Auth::attempt($attrs)) {
            return response([
                'message' => 'Credencias de acesso invalidos!',
            ], 403);
        }

        // Return User & Token in response
        return response([
            'user' => auth()->user(),
            'token' => auth()->user()->createToken('secret')->plainTextToken
        ], 200);
    }


    public function update(Request  $request)
    {
        $image = $this->saveImage($request->image, 'profiles');

        auth()->user()->update([
            'image' => $image
        ]);

        return response([
            'message' => 'User updated.',
            'user' => auth()->user()
        ], 200);
    }

    // Logout User
    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response([
            'message' => 'Sessão terminada com sucesso!'
        ], 200);
    }

    // Get User Details
    public function user()
    {
        return response([
            'user' => auth()->user()
        ], 200);
    }
}
