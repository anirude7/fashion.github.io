<?php session_start(); ?>
<!DOCTYPE html>
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

	<div class="container">
							<!-- SILDESHOW -->
		<div class="slideshow">
			<div class="slideshow-container">

				<div class="mySlides fade">
				  <img src="images/banner/slide10.jpg">
				</div>
				<div class="mySlides fade">
				  <img src="images/banner/slide9.jpg">
				</div>
				<div class="mySlides fade">
				  <img src="images/banner/slide3.jpg">
				</div>
				<div class="mySlides fade">
				  <img src="images/banner/slide7.jpg">
				</div>
				<div class="mySlides fade">
				  <img src="images/banner/slide5.jpg">
				</div>
				<div class="mySlides fade">
				  <img src="images/banner/slide6.jpg">
				</div>
				<div class="mySlides fade">
				  <img src="images/banner/slide4.jpg">
				</div>
				<div class="mySlides fade">
				  <img src="images/banner/slide8.jpg">
				</div>
				<div class="mySlides fade">
				  <img src="images/banner/slide2.jpg">
				</div>
				<div class="mySlides fade">
				  <img src="images/banner/slide1.jpg">
				</div>
				<div class="mySlides fade">
				  <img src="images/banner/slide11.jpg">
				</div>

			</div>
				<br>

				<div style="text-align:center">
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				  <span class="dot"></span>
				  <span class="dot"></span>
				  <span class="dot"></span>
				  <span class="dot"></span>
				  <span class="dot"></span>
				  <span class="dot"></span>
				  <span class="dot"></span>
				  <span class="dot"></span>
				  <span class="dot"></span> 
				</div>
		</div>
						<!-- CATALOUGE -->
				<div class="container">
					<div class="row">
						<div class="CATALOUGE">
							  <a target="_blank" href="img_fjords.jpg">
							    <img src="images/men/dress1.jpeg" alt="TShirt">
							  </a>
							  <div class="price">Product Info</div>
							  <div class="price">PRICE</div>
						</div>

						<div class="CATALOUGE">
							  <a target="_blank" href="img_fjords.jpg">
							    <img src="images/men/dress2.jpeg" alt="TShirt">
							  </a>
							  <div class="price">Product Info</div>
							  <div class="price">PRICE</div>
						</div>

						<div class="CATALOUGE">
							  <a target="_blank" href="img_fjords.jpg">
							    <img src="images/men/dress3.jpeg" alt="TShirt">
							  </a>
							  <div class="price">Product Info</div>
							  <div class="price">PRICE</div>
						</div>

						<div class="CATALOUGE">
							  <a target="_blank" href="img_fjords.jpg">
							    <img src="images/men/dress4.jpeg" alt="TShirt">
							  </a>
							  <div class="price">Product Info</div>
							  <div class="price">PRICE</div>
						</div>
						<div class="CATALOUGE">
							  <a target="_blank" href="img_fjords.jpg">
							    <img src="images/women/dress1_1.jpg" alt="TShirt">
							  </a>
							  <div class="price">Product Info</div>
							  <div class="price">PRICE</div>
						</div>
						<div class="CATALOUGE">
							  <a target="_blank" href="img_fjords.jpg">
							    <img src="images/women/dress2_1.jpg" alt="TShirt">
							  </a>
							  <div class="price">Product Info</div>
							  <div class="price">PRICE</div>
						</div>
						<div class="CATALOUGE">
							  <a target="_blank" href="img_fjords.jpg">
							    <img src="images/women/dress3_1.jpg" alt="TShirt">
							  </a>
							  <div class="price">Product Info</div>
							  <div class="price">PRICE</div>
						</div>
						<div class="CATALOUGE">
							  <a target="_blank" href="img_fjords.jpg">
							    <img src="images/women/dress4_1.jpg" alt="TShirt">
							  </a>
							  <div class="price">Product Info</div>
							  <div class="price">PRICE</div>
						</div>
					</div>
				</div>
	</div>





	
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

</body>	
</html>