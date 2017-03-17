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
<body>
	<header>
  		<?php include "header.php"; ?>
	</header>
	<main class="padding-navbar-top">
		<div class="content">
			<div class="row">
				<div class="col l2 m2 s12"></div>

				<div class="col l8 m8 S12">
					<form>
					<div class="file-field input-field">
      <div class="btn">
        <i class="material-icons">attach_file</i>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
						<div class="card blue-grey darken-3">
							<div class="card-content grey-text text-lighten-2">
								<span class="card-title center-align"><strong>Registra tu proyecto</strong></span>
								<p>I am a very simple card. I am good at containing small bits of information.
								I am convenient because I require little markup to use effectively.</p>

								<div class="input-field top-space-medium">
									<i class="material-icons prefix">account_circle</i>
									<input id="icon_prefix" type="text" class="validate">
									<label for="icon_prefix">Nombre del proyecto</label>
								</div>

								<div class="input-field top-space-medium">
									<i class="material-icons prefix">mode_edit</i>
							        <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
							        <label for="icon_prefix2">Descripción del proyecto</label>
								</div>

								<!--div class="input-field top-space-medium">
									<i class="material-icons prefix">today</i>
									<input id="icon_prefix"  type="date" class="datepicker">
									<label for="icon_prefix"></label>
								</div-->

								<div class="input-field top-space-medium">
									<i class="material-icons prefix">list</i>
									<select>
								      <option value="" disabled selected>Selectiona</option>
								      <option value="1">Option 1</option>
								      <option value="2">Option 2</option>
								      <option value="3">Option 3</option>
								    </select>
								    <label>Selecciona la localidad del proyecto</label>
								</div>
								<br>
								<div class="input-field top-space-medium">
									<i class="material-icons prefix">list</i>
									<select>
								      <option value="" disabled selected>Selectiona</option>
								      <option value="1">Option 1</option>
								      <option value="2">Option 2</option>
								      <option value="3">Option 3</option>
								    </select>
								    <label>Selecciona tu generación </label>
								</div>
								<br>
								<div class="input-field top-space-medium">
									<i class="material-icons prefix">list</i>
									<select id="colaboradores">
								      <option value="" disabled selected>Selectiona</option>
								      <option value="1">Colaboro 1</option>
								      <option value="2">Colaboro 2</option>
								      <option value="3">Colaboro 3</option>
								    </select>
								    <label>Selecciona tu cuantos colaboran en el proyecto</label>
								</div>
								<br>

								<div class="row">
									<div class="input-field col l6 m6 s12" style="padding-left: 0px !important;">
										<input type="checkbox" id="test5" />
										<label for="test5" class="grey-text text-lighten-2">Proyecto continuara</label>
									</div>
									<div class="input-field col l6 m6 s12" style="padding-left: 0px !important;">
										<input type="checkbox" id="test5" />
										<label for="test5" class="grey-text text-lighten-2">Proyecto no continuar</label>
									</div>
								</div>

							</div>
							<hr style="border: 1px solid rgba(160, 160, 160, 0.2);width: 90%;">
							<div class="card-action" style="border-top: 0px !important;">
								<div class="row center-align">
									<a class="waves-effect waves-orange btn orange">Crear cuenta</a>
								</div>
							</div>

							<div class="input-field top-space-medium" id="one">
									<i class="material-icons prefix">account_circle</i>
									<input id="icon_prefix" type="text" class="validate">
									<label for="icon_prefix">Nombre del proyecto</label>
								</div>

								<div class="input-field top-space-medium" id="two">
									<i class="material-icons prefix">account_circle</i>
									<input id="icon_prefix" type="text" class="validate">
									<label for="icon_prefix">Nombre del proyecto</label>
								</div>

								<div class="input-field top-space-medium" id="three">
									<i class="material-icons prefix">account_circle</i>
									<input id="icon_prefix" type="text" class="validate">
									<label for="icon_prefix">Nombre del proyecto</label>
								</div>
						</div>
					</form>
				</div>

				<div class="col l2 m2 s12"></div>

			</div>
		</div>
	</main>
	<?php include "footer.php"; ?>
</body>
</html>



