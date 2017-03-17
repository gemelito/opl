<header>
	<div class="navbar-fixed">
		<nav class="orange darken-4">
			<div class="nav-wrapper content">
				<a class="brand-logo">Opl Dashboard</a>
				<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down" style="margin-right: 20px">
					<li><a><i class="material-icons left">launch</i>Salir</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<ul id="slide-out" class="side-nav fixed">
		<li><div class="userView">
			<div class="background">
				<img src="images/example.jpg">
			</div>
			<a href="#!user"><img class="circle" src="images/testi.jpg"></a>
			<a href="#!name" class='dropdown-button' data-beloworigin="true" href='#' data-activates='user-dw'><span class="white-text name">Pedro Canche<i class="material-icons" id="icon">arrow_drop_down</i></span></a>
			<a href="#!email" class="top-space"><span class="white-text email">pedro.canche@uimqroo.edu.mx</span></a>
		</div></li>
		<li><a href="index.php" class="waves-effect" ><i class="material-icons">dashboard</i>Inicio</a></li>
		<li><a href="dashboard/register.php" class="waves-effect" ><i class="material-icons">receipt</i>Crear evento</a></li>
		<li><a href="register-list.php" class="waves-effect" ><i class="material-icons">view_list</i>Listar eventos</a></li>
		<li><a href="proyectos-list.php" class="waves-effect" ><i class="material-icons">work</i>Proyectos <span class="new badge">4</span></a></li>
		<li><a href="alumnos-list.php" class="waves-effect" ><i class="material-icons">supervisor_account</i>Alumnos <span class="new badge">678</span></a></li>
	</ul>

	<ul id='user-dw' class='dropdown-content'>
		<li><a href="account.php">Mi cuenta</a></li>
		<li><a>Cerrar sesión</a></li>
	</ul>
</header>