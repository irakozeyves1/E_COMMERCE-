<?php
session_start();
	
	//Include database connection details
	include("connection.php");
	//Sanitize the POST values
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(!empty($username) && !empty($password))
	{
	//Create query
	$qry="SELECT * FROM security as sc WHERE sc.username='$username' AND sc.password='$password'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	
	if($result) {
	
	if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$user = mysql_fetch_assoc($result);
			$_SESSION['sc_id'] = $user['sc_id'];
			$_SESSION['name'] = $user['username'];
			session_write_close();
			{
			header("Location:buyingpage.php");
			}
			exit();
			
		}
		
		else {
			//Login failed
			header("location:index.php?attempt=fail");
			exit();
		}
		
	}else {
		die("Query failed");
	}
	}
	else{
	header("location:index.php?attempt=null");
	}
?>

