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
									<a href="{{Route('login')}}" class="animated fadeIn btn btn-theme">Download Here</a>
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

			<!-- block for animate navigation menu -->
			<div class="nav-animate"></div>

			<!-- Hero block area -->
			<div id="latestalbum" class="hero pad">
				<div class="container">
					<!-- hero content -->
					<div class="hero-content ">
						<!-- heading -->
						<h2>Latest Songs</h2>
						<hr>
						<!-- paragraph -->
						<p>We sing the best <strong class="theme-color">Songs</strong> and now we control the world best <strong class="theme-color">Music</strong>.</p>
					</div>
					<!-- hero play list -->
					<div class="hero-playlist">
						<div class="row">
                            @foreach ( $music as $Music )
							<div class="col-md-6 col-sm-6">
								<!-- music album image -->
								<div class="figure">
									<!-- image -->
									<img class="img-responsive" src="{{asset('/storage/MusicImages/'.$Music->image)}}" alt="" />

								</div>
								<!-- album details -->
								<div class="album-details">
									<!-- title -->
									<h4>{{$Music->name}}</h4>
									<!-- composed by -->
									<h4>Artist: {{$Music->artist}}</h4>
                                    <h5>Album: {{$Music->album}}</h5>
                                    <h5>Year: {{$Music->year}}</h5>
									<!-- paragraph -->
									<p>{{$Music->description}}</p>
									<!-- button -->
									<audio controls>
                                        <source src="{{asset('/storage/MusicFile/'.$Music->file)}}" type="audio/ogg">

                                      </audio>
								</div>
							</div>
                            @endforeach

						</div>
					</div>
				</div>
			</div>
			<!--/ hero end -->

			<!-- promo -->
			<div class="promo parallax-one pad">
				<div class="container">
					<!-- promo element -->
					<div class="promo-element ">
						<!-- heading -->
						<h3>Music An Art...</h3>
						<!-- paragraph -->
						<p>Music is an art form and cultural activity whose medium is sound organized in time. The common elements of music are <strong>pitch</strong>, <strong>rhythm</strong>, <strong>dynamics</strong> and the sonic qualities of <strong>timbre</strong> and <strong>texture</strong>.</p>
						<!-- link -->
						<a class="promo-link" href="#"><i class="fa fa-play-circle"></i></a>
					</div>
				</div>
			</div>
			<!--/ promo end -->

			<!-- featured abbum -->
			<div class="featured pad" id="featuredalbum">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Featured Videos</h2>
					</div>
					<!-- featured album elements -->
					<div class="hero-playlist">
						<div class="row">
                            @foreach ( $video as $Video )
							<div class="col-md-6 col-sm-6">
								<!-- music album image -->
								<div class="figure">
									<!-- image -->
									<img class="img-responsive" src="{{asset('/storage/VideoImages/'.$Video->image)}}" alt="" />

								</div>
								<!-- album details -->
								<div class="album-details">
									<!-- title -->
									<h4>{{$Video->name}}</h4>
									<!-- composed by -->
									<h4>Artist: {{$Video->artist}}</h4>
                                    <h5>Album: {{$Video->album}}</h5>
                                    <h5>year: {{$Video->year}}</h5>
									<!-- paragraph -->
									<p>{{$Music->description}}</p>
									<!-- button -->
                                    <video width="320" height="240" controls>
                                        <source src="{{asset('/storage/VideoFile/'.$Video->file)}}" type="video/mp4">

                                      </video>
								</div>
							</div>
                            @endforeach
						</div>
					</div>
				</div>
			</div>
			<!-- features end -->

			<!-- call to action -->
			<div class="cta parallax-one pad">
				<div class="container">
					<!-- cta element -->
					<div class="cta-element ">
						<div class="row">
							<div class="col-md-9 col-sm-8">
								<!-- heading -->
								<h3>Melodi, A Fully Rock Album Pro</h3>
								<!-- paragraph -->
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim sectetur adipiscing elit, sed do eiusmod tempoad minim veniam consequat.</p>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="cta-btn text-center">
									<!-- purchase now button -->
									<a href="{{Route('login')}}" class="btn btn-default btn-lg">Download Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ cta end -->

			<!-- work with us -->
			<div class="work-with-us pad" id="joinus">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Work With Us</h2>
					</div>
					<!-- why work with us content -->
					<div class="why-content">
						<!-- paragraph -->
						<p class="why-message">It would be a great pleasure to have you in our team, follow these steps to join us.</p>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<!-- why work with us item -->
								<div class="why-item  delay-one">
									<span class="why-number">1</span>
									<!-- paragraph -->
									<p>Sed ut perspi ciatis unde omnis iste natus error sit vol uptatem accus antium totam rem aperiam, eaque ipsa quae ab illo inventore veritatisnatus.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- why work with us item -->
								<div class="why-item  delay-two">
									<span class="why-number">2</span>
									<!-- paragraph -->
									<p>Sed ut perspi ciatis unde omnis iste natus error sit vol uptatem accu santium totam rem aperiam, eaque ipsa quae ab illo inventore veritatisnatus.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- why work with us item -->
								<div class="why-item  delay-three">
									<span class="why-number">3</span>
									<!-- paragraph -->
									<p>Sed ut perspi ciatis unde omnis iste natus error sit vol uptatem accus antium totam rem aperiam, eaque ipsa quae ab illo inventore veritatisnatus.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- why work with us item -->
								<div class="why-item  delay-four">
									<span class="why-number">4</span>
									<!-- paragraph -->
									<p>Sed ut perspi ciatis unde omnis iste natus error sit vol uptatem accus antium totam rem aperiam, eaque ipsa quae ab illo inventore veritatisnatus.</p>
								</div>
							</div>
						</div>
						<!-- apply button -->
						<div class="apply-btn">
							<!-- button line -->
							<a class="btn btn-lg btn-theme" href="{{Route('login')}}">Join Now</a>
						</div>
					</div>
				</div>
			</div>
			<!--/ end work with us -->

			<!-- news letter -->
			<div class="news-letter">
				<div class="container">
					<!-- news letter inner content -->
					<div class="news-content ">
						<!-- heading -->
						<h3>Sign Up For Newsletter</h3>
						<!-- paragraph -->
						<p><strong>Contact Us</strong> and let us know if you have any questions, Don't forget to subscribe for more awesome stuff by typing mail bellow.</p>
						<!-- subscribe form -->
						<form>
							<div class="input-group">
								<input type="text" class="form-control input-lg" placeholder="Email">
								<span class="input-group-btn">
									<a href="{{Route('login')}}" class="btn btn-default btn-lg" type="button">Subscribe</a>
								</span>
							</div><!-- /input-group -->
						</form>
					</div>
				</div>
			</div>
			<!-- news letter end -->

			<div class="portfolio pad" id="portfolio">
				<div>
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Portfolio</h2>
					</div>
				</div>
				<!-- portfolio -->

				<!-- portfolio end -->
			</div>
			<!-- work with us end -->

			<!-- events -->

			<!-- events end -->

			<!-- about -->
			<div class="about" id="team">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Who We Are?</h2>
					</div>
					<!-- about what we are like content -->
					<div class="about-what-we">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="what-we-item ">
									<!-- heading with icon -->
									<h3><i class="fa fa-heartbeat"></i> What we do?</h3>
									<!-- paragraph -->
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit occaecat cupidatat non id est laborum.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="what-we-item ">
									<!-- heading with icon -->
									<h3><i class="fa fa-hand-o-up"></i> Why choose us?</h3>
									<!-- paragraph -->
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit occaecat cupidatat non id est laborum.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="what-we-item ">
									<!-- heading with icon -->
									<h3><i class="fa fa-map-marker"></i> Where we are?</h3>
									<!-- paragraph -->
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit occaecat cupidatat non id est laborum.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- our team -->

			</div>
			<!-- about end -->

			<!-- meet -->
			<div class="meet parallax-four pad" id="meet">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading-shadow">
						<h2>Upcoming Meets</h2>
					</div>
					<!-- meet location image -->
					<div class="meet-map">
						<img class="img-responsive img-map" src="{{ asset('img/flat/map.png')}}" alt="" />
						<!-- map marker for India  -->
						<a href="#" class="map-marker india " data-toggle="tooltip" data-placement="top" title="India"><img class="img-responsive" src="{{ asset('img/flat/map-marker.png')}}" alt="" /></a>
						<!-- map marker for United States  -->
						<a href="#" class="map-marker usa " data-toggle="tooltip" data-placement="top" title="United States"><img class="img-responsive" src="{{ asset('img/flat/map-marker.png')}}" alt="" /></a>
						<!-- map marker for South Africa  -->
						<a href="#" class="map-marker sa " data-toggle="tooltip" data-placement="top" title="South Africa"><img class="img-responsive" src="{{ asset('img/flat/map-marker.png')}}" alt="" /></a>
						<!-- map marker for Russia  -->
						<a href="#" class="map-marker russia " data-toggle="tooltip" data-placement="top" title="Russia"><img class="img-responsive" src="{{ asset('img/flat/map-marker.png')}}" alt="" /></a>
						<!-- map marker for Brazil  -->
						<a href="#" class="map-marker brazil " data-toggle="tooltip" data-placement="top" title="Brazil"><img class="img-responsive" src="{{ asset('img/flat/map-marker.png')}}" alt="" /></a>
					</div>
				</div>
			</div>
			<!-- meet end -->



@endsection
