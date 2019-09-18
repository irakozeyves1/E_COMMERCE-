<?php
	session_start();
	if(!isset($_SESSION['sc_id']) || (trim($_SESSION['sc_id']) == '')) {
		header("location:../index.php");
		exit();
	}
?>