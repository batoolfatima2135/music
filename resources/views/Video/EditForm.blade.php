@extends('layouts.dashboard')
@section('content')
<h1>Video Edit</h1>
@if ($errors->any())
@foreach ($errors->all() as $error )
    {{$error}}
@endforeach
@endif
<form  action="{{route('EditVideo',$Video->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text"  value="{{$Video->name}}" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Video name">

    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Image</label>
        <input type="file" name="image"    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">File</label>
        <input type="file" name="file"    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Year</label>
        <input type="text" class="form-control"  value="{{$Video->year}}" name="year" id="exampleInputEmail1" placeholder="Enter Video Year">

      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Artist</label>
        <input type="text" class="form-control"  value="{{$Video->artist}}" name="artist" id="exampleInputEmail1" placeholder="Enter Video Artist">

      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Album</label>
        <input type="text" class="form-control"  value="{{$Video->album}}" name="album" id="exampleInputEmail1" placeholder="Enter Video Album">

      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <input type="text" class="form-control" name="description"  value="{{$Video->description}}" id="exampleInputEmail1" >

      </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
