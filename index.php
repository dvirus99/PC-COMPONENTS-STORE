<!DOCTYPE html>
<html lang="en">
<head>
	<title>GAMING E-SPORTS</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center"><i>Find Your Dream PC Components!</i></h2>
			
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'Rs.'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo ''.$rws['car_type'];?></a>
						</h1>
						<h2>Model: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
					<li></li>
						<li><a href="#">Deekshith Raj, VV Ashwin</a></li>
						<li><a href="#">Yogeesha M</a></li>
						<li><a href="#">7975281534</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						
					</ul>
				</li>

				<li class="about">
					<p>Our company provides Top-Level Gaming PCs</p>
					<ul>
						<li><a href="http://facebook.com/" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

	</footer><!--  end footer  -->
	
</body>
</html>