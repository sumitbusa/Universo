<?php
	/* config.php */
		$connection=new mysqli("localhost","root","","universo");
			if($connection->connect_error){
			die("".$connect_error);}
		$connection_events=new mysqli("localhost","root","","events");
			if($connection_events->connect_error){
			die("".$connect_error);}
		$connection_courses=new mysqli("localhost","root","","courses");
			if($connection_courses->connect_error){
			die("".$connect_error);}
?>	