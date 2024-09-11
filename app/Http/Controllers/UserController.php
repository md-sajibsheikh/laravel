<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginCheck(Request $req)
    {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            return redirect()->route('home');
        } else {
            return redirect()->back(); 
        }
    }
    public function singup()
    {
        return view('singup'); 
    }
    public function singupData(Request $req)
    {
        $data['name'] = $req->name; 
        $data['email'] = $req->email;
        $data['phone'] = $req->phone;
        $data['password'] = Hash::make($req->password);

        User::create($data);

        return redirect()->route('login');
    }
}
