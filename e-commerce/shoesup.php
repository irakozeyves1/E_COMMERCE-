



<body bgcolor="#FFFFCC">

<center>



<?php include("connection.php");?>
<?php
$id=$_REQUEST['s_id'];
$result=mysql_query("select * from shirt where s_id='$id'")or die(mysql_error());
$rows=mysql_fetch_array($result);
$code=$rows['c_names'];
$price=$rows['n_id'];
$cod=$rows['teleph'];
$pri=$rows['recieved'];


 if (isset($_POST['Submit']))
 {
$code=$_REQUEST['name1'];
$price=$_REQUEST['name2'];
$cod=$_REQUEST['name3'];
$pri=$_REQUEST['name4'];


mysql_query("UPDATE shirt SET c_names='$code',n_id='$price',teleph='$cod',recieved='$pri' WHERE s_id='$id';")or die(mysql_error());
include("buyingpage.php");

}
else
{

?>
</p>

<center>

<fieldset STYLE="border:4px #000 solid;background-color:#CC6600;width:430px;height:400px">
<legend STYLE="border:4px #fff solid; background-color:#996666; " ALIGN="center">
<b>PAYMENT FORM</b>
</legend>

<form ACTION="<?php $_PHP_SELF ?>" METHOD="post">
<table BGCOLOR="#66FFCC">
			<tr BGCOLOR="#9966FF">
				<th><label FOR="input-one"><strong>NAMES:</strong></label></th>
				<td><input  NAME="name1" TYPE="text" SIZE="30" VALUE="<?php print$code?>"></td>
			</tr>	
				
			
			<tr BGCOLOR="#9966FF">
				<th><label FOR="input-one"><strong>NATIONAL ID:</strong></label></th>
				<td><input  NAME="name2" TYPE="text" SIZE="30" VALUE="<?php print$price?>"></td>
			</tr>	
			<tr BGCOLOR="#990066">
				<th><label FOR="input-one"><strong>TELEPHONE:</strong></label></th>
				<td><input  NAME="name3" TYPE="text" SIZE="30" VALUE="<?php print$cod?>"></td>
			</tr>
			<tr BGCOLOR="#000000">
			<th><label FOR="input-one"><strong><font color="#FFFFFF">RECEIVED:</font></strong></label></td><td><select name="name4">
   <option value="No">No</option>
     <option value="Yes">Yes</option>
	
  </select><?php print$pri?>"></td>
			</tr>	
			
				
			
			
				<tr BGCOLOR="#669900" >
				<td  COLSPAN="2" ALIGN="center"><button TYPE="submit" NAME="Submit">pay</button></td>
			</tr> 
		</table>
</form>
</body>
</html>
 <?php
 }
 ?>
 
 </head>
</fieldset>
</center>
</body>
