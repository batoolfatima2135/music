<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function __construct()
    {
     $this->middleware('auth:admin');
    }
    public function ShowMusic()
    {
        $data = music::all();
        return view('Music.ShowMusic',compact('data'));
    }
    public function CreateMusicForm()
    {
        return view('Music.CreateForm');
    }

    public function CreateMusic(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255 ',
            'image'=>'required',
            'file'=>'required',
            'year'=>'required|integer',
            'artist'=>'required|string|max:255',
            'album'=>'required|string|max:255',
            'description'=>'required|max:255'

        ]);

        if($request->hasFile('image'))
        {
            $ImageName =$request->image->getClientOriginalName();

            $request->image->StoreAs('MusicImages',$ImageName,'public');


        }
        if($request->hasFile('file'))
        {   $music_file = $request->file('file');
              $filenames = $music_file->getClientOriginalName();
              $request->file->StoreAs('MusicFile',$filenames,'public');

            $Music =music::create($request->all());
            $Music->file = $filenames;
            $Music->image= $ImageName;
            $Music->save();
            return redirect()->back()->with('msg','Music added succesfully');

        }
        else
        {
            return redirect()->back()->with('msg','please upload file');
        }



    }
    public function MusicEditForm(music $Music)
    {
        return view('Music.EditForm',compact('Music'));
    }
    public function EditMusic(Request $request , music $Music)
    {

        if($request->hasFile('image'))
        {
            $filename = $request->image->getClientOriginalName();
            Storage::delete('/public/MusicImages/'.$Music->image);
            $request->image->storeAs('MusicImages',$filename,'public');
            $Music->update($request->all());
            $Music->image = $filename;

        }
        if($request->hasFile('file'))
        {
            $filenames = $request->file->getClientOriginalName();
            Storage::delete('/public/MusicFile/'.$Music->file);
            $request->image->storeAs('MusicFile',$filenames,'public');
            $Music->update($request->all());
            $Music->file = $filenames;

        }

       $Music->update($request->all());

       return redirect(route('ShowMusic'))->with('msg','Music updated succesfully');
    }

    public function DeleteMusic(music $Music)
    {
        $Music->delete();
        return redirect()->back()->with('msg1','deleted succesfully');
    }
}
