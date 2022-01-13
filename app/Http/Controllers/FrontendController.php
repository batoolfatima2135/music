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
    public function search(Request $request)
    {

        $keyword = $request->search;

        if ($request->has('category')) {

            if($request->category == 'album')
            {
                $video = video::where('album', 'LIKE', "%$keyword%")->latest()
                ->get();
                $music = music::where('album', 'LIKE', "%$keyword%")
                ->latest()
                ->get();
                return view('Frontend.search',compact('music','video'));
            }
            if($request->category == 'artist')
            {
                $video = video::where('artist', 'LIKE', "%$keyword%")->latest()
                ->get();
                $music = music::where('artist', 'LIKE', "%$keyword%")
                ->latest()
                ->get();
                return view('Frontend.search',compact('music','video'));

            }
            if($request->category == 'year')
            {
                $video = video::where('year', 'LIKE', "%$keyword%")->latest()
                ->get();
                $music = music::where('year', 'LIKE', "%$keyword%")
                ->latest()
                ->get();
                return view('Frontend.search',compact('music','video'));

            }
        }

            $video = video::where('name', 'LIKE', "%$keyword%")->latest()
            ->get();
            $music = music::where('name', 'LIKE', "%$keyword%")
            ->latest()
            ->get();
            return view('Frontend.search',compact('music','video'));







    }
}
