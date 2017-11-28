<?php session_start(); ?>
<html>
<head>
	<title>My Fashion</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="main">
	<?php
$connection = mysqli_connect("localhost","root","","pizza_db");
if (mysqli_connect_errno())
{
echo "<br/>Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
	<?php include "header.php" ?>
	

						<!-- CATALOUGE -->
				<div class="container">
					<div class="row">
						
						<div class="catheadbar"><h2 class="cathead">SHORTS</h2></div>
						<div class="CATALOUGE">
							<?php 
								$result = mysqli_query($connection, "SELECT * FROM catalouge_women WHERE id = 5");
								$row = mysqli_fetch_array($result);

							?>
							  <a target="_blank" href="img_fjords.jpg">
							    <?php echo "<img src='" . $row["photo_path"] . "'/>"; ?>
							  </a>
							  <div class="price"><p><?php echo $row["name"]; ?><p></div>
							  <div id="price"><?php echo "€" . $row["price"]; ?></div>
						</div>

						<div class="CATALOUGE">
							<?php 
								$result = mysqli_query($connection, "SELECT * FROM catalouge_women WHERE id = 6");
								$row = mysqli_fetch_array($result);

							?>
							  <a target="_blank" href="img_fjords.jpg">
							    <?php echo "<img src='" . $row["photo_path"] . "'/>"; ?>
							  </a>
							  <div class="price"><?php echo $row["name"]; ?></div>
							  <div id="price"><?php echo "€" . $row["price"]; ?></div>
						</div>

						<div class="CATALOUGE">
							<?php 
								$result = mysqli_query($connection, "SELECT * FROM catalouge_women WHERE id = 7");
								$row = mysqli_fetch_array($result);

							?>
							  <a target="_blank" href="img_fjords.jpg">
							    <?php echo "<img src='" . $row["photo_path"] . "'/>"; ?>
							  </a>
							  <div class="price"><?php echo $row["name"]; ?></div>
							  <div id="price"><?php echo "€" . $row["price"]; ?></div>
						</div>

						<div class="CATALOUGE">
							<?php 
								$result = mysqli_query($connection, "SELECT * FROM catalouge_women WHERE id = 8");
								$row = mysqli_fetch_array($result);

							?>
							  <a target="_blank" href="img_fjords.jpg">
							    <?php echo "<img src='" . $row["photo_path"] . "'/>"; ?>
							  </a>
							  <div class="price"><?php echo $row["name"]; ?></div>
							  <div id="price"><?php echo "€" . $row["price"]; ?></div>
						</div>
					</div>
				</div>
				<br>		
				<div class="container">
					<div class="row">
						<div class="catheadbar"><h2 class="cathead">DRESSES</h2></div>
						<div class="CATALOUGE">
							<?php 
								$result = mysqli_query($connection, "SELECT * FROM catalouge_women WHERE id = 9");
								$row = mysqli_fetch_array($result);

							?>
							  <a target="_blank" href="img_fjords.jpg">
							    <?php echo "<img src='" . $row["photo_path"] . "'/>"; ?>
							  </a>
							  <div class="price"><?php echo $row["name"]; ?></div>
							  <div id="price"><?php echo "€" . $row["price"]; ?></div>
						</div>

						<div class="CATALOUGE">
							<?php 
								$result = mysqli_query($connection, "SELECT * FROM catalouge_women WHERE id = 10");
								$row = mysqli_fetch_array($result);

							?>
							  <a target="_blank" href="img_fjords.jpg">
							    <?php echo "<img src='" . $row["photo_path"] . "'/>"; ?>
							  </a>
							  <div class="price"><?php echo $row["name"]; ?></div>
							  <div id="price"><?php echo "€" . $row["price"]; ?></div>
						</div>

						<div class="CATALOUGE">
							<?php 
								$result = mysqli_query($connection, "SELECT * FROM catalouge_women WHERE id = 11");
								$row = mysqli_fetch_array($result);

							?>
							  <a target="_blank" href="img_fjords.jpg">
							    <?php echo "<img src='" . $row["photo_path"] . "'/>"; ?>
							  </a>
							  <div class="price"><?php echo $row["name"]; ?></div>
							  <div id="price"><?php echo "€" . $row["price"]; ?></div>
						</div>

						<div class="CATALOUGE">
							<?php 
								$result = mysqli_query($connection, "SELECT * FROM catalouge_women WHERE id = 12");
								$row = mysqli_fetch_array($result);

							?>
							  <a target="_blank" href="img_fjords.jpg">
							    <?php echo "<img src='" . $row["photo_path"] . "'/>"; ?>
							  </a>
							  <div class="price"><?php echo $row["name"]; ?></div>
							  <div id="price"><?php echo "€" . $row["price"]; ?></div>
						</div>
					</div>
				</div>
				<br>		
				<div class="container">
					<!-- Women Denim Page -->
					<div class="row">
						<div class="catheadbar"><h2 class="cathead">Denims</h2></div>
						<div class="CATALOUGE">
							<?php 
								$result = mysqli_query($connection, "SELECT * FROM catalouge_women WHERE id = 1");
								$row = mysqli_fetch_array($result);

							?>
							  <a target="_blank" href="img_fjords.jpg">
							    <?php echo "<img src='" . $row["photo_path"] . "'/>"; ?>
							  </a>
							  <div class="price"><?php echo $row["name"]; ?></div>
							  <div id="price"><?php echo "€" . $row["price"]; ?></div>
						</div>

						<div class="CATALOUGE">
							<?php 
								$result = mysqli_query($connection, "SELECT * FROM catalouge_women WHERE id = 2");
								$row = mysqli_fetch_array($result);

							?>
							  <a target="_blank" href="img_fjords.jpg">
							    <?php echo "<img src='" . $row["photo_path"] . "'/>"; ?>
							  </a>
							  <div class="price"><?php echo $row["name"]; ?></div>
							  <div id="price"><?php echo "€" . $row["price"]; ?></div>
						</div>

						<div class="CATALOUGE">
							<?php 
								$result = mysqli_query($connection, "SELECT * FROM catalouge_women WHERE id = 3");
								$row = mysqli_fetch_array($result);

							?>
							  <a target="_blank" href="img_fjords.jpg">
							    <?php echo "<img src='" . $row["photo_path"] . "'/>"; ?>
							  </a>
							  <div class="price"><?php echo $row["name"]; ?></div>
							  <div id="price"><?php echo "€" . $row["price"]; ?></div>
						</div>

						<div class="CATALOUGE">
							<?php 
								$result = mysqli_query($connection, "SELECT * FROM catalouge_women WHERE id = 4");
								$row = mysqli_fetch_array($result);

							?>
							  <a target="_blank" href="img_fjords.jpg">
							    <?php echo "<img src='" . $row["photo_path"] . "'/>"; ?>
							  </a>
							  <div class="price"><?php echo $row["name"]; ?></div>
							  <div id="price"><?php echo "€" . $row["price"]; ?></div>
						</div>
					</div>
				</div>
				<br>		
				<div class="container">
					<div class="row">
						<div class="catheadbar"><h2 class="cathead">Tees</h2></div>
						<div class="CATALOUGE">
							<?php 
								$result = mysqli_query($connection, "SELECT * FROM catalouge_women WHERE id = 13");
								$row = mysqli_fetch_array($result);

							?>
							  <a target="_blank" href="img_fjords.jpg">
							    <?php echo "<img src='" . $row["photo_path"] . "'/>"; ?>
							  </a>
							  <div class="price"><?php echo $row["name"]; ?></div>
							  <div id="price"><?php echo "€" . $row["price"]; ?></div>
						</div>

						<div class="CATALOUGE">
							<?php 
								$result = mysqli_query($connection, "SELECT * FROM catalouge_women WHERE id = 14");
								$row = mysqli_fetch_array($result);

							?>
							  <a target="_blank" href="img_fjords.jpg">
							    <?php echo "<img src='" . $row["photo_path"] . "'/>"; ?>
							  </a>
							  <div class="price"><?php echo $row["name"]; ?></div>
							  <div id="price"><?php echo "€" . $row["price"]; ?></div>
						</div>

						<div class="CATALOUGE">
							<?php 
								$result = mysqli_query($connection, "SELECT * FROM catalouge_women WHERE id = 15");
								$row = mysqli_fetch_array($result);

							?>
							  <a target="_blank" href="img_fjords.jpg">
							    <?php echo "<img src='" . $row["photo_path"] . "'/>"; ?>
							  </a>
							  <div class="price"><?php echo $row["name"]; ?></div>
							  <div id="price"><?php echo "€" . $row["price"]; ?></div>
						</div>

						<div class="CATALOUGE">
							<?php 
								$result = mysqli_query($connection, "SELECT * FROM catalouge_women WHERE id = 16");
								$row = mysqli_fetch_array($result);

							?>
							  <a target="_blank" href="img_fjords.jpg">
							    <?php echo "<img src='" . $row["photo_path"] . "'/>"; ?>
							  </a>
							  <div class="price"><?php echo $row["name"]; ?></div>
							  <div id="price"><?php echo "€" . $row["price"]; ?></div>
						</div>

					</div>
				</div>
	</div>	
</div>

</body>	
</html>