<nav class="navbar header-navbar pcoded-header">
	<div class="navbar-wrapper">
		<div class="navbar-logo">
			<a href="index.html">
				<img class="img-fluid" src="{{ url('resources/admin/assets/images/logo.png') }}" alt="Theme-Logo" />
			</a>
			<a class="mobile-menu" id="mobile-collapse" href="#!">
				<i class="feather icon-menu icon-toggle-right"></i>
			</a>
			<a class="mobile-options waves-effect waves-light">
				<i class="feather icon-more-horizontal"></i>
			</a>
		</div>
		<div class="navbar-container container-fluid">
			<ul class="nav-left">
				<li>
					<a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
						<i class="full-screen feather icon-maximize"></i>
					</a>
				</li>
			</ul>
			<ul class="nav-right">
				<li class="user-profile header-notification">
					<div class="dropdown-primary dropdown">
						<div class="dropdown-toggle" data-toggle="dropdown">
							<img src="{{ url('resources/admin/assets/images/avatar-4.jpg') }}" class="img-radius" alt="User-Profile-Image">
							<span>John Doe</span>
							<i class="feather icon-chevron-down"></i>
						</div>
						<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
							<li>
								<a href="#">
									<i class="feather icon-user"></i> Mi perfil
								</a>
							</li>
							<li>
								<a href="#">
									<i class="feather icon-log-out"></i> Cerrar sesión
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>
