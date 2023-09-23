<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function logout() {
        auth()->logout();
        return view('login');
    }

    public function gotore() {

        return redirect('/register');
    }

    public function login(Request $request) {


        $incomeFields = $request->validate([
            'loginemail' => ['required'],
            'loginpassword' => ['required']

        ]);

        if(auth()->attempt(['email' => $incomeFields['loginemail'], 'password' => $incomeFields['loginpassword']])){
            $request->session()->regenerate();
        }

        return redirect('/');
    }


    public function register(Request $request) {
        $incomeFields = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email' ,Rule::unique('users', 'email')],
            'password' => ['required', 'min:5'],
        
        ]); 

        $incomeFields['password'] = bcrypt($incomeFields['password']);
        $incomeFields['admin'] = 0;
        $user = User::create($incomeFields);
        auth()->login($user);

        return redirect('/login');
    }
}