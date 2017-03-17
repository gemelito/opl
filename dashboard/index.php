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

		<?php include "cards.php"; ?>

		<!--Table Projects and Grafic-->
		<div class="row top-navbar-padding">
			<div class="col l6 m6 s12">
				<div class="card">
					<div class="card-content grey-text text-darken-3">
						<span class="card-title text-400">Grafica de proyectos terminados por año</span>
						<div class="panel-body top-space">
							<div class="chart">
								<canvas id="dashReport" height="310" width="600"></canvas>
							</div>
							<div id="legendDiv"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="col l6 m6 s12">
				<div class="card">
		            <div class="card-content grey-text text-darken-3">
		              	<span class="card-title text-400">Proyectos</span>
		              	<span class="text-300">I am similar to what is called a panel in other frameworks.</span>
		              	<table class="table highlight">
							<thead>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
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
							</tbody>
						</table>
		            </div>
		        </div>
		    </div>
		</div>
		<!--End Table Projects and Grafic-->
		
		<!--Table User and Grafic-->
		<div class="row">
			<div class="col l6 m6 s12">
				<div class="card">
		            <div class="card-content grey-text text-darken-3">
		              	<span class="card-title text-400">Alumnos</span>
		              	<span class="text-300">I am similar to what is called a panel in other frameworks.</span>
		              	<table class="table highlight">
							<thead>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
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
							</tbody>
						</table>
		            </div>
		        </div>
			</div>
			<div class="col l6 m6 s12">
				<div class="card">
					<div class="card-content grey-text text-darken-3">
						<span class="card-title text-400">Proyectos con continuidad y no continuidad.</span>
						<div class="col-md-4">
							<ul class="chart-dot-list">
								<li class="a1">date 1</li>
								<li class="a2">data 2</li>
								<li class="a3">data 3</li>
							</ul>
						</div>
						<div class="col-md-8">
							<div class="chart chart-doughnut">
								<canvas id="chart-area4" width="1200" height="900" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Table User and Grafic-->

		<!--Table Comments-->
		<div class="row">
			<div class="col l12 m12 s12">
				<div class="card">
		            <div class="card-content grey-text text-darken-3">
		              	<span class="card-title text-400">Correos</span>
		              	<span class="text-300">I am similar to what is called a panel in other frameworks.</span>
		              	<table class="table highlight">
							<thead>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
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
							</tbody>
						</table>
		            </div>
		        </div>
			</div>
		</div>
		<!--End Table Comments-->

		<script>
			
		window.onload = function(){
	    
			// Line chart from swirlData for dashReport
			var ctx = document.getElementById("dashReport").getContext("2d");
			window.myLine = new Chart(ctx).Line(swirlData, {
				responsive: true,
				scaleShowVerticalLines: false,
				scaleBeginAtZero : true,
				multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
			}); 
			
			// Pie Chart from doughutData
			//var doctx = document.getElementById("chart-area3").getContext("2d");
			//window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

			// Dougnut Chart from doughnutData
			var doctx = document.getElementById("chart-area4").getContext("2d");
			window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

		}
		</script>
	</main>
</body>
</html>