<!DOCTYPE html>
<html>
<head>
	<title>Seatwork: PHP Looping</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>
	<h1>Image on Loop</h1>

	<div class="container">
		<div id="mycarousel" class="carousel slide" data-ride="carousel" style="width: 1000px">
			<ol class="carousel-indicators">
				<?php
					$folder = 'image/';
					$images = glob($folder.'*.{jpg,jpeg,png,gif,jfif,webp}', GLOB_BRACE);
					$x = 0;

	                foreach($images as $image){
			            if($x == 0){
				            echo "<li data-target='#mycarousel' data-slide-to='$x' class='active'></li>";
					        $x++;
						    }
							else{
								echo "<li data-target='#mycarousel' data-slide-to='$x'></li>";
							$x++;
						}
					}
			    ?>
		    </ol>

		    <div class="carousel-inner">
			    <?php
				    $folder = 'image/';
					    $images = glob($folder.'*.{jpg,jpeg,png,gif,jfif,webp}', GLOB_BRACE);
					    $x = 0;
					
					    foreach($images as $image){
					        if($x == 0){
                                echo "<div class='item active'>
                                    <img src='$image' width='1000px'>
                                    <div class='carousel-caption'>
                                    
                                    </div>
                                    </div>";
					        }else{
						        echo "<div class='item'>
							        <img src='$image' width='1000px'>
								    <div class='carousel-caption'>
								    
								    </div>
								    </div>";
						    }
					    $x++;
				    }
	            ?>
	            <a class="left carousel-control" href="#mycarousel" data-slide="prev">
		            <span class="glyphicon glyphicon-chevron-left"></span>
	            </a>
				 
	            <a class="right carousel-control" href="#mycarousel" data-slide="next">
		           <span class="glyphicon glyphicon-chevron-right"></span>
	            </a>
	        </div>
        </div>
    </div>    	
</body>
</html>
