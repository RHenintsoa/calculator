<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="./assets/img/apple-touch-icon.png">
	<!-- css-->
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	
	<!-- bootstrap icons files-->
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap/bootstrap-icons/bootstrap-icons.css">

	<title>Calculator</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 offset-lg-4 col-md-8 offset-md-2 col-12" id="row-number">
				<p>affichage calcul</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 offset-lg-4 col-md-8 offset-md-2 col-12" id="row-number">
				<p>affichage résultat</p>
			</div>
		</div>
		<!-- ligne 1-->
		<div class="row">
			<div class="col-lg-1 offset-lg-4 col-md-2 offset-md-2 col-sm-2 col-3 contain-btn" >
				<button class="btn ">7</button>
			</div>
			<div class="col-lg-1 col-md-2  col-sm-2 col-3  contain-btn">
				<button class="btn ">8</button>
			</div>
			<div class="col-lg-1 col-md-2  col-sm-2 col-3  contain-btn" >
				<button class="btn">9</button>
			</div>
			<div class="col-lg-1 col-md-2 col-sm-2 col-3  contain-btn" >
				<button class="btn operator"><span class="bi bi-plus-lg"></span></button>
			</div>
		</div>
		<!-- ligne 2-->
		<div class="row">
			<div class="col-lg-1 offset-lg-4 col-md-2 offset-md-2 col-sm-2 col-3 contain-btn" >
				<button class="btn ">4</button>
			</div>
			<div class="col-lg-1 col-md-2  col-sm-2 col-3  contain-btn">
				<button class="btn ">5</button>
			</div>
			<div class="col-lg-1 col-md-2  col-sm-2 col-3  contain-btn" >
				<button class="btn">6</button>
			</div>
			<div class="col-lg-1 col-md-2 col-sm-2 col-3  contain-btn" >
				<button class="btn operator"><span class="bi bi-dash-lg"></span></button>
			</div>
		</div>
		
		<!-- ligne 3-->
		<div class="row">
			<div class="col-lg-1 offset-lg-4 col-md-2 offset-md-2 col-sm-2 col-3 contain-btn" >
				<button class="btn ">1</button>
			</div>
			<div class="col-lg-1 col-md-2  col-sm-2 col-3  contain-btn">
				<button class="btn ">2</button>
			</div>
			<div class="col-lg-1 col-md-2  col-sm-2 col-3  contain-btn" >
				<button class="btn">3</button>
			</div>
			<div class="col-lg-1 col-md-2 col-sm-2 col-3  contain-btn" >
				<button class="btn operator"><span class="bi bi-percent"></span></button>
			</div>
		</div>
		<!-- ligne 4-->
		<div class="row">
			<div class="col-lg-1 offset-lg-4 col-md-2 offset-md-2 col-sm-2 col-3 contain-btn" >
				<button class="btn"><span class="bi bi-arrow-left"></span></button>
			</div>
			<div class="col-lg-1 col-md-2  col-sm-2 col-3  contain-btn">
				<button class="btn ">0</button>
			</div>
			<div class="col-lg-1 col-md-2  col-sm-2 col-3  contain-btn" >
				<button class="btn"><span class="bi bi-view-stacked"></span></button>
			</div>
			<div class="col-lg-1 col-md-2 col-sm-2 col-3  contain-btn" >
				<button class="btn operator"><span class="bi bi-x-lg"></span></button>
			</div>
		</div>		
	</div>
	
	
<!-- script-->
	<script type="text/javascript" src="./assets/js/jquery.js"></script>
	<script type="text/javascript" src="./assets/js/index.js"></script>
	<script type="text/javascript" src="./assets/bootstrap/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>