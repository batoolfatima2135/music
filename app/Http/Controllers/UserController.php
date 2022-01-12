<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function Show()
    {
        $data = User::all();
        return view('User.Show',compact('data'));
    }

}
