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
				<div class="card">
		            <div class="card-content grey-text text-darken-3">
		              	<div class="row">
		              		<div class="col l9 m8 s12">
		              			<span class="card-title text-400">Lista de los proyectos registrados.</span>
		              			<span class="text-300">Total de registrados 65</span>
		              		</div>
		              		<div class="col l3 m4 s12">
		              			<form>
							        <div class="input-field">
							          <input id="search" type="search" class="blue-grey darken-4" required>
							          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
							          
							        </div>
							    </form>
		              		</div>
		              	</div>
		              	<table class="table highlight centered responsive-table top-space">
							<thead>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>
										  <button class="btn waves-effect waves-light orange" type="submit" name="action">
										    <i class="material-icons">edit</i>
										  </button>
										  <button class="btn waves-effect waves-light red" type="submit" name="action">
										    <i class="material-icons">delete</i>
										  </button>
									</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
								</tr>
							</tbody>
						</table>
		            </div>
		        </div>
			</div>
		</div>
	</main>
</body>
</html>