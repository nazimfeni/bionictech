<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    //Register User
    public function register(Request $request)
    {

        //Validate
        $fields = $request->validate([
            'username' => ['required', 'max:255'],
            'email'    => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'min:3', 'confirmed'],
        ]);

        //Register
        $user = User::create($fields);

        //Login

        Auth::login($user);

        //Redirect
        return redirect()->route('dashboard');

        //dd("ok");

    }

    // Login User

    public function login(Request $request)
    {
        //Validate
        $fields = $request->validate([
            'email'    => ['required', 'max:255'],
            'password' => ['required'],
        ]);

        
        if(Auth::attempt($fields, $request->remember)){
            return redirect()->intended(route('dashboard'));
        }
        else {
            return back()->withErrors([
                'failed'=>"The record is not found"
            ]);
        }

    }

}
