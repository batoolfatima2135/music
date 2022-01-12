@extends('layouts.dashboard')
@section('content')

<h1>All Video</h1>
<h3>
    @if (session()->has('msg'))
        {{session()->get('msg')}}
    @endif
</h3>
    @if (session()->has('msg1'))
    {{session()->get('msg')}}
    @endif
</h3>
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
        @if ($errors->any())
            @foreach ($errors->all() as $error )
                {{$error}}
            @endforeach
        @endif

        @foreach ( $data as $Video )
        <tr>
            <td>{{$Video->id}}</td>
            <td>{{$Video->name}}</td>
            <td><img src="{{asset('/storage/VideoImages/'.$Video->image)}}" height="200px"></td>

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
