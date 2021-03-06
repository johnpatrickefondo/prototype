<?php 

session_start();
header('location: login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'upc_prototype');

$name = $_POST['user'];
$pos = $_POST['position'];
$pass = $_POST['password'];

$s = " select * from registration where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1)
{
	echo "Username Already Exist!";
	header('location: register.php');
} else {
	$reg = "insert into registration(name, position, password) values('$name', '$pos', '$pass')";
	mysqli_query($con, $reg);
	echo "Registration succesful";
}
?>