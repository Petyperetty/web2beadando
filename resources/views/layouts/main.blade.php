<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>@yield('title', 'Mozik adatbázis főoldal')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="{{ route('fooldal') }}">Főoldal</a></li>
							<li><a href="{{ route('mozik') }}">Mozik</a></li>
							<li><a href="{{ route('diagram') }}">Diagram</a></li>							
							@guest
							<li><a href="{{ route('bejelentkezes') }}">Bejelentkezés</a></li>
							@endguest
							@auth
							<li>
								<form method="POST" action="{{ route('logout') }}">
									@csrf								
									<a href="#" 
									onclick="event.preventDefault(); this.closest('form').submit();">
										Kijelentkezés
									</a>
								</form>
							</li>
							@endauth
							@guest
							<li><a href="{{ route('regisztracio') }}">Regisztráció</a></li>
							@endguest
							@if(Auth::check() && Auth::user()->role == '1')
								<li><a href="{{ route('mozik') }}">CRUD</a></li>
							@endif
							<li><a href="{{ route('kapcsolat') }}">Kapcsolat</a></li>
							@auth
								<li><a href="{{ route('uzenetek') }}">Üzenetek</a></li>
							@endauth
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							@yield('content')
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset ('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>

	</body>
</html>