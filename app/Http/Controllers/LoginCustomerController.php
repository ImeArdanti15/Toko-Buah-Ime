<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginCustomerController extends Controller
{

    public function login()
    {
            return view('masukcustomer.index');

    }
    public function register()
    {
            return view('daftarcustomer.index');

    }

    public function auth(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('welcome');
        } else {
            return redirect()->route('account.login')->with('error', 'Email or Password incorrect');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('account.login')
        ->with('success', 'Logout successfully');
    }

    public function storeRegister(Request $request)
    {
        $data = $request->only([
            'name',
            'email',
            'password',
        ]);

        User::create($data);
        session()->flash('success', 'You have been registered succesfully');

        return redirect()->back();
    }
}
