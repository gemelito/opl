<!DOCTYPE html>
<html>
<head>
	<title>Opl</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/icons.css">
	<script src="js/jquery.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/app.js"></script>
	<!--link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"-->
</head>
<body class="light-blue lighten-1">
	<main class="padding-navbar-top">
		<div class="content">
			<div class="row">
				<div class="col l3 m2 s12"></div>

				<div class="col l6 m8 S12">
					<form>
						<div class="card blue-grey darken-3">
							<div class="card-content grey-text text-lighten-2">
								<span class="card-title center-align"><strong>Inicio de sesión</strong></span>
								<p>I am a very simple card. I am good at containing small bits of information.
								I am convenient because I require little markup to use effectively.</p>
								<div class="input-field top-space-medium">
								<i class="material-icons prefix">account_circle</i>
								<input id="icon_prefix" type="text" class="validate">
								<label for="icon_prefix">Email</label>
								</div>
								<div class="input-field">
								<i class="material-icons prefix">lock</i>
								<input id="icon_lock" type="password" class="validate">
								<label for="icon_lock">Contraseña</label>
								</div>
								<div class="row">
								<div class="input-field col l6 m6 s12" style="padding-left: 0px !important;">
									<input type="checkbox" id="test5" />
									<label for="test5" class="grey-text text-lighten-2">Recordar contraseña</label>
								</div>
								<div class="input-field col l6 m6 s12">
									<label for="test5">
										<a href="Recuperar contraseña" class="orange-text">Recuperar Contraseña</a>
									</label>
								</div>
								</div>
							</div>
							<hr style="border: 1px solid rgba(160, 160, 160, 0.2);width: 90%;">
							<div class="card-action" style="border-top: 0px !important;">
								<div class="row center-align">
									<div class="col l6 m6 s12"><a class="waves-effect waves-light btn orange margin-bottom">Iniciar sesión</a></div>
									<div class="col l6 m6 s12"><a class="waves-effect waves-orange btn-flat">Crear cuenta</a></div>
								</div>
							</div>
						</div>
					</form>
				</div>

				<div class="col l3 m2 s12"></div>

			</div>
		</div>
	</main>
</body>
</html>