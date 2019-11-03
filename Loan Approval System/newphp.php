<?php

session_start();

$conn = mysqli_connect("localhost","root","") or die(mysqli_error());

mysqli_select_db($conn,"sdl") or die(mysqli_error());

$login = $_POST['username'];
$pass = $_POST['password'];

$_SESSION['l'] = $login;

$q = "select * from cust_login where username='$login'";

$result = mysqli_query($conn,$q);

$count=mysqli_num_rows($result);

if($count == 0)
{
	mysqli_query($conn,"insert into cust_login values('$login','$pass')");

	header("location:first.html");
}

else
{
	Print "<h3>User already exists.<h3>";
}

?>
