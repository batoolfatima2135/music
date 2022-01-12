@extends('layouts.dashboard')
@section('content')
<h1>Music Add</h1>
<h1>
    @if (session()->has('msg'))
        {{session()->get('msg') }}
    @endif
</h1>
@if ($errors->any())
@foreach ($errors->all() as $error )
    {{$error}}
@endforeach
@endif
<form  action="{{route('CreateMusic')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter music name">

    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Image</label>
        <input type="file" name="image"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">File</label>
        <input type="file" name="file"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Year</label>
        <input type="text" class="form-control" name="year" id="exampleInputEmail1" placeholder="Enter music Year">

      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Artist</label>
        <input type="text" class="form-control" name="artist" id="exampleInputEmail1" placeholder="Enter music Artist">

      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Album</label>
        <input type="text" class="form-control" name="album" id="exampleInputEmail1" placeholder="Enter music Album">

      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="exampleInputEmail1" ></textarea>

      </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <a class="btn btn-primary" href="{{route('ShowMusic')}}">View</a>
@endsection
