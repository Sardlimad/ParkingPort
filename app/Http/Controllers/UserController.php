<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $users = User::all();

        return view('pages/users/view', compact('users'));
    }
    public function create()
    {

        return view('pages/users/create');
    }
    public function show($user)
    {
        $user_info = User::select('name','username','avatar','privilege','created_at')->where('username', $user)->first();

        return view('user_profile', compact('user_info'));
    }
}
