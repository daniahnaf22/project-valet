<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.index' , ['title' => 'Register', 'active' => 'register']);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            //Role
            'name' => 'required|min:2|max:200',
            'username' => ['required', 'min:4', 'max:200', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:200'
        ]);
        //$validateData['password'] = bcrypt($validateData['password']);

        $validateData['password'] = Hash::make($validateData['password']);


        //dd($request);
        //return request()->all();
        User::create($validateData);

        $request->session()->flash('success', 'Register Successfully, Silahkan Login');

        return redirect('/login');
    }
}
