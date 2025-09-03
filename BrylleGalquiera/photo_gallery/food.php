<html>
<head>
    <title>Photo Gallery</title>	
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/lightbox.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
    <script src="js/lightbox.js"></script>
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
			
		<div class="page-header">
			<h3>Photo Gallery</h3>
		</div>

		<div class="row">
			<div class="col-md-4">
				<a href="image/beef.png" data-lightbox="gallery" data-title="My Food 1" class="thumbnail">
					<img src="image/beef.png">
				</a>
				
			</div>
			<div class="col-md-4">
				<a href="image/burger.png" data-lightbox="gallery" data-title="My Food 2" class="thumbnail">
					<img src="image/burger.png">
				</a>
				
			</div>
			<div class="col-md-4">
				<a href="image/chips.png" data-lightbox="gallery" data-title="My Food 3" class="thumbnail">
					<img src="image/chips.png">
				</a>
				
			</div>
			<div class="col-md-4">
				<a href="image/pizza.png" data-lightbox="gallery" data-title="My Food 4" class="thumbnail">
					<img src="image/pizza.png">
				</a>
				
			</div>
			<div class="col-md-4">
				<a href="image/spag.png" data-lightbox="gallery" data-title="My Food 5" class="thumbnail">
					<img src="image/spag.png">
				</a>
				
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