<?php
require_once('connection.php');
            
			$comment=$_POST['name1'];
			
$insert=mysql_query("INSERT INTO comment(date,comment) VALUES(now(),'$comment')")or die(mysql_error());
$message="we are received your comment; thank you!!";
 print"<script>window.alert('$message');window.location='index.php';</script>";

?>


