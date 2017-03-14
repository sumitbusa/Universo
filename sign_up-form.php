<?php
session_start();
if(isset($_SESSION["username"]) && isset($_SESSION["password"]))
	header("Location: home.php");
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$terms=$_POST["terms"];
$status="user";
//$name = $_POST['slider-name'];
if($password!=$repassword){
die("01");}
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		include "php/config.php";
			$query="insert into members values('','$name','$email','$password','$status')";
			$connection->query($query);
				if ($connection->query($query)){
						$connection->close();
						$connection_events->close();
						$connection_courses->close();
						die("02");
					}
			$row = $result->fetch_assoc();
			die("03");
}
else{
echo '<span id="invalid">Invalid Email, please provide a correct email.</span>';}
?>