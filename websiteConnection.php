<?php session_start(); ?>
<html>
<head>
<title>The website</title>
</head>
<body>
<?php
// 1) Retrieve data from the form
$username = $_POST["username"];
$password= $_POST["password"];
// 2) Connection to the database
$connection = mysqli_connect("localhost","root","","pizza_db");
if (mysqli_connect_errno())
{
echo "<br/>Failed to connect to MySQL: " . mysqli_connect_error();
}
// 3) Load the data corresponding to the username entered from the database
$result = mysqli_query($connection, "SELECT * FROM customer_master WHERE username = '" .
$username . "'");
$nbLigne = mysqli_num_rows($result); // Number of lines retrieved with the SQL query
// 4) Check if you have retrieved something (the username exists or not)
if($nbLigne == 0)
{
echo "<br/>The username does not exist";
}
else
{
// 5) Read the information retrieved only if the password entered is correct.
// Therefore, encrypt it and then compare it with the one inside the database
$row = mysqli_fetch_array($result);
$encryptedPassword = hash("sha512", $password);
if($row['password'] === $encryptedPassword) // === check if they are identical
{
$_SESSION["username"] = $username;
header("Location: index.php"); // redirects
}
else
{
unset($_SESSION["username"]);
$_SESSION["msg"] = "<li>Login Info - Username
/Password:  Incorrect Combination try again</li>";
}
}
// 6) Close the connection
mysqli_close($connection);