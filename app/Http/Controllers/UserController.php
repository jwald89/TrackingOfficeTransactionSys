<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        return view('personnel.register');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'username' => ['required'],
            'fName' => ['required'],
            'mName' => ['required'],
            'lName' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email') ],
            'password' => 'required|confirmed'
        ]);

        $validate['password'] = bcrypt($validate['password']);


        $user = new User();
        $user->username = $request['username'];
        $user->firstname = $request['fName'];
        $user->middlename = $request['mName'];
        $user->lastname = $request['lName'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();

        return "Success";
    }
}
