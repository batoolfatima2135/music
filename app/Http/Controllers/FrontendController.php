<?php

namespace App\Http\Controllers;
use App\Models\music;
use App\Models\video;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function frontend()
    {
        $music = music::all();
        $video = video::all();
        return view('Frontend.home',compact('music','video'));
    }
}
