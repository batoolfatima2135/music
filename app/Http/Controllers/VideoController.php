<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function __construct()
    {
     $this->middleware('auth:admin');
    }
    public function ShowVideo()
    {
        $data = video::all();
        return view('Video.ShowVideo',compact('data'));
    }
    public function CreateVideoForm()
    {
        return view('Video.CreateForm');
    }

    public function CreateVideo(Request $request)
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

            $request->image->StoreAs('VideoImages',$ImageName,'public');


        }
        if($request->hasFile('file'))
        {   $video_file = $request->file('file');
              $filenames = $video_file->getClientOriginalName();
              $request->file->StoreAs('VideoFile',$filenames,'public');

            $Video =video::create($request->all());
            $Video->file = $filenames;
            $Video->image= $ImageName;
            $Video->save();
            return redirect()->back()->with('msg','Video added succesfully');

        }
        else
        {
            return redirect()->back()->with('msg','please upload image');
        }



    }
    public function VideoEditForm(video $Video)
    {
        return view('Video.EditForm',compact('Video'));
    }
    public function EditVideo(Request $request , Video $Video)
    {

        if($request->hasFile('image'))
        {
            $filename = $request->image->getClientOriginalName();
            Storage::delete('/public/VideoImages/'.$Video->image);
            $request->image->storeAs('VideoImages',$filename,'public');
            $Video->update($request->all());
            $Video->image = $filename;

        }
       $Video->update($request->all());

       return redirect(route('ShowVideo'))->with('msg','Video updated succesfully');
    }

    public function DeleteVideo(Video $Video)
    {
        $Video->delete();
        return redirect()->back()->with('msg1','deleted succesfully');
    }
}
