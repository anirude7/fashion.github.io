<html>
<head>
<title>Registatrion</title>
</head>
<body>
<?php
$userName = $_POST["username"];
$lastName= $_POST["lastname"];
$password = $_POST["password"];
$encryptedPasssword = hash("sha512", $password);
$firstname = $_POST["firstname"];
$email = $_POST["email"];
$address = $_POST["address"];

$con=mysqli_connect("localhost","root","","pizza_db");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sqlInsert="INSERT INTO customer_master (username,password,lastname,firstname,email,address) VALUES ('$userName','$encryptedPasssword','$lastName','$firstname','$email','$address')";
if (!mysqli_query($con,$sqlInsert))
{
die('Error: ' . mysqli_error($con));
}
header("Location: index.php"); // redirects
mysqli_close($con);
?>
</body>
</html>