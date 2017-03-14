<?php
session_start();
if(isset($_SESSION["username"]) && isset($_SESSION["password"]))
	header("Location: home.php");
$email = $_POST['slider-email'];
$name = $_POST['slider-name'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		include "php/config.php";
			$query="select `name` from `members` where `email`='".$email."' and `password`='".$name."'";
			$result=$connection->query($query);
				if ($result->num_rows!=1){
						$connection->close();
						$connection_events->close();
						$connection_courses->close();
						die("01");
					}
			$row = $result->fetch_assoc();
			$_SESSION["username"]=$row["name"];
			$_SESSION["password"]=$name;
			die("02");
}
else{
echo '<span id="invalid">Invalid Email, please provide a correct email.</span>';}
?>