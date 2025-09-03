<!DOCTYPE html>
<html>
<head>
    <title>Intro to Bootstrap</title>	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<style>
		section{
		width: 100vw;
		height: 100vw;
		padding: 50px;
		}
		.cl_white{
			color: white;
		}
		img{
			width: 300px;
			transition: opacity ls ease-in-out;
		}
		img:hover{
			opacity: .10;
		}
		.col-text{
			-webkit-column-count: 3;
		}
	</style>
</head>

<body data-spy="scroll" data-target=".navbar">
	<nav class="navbar navbar-inverse navbar-fixed-bottom">
		<ul class="nav navbar-nav">
			<li><a href="#home">Home</a></li>
			<li><a href="#work">What I Do</a></li>
			<li><a href="#about">What about Me</a></li>
			<li><a href="#contact">Contact Me</a></li>
		</ul>
	</nav>
	<section id="home" style="background: url(image/header.jpeg); background-size: 100% 100%;" class="cl_white text-center">
		<h1>My Portfolio</h1>
		<p class="lead">Welcome to my world, The life of a Programmer</p>
		<button class="btn btn-default">Contact Me</button>
	</section>
	<section id="work" class="container">
		<div class="page-header">
			<h1 class="text-center">My Work</h1>
		</div>
		<div class="text-center">
			<img src="image/port1.jpg" class="img-thumbnail"/>
			<img src="image/port2.jpg" class="img-thumbnail"/>
			<img src="image/port3.jpg" class="img-thumbnail"/>
			<img src="image/port4.jpg" class="img-thumbnail"/>
			<img src="image/port5.jpg" class="img-thumbnail"/>
			<img src="image/port6.jpg" class="img-thumbnail"/>
		</div>
	</section>
	<section id="about" class="container">
		<h2 class="text-center">My Skills</h2>
		<div class="col-text">Contrary to popular belief, Lorem Ipsum is not simply random text. 
			It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
			Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, 
			looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, 
			and going through the cites of the word in classical literature, discovered the undoubtable source. 
			Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" 
			(The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. 
			The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
		</div><br/>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4>PHP Programmer</h4>
					</div>
					<div class="panel-body">
						<img src="image/me.jpg" class="img-circle center-block">
						<p class="lead text-center">I Do PHP Programming</p>
					</div>
					<div class="panel-footer">

					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4>We Designer</h4>
					</div>
					<div class="panel-body">
						<img src="image/me2.jpg" class="img-circle center-block">
						<p class="lead text-center">I Do CSS Bootstrap Designing</p>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
		</div>
	</section>
	<section id="contact" style="background: silver;">
		<div class="page-header">
			<h2 class="text-center">Contact Me</h2>
		</div>
		<form class="col-md-5 col-md-offset-4">
			<div class="form-group">
				<input class="form-control" placeholder="Enter Your Name" type="text"/>	
			</div>
			<div class="form-group">
				<input class="form-control" placeholder="Enter Your E-mail" type="email"/>	
			</div>
			<div class="form-group">
				<input class="form-control" placeholder="SUbject" type="text"/>	
			</div>
			<div class="form-group">
				<textarea class="form-control rows-"10">Comments</textarea>	
			</div>
			<div class="form-group">
				<input class="btn btn-success btn-block" type="submit"/>	
			</div>
		</form>
	</section>
</body>
</html>