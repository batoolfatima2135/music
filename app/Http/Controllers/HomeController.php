<?php

namespace App\Http\Controllers;
use App\Models\music;
use App\Models\video;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $music = music::all();
        $video = video::all();
        $user = User::all();

        return view('dashboard.home',compact('music','video','user'));
    }


}
