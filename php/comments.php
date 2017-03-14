<?php
session_start();
	if(!isset($_POST["submit"]) || !isset($_SESSION["id"])){
	$_SESSION["id"]="";
	header("Location: ../course.php");}
	require("config.php");
	$name=$_POST["name"];
	$email=$_POST["email"];
	$message=$_POST["message"];
	$date=date("Y-m-d");
	$id=$_SESSION["id"];
	$table=$id."_comments";
	$query="select `status` from `members` where `email`='".$email."'";
	$result=$connection->query($query);
				if ($result->num_rows!=1){
						$status="user";
					}
				else
					{
						$row_status = $result->fetch_assoc();
						$status=$row_status["status"];
					}
	$sql="insert into $table values('','$name','$email','$date','$message','$status')";
	$connection_courses->query($sql);
						$connection->close();
						$connection_events->close();
						$connection_courses->close();
		header("Location: ../course-detail.php");
?>