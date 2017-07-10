<!DocType html>
<html lang="en">
<html>
<head>
<title>Bootstarp</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1">
<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
</head>
<body>
    <?php
//    require './header.php';
    ?>
    <div class="container-fluid" style="padding-left: 0px;padding-right: 0px;">
		<div class="carousel slide" data-ride="carousel" id="vikash2">
			<!--Indicator-->
			<ol class="carousel-indicators">
				<li class="active" data-target="#vikash2" data-slide-to="0"></li>
				<li data-target="#vikash2" data-slide-to="1"></li>
				<li data-target="#vikash2" data-slide-to="2"></li>
                                <li data-target="#vikash2" data-slide-to="3"></li>
                                <li data-target="#vikash2" data-slide-to="4"></li>
			</ol>
			<!--Carousel inner-->
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/1.jpg" alt="6.jpg" style="width:100%"/>
					<div class="carousel-caption">
						<h4>Banglore city</h4>
						<p>The technical city of India</p>
					</div>
				</div>
				<div class="item">
					<div class="carousel-caption">
						<h4>Pune city</h4>
						<p>The city of tech</p>
					</div>
					<img src="images/2.jpg" alt="7.jpg" style="width:100%"/>
				</div>
				<div class="item">
					<div class="carousel-caption">
						<h4>Hydrabad city</h4>
						<p>Another technical city of India</p>
					</div>
					<img src="images/3.jpg" alt="8.jpg" style="width:100%"/>
				</div>
                            
				<div class="item">
					<div class="carousel-caption">
						<h4>Hydrabad city</h4>
						<p>Another technical city of India</p>
					</div>
					<img src="images/4.jpg" alt="8.jpg" style="width:100%"/>
				</div>
                            
				<div class="item">
					<div class="carousel-caption">
						<h4>Hydrabad city</h4>
						<p>Another technical city of India</p>
					</div>
					<img src="images/5.jpg" alt="8.jpg" style="width:100%"/>
				</div>
			</div>
			<!--Left and right control-->
			<a href="#vikash2" class="left carousel-control" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a href="#vikash2" class="right carousel-control" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		
	</div>

</body>
</html>