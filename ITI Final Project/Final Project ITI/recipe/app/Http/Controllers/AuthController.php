<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
        public function showLogin()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request )
    {
        $user = User::where('email',$request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)){
            return redirect('/login')->withErrors(['msg'=>'Email or Password is incorrect!']);
        }

        session(['user_id' => $user->id]);
        return redirect()->route('recipes.index')->with(['message' => 'Hello' .' '. $user->name . '❤️']);
    }

    public function logout()
{

    session()->forget('user_id');
    return redirect('/login');
}

    public function showregister()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $register = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
]);
        return redirect('/login')->with(['msg' => 'Register Done, You can login now']);
    }

}
