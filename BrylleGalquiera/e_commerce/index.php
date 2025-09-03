<!DOCTYPE html>
<html>
   <head>
        <title>E-Commerce</title>	
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/Styles.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">E-Commerce</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Software</a></li>
					<li><a href="#">Music</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<aside class="col-md-4">
		<div class="col-md-10 col-md-offset-1">
			<div class="list-group">
				<a href="product.php" class="list-group-item" style="padding: 0; margin: 0;">
					<div class="col-md-3" style="padding: 0; margin: 0;">
						<img src="image/pic1.jpg" style="width: 80px; height: 100px;">
					</div>
					<div class="col-md-9">
						<div class="list-group-item-heading">
							<h4>Php: 5,000,000</h4>
							<h4>Sports Car</h4>
							<div class="clearfix"></div>
						</div>
						<p class="list-group-item-text">Lorem Ipsum dolord do eiusmod</p>
					</div>
					<div class="clearfix"></div>
				</a>
			</div>
		</div>
		<div class="col-md-10 col-md-offset-1">
			<div class="list-group">
				<a href="product.php" class="list-group-item" style="padding: 0; margin: 0;">
					<div class="col-md-3" style="padding: 0; margin: 0;">
						<img src="image/pic2.jpg" style="width: 80px; height: 100px;">
					</div>
					<div class="col-md-9">
						<div class="list-group-item-heading">
							<h4>Php: 5,000,000</h4>
							<h4>Sports Car</h4>
							<div class="clearfix"></div>
						</div>
						<p class="list-group-item-text">Lorem Ipsum dolord do eiusmod</p>
					</div>
					<div class="clearfix"></div>
				</a>
			</div>
		</div>
		<div class="col-md-10 col-md-offset-1">
			<div class="list-group">
				<a href="product.php" class="list-group-item" style="padding: 0; margin: 0;">
					<div class="col-md-3" style="padding: 0; margin: 0;">
						<img src="image/pic3.jpg" style="width: 80px; height: 100px;">
					</div>
					<div class="col-md-9">
						<div class="list-group-item-heading">
							<h4>Php: 5,000,000</h4>
							<h4>Sports Car</h4>
							<div class="clearfix"></div>
						</div>
						<p class="list-group-item-text">Lorem Ipsum dolord do eiusmod</p>
					</div>
					<div class="clearfix"></div>
				</a>
			</div>
		</div>
		<div class="col-md-10 col-md-offset-1">
			<div class="list-group">
				<a href="product.php" class="list-group-item" style="padding: 0; margin: 0;">
					<div class="col-md-3" style="padding: 0; margin: 0;">
						<img src="image/pic4.jpg" style="width: 80px; height: 100px;">
					</div>
					<div class="col-md-9">
						<div class="list-group-item-heading">
							<h4>Php: 5,000,000</h4>
							<h4>Sports Car</h4>
							<div class="clearfix"></div>
						</div>
						<p class="list-group-item-text">Lorem Ipsum dolord do eiusmod</p>
					</div>
					<div class="clearfix"></div>
				</a>
			</div>
		</div>
	</aside>
	<header class="col-md-8">
		<div class="carousel slide" data-ride="carousel" id="c1">
			<ol class="carousel-indicators">
				<li data-target="#c1" data-slide-to="0"></li>
				<li data-target="#c1" data-slide-to="1"></li>
				<li data-target="#c1" data-slide-to="2"></li>
				<li data-target="#c1" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img src="image/pic1.jpg">
					<div class="carousel-caption">
						<h4>My Pic 1</h4>
						<p>My Sports Car 1</p>
					</div>
				</div>
				<div class="item">
					<img src="image/pic2.jpg">
					<div class="carousel-caption">
						<h4>My Pic 2</h4>
						<p>My Sports Car 2</p>
					</div>
				</div>
				<div class="item">
					<img src="image/pic3.jpg">
					<div class="carousel-caption">
						<h4>My Pic 3</h4>
						<p>My Sports Car 3</p>
					</div>
				</div>
				<div class="item">
					<img src="image/pic4.jpg">
					<div class="carousel-caption">
						<h4>My Pic 4</h4>
						<p>My Sports Car 4</p>
					</div>
				</div>
			</div>
			<a href="#c1" class="left carousel-control" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a href="#c1" class="right carousel-control" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	</header>
	<div class="container">
		<div class="page-header"><h3 class="text-center">All Products</h3></div>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="image/pic1.jpg" style="width: 100%">
				<div class="caption">
					<h4 class="pull-right">Php: 5,000,000</h4>
					<h4><a href="product.php">Sports Car</a></h4>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
						when an unknown printer took a galley of type and scrambled it to make a type 
						specimen book. It has survived not only five centuries, but also the leap into 
						electronic typesetting, remaining essentially unchanged. It was popularised in 
						the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
						and more recently with desktop publishing software like Aldus PageMaker 
						including versions of Lorem Ipsum.
					</p>
				</div>	
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="image/pic1.jpg" style="width: 100%">
				<div class="caption">
					<h4 class="pull-right">Php: 5,000,000</h4>
					<h4><a href="product.php">Sports Car</a></h4>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
						when an unknown printer took a galley of type and scrambled it to make a type 
						specimen book. It has survived not only five centuries, but also the leap into 
						electronic typesetting, remaining essentially unchanged. It was popularised in 
						the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
						and more recently with desktop publishing software like Aldus PageMaker 
						including versions of Lorem Ipsum.
					</p>
				</div>	
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="image/pic1.jpg" style="width: 100%">
				<div class="caption">
					<h4 class="pull-right">Php: 5,000,000</h4>
					<h4><a href="product.php">Sports Car</a></h4>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
						when an unknown printer took a galley of type and scrambled it to make a type 
						specimen book. It has survived not only five centuries, but also the leap into 
						electronic typesetting, remaining essentially unchanged. It was popularised in 
						the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
						and more recently with desktop publishing software like Aldus PageMaker 
						including versions of Lorem Ipsum.
					</p>
				</div>	
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="image/pic1.jpg" style="width: 100%">
				<div class="caption">
					<h4 class="pull-right">Php: 5,000,000</h4>
					<h4><a href="product.php">Sports Car</a></h4>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
						when an unknown printer took a galley of type and scrambled it to make a type 
						specimen book. It has survived not only five centuries, but also the leap into 
						electronic typesetting, remaining essentially unchanged. It was popularised in 
						the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
						and more recently with desktop publishing software like Aldus PageMaker 
						including versions of Lorem Ipsum.
					</p>
				</div>	
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="image/pic1.jpg" style="width: 100%">
				<div class="caption">
					<h4 class="pull-right">Php: 5,000,000</h4>
					<h4><a href="product.php">Sports Car</a></h4>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
						when an unknown printer took a galley of type and scrambled it to make a type 
						specimen book. It has survived not only five centuries, but also the leap into 
						electronic typesetting, remaining essentially unchanged. It was popularised in 
						the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
						and more recently with desktop publishing software like Aldus PageMaker 
						including versions of Lorem Ipsum.
					</p>
				</div>	
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="image/pic1.jpg" style="width: 100%">
				<div class="caption">
					<h4 class="pull-right">Php: 5,000,000</h4>
					<h4><a href="product.php">Sports Car</a></h4>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
						when an unknown printer took a galley of type and scrambled it to make a type 
						specimen book. It has survived not only five centuries, but also the leap into 
						electronic typesetting, remaining essentially unchanged. It was popularised in 
						the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
						and more recently with desktop publishing software like Aldus PageMaker 
						including versions of Lorem Ipsum.
					</p>
				</div>	
			</div>
		</div>
	</div>	
</body>
</html>