<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
         'title' => 'register',
         'active' => 'register'
        ]);
    }

    public function store(Request $request) {
        
        $validateData = $request->validate([
            //Role
            'name' => 'required|min:2|max:200',
            'username' => ['required', 'min:4', 'max:200', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:200'
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);
        
        // dd($request);
        //return request()->all();
        User::create($validateData);

        $request->session()->flash('success', 'Registrasi berhasil, silahkan login!');

        return redirect('/login');

    }
}
