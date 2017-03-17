<!DOCTYPE html>
<html>
<head>
	<title>Opl</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#3e454c">
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/icons.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/materialize.js"></script>
	<script src="js/bashboard.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/chartData.js"></script>
	<!--link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"-->
</head>
<body>
	<?php include "header.php"; ?>
	<main class="padding-top-navbar">
		<div class="row">
			<div class="col l12 m12 s12">
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
		</div>
	</main>
</body>
</html>