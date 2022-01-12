@extends('layouts.dashboard')
@section('content')
<h1>All User</h1>

<table class="table">

    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">Email</th>

      </tr>
    </thead>
    <tbody>

        @foreach ( $user as $users )
        <tr>
            <td>{{$users->id}}</td>

            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            {{-- <td>
                <a href="{{route('UserEditForm', $users->id)}}">Edit</a>
            </td>
            <td>
                <form action="{{route('DeleteUser', $users->id)}}" method="POST">
                    @csrf
                    <button type="submit">delete</button>
                </form>
            </td> --}}


        </tr>

        @endforeach

    </tbody>
  </table>
  <h1>All Music</h1>


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

          @foreach ( $music as $Music )
          <tr>
              <td>{{$Music->id}}</td>
              <td>{{$Music->name}}</td>
              <td><img src="{{asset('/storage/MusicImages/'.$Music->image)}}" class="img-fluid" height="30px"></td>
            <td>  <audio controls>
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
    <h1>All Video</h1>


    <a class="btn btn-primary" href="{{route('CreateVideoForm')}}">add new</a>
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

            @foreach ( $video as $Video )
            <tr>
                <td>{{$Video->id}}</td>
                <td>{{$Video->name}}</td>
                <td><img src="{{asset('/storage/VideoImages/'.$Video->image)}}"></td>
                <td><video width="320" height="240" controls>
                    <source src="{{asset('/storage/VideoFile/'.$Video->file)}}" type="video/mp4">

                  </video></td>
                <td>{{$Video->year}}</td>
                <td>{{$Video->artist}}</td>
                <td>{{$Video->album}}</td>
                <td>{{$Video->description}}</td>
                <td>
                    <a href="{{route('VideoEditForm', $Video->id)}}">Edit</a>
                </td>
                <td>
                    <form action="{{route('DeleteVideo', $Video->id)}}" method="POST">
                        @csrf
                        <button type="submit">delete</button>
                    </form>
                </td>


            </tr>

            @endforeach

        </tbody>
      </table>

@endsection
