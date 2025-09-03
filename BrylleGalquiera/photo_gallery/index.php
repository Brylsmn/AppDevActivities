<html>
<head>
    <title>Photo Gallery</title>	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<style>
		.thumbnail img{
			width: 350px;
			height: 200px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<div class="navbar-brand">Photo Gallery</div>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home</a></li>
				<li><a href="food.php">Food</a></li>
				<li><a href="others.php">Others</a></li>
			</ul>
		</div>
	</nav>
	
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="carousel slide" data-ride="carousel" id="slider">
					<ol class="carousel-indicators">
						<li data-target="#slider" data-slider-to="0" class="active"></li>
						<li data-target="#slider" data-slider-to="1"></li>
						<li data-target="#slider" data-slider-to="2"></li>
						<li data-target="#slider" data-slider-to="3"></li>
						<li data-target="#slider" data-slider-to="4"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="image/beef.png">
						</div>
						<div class="item">
							<img src="image/burger.png">
						</div>
						<div class="item">
							<img src="image/chips.png">
						</div>
						<div class="item">
							<img src="image/pizza.png">
						</div>
						<div class="item">
							<img src="image/spag.png">
						</div>
					</div>
					<a href="#slider" data-slide="prev" class="left carousel-control">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a href="#slider" data-slide="next" class="right carousel-control">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>	
		<div class="page-header">
			<h3>Photo Gallery</h3>
		</div>

		<div class="row">
			<div class="col-md-4">
				<a href="#m1" data-toggle="modal" class="thumbnail">
					<img src="image/beef.png">
				</a>
				<div class="modal fade" id="m1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">Food 1</div>
							<div class="modal-body">
								<img src="image/beef.png" class="img-thumbnail">
							</div>
							<div class="modal-footer">Beef</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<a href="#m2" data-toggle="modal" class="thumbnail">
					<img src="image/burger.png">
				</a>
				<div class="modal fade" id="m2">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">Food 2</div>
							<div class="modal-body">
								<img src="image/burger.png" class="img-thumbnail">
							</div>
							<div class="modal-footer">Burger</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<a href="#m3" data-toggle="modal" class="thumbnail">
					<img src="image/chips.png">
				</a>
				<div class="modal fade" id="m3">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">Food 3</div>
							<div class="modal-body">
								<img src="image/chips.png" class="img-thumbnail">
							</div>
							<div class="modal-footer">Chips</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<a href="#m4" data-toggle="modal" class="thumbnail">
					<img src="image/pizza.png">
				</a>
				<div class="modal fade" id="m4">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">Food 4</div>
							<div class="modal-body">
								<img src="image/pizza.png" class="img-thumbnail">
							</div>
							<div class="modal-footer">Pizza</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<a href="#m5" data-toggle="modal" class="thumbnail">
					<img src="image/spag.png">
				</a>
				<div class="modal fade" id="m5">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">Food 5</div>
							<div class="modal-body">
								<img src="image/spag.png" class="img-thumbnail">
							</div>
							<div class="modal-footer">Spaghetti</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p class="text-center" style="padding: 10px;">Created by: Brylle</p>
			</div>
		</footer>
	</div>
</body>
</html>