@extends('layouts.dashboard')
@section('content')

<h1>All Music</h1>
<h3>
    @if (session()->has('msg'))
        {{session()->get('msg')}}
    @endif
</h3>
    @if (session()->has('msg1'))
    {{session()->get('msg')}}
    @endif
</h3>
<a class="btn btn-primary" href="{{route('CreateMusicForm')}}">add new</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">image</th>
        <th scope="col">year</th>
        <th scope="col">artist</th>
        <th scope="col" >album</th>
        <th scope="col" >description</th>
      </tr>
    </thead>
    <tbody>

        @foreach ( $data as $Music )
        <tr>
            <td>{{$Music->id}}</td>
            <td>{{$Music->name}}</td>
            <td><img src="{{asset('/storage/MusicImages/'.$Music->image)}}" class="img-fluid"></td>

            <td><audio controls>
                <source src="{{asset('/storage/MusicFile/'.$Music->file)}}" type="audio/ogg">

              </audio></td>
            <td>{{$Music->year}}</td>
            <td>{{$Music->artist}}</td>
            <td>{{$Music->album}}</td>
            <td>{{$Music->description}}</td>
            <td>
                <a href="{{route('MusicEditForm', $Music->id)}}">Edit</a>
            </td>
            <td>
                <form action="{{route('DeleteMusic', $Music->id)}}" method="POST">
                    @csrf
                    <button type="submit">delete</button>
                </form>
            </td>


        </tr>

        @endforeach

    </tbody>
  </table>

@endsection
