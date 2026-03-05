<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function login()
    {


/*        User::query()->create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => '123',
            'is_admin' => '1',
        ]);

        Customer::query()->create([
            'name' => 'John',
            'surname' => 'Big',
        ]);

        dd('OK');*/



        return view('user.login');

    }

    public function authenticate(Request $request)
    {

        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($validated))
        {
            if(Auth::user()->is_admin){
                return redirect()->route('admin.main.index');
            } else {
                return redirect()->route('home');
            }


        }

        return redirect()->back()->withErrors(['error' => 'Invalid credentials']);

    }


}
