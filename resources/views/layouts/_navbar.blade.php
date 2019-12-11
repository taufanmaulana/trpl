	<!-- header section start -->
	<header class="header">
		<div class="container">
			<div class="row flexbox-center">
				<div class="col-lg-2 col-md-3 col-6">
					<div class="logo">
						<!-- <a href="#home"><img src="assets/img/logo.png" alt="logo" /></a> -->
					</div>
				</div>
				<div class="col-lg-10 col-md-9 col-6">
					<div class="responsive-menu"></div>
					<div class="mainmenu">
						<ul id="primary-menu">
							<li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
							<li class="nav-item active"><a href="/" class="nav-link">About</a></li>
							<li class="nav-item active"><a href="/" class="nav-link">Destination</a></li>
							<li class="nav-item active"><a href="/galery" class="nav-link">Galery</a></li>
							@guest
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@if (Route::has('register'))
							<li class="nav-item">
								<!-- <a class="nav-link" href="/maintenance">{{ __('Register') }}</a> -->
								<a class="nav-link text-light" href="#" data-toggle="modal" data-target="#exampleModal">
									{{ __('Register') }}
								</a>

							</li>
							@endif
							@else
							<li>
								@if(Auth::user()->hasAnyRole('admin'))
								<a class="nav-link" href="{{url('kota')}}">
									{{ __('Manage') }}
								</a>
								@endif
								@if(Auth::user()->hasAnyRole('fotografer'))
								<a class="nav-link" href="{{url('foto')}}">
									{{ __('Setting') }}
								</a>
								@endif
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</li>
							@endguest

						</ul>
					</div>
				</div>
			</div>
		</div>
	</header><!-- header section end -->
	<!-- hero area start -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Registrasi Square trip</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Daftar sebagai
				</div>
				<div class="modal-footer">
					<!-- <a href="#" class="btn btn-Primary text-light">Wisatawan</a> -->
					<a href="{{url('registrasi')}}" class="btn btn-dark text-light">Wisatawan</a>
					<a href="{{url('register')}}" class="btn btn-dark text-light">Fotografer</a>
				</div>
			</div>
		</div>
	</div>