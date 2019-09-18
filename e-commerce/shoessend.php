<?php
require_once('connection.php');
            $names=$_POST['name1'];
			$id=$_POST['name2'];
			 $tel=$_POST['name3'];
			 $product=$_POST['name'];
			$type=$_POST['name4'];
			 $size=$_POST['name5'];
			$quant=$_POST['name6'];
			 $amoun=$_POST['name7'];
			$total=$quant*$amoun;
			$reciev="No";
			$comment=$_POST['name8'];
			
$insert=mysql_query("INSERT INTO shirt(date,c_names,n_id,teleph,product,s_type,s_number,quantity,amount,total,recieved,comment) VALUES(now(),'$names','$id','$tel','$product','$type','$size','$quant',$amoun,'$total','$reciev','$comment')")or die(mysql_error());
$message="buying transaction is donne!!";
 print"<script>window.alert('$message');window.location='index.php';</script>";

?>


