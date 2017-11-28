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
			
			
			<table id="userdetail">
  <tr>
    <td>Username:</td>
    <td><?php
            if(isset($_SESSION['username'])) {
              echo "{$_SESSION["username"]}";
            } 
            ?>
    </td>
  </tr>

  <tr>
    <td>Full Name:</td>
    <td>
		<?php
    $username = $_SESSION["username"];
    $result = mysqli_query($connection, "SELECT * FROM customer_master WHERE username = '" .
$username . "'");
        $row = mysqli_fetch_array($result);
        echo "{$row['firstname']} {$row['lastname']}";
    ?>
    </td>
    <td><a href="#">EDIT</a></td>
  </tr>

  <tr>
    <td>Email-ID:</td>
    <td><?php
    $username = $_SESSION["username"];
    $result = mysqli_query($connection, "SELECT * FROM customer_master WHERE username = '" .
$username . "'");
        $row = mysqli_fetch_array($result);
        echo "{$row['email']}";
    ?></td>
    <td><a href="#">EDIT</a></td>
  </tr>

  <tr>
    <td>Address:</td>
    <td><?php
    $username = $_SESSION["username"];
    $result = mysqli_query($connection, "SELECT * FROM customer_master WHERE username = '" .
$username . "'");
        $row = mysqli_fetch_array($result);
        echo "{$row['address']}";
    ?></td>
    <td><a href="#">EDIT</a></td>
  </tr>
  <tr>

<td><a href="logout.php" class="button">Logout</a></td>

  </tr>
</table>
				
			</div>
			</div>

</div>

</body>	
</html>