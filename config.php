<?php
$connection = mysqli_connect("localhost","root","","pizza_db");
if (mysqli_connect_errno())
{
echo "<br/>Failed to connect to MySQL: " . mysqli_connect_error();
}
?>