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
					<div class="card">
			            <div class="card-content white-text">
			              	<span class="card-title grey-text text-darken-3">Registrar nuevo periodo para registrar proyectos.</span>
			              	<div class="row" style="margin-top: 30px;">
			              		<div class="col l6 m6 s12">
		              				<label class="font-normal grey-text text-darken-3">Fecha de inicio</label>
			              			<div class="input-field">
							          	<i class="material-icons prefix grey-text text-darken-3">today</i>
							         	<input id="icon_prefix" type="date" class="datepicker" class="validate">
							          	<!--label for="icon_prefix">Fecha de inicio</label-->
							        </div>
			              		</div>
			              		<div class="col l6 m6 s12">
			              			<label class="font-normal grey-text text-darken-3">Fecha de expiración</label>
			              			<div class="input-field">
							          	<i class="material-icons prefix grey-text text-darken-3">today</i>
							         	<input id="icon_prefix" type="date" class="datepicker" class="validate">
							          	<!--label for="icon_prefix">Fecha de expiración</label-->
							        </div>
			              		</div>
			              	</div>
			              	<div class="right-align">
			              		<button class="waves-effect waves-orange btn green">button</button>
			              	</div>
			            </div>
			        </div>
	    		</form>
			</div>
		</div>
	</main>
</body>
</html>