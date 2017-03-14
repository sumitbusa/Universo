<?php
	session_start();
	if(!isset($_SESSION["course_type"])&&!isset($_SESSION["study_level"])&&!isset($_SESSION["text"]))
	{
		$_SESSION["course_type"]="";
		$_SESSION["study_level"]="";
		$_SESSION["text"]="";
	}
	//echo "".$_POST["submit"];
	if($_POST["course-type"]==1)
	{
	$course_type="History and Psychology";$_SESSION["study_level"]=$course_type;}
	else if($_POST["course-type"]==2){
	$course_type="Marketing";$_SESSION["study_level"]=$course_type;}
	else if($_POST["course-type"]==3){
	$course_type="Science";$_SESSION["study_level"]=$course_type;}
	else
		$_SESSION["course_type"]=$_POST["course-type"];
		$_SESSION["text"]=$_POST["full-text"];
	//echo $_SESSION["course_type"]."<br>".$_SESSION["study_level"]."<br>".$_SESSION["text"];
	header("location: ../course.php");
?>