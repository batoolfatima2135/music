@extends('layouts.frontend')
@section('content')
<!-- banner area -->
<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/banner/b1.jpg" alt="...">
                <div class="container">
                    <!-- banner caption -->
                    <div class="carousel-caption slide-one">
                        <!-- heading -->
                        <h2 class="animated fadeInLeftBig"><i class="fa fa-music"></i> Melodi For You!</h2>
                        <!-- paragraph -->
                        <h3 class="animated fadeInRightBig">Find More Innovative &amp; Creative Music Albums.</h3>
                        <!-- button -->
                        <a href="#" class="animated fadeIn btn btn-theme">Download Here</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('img/banner/b2.jpg')}}" alt="...">
                <div class="container">
                    <!-- banner caption -->
                    <div class="carousel-caption slide-two">
                        <!-- heading -->
                        <h2 class="animated fadeInLeftBig"><i class="fa fa-headphones"></i> Listen It...</h2>
                        <!-- paragraph -->
                        <h3 class="animated fadeInRightBig">Lorem ipsum dolor sit amet, consectetur elit.</h3>
                        <!-- button -->
                        <a href="#" class="animated fadeIn btn btn-theme">Listen Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="fa fa-arrow-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="fa fa-arrow-right" aria-hidden="true"></span>
        </a>
    </div>
</div>
<!--/ banner end -->
@if ($music)
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">image</th>
        <th scope="col">file</th>
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
  @endif
@if ($video)


  <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">name</th>
          <th scope="col">image</th>
          <th scope="col">file</th>
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
    @endif
 @endsection
