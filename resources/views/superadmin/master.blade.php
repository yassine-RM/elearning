<!DOCTYPE html>
<html>
<html dir="ltr" lang="en-US">
   <head>
      <meta charset="UTF-8" />
      <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/chartist/css/chartist-custom.css')}}">
	  <link rel="stylesheet" href="{{asset('css/main.css')}}">
	  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	  <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('assets/jquery/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('assets/chartist/js/chartist.min.js')}}"></script>
	<script src="{{asset('assets/jquery/klorofil-common.js')}}"></script>
</head>
<body>
<div id="wrapper">

<nav class="navbar navbar-default navbar-fixed-top">
			<!--<div class="brand">
				<a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>-->
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">

				</form>
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user"></i> <span>Utilisateur</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="profil"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<!--<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>-->
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					
					</ul>
				</div>
			</div>
		</nav>
    	<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="acceuil" class="active"><i class="lnr lnr-home"></i> <span>Acceuil</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
						<li>
						<li><a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-users"></i> <span>Gestion Comptes</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
					
						<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="compteadmin" class="">Comptes des administrateurs </a></li>
									<li><a href="superAdmin" class="">Comptes des super_administrateurs</a></li>
									
                                </ul>
								</li>
							
						<li><a href="departement" class=""><i class="lnr lnr-cog"></i> <span>Gestion Départements</span></a></li>
						<li><a href="cycle" class=""><i class="lnr lnr-cog"></i> <span>Gestion Cycles</span></a></li>
						<li><a href="filiere" class=""><i class="lnr lnr-cog"></i> <span>Gestion filières </span></a></li>
						<li><a href="semestre" class=""><i class="lnr lnr-cog"></i> <span>Gestion semestres</span></a></li>
						<li><a href="module" class=""><i class="lnr lnr-cog"></i> <span>Gestion modules</span></a></li>
						<li><a href="element" class=""><i class="lnr lnr-cog"></i> <span>Gestion éléments</span></a></li>
						
						<!--</li>
						<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
						 END LEFT SIDEBAR -->
					</ul>
				</nav>
			</div>
        </div>
		<div class="main">
		@yield('content')
		</div>
</div>




<script src="{{asset('assets/js/klorofil-common.js')}}"></script>

    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>

    </html>
