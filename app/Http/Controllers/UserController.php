<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // SHOW SIGN UP / CREATE FORM //

    public function create() {
        return view('users.signup');
    }


    // CREATE NEW USER //

    public function store(Request $request) {
        $formFields = $request->validate([
            // 'min: 3' = minimum 3 caracteres //
            'firstname' => ['required', 'min:3'],
            'lastname' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|min:6'
        ]);

        
        
        // HASH PASSWORD //
        $formFields['password'] = bcrypt($formFields['password']);

        
        // CREATE USER //
        $user = User::create($formFields);
        

        // LOGIN //
        auth()->login($user);

        return redirect('/')->with('message', 'User created and loggin in');

    }
}
