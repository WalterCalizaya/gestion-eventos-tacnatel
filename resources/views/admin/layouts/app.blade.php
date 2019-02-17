<!DOCTYPE html>
<html lang="es">
<head>

	<!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<title>@yield('title') | Panel de administración - Tacnatel</title>
	<meta name="description" content="@yield('description','Por defecto')" />
	<meta name="author" content="Tacnatel" />

	<link rel="icon" href="{{ url('/resources/admin/assets/images/favicon.ico') }}" type="image/x-icon">

	@include('admin.include.css')

</head>
<body>

	<div class="loader-bg">
		<div class="loader-bar"></div>
	</div>

	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">

			@include('admin.include.navbar')

			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">

					@include('admin.include.sidebar')

					<div class="pcoded-content">

						<div class="page-header card">
							<div class="row align-items-end">
								<div class="col-lg-8">
									<div class="page-header-title">
										<i class="feather icon-watch bg-c-blue"></i>
										<div class="d-inline">
											<h5>Sample page</h5>
											<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="page-header-breadcrumb">
										<ul class=" breadcrumb breadcrumb-title">
											<li class="breadcrumb-item">
												<a href="index.html"><i class="feather icon-home"></i></a>
											</li>
											<li class="breadcrumb-item">
												<a href="#!">Sample page</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="pcoded-inner-content">
							<div class="main-body">
								<div class="page-wrapper">
									<div class="page-body">

										<div class="row">
											<div class="col-sm-12">
												<div class="card">
													<div class="card-header">
														<h5>Hello card</h5>
														<div class="card-header-right">
															<ul class="list-unstyled card-option">
																<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
																<li><i class="feather icon-maximize full-card"></i></li>
																<li><i class="feather icon-minus minimize-card"></i></li>
																<li><i class="feather icon-refresh-cw reload-card"></i></li>
																<li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li>
															</ul>
														</div>
													</div>
													<div class="card-block">
														<p>
															"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
															in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
														</p>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>

					<div id="styleSelector">
					</div>

				</div>
			</div>
		</div>
	</div>

	@include('admin.include.js')

</body>

</html>
