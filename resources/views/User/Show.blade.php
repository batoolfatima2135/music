@extends('layouts.dashboard')

@section('content')

<a class="btn btn-primary" href="{{route('register')}}">add new</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">Email</th>

      </tr>
    </thead>
    <tbody>

        @foreach ( $data as $user )
        <tr>
            <td>{{$user->id}}</td>

            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            {{-- <td>
                <a href="{{route('UserEditForm', $user->id)}}">Edit</a>
            </td>
            <td>
                <form action="{{route('DeleteUser', $user->id)}}" method="POST">
                    @csrf
                    <button type="submit">delete</button>
                </form>
            </td> --}}


        </tr>

        @endforeach

    </tbody>
  </table>
@endsection
