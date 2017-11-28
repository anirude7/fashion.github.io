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
	
<?php include "header.php" ?>
<?php include "config.php" ?>	
	
			<div class="container">
				<div class="box">
				<!-- registration/signup form -->
			
			<div class="regform">
				<h2 style="color: white;">Sign-Up</h2>
				<br>
				<form name="user_reg" action="adduser.php" " method="post">
					<label for="firstname">First Name</label>
				    <input type="text" id="firstname" name="firstname" placeholder="Your name..">

				    <label for="lastname">Last Name</label>
				    <input type="text" id="lastname" name="lastname" placeholder="Your last name..">

				    <label for="Username">Username</label>
				    <input type="text" id="username" name="username" placeholder="Choose Username">

				    <label for="email">E-mail</label>
				    <input type="text" id="email" name="email" placeholder="Enter your E-mail ID">

				    <label for="password">Password</label>
				    <input type="password" id="password" name="password" placeholder="Create Password">

				    <label for="password">Address</label>
				    <input type="text" id="address" name="address" placeholder="Enter your Address">
				  
				    <input type="submit" value="Submit" name="sub_btn">
					<input type="reset">	
				</form>
			</div>
			<div class="vl"><h2 style="color: #26434B; text-align: center; margin-top: 140px;">(OR)</h2></div>
						<!-- Login Form -->
			
			<div class="regform">
				<h2 style="color: white;">Login</h2>
				<br>
				<form name="user_signin" action="websiteConnection.php" method="post">

				    <label for="Username">Username</label>
				    <input type="text" id="username" name="username" placeholder="Choose Username">

				    <label for="password">Password</label>
				    <input type="password" id="password" name="password" placeholder="Create Password">
				  
				    <input type="submit" value="Submit" name="sut_btn">
					<input type="reset">	
				</form>
			</div>
			<hr>
			<br>
			<div class="regform">
				<h2 style="color: white"> Are you a member? If not then register today! </h2>
			</div>	
			</div>
			</div>

</div>

</body>	
</html>