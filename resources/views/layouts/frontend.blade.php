<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Melodi</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="HimanshuGupta">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
		<!-- Animate CSS -->
		<link href="{{ asset('css/animate.min.css')}}" rel="stylesheet">
		<!-- Basic stylesheet -->
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
		<!-- Font awesome CSS -->
		<link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="{{ asset('css/style.css')}}" rel="stylesheet">
		<link href="{{ asset('css/style-color.css')}}" rel="stylesheet">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/logo/favicon.ico">
	</head>

	<body>

		<!-- modal for booking ticket form -->
		<div class="modal fade" id="bookTicket" tabindex="-1" role="dialog" aria-labelledby="BookTicket">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Name of The Event &nbsp; <small><span class="label label-success">Available</span> &nbsp; <span class="label label-danger">Not Available</span></small></h4>
					</div>
					<!-- form for events ticket booking -->
					<form>
						<div class="modal-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@mail.com">
							</div>
							<div class="form-group">
								<label for="exampleInputContact">Contact</label>
								<input type="text" class="form-control" id="exampleInputContact" placeholder="+91 55 5555 5555">
							</div>
							<div class="form-group">
								<label for="exampleInputSeats">Number of Tickets</label>
								<select class="form-control" id="exampleInputSeats">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> I accept the Terms of Service
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<!-- link to payment gatway here -->
							<button type="button" class="btn btn-primary">Book Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- wrapper -->
		<div class="wrapper" id="home">

			<!-- header area -->
			<header>
				<!-- secondary menu -->
				<nav class="secondary-menu">
					<div class="container">
						<!-- secondary menu left link area -->
						<div class="sm-left">
							<strong>Phone</strong>:&nbsp; <a href="#">555 555 555</a>&nbsp;&nbsp;&nbsp;&nbsp;
							<strong>E-mail</strong>:&nbsp; <a href="#">music.site@melodi.com</a>
						</div>
						<!-- secondary menu right link area -->
						<div class="sm-right">
							<!-- social link -->
							<div class="sm-social-link">
								<a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
								<a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
								<a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</nav>
				<!-- primary menu -->
				<nav class="navbar navbar-fixed-top navbar-default">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- logo area -->
							<a class="navbar-brand" href="{{Route('front')}}">
								<!-- logo image -->
								<img class="img-responsive" src="img/logo/logo.png" alt="" />
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#latestalbum">Latest Songs</a></li>
								<li><a href="#featuredalbum">Featured Videos</a></li>
                                @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                                @else
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>

                             @endguest

							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
			<!--/ header end -->
    <!-- ##### Header Area End ##### -->
    <main class="py-4">
        @yield('content')
    </main>
   <!-- ##### Footer Area Start ##### -->
  	<!-- footer -->
      <footer>
        <div class="container">
            <!-- social media links -->
            <div class="social">
                <a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                <a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
            </div>
            <!-- copy right -->
            <p class="copy-right">&copy; copyright 2018, All rights are reserved.</p>
        </div>
    </footer>
    <!-- footer end -->

    <!-- Scroll to top -->
    <span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span>

</div>

<!-- Javascript files -->
<!-- jQuery -->
<script src="{{ asset('js/jquery.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<!-- WayPoints JS -->
<script src="{{ asset('js/waypoints.min.js')}}"></script>
<!-- Include js plugin -->
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<!-- One Page Nav -->
<script src="{{ asset('js/jquery.nav.js')}}"></script>
<!-- Respond JS for IE8 -->
<script src="{{ asset('js/respond.min.js')}}"></script>
<!-- HTML5 Support for IE -->
<script src="{{ asset('js/html5shiv.js')}}"></script>
<!-- Custom JS -->
<script src="{{ asset('js/custom.js')}}"></script>
</body>
</html>
