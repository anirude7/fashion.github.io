<?php session_start(); ?>
<html>
<head>
	<title>My Fashion</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="main">
	<?php include "config.php" ?>
	<?php include "header.php" ?>

						<!-- CATALOUGE -->
				<div class="container">
					<div class="row">
						<div class="CATALOUGE">
							<?php 
								$result = mysqli_query($connection, "SELECT * FROM catalouge_women WHERE id = 5");
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
	</div>	
</div>

</body>	
</html>