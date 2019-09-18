<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>



<?php require_once("authi.php");
 ?>

</head>

<body bgcolor="#FFFFCC">
<center>


<div style="width:1000px; height:1000px">
<div style="width:1000px; height:150px; background-color:"#FFFFCC" "><img src="photos/header.png"/></div>
<div style="width:1000px; height:50px; background-color:#"#FFFFCC" "><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<style type="text/css" media="screen">
body{ behavior:url("csshover2.htc"); }
.pd_menu_01 {float:left; padding:0; margin:0;color: #FFFFFF;background: #0000A0;width:100%; border:solid 1px #004080;clear:both;} /*Color navigation bar normal mode*/
.pd_menu_01  a, .pd_menu_01 a:visited {
font-family:Arial, Helvetica, sans-serif;
font-style:normal;
font-weight:bold;
font-size:12px;
color: #FFFFFF;
background-color: #0000A0;
text-decoration: none;
}
.pd_menu_01 ul {list-style-type:none;padding:0; margin:0;}
.pd_menu_01 ul li {float:left; position:relative; z-index:auto !important ; z-index:1000 ; border-right:solid 1px #004080; border-left:solid 1px #004080;}
.pd_menu_01 ul li a {color: #FFFFFF;background: #0000A0;float:none !important ; float:left ; display:block; height:30px; line-height:30px; padding:0 10px 0 10px; text-decoration:none; }
.pd_menu_01 ul li ul {display:none; border:none;color: #FFFFFF;background: #0000A0; width:1px}
.pd_menu_01 ul li:hover a {background-color:#008000; text-decoration:none; color:#FFFF00;} /*Color main cells hovering mode*/
.pd_menu_01 ul li:hover ul {display:block;  position:absolute; z-index:999; top:29px; margin-top:1px; left:0;}
.pd_menu_01 ul li:hover ul li a {display:block; width:12em; height:auto; line-height:1.3em; margin-left:-1px; padding:5px 10px 5px 10px; border-left:solid 1px #004080; border-bottom: solid 1px #004080; background-color:#0000FF;  color:#FFFFFF;} /*Color subcells normal mode*/
.pd_menu_01 ul li:hover ul li a:hover {background-color:#CA0000; text-decoration:none;color:#FFFF00;} /*Color subcells hovering mode*/
.pd_menu_01 ul li a:hover {background-color:#008000; text-decoration:none;color:#FFFF00;} /*Color main cells hovering mode*/
.pd_menu_01 ul li a:hover ul {display:block; width:12em; position:absolute; z-index:999; top:29px; left:0; }
.pd_menu_01 ul li ul li a:visited { background-color:#0000FF;  color:#FFFFFF;} /*Color subcells normal mode*/
.pd_menu_01 ul li a:hover ul li a {display:block; width:12em; height:1px; line-height:1.3em; padding:4px 16px 4px 16px; border-left:solid 1px #004080; border-bottom: solid 1px #004080; background-color:#0000FF;  color:#FFFFFF;} 
.pd_menu_01 ul li a:hover ul li a:hover {background-color:#CA0000; text-decoration:none;color:#FFFF00;} /*Color subcells hovering mode*/
</style>
</head>
<body>

<div class="pd_menu_01 "> 
<ul><li><a href="buyingpage.php">HOME</a>
</li></ul>

<ul><li><a href="commentview.php">COMMENT VIEW</a>
</li></ul>
<ul><li><a href="payedlist.php">PAID LIST</a>
</li></ul>



<ul><li><a href="index.php">LOG OUT</a>

</div>

</body>
</html></div>



<div style=" max-height:inherit; max-width:inherit; overflow:auto; width:1000px; height:500px; background-color:"#FFFFCC"" ><?php include('connection.php'); ?>




<center> <form method="post" action="shoessearch.php">
 <table><tr><td> <input name="search" type="text" /></td><td> <input type="submit" value="Search" /></td></tr></table>
 
</form></center>


              
              <center>  <table cellpadding="0" cellspacing="1" border="1" bordercolor="#6600FF" class="table table-striped table-bordered" >


                    <thead>
                         <tr bordercolor="#0000FF" bgcolor="#99CCFF"> <th>ID</th><th>DATE</th><th>CUSTOMER NAMES</th><th>NATIONAL ID</th><th>TELEPHONE NUMBER</th><th>PRODUCT NAME</th><th>TYPE</th><th>SIZE</th><th>QUANTITY</th><th>UNIT PRICE</th><th>TOTAL PRICE</th><th>RECEIVED</th><th>COMMENT</th></tr>
                    </thead>
                    <tbody bgcolor="#99CC99">
                        <?php
                        $query = mysql_query("SELECT * FROM  shirt WHERE recieved='No'") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
                            $id = $row['s_id'];
                // echo out the contents of each row into a table
			    ?>
				<?php
                echo '<td>' . $row['s_id'] . '</td>';
				echo '<td>' . $row['date'] . '</td>';
				echo '<td>' . $row['c_names'] . '</td>';
				echo '<td>' . $row['n_id'] . '</td>';
				echo '<td>' . $row['teleph'] . '</td>';
				echo '<td>' . $row['product'] . '</td>';
				echo '<td>' . $row['s_type'] . '</td>';
				echo '<td>' . $row['s_number'] . '</td>';
				echo '<td>' . $row['quantity'] . '</td>';
				echo '<td>' . $row['amount'] . '</td>';
				echo '<td>' . $row['total'] . '</td>';
	             echo '<td>' . $row['recieved'] . '</td>';
				 echo '<td>' . $row['comment'] . '</td>';
				 
				 
				
				 
			
                echo "</tr>"; } ?>

                    </tbody>
                </table> </center></div></div>
<div style="width:1000px; height:100px; background-image:url(photos/footer.png) "></div>



</body>
</html>
