<?php
	//connect to mysql
	$conn=mysqli_connect("localhost","root","","suppliesdb");
	//test connection
	if(mysqli_connect_errno()){
		echo 'Failed to connect to MySql: '.mysqli_connect_error();
	}
